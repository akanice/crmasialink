<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CampaignModel extends MY_Model {
    protected $tableName = 'campaign';

    protected $table = array(
        'id' =>  array(
            'isIndex'   => true,
            'nullable'  => true,
            'type'      => 'integer'
        ),
        'name' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'string'
        ),
        'alias' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'string'
        ),
		'create_date' =>  array(
            'isIndex'   => true,
            'nullable'  => true,
            'type'      => 'integer'
        ),
		'end_date' =>  array(
            'isIndex'   => true,
            'nullable'  => true,
            'type'      => 'integer'
        ),
        'description' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'string'
        ),
        'pricing_array' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'string'
        ),
		'total_price' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'integer'
        ),
		'staff_create_id' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'integer'
        ),
		'status' => array(
            'isIndex'   => false,
            'nullable'  => false,
            'type'      => 'string'
        ),
    );

    public function __construct() {
        parent::__construct();
        $this->checkTableDefine();
    }
	
	public function getCountCampaign($name) {
        $this->db->select('*');
        $this->db->from('campaign');
        $this->db->like('campaign.name', $name);
		$this->db->order_by("id","DESC");
        return $this->db->count_all_results();
        return false;
    }
	
	public function getListcampaign($name,$limit,$offset) {
        $this->db->select('campaign.*');
        $this->db->like('campaign.name', $name);
		$this->db->order_by("id","DESC");
        if ($limit != "") {
            $query = $this->db->get('campaign', $limit, $offset);
        }
        if ($query->num_rows > 0) return $query->result();
        return false;
    }
}