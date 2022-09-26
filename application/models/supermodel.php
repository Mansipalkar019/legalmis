<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class supermodel extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function main_services()
	{
		$this->db->select('sub_services.*,services.name as servicename');
		$this->db->from('sub_services');
		$this->db->join('services','sub_services.service_id=services.id','left');
        $this->db->where('sub_services.status',1);
	}

	public function get_sub_services()
	{
		$this->main_services();
		$query=$this->db->get();
        return $query->result_array();
	}

    public function count_filtered()
	{
		$this->main_services();
		$query=$this->db->get();
        return $query->num_rows();
	}

    public function count_all()
	{
		$this->main_services();
        return $this->db->count_all_results();
	}

	public function main_sub_services($id='')
	{
		$this->db->select('sub_services.*,services.name as servicename');
		$this->db->from('sub_services');
		$this->db->join('services','sub_services.service_id=services.id','left');
        $this->db->where('sub_services.status',1);
		$this->db->where('sub_services.id',$id);
		$query=$this->db->get();
        return $query->row_array();
	}

	public function main_document_list($id='')
	{
		$this->db->select('document_list.*,services.name as servicename');
		$this->db->from('document_list');
		$this->db->join('services','document_list.service_id=services.id','left');
        $this->db->where('document_list.status',1);
		$this->db->where('document_list.id',$id);
		$query=$this->db->get();
        return $query->row_array();
	}

	public function main_sales()
	{
		$this->db->select('*');
		$this->db->from('sales');
		$this->db->where('status','0');
		
	}
	public function count_sales_filtered()
	{
		$this->main_sales();
		$query=$this->db->get();
        return $query->num_rows();
	}
	public function count_sales_all()
	{
		$this->main_sales();
        return $this->db->count_all_results();
	}


	public function getpincode($City)
	{
		$this->db->select('Pincode');
		$this->db->distinct();
		$this->db->from('location');
	  	$this->db->where('City',$City);
		$this->db->order_by('id ', 'ASC');
		$query=$this->db->get();
		return $query->result_array();
	}

	public function Add_tempdata($data_user){
		$_datas = array_chunk($data_user, 50);   
	
		foreach ($_datas as $key => $value) {
				//$this->db->insert('temp_soft_data', $value);
			$this->db->insert_batch('sales', $value);
		}
	}

	public function _getsalesrecord_query()
    {    
        $column_order = array('id');
        $column_search = array('id');

		$this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(sub_services.name) as subserviceid');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
        $this->db->group_by('sales.id');
        $this->db->where('sales.status',1);
      
        $this->db->order_by('sales.id',"DESC");
        $i = 0; 
        foreach ($column_search as $item) // loop column 
        {
            if(@$_POST['search']['value']) // if datatable send POST for search
            {                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.

                    $this->db->like($item, @$_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, @$_POST['search']['value']);
                } 

                if(count($this->column_search) - 1 == $i) //last loop

                    $this->db->group_end(); //close bracket
            }

            $i++;
        }     

        if(!empty(@$_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
        } 

        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

	function getsalesrecord()
    {
        $this->_getsalesrecord_query();
        $query=$this->db->get();
		return $query->result_array();
    }

	function sale_record_count_filtered()
	{
		$this->_getsalesrecord_query();
        $query=$this->db->get();
		return $query->num_rows();
	}

	function sale_record_count_all()
	{
		$this->_getsalesrecord_query();
		return $this->db->count_all_results();
	}
	public function getsalesrecordbyid($id='')
	{
		$this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(sub_services.name) as subserviceid');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
        $this->db->group_by('sales.id');
        $this->db->where('sales.status',1);
		$this->db->where('sales.id',$id);
		$query=$this->db->get();
        return $query->row_array();
	}

	public function edit_sales_data($id='')
	{
		$this->db->select('sales.*');
        $this->db->from('sales');
		$this->db->where('sales.id',$id);
		$this->db->where('sales.status',1);
		$query=$this->db->get();
        return $query->row_array();
	}
	public function get_sale_service($id='')
	{
		$this->db->select('GROUP_CONCAT(sales_services.id) as sales_services_id,GROUP_CONCAT(sales_services.services_id) as services_id');
        $this->db->from('sales_services');
		$this->db->where('sales_services.sales_id',$id);
		$this->db->group_by('sales_services.sales_id');
		$query=$this->db->get();
        return $query->row_array();
	}
	public function get_sale_sub_service($id='')
	{
		$this->db->select('GROUP_CONCAT(sales_sub_services.id) as sales_sub_services_id,GROUP_CONCAT(sales_sub_services.sub_services_id) as sub_services_id');
        $this->db->from('sales_sub_services');
		$this->db->where('sales_sub_services.sales_id',$id);
		$this->db->group_by('sales_sub_services.sales_id');
		$query=$this->db->get();
        return $query->row_array();
	}
	public function get_sale_service_brand($id='')
	{
		$this->db->select('GROUP_CONCAT(sale_service_brand.id) as sale_service_brand_id,GROUP_CONCAT(sale_service_brand.brand_name) as brand_name,GROUP_CONCAT(sale_service_brand.fk_service_id) as fk_service_id');
        $this->db->from('sale_service_brand');
		$this->db->where('sale_service_brand.fk_sales_id',$id);
		$this->db->group_by('sale_service_brand.fk_sales_id');
		$query=$this->db->get();
        return $query->row_array();
	}
	public function get_sale_service_class($id='')
	{
		$this->db->select('GROUP_CONCAT(sale_service_class.id) as sale_service_class_id,GROUP_CONCAT(sale_service_class.class_name) as class_name,GROUP_CONCAT(sale_service_class.fk_service_id) as fk_service_id,GROUP_CONCAT(sale_service_class.fk_brand_id) as fk_brand_id');
        $this->db->from('sale_service_class');
		$this->db->where('sale_service_class.fk_sale_id',$id);
		$this->db->group_by('sale_service_class.fk_sale_id');
		$query=$this->db->get();
        return $query->row_array();
	}
}
?>

