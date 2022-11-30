<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pincode_model extends CI_Model {
 
     public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function _get_datatables_query()
    {    
        $column_order = array('name','pincode');
        $column_search = array('name','pincode');

            $this->db->select('tbl_pincode.*,tbl_cities.name as name');
            $this->db->from('tbl_pincode');
            $this->db->join('tbl_cities','tbl_pincode.fk_city_id=tbl_cities.id','left');
            $this->db->where('tbl_pincode.status',1);
	        $this->db->order_by('tbl_pincode.id','DESC'); 
	       
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
 
    function get_datatables()
    {
        $this->_get_datatables_query();
       // if($_POST['length'] != -1)
       // $this->db->limit($_POST['length'],$_POST['start']);
        $query=$this->db->get();
        return $query->result_array();
    } 

    function count_filtered()
    {
        $this->_get_datatables_query();

        $query = $this->db->get();

        return $query->num_rows();
    } 

    public function count_all()
    {         
        $this->db->select('tbl_pincode.*,tbl_cities.name as name');
        $this->db->from('tbl_pincode');
        $this->db->join('tbl_cities','tbl_pincode.fk_city_id=tbl_cities.id','left');
        $this->db->where('tbl_pincode.status',1);
        $this->db->order_by('tbl_pincode.id','DESC'); 
        return $this->db->count_all_results();
    }
}