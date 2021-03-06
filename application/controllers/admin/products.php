<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller{
    private $data;
    function __construct() {
        parent::__construct();
        $this->auth = new Auth();
        $this->auth->check();
        $this->data['email_header'] = $this->session->userdata('adminemail');
		$this->data['admingroup'] = $this->session->userdata('admingroup');
        $this->load->model('productsmodel');
		$this->data['groups_permission'] = array(1,2,3,4,5,6);
	}
    public function index(){
        $this->data['title']    = 'Quản lý tour';
		$this->data['name'] = $this->input->get('name');
        $total = $this->productsmodel->getCountProducts($this->input->get('name'));
        if($this->data['name'] != ""){
            $config['suffix'] = '?name='.urlencode($this->data['name']);
        }
        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admin/products/';
        $config['total_rows'] = $total;
        $config['uri_segment'] = 3;
        $config['per_page'] = 10;
        $config['num_links'] = 5;
        $config['use_page_numbers'] = TRUE;

        $this->pagination->initialize($config);
        $page_number = $this->uri->segment(3);
        if (empty($page_number)) $page_number = 1;
        $start = ($page_number - 1) * $config['per_page'];
        $this->data['page_links'] = $this->pagination->create_links();
        if($this->data['name'] != ""){
            $this->data['list'] = $this->productsmodel->getListProducts($this->input->get('name'),$config['per_page'],$start);
        }else{
            $this->data['list'] = $this->productsmodel->getListProducts("",$config['per_page'],$start);
        }
        $this->data['base'] = site_url('admin/products/');
        $this->load->view('admin/common/header',$this->data);
        $this->load->view('admin/products/list');
        $this->load->view('admin/common/footer');
    }

    public function add() {
		if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			if($this->input->post('submit') != null){
				$uploaddir = 'assets/uploads/tours/';
				$this->load->library("upload");

				//Upload cover image
				if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir . basename($_FILES['image']['name']))) {
					$image = $uploaddir . $_FILES['image']['name'];
				}
				else{
					$image = '';
				}
				
				$data = array(
					"name" 					=> $this->input->post("name"),
					"alias" 				=> make_alias($this->input->post("name")),
					"image" 	    		=> $image,
					"price" 				=> $this->input->post("price"),
					"color" 				=> $this->input->post("color"),
					"itinerary" 			=> $this->input->post("itinerary"),
					"duration" 				=> $this->input->post("duration"),
					"display" 				=> $this->input->post("display"),
				);
				$product_id = $this->productsmodel->create($data);
				redirect(base_url() . "admin/products");
				exit();
			} else {
				$this->load->view('admin/common/header',$this->data);
				$this->load->view('admin/products/add');
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect(base_url()."admin/access_denied");
		}
    }

    public function edit($id) {
		if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			$this->data['products'] = $products = $this->productsmodel->read(array('id'=>$id),array(),true);
			if($this->input->post('submit') != null){
				$uploaddir = 'assets/uploads/tours/';
				$this->load->library("upload");
				
				if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir . basename($_FILES['image']['name']))) {
					$image = $uploaddir . $_FILES['image']['name'];
				}
				else{
					$image = '';
				}
				
				$data = array(
					"name" 					=> $this->input->post("name"),
					"alias" 				=> make_alias($this->input->post("name")),
					"image" 	    		=> $image,
					"price" 				=> $this->input->post("price"),
					"color" 				=> $this->input->post("color"),
					"itinerary" 			=> $this->input->post("itinerary"),
					"duration" 				=> $this->input->post("duration"),
					"display" 				=> $this->input->post("display"),
				);
				$this->productsmodel->update($data,array('id'=>$id));
				redirect(base_url() . "admin/products");
				exit();
			} else {
				$this->load->view('admin/common/header',$this->data);
				$this->load->view('admin/products/edit');
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect(base_url()."admin/access_denied");
		}
    }
	
	public function detail($id) {
		$this->data['products'] = $products = $this->productsmodel->read(array('id'=>$id),array(),true);
		$this->load->view('admin/common/header',$this->data);
		$this->load->view('admin/products/detail');
		$this->load->view('admin/common/footer');
	}
    public function delete($id){
		if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			if(isset($id)&&($id>0)&&is_numeric($id)){
				$this->productsmodel->delete(array('id'=>$id));
				redirect(base_url() . "admin/products");
				exit();
			}
		} else {
			redirect(base_url()."admin/access_denied");
		}
    }

}