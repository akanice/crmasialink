<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campaign extends MY_Controller{
    private $data;
    function __construct() {
        parent::__construct();
        $this->auth = new Auth();
        $this->auth->check();
        $this->data['email_header'] = $this->session->userdata('adminemail');
		$this->data['admingroup'] = $this->session->userdata('admingroup');
        $this->load->model('campaignmodel');
		$this->data['groups_permission'] = array(1,2,3,4,5,6);
	}
    public function index(){
        $this->data['title']    = 'Quản lý sự kiện';
		$this->data['name'] = $this->input->get('name');
        $total = $this->campaignmodel->getCountCampaign($this->input->get('name'));
        if($this->data['name'] != ""){
            $config['suffix'] = '?name='.urlencode($this->data['name']);
        }
        //Pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admin/campaign/';
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
            $this->data['list'] = $this->campaignmodel->getListcampaign($this->input->get('name'),$config['per_page'],$start);
        }else{
            $this->data['list'] = $this->campaignmodel->getListcampaign("",$config['per_page'],$start);
        }
        $this->data['base'] = site_url('admin/campaign/');
        $this->load->view('admin/common/header',$this->data);
        $this->load->view('admin/campaign/list');
        $this->load->view('admin/common/footer');
    }

    public function add() {
		//if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			if($this->input->post('submit') != null){	
				$staff_create_id = $this->session->userdata('adminid');
				$current_date = date('d/m/Y',time());
				$create_date = $this->input->post('create_date');
				$end_date = $this->input->post('end_date');
				
				if ($current_date < $create_date) {
					$status = 'not_start';
				} elseif ($current_date > $end_date) {
					$status = 'end';
				} else {
					$status = 'processing';
				}
				
				$date = DateTime::createFromFormat('d/m/Y', $create_date);
				$create_date = $date->format('Y-m-d');
				$date2 = DateTime::createFromFormat('d/m/Y', $end_date);
				$end_date = $date2->format('Y-m-d');
				
				$data = array(
					"name" 					=> $this->input->post("name"),
					"alias" 				=> make_alias($this->input->post("name")),
					"create_date" 			=> strtotime($create_date),
					"end_date" 				=> strtotime($end_date),
					"description" 			=> $this->input->post("description"),
					"pricing_array" 		=> $this->input->post("pricing_array"),
					"total_price" 			=> $this->input->post("total_price"),
					"staff_create_id" 		=> $staff_create_id,
					"status" 				=> $status,
				);
				$product_id = $this->campaignmodel->create($data);
				redirect(base_url() . "admin/campaign");
				exit();
			} else {
				$this->load->view('admin/common/header',$this->data);
				$this->load->view('admin/campaign/add');
				$this->load->view('admin/common/footer');
			}
		// } else {
			// redirect(base_url()."admin/access_denied");
		// }
    }

    public function edit($id) {
		if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			$this->data['campaign'] = $campaign = $this->campaignmodel->read(array('id'=>$id),array(),true);
			if($this->input->post('submit') != null){
				$staff_create_id = $this->session->userdata('adminid');
				$current_date = date('d/m/Y',time());
				$create_date = $this->input->post('create_date');
				$end_date = $this->input->post('end_date');
				
				if ($current_date < $create_date) {
					$status = 'not_start';
				} elseif ($current_date > $end_date) {
					$status = 'end';
				} else {
					$status = 'processing';
				}
				
				$date = DateTime::createFromFormat('d/m/Y', $create_date);
				$create_date = $date->format('Y-m-d');
				$date2 = DateTime::createFromFormat('d/m/Y', $end_date);
				$end_date = $date2->format('Y-m-d');
				
				$data = array(
					"name" 					=> $this->input->post("name"),
					"alias" 				=> make_alias($this->input->post("name")),
					"create_date" 			=> strtotime($create_date),
					"end_date" 				=> strtotime($end_date),
					"description" 			=> $this->input->post("description"),
					"pricing_array" 		=> $this->input->post("pricing_array"),
					//"total_price" 			=> $this->input->post("total_price"),
					"staff_create_id" 		=> $staff_create_id,
					"status" 				=> $status,
				);
				$this->campaignmodel->update($data,array('id'=>$id));
				redirect(base_url() . "admin/campaign");
				exit();
			} else {
				$this->load->view('admin/common/header',$this->data);
				$this->load->view('admin/campaign/edit');
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect(base_url()."admin/access_denied");
		}
    }
	
	public function detail($id) {
		$this->data['campaign'] = $campaign = $this->campaignmodel->read(array('id'=>$id),array(),true);
		$this->load->view('admin/common/header',$this->data);
		$this->load->view('admin/campaign/detail');
		$this->load->view('admin/common/footer');
	}
    public function delete($id){
		if (in_array($this->data['admingroup'],$this->data['groups_permission'])) {
			if(isset($id)&&($id>0)&&is_numeric($id)){
				$this->campaignmodel->delete(array('id'=>$id));
				redirect(base_url() . "admin/campaign");
				exit();
			}
		} else {
			redirect(base_url()."admin/access_denied");
		}
    }

}