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


	function getsalesrecord($from_date="",$to_date="",$rowno="",$rowperpage="",$search_text="")
    {
        $this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid,tbl_states.name as statename');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->join('tbl_states','sales.state=tbl_states.id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
        $this->db->where('sales.status',1);
		$this->db->limit($rowperpage,$rowno);
		if(!empty($from_date))
		{
			$this->db->where('sales.sale_date >=',$from_date);
		}
		if(!empty($to_date))
		{
			$this->db->where('sales.sale_date <=',$to_date);
		}
		if(!empty($search_text))
		{
			$this->db->where("(sales.client_name LIKE '%".$search_text."%' OR sales.company_name LIKE '%".$search_text."%' OR sales.mobile_1 LIKE '%".$search_text."%' OR sales.email_address LIKE '%".$search_text."%' OR sales.invoice_number LIKE '%".$search_text."%' OR sales.deal_id LIKE '%".$search_text."%' OR sales.services LIKE '%".$search_text."%' OR sales.sub_services LIKE '%".$search_text."%' OR sales.mobile_2 LIKE '%".$search_text."%')", NULL, FALSE); 
		}
		$this->db->group_by('sales.id');
        $this->db->order_by('sales.id',"DESC");
        $query=$this->db->get();
		return $query->result_array();
    }

	function sale_record_count_filtered($from_date="",$to_date="",$rowno="",$rowperpage="",$search_text="")
	{
		$this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid,tbl_states.name as statename');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
		$this->db->join('tbl_states','sales.state=tbl_states.id','left');
        $this->db->where('sales.status',1);
      
       
		$this->db->limit($rowperpage,$rowno);
		if(!empty($from_date))
		{
			$this->db->where('sales.sale_date >=',$from_date);
		}
		if(!empty($to_date))
		{
			$this->db->where('sales.sale_date <=',$to_date);
		}
		if(!empty($search_text))
		{
			$this->db->where("(sales.client_name LIKE '%".$search_text."%' OR sales.company_name LIKE '%".$search_text."%' OR sales.mobile_1 LIKE '%".$search_text."%' OR sales.email_address LIKE '%".$search_text."%' OR sales.invoice_number LIKE '%".$search_text."%' OR sales.deal_id LIKE '%".$search_text."%' OR sales.services LIKE '%".$search_text."%' OR sales.sub_services LIKE '%".$search_text."%' OR sales.mobile_2 LIKE '%".$search_text."%')", NULL, FALSE); 
		}
		$this->db->group_by('sales.id');
		$this->db->order_by('sales.id',"DESC");
        $query=$this->db->get();
		return $query->num_rows();
	}

	function sale_record_count_all($from_date="",$to_date="",$rowno="",$rowperpage="",$search_text="")
	{
		$this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid,tbl_states.name as statename');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
		$this->db->join('tbl_states','sales.state=tbl_states.id','left');
        $this->db->where('sales.status',1);
      
       $this->db->limit($rowperpage,$rowno);
	   if(!empty($from_date))
	   {
		   $this->db->where('sales.sale_date >=',$from_date);
	   }
	   if(!empty($to_date))
	   {
		   $this->db->where('sales.sale_date <=',$to_date);
	   }
	   if(!empty($search_text))
	   {
		   $this->db->where("(sales.client_name LIKE '%".$search_text."%' OR sales.company_name LIKE '%".$search_text."%' OR sales.mobile_1 LIKE '%".$search_text."%' OR sales.email_address LIKE '%".$search_text."%' OR sales.invoice_number LIKE '%".$search_text."%' OR sales.deal_id LIKE '%".$search_text."%' OR sales.services LIKE '%".$search_text."%' OR sales.sub_services LIKE '%".$search_text."%' OR sales.mobile_2 LIKE '%".$search_text."%')", NULL, FALSE); 
	   }
		$this->db->group_by('sales.id');
		$this->db->order_by('sales.id',"DESC");
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
		//echo $this->db->last_query();die();
        return $query->row_array();
	}

	function get_brandandclass_bysale($id,$rowno="",$rowperpage="",$search_text="")
    {
        $this->db->select('GROUP_CONCAT(DISTINCT(services.name)) as services,GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name,GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name');
        $this->db->from('sale_service_brand');
		$this->db->join('sale_service_class','sale_service_class.fk_brand_id=sale_service_brand.id','left');
		$this->db->join('services','services.id=sale_service_brand.fk_service_id','left');
		$this->db->where('sale_service_brand.fk_sales_id',$id);
		$this->db->limit($rowperpage,$rowno);
		if($search_text != '')
		{
			$this->db->where("(sale_service_brand.brand_name LIKE '%".$search_text."%' OR sale_service_class.class_name LIKE '%".$search_text."%' OR services.name LIKE '%".$search_text."%')", NULL, FALSE); 
		}
		$this->db->group_by('sale_service_brand.id');
        $this->db->order_by('sale_service_brand.id',"DESC");
		
        $query=$this->db->get();
		return $query->result_array();
    }

	function get_brandandclass_count_filtered($id,$rowno="",$rowperpage="",$search_text="")
    {
		$this->db->select('GROUP_CONCAT(DISTINCT(services.name)) as services,GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name,GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name');
        $this->db->from('sale_service_brand');
		$this->db->join('sale_service_class','sale_service_class.fk_brand_id=sale_service_brand.id','left');
		$this->db->join('services','services.id=sale_service_brand.fk_service_id','left');
		$this->db->where('sale_service_brand.fk_sales_id',$id);
		$this->db->limit($rowperpage,$rowno);
		if($search_text != '')
		{
			$this->db->where("(sale_service_brand.brand_name LIKE '%".$search_text."%' OR sale_service_class.class_name LIKE '%".$search_text."%' OR services.name LIKE '%".$search_text."%')", NULL, FALSE); 
		}
		$this->db->group_by('sale_service_brand.id');
        $this->db->order_by('sale_service_brand.id',"DESC");
		$query=$this->db->get();
		return $query->num_rows();
    }

	function get_brandandclass_countall($id,$rowno="",$rowperpage="",$search_text="")
    {
		$this->db->select('GROUP_CONCAT(DISTINCT(services.name)) as services,GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brand_name,GROUP_CONCAT(DISTINCT(sale_service_class.class_name)) as class_name');
        $this->db->from('sale_service_brand');
		$this->db->join('sale_service_class','sale_service_class.fk_brand_id=sale_service_brand.id','left');
		$this->db->join('services','services.id=sale_service_brand.fk_service_id','left');
		$this->db->where('sale_service_brand.fk_sales_id',$id);
		$this->db->limit($rowperpage,$rowno);
		if($search_text != '')
		{
			$this->db->where("(sale_service_brand.brand_name LIKE '%".$search_text."%' OR sale_service_class.class_name LIKE '%".$search_text."%' OR services.name LIKE '%".$search_text."%')", NULL, FALSE); 
		}
		$this->db->group_by('sale_service_brand.id');
        $this->db->order_by('sale_service_brand.id',"DESC");
		return $this->db->count_all_results();
    }

	function download_salesrecord($from_date="",$to_date="")
    {
        $this->db->select('sales.*,GROUP_CONCAT(DISTINCT(services.name)) as serviceid,GROUP_CONCAT(DISTINCT(sub_services.name)) as subserviceid,tbl_states.name as statename,GROUP_CONCAT(DISTINCT(sale_service_brand.brand_name)) as brandname');
        $this->db->from('sales');
        $this->db->join('sales_services','sales_services.sales_id=sales.id','left');
        $this->db->join('sales_sub_services','sales_sub_services.sales_id=sales.id','left');
		$this->db->join('services','services.id=sales_services.services_id','left');
		$this->db->join('tbl_states','sales.state=tbl_states.id','left');
		$this->db->join('sale_service_brand','sale_service_brand.fk_sales_id=sales.id','left');
		$this->db->distinct('services');
		$this->db->join('sub_services','sub_services.id=sales_sub_services.sub_services_id','left');
        $this->db->where('sales.status',1);
		if(!empty($from_date))
		{
			$this->db->where('sales.sale_date >=',$from_date);
		}
		if(!empty($to_date))
		{
			$this->db->where('sales.sale_date <=',$to_date);
		}
	
		$this->db->group_by('sales.id');
        $this->db->order_by('sales.id',"DESC");
        $query=$this->db->get();
		return $query->result_array();
    }
}
?>

