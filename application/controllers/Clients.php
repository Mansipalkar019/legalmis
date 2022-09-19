<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clients extends CI_Controller
{
    var $role_id, $user_id;

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if (!$this->session->has_userdata('user_id')) redirect('');
        $this->user_id = intval($this->encryption->decrypt($this->session->userdata('user_id')));
        $this->role_id = intval($this->encryption->decrypt($this->session->userdata('role_id')));
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('');
    }

    public function index()
    {
        $this->load->view('header', array('title' => "Clients | " . CRM__NAME, 'active' => "clients"));
        
        $this->load->library('grocery_CRUD');
        $table = "clients";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $crud->display_as('updated_at', 'Updated');
        $crud->display_as('updated_by', 'UpdatedBy');
        $crud->display_as('created_at', 'Created');
        $crud->display_as('gst_no', 'GSTNo.');
        $crud->display_as('email_id', 'EmailId');
        $crud->display_as('mobile_1', 'Mobile.1');
        $crud->display_as('mobile_2', 'Mobile.2');
        $crud->display_as('client_name', 'ClientName');
        $crud->display_as('alternate_number', 'AlternateNo.');

        $crud->unique_fields(array('mobile_1'));
        $crud->required_fields('client_name','mobile_1','city');

        if($this->role_id != 1)
        {
            $crud->unset_clone();
            $crud->unset_delete();
            $crud->unset_export();
            $crud->unset_print();
        }

        $crud->set_relation('updated_by', 'users', 'username');

        $crud->callback_before_insert(function ($post_array)  {
            $post_array['created_at'] = date('Y-m-d H:i:s');
            $post_array['updated_at'] = date('Y-m-d H:i:s');
            $post_array['updated_by'] = $this->user_id;
            return $post_array;
        });

        $crud->callback_before_update(function ($post_array, $primary_key) {
            $post_array['updated_at'] = date('Y-m-d H:i:s');
            $post_array['updated_by'] = $this->user_id;

            $existing = $this->db->query("SELECT * from clients where id='$primary_key'")->row_array();
            foreach ($post_array as $k => $v) :
                if ($existing[$k] != $v) :
                    $this->db->insert('clients_history', array(
                        'clients_id'    => $primary_key,
                        'column_name'   => $k,
                        'old_value'     => $existing[$k],
                        'new_value'     => $v,
                        'updated_by'    => $this->user_id
                    ));
                endif;
            endforeach;

            return $post_array;
        });

        $crud->callback_after_insert(function ($post_array, $primary_key) {
            foreach ($post_array as $k => $v) {
                $this->db->insert('clients_history', array(
                    'clients_id'    => $primary_key,
                    'column_name'   => $k,
                    'old_value'     => '',
                    'new_value'     => $v,
                    'updated_by'    => $this->user_id
                ));
            }
            return true;
        });

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

    /*public function index()
    {
        $this->load->view('header', array('title' => "Sales | " . CRM__NAME, 'active' => "sales"));
        
        $this->load->library('grocery_CRUD');
        $table = "sales";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $crud->unique_fields(array('deal_id'));

        $crud->columns('deal_id','client_name','mobile_1','company_name','brand_name','services','sub_services');
        $crud->required_fields('deal_id');

        // $crud->set_field_upload('invoice','assets/uploads/files/invoice');
        // $crud->set_field_upload('payment_receipt','assets/uploads/files/payment_receipt');

        // $crud->set_relation('service_id', 'services', 'name');
        $crud->display_as('services', 'Services');

        // deal entry/upload access to user role no.3 & the name of the same is: SaleAdmin
        if ($this->session->has_userdata('role_id') && intval($this->encryption->decrypt($this->session->userdata('role_id'))) == 3)
        {
            $crud->unset_clone();
            $crud->unset_edit();
            $crud->unset_delete();
            // $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();
        }

        // deal entry/upload access to user role no.1 & the name of the same is: Administrator
        else if ($this->session->has_userdata('role_id') && intval($this->encryption->decrypt($this->session->userdata('role_id'))) == 1)
        {
            $crud->unset_clone();
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_add();
            // $crud->unset_export();
            // $crud->unset_print();
        }
        
        // no access to other users with role other than 3 & 1 above
        // no access to roles (if any) [ref: Welcome.php & comment notes" (no roles assigned say SORRY!... :P)]
        else
        {
            $crud->unset_clone();
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();

            $crud->unset_texteditor();
            $crud->unset_list();
            $crud->unset_read();
            $crud->unset_operations();
        }

        // $crud->callback_before_insert(function ($post_array)  {
        //     if (!empty($post_array['deal_id'])) 
        //     {
        //         $deal_id = $post_array['deal_id'];
        //     }
        //     return $post_array;
        // });

        // $crud->callback_before_update(function ($post_array)  {
        //     if (empty($post_array['deal_id'])) {
        //         $post_array['deal_id'] = $post_array['deal_id'];
        //     }
        //     return $post_array;
        // });

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }*/

}