<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sales extends CI_Controller {
    var $role_id, $user_id;
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        $this->load->model('supermodel');
    }
    public function index() {
        if ($this->session->userdata('superadmin_logged_in')) {
            $this->load->view('sales-index');
        }else{
            redirect('welcome');
        }
    }
    public function print_sales1() {
        $sales_id = base64_decode($_GET['id']);
        $getsalesrecordbyid = $this->supermodel->getsalesrecordbyid($sales_id);
        $state = $getsalesrecordbyid['state'];
        $getsalesrecordbyid['state'] = $this->model->selectWhereData('tbl_states', array('id' => $state), array('name'));
        $services = explode(',', $getsalesrecordbyid['serviceid']);
        foreach ($services as $services_key => $services_row) {
            $termcond[] = $this->model->selectWhereData('services', array('name' => $services_row), array('terms', 'name'));
        }
        $data1 = array('getsalesrecordbyid' => $getsalesrecordbyid, 'termcond' => $termcond);
        error_reporting(0);
        ini_set('memory_limit', '256M');
        ini_set("pcre.backtrack_limit", "1000000");
        // $this->load->view('admin/stock_pdf_reports');
        $pdfFilePath = FCPATH . "uploads/invoice/legal.pdf";
        $pdfFilePaths = base_url() . "uploads/invoice/legal'" . $data_row['id'] . "'.pdf";
        $this->load->library('m_pdf');
        $html = $this->load->view('printinvoice/print_sale_page1', array('data' => $data1), true);
        $mpdf = new mPDF();
        $mpdf->showImageErrors = true;
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->AddPage('P', 'A4');
        $mpdf->WriteHTML($html);
        ob_end_clean();
        $mpdf->Output($pdfFilePath, "I");
        $response['path'] = $pdfFilePaths;
        $this->load->view('printinvoice/print_sale_page1');
    }
    public function sales_exceldownload() {
        error_reporting(0);
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        // create file name
        $fileName = 'salereport.xlsx';
        // load excel library
        $this->load->library('excel');
        $totalData = $this->supermodel->download_salesrecord($from_date, $to_date);
        // echo '<pre>'; print_r($totalData); exit;
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'ID');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'DATE');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'SERVICES');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'COMPANY NAME');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'BRAND NAME');
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'CLIENT NAME');
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'MOBILE NUMBER');
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', 'EMAIL ID');
        $objPHPExcel->getActiveSheet()->SetCellValue('I1', 'GST NO');
        $objPHPExcel->getActiveSheet()->SetCellValue('J1', 'DEAL ID');
        $objPHPExcel->getActiveSheet()->SetCellValue('K1', 'REPRESENTATIVE');
        $objPHPExcel->getActiveSheet()->SetCellValue('L1', 'SOURCE');
        $objPHPExcel->getActiveSheet()->SetCellValue('M1', 'CITY');
        $objPHPExcel->getActiveSheet()->SetCellValue('N1', 'STATE');
        $objPHPExcel->getActiveSheet()->SetCellValue('O1', 'MODE');
        $objPHPExcel->getActiveSheet()->SetCellValue('P1', 'DEAL AMOUNT');
        $objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'AMOUNT RECEIVED');
        $objPHPExcel->getActiveSheet()->SetCellValue('R1', 'OUTSTANDING');
        $objPHPExcel->getActiveSheet()->SetCellValue('S1', 'TCS');
        $objPHPExcel->getActiveSheet()->SetCellValue('T1', 'GOVT FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('U1', 'ASSOCIATE FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('V1', 'NET INCOME');
        $objPHPExcel->getActiveSheet()->SetCellValue('W1', 'GOVT FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('X1', 'PROFESSIONAL FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('Y1', 'DRAFTING/ PROCEEDING FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('Z1', 'DRAFTING/ PROCEEDING/ PROFESSIONAL FEES');
        $objPHPExcel->getActiveSheet()->SetCellValue('AA1', 'TOTAL PROFESSIONAL AMOUNT');
        $objPHPExcel->getActiveSheet()->SetCellValue('AB1', 'CGST 9%');
        $objPHPExcel->getActiveSheet()->SetCellValue('AC1', 'SGST 9%');
        $objPHPExcel->getActiveSheet()->SetCellValue('AD1', 'IGST 18%');
        $objPHPExcel->getActiveSheet()->SetCellValue('AE1', 'ROUND OFF');
        $objPHPExcel->getActiveSheet()->SetCellValue('AF1', 'INVOICE');
        $objPHPExcel->getActiveSheet()->SetCellValue('AG1', 'LEGAL REMARKS');
        $objPHPExcel->getActiveSheet()->SetCellValue('AH1', 'ACCOUNT REMARKS');
        foreach ($totalData as $totalData_key => $totalData_row) {
            $brand_id = explode(',', $totalData[$totalData_key]['brandid']);
            $brand_name = explode(',', $totalData[$totalData_key]['brandname']);
            $services = $this->supermodel->sale_service($totalData_row['id']);
            $service_id = explode(',', $services[0]['serviceid']);
            $service_name = explode(',', $services[0]['servicename']);
            foreach ($service_id as $service_key => $service_id_row) {
                $totalData[$totalData_key]['subservice'][] = $this->supermodel->sale_subservice($totalData_row['id'], $service_id_row);
            }
            foreach ($totalData[$totalData_key]['subservice'] as $subservices_key => $subservices_row) {
                foreach ($subservices_row as $subservice_key => $subservicerow) {
                    if ($subservicerow['sales_id'] == $totalData_row['id']) {
                        if (in_array($subservicerow['servicesid'], $service_id)) {
                            $totalData[$totalData_key]['servicesubservice'][] = $service_name[$subservices_key] . '(' . $subservicerow['subservicename'] . ')';
                            $totalData[$totalData_key]['servicesubservices'] = implode(",", $totalData[$totalData_key]['servicesubservice']);
                        }
                    }
                }
            }
            foreach ($brand_id as $brands_id_key => $brand_id_row) {
                $totalData[$totalData_key]['classname'][] = $this->supermodel->get_brand_class_name($brand_id_row);
            }
            foreach ($totalData[$totalData_key]['classname'] as $classname_key => $classname_row) {
                if ($classname_row['fk_sale_id'] == $totalData_row['id']) {
                    if (in_array($classname_row['fk_brand_id'], $brand_id)) {
                        $totalData[$totalData_key]['brand_class_name'][] = $brand_name[$classname_key] . '(' . $classname_row['class_name'] . ')';
                        $totalData[$totalData_key]['brand_class'] = implode(",", $totalData[$totalData_key]['brand_class_name']);
                    }
                }
            }
        }
        $rowCount = 2;
        $i = 1;
        foreach ($totalData as $totalData_key => $totalData_row) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $i);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $totalData_row['sale_date']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $totalData_row['servicesubservices']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $totalData_row['company_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $totalData_row['brand_class']);
            $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $totalData_row['client_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $totalData_row['mobile_'] . ',' . $totalData_row['mobile_2'] . ',' . $totalData_row['alternate_number']);
            $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $totalData_row['email_address']);
            $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $totalData_row['gst_no']);
            $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $totalData_row['deal_id']);
            $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $totalData_row['cust_exec_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $totalData_row['lead_source']);
            $objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $totalData_row['city']);
            $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $totalData_row['statename']);
            $objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $totalData_row['payment_mode']);
            $objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, $totalData_row['deal_amount']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Q' . $rowCount, $totalData_row['amount_received']);
            $objPHPExcel->getActiveSheet()->SetCellValue('R' . $rowCount, $totalData_row['outstanding']);
            $objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount, $totalData_row['tcs']);
            $objPHPExcel->getActiveSheet()->SetCellValue('T' . $rowCount, $totalData_row['govt_fees']);
            $objPHPExcel->getActiveSheet()->SetCellValue('U' . $rowCount, $totalData_row['associate_fees']);
            $objPHPExcel->getActiveSheet()->SetCellValue('V' . $rowCount, $totalData_row['net_income']);
            $objPHPExcel->getActiveSheet()->SetCellValue('W' . $rowCount, $totalData_row['govt_fee']);
            $objPHPExcel->getActiveSheet()->SetCellValue('X' . $rowCount, $totalData_row['professional_fees']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Y' . $rowCount, $totalData_row['drafting_proceeding_fees']);
            $objPHPExcel->getActiveSheet()->SetCellValue('Z' . $rowCount, $totalData_row['drafting_proceeding_professional_fees']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AA' . $rowCount, $totalData_row['total_professional_amount']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AB' . $rowCount, $totalData_row['cgst']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AC' . $rowCount, $totalData_row['sgst']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AD' . $rowCount, $totalData_row['igst']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AE' . $rowCount, $totalData_row['round_off']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AF' . $rowCount, $totalData_row['invoice_name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AG' . $rowCount, $totalData_row['legal_remarks']);
            $objPHPExcel->getActiveSheet()->SetCellValue('AH' . $rowCount, $totalData_row['accounts_remarks']);
            $rowCount++;
            $i++;
        }
        $filename = FCPATH . "uploads/invoice/legal_invoice.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="01simple.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save($filename);
        $response['url'] = base_url() . "uploads/invoice/legal_invoice.xls";
        echo json_encode($response, true);
    }
    public function getsalesrecord() {
        $data[] = json_encode($_POST);
        // echo "<pre>";
        // print_r($data);die();
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        $rowno = $_POST['start'];
        $rowperpage = $_POST['length'];
        $search_text = $_POST['search']['value'];
        $totalData = $this->supermodel->getsalesrecord($from_date, $to_date, $rowno, $rowperpage, $search_text);
        $count_filtered = $this->supermodel->sale_record_count_filtered($from_date, $to_date, $rowno, $rowperpage, $search_text);
        $count_all = $this->supermodel->sale_record_count_all($from_date, $to_date, $rowno, $rowperpage, $search_text);
        $data_array = array();
        foreach ($totalData as $category_details_key => $data_row) {
              $edit = '<span><a href="'.base_url()."Sales/edit_sales?id=".base64_encode($data_row['id']).'" ><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> </a></span>&nbsp;&nbsp;';
            $invoice = '<span><a href="' . base_url() . 'Sales/print_sales1?id=' . base64_encode($data_row['id']) . '" target="_blank">
            <i class="glyphicon glyphicon-download-alt invoice_view" aria-hidden="true" 
             ></i> </a></span><br><br>';
            $delete = "<span><a href='#' onclick='delete_sales_report(this," . $data_row['id'] . ")' ><i class='glyphicon glyphicon-trash' aria-hidden='true' ></i> </a></span>&nbsp;&nbsp;";
            $services = '<span><a href="javascript:void(0);" class="edit_service_data" id="' . $data_row['id'] . '"><i class="" ></i>' . $data_row['serviceid'] . '</a></span>&nbsp;&nbsp;&nbsp;';
            $image_documents = '<span><a href="' . base_url() . "Sales/doc_gallery?id=" . base64_encode($data_row['id']) . '" id="' . $data_row['id'] . '"><i class="glyphicon glyphicon-th-large" ></i></a></span>';
            $nestedData = array();
            $nestedData[] = $edit . $invoice . $delete . $image_documents;
            $nestedData[] = ++$category_details_key;
            $nestedData[] = $data_row['company_name'];
            $nestedData[] = $data_row['sale_date'];
            $nestedData[] = $data_row['client_name'];
            $nestedData[] = $services;
            $nestedData[] = $data_row['subserviceid'];
            $nestedData[] = $data_row['mobile_1'] . ', ' . $data_row['mobile_2'] . ', ' . $data_row['alternate_number'];
            $nestedData[] = $data_row['email_address'] . ', ' . $data_row['alternate_number'];
            $nestedData[] = $data_row['gst_no'];
            $nestedData[] = $data_row['deal_id'];
            $nestedData[] = $data_row['invoice_number'];
            // $nestedData[] = $data_row['primary_caller'];
            // $nestedData[] = $data_row['secondary_caller'];
            // $nestedData[] = $data_row['lead_source'];
            $nestedData[] = $data_row['street'];
            $nestedData[] = $data_row['city_name'];
            $nestedData[] = $data_row['statename'];
            $nestedData[] = $data_row['pin_code'];
            $nestedData[] = $data_row['payment_mode'];
            $nestedData[] = $data_row['deal_amount'];
            $nestedData[] = $data_row['amount_received'];
            $nestedData[] = $data_row['outstanding'];
            $nestedData[] = $data_row['tcs'];
            $nestedData[] = $data_row['govt_fees'];
            $nestedData[] = $data_row['associate_fees'];
            $nestedData[] = $data_row['net_income'];
            $nestedData[] = $data_row['gst_amount'];
            $nestedData[] = $data_row['outstanding_followup_date'];
            // $nestedData[] = $data_row['invoice_status'];
            // $nestedData[] = $data_row['invoice_name'];
            // $nestedData[] = $data_row['invoice_type'];
            $nestedData[] = $data_row['govt_fee'];
            $nestedData[] = $data_row['professional_fees'];
            $nestedData[] = $data_row['drafting_proceeding_fees'];
            $nestedData[] = $data_row['drafting_proceeding_professional_fees'];
            $nestedData[] = $data_row['total_professional_amount'];
            $nestedData[] = $data_row['cgst'];
            $nestedData[] = $data_row['sgst'];
            $nestedData[] = $data_row['igst'];
            $nestedData[] = $data_row['round_off'];
            $nestedData[] = $data_row['remarks'];
            $data_array[] = $nestedData;
        }
        $output = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($count_all), "recordsFiltered" => intval($count_filtered), "data" => $data_array,);
        // Output to JSON format
        echo json_encode($output);
    }
    public function getsalesrecord1() {
        $data[] = json_encode($_POST);
        $id = $_POST['id'];
        $rowno = $_GET['start'];
        $rowperpage = $_GET['length'];
        $search_text = $_GET['search']['value'];
        //echo $search_text;die();
        $totalData = $this->supermodel->get_brandandclass_bysale($id, $rowno, $rowperpage, $search_text);
        $count_filtered = $this->supermodel->get_brandandclass_count_filtered($id, $rowno, $rowperpage, $search_text);
        $count_all = $this->supermodel->get_brandandclass_countall($id, $rowno, $rowperpage, $search_text);
        $data_array = array();
        foreach ($totalData as $category_details_key => $data_row) {
            $nestedData = array();
            $nestedData[] = ++$category_details_key;
            $nestedData[] = $data_row['services'];
            $nestedData[] = $data_row['brand_name'];
            $nestedData[] = $data_row['class_name'];
            $data_array[] = $nestedData;
        }
        $output = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($count_all), "recordsFiltered" => intval($count_filtered), "data" => $data_array,);
        // Output to JSON format
        echo json_encode($output);
    }
    public function doc_gallery() {
        $sales_id = base64_decode($_GET['id']);
        $get_doc_list = $this->model->selectWhereData('sales', array('id' => $sales_id), array('image_url'), false);
        $data['doc_list'] = explode(',', $get_doc_list[0]['image_url']);
        $this->load->view('doc_gallery', $data);
    }
    // only for Rashi and Administrator as of now
    public function sales_info() {
        $this->load->view('header', array('title' => "Sales Info | " . CRM__NAME, 'active' => "sales"));
        $sales_id = $this->input->get('id');
        $sales_id = doubleval($sales_id);
        $sales = $this->db->query("SELECT * from sales where id='$sales_id'");
        $data['sales'] = $sales ? $sales->row_array() : NULL;
        $data['sales_columns'] = $sales ? $sales->list_fields() : NULL;
        $this->load->view('sales-info', $data);
        $this->load->view('footer');
    }
    public function delete_service() {
        $user_id = $_POST['id'];
        if ($this->model->updateData('sales', array('status' => '0'), array('id' => $user_id))) {
            $response['status'] = 'success';
            $response['error'] = "It was succesfully deleted";
        } else {
            $response['status'] = 'failure';
            $response['error'] = "Unsuccesfully!";
        }
        echo json_encode($response);
    }
    public function services_info() {
        echo "Sales & Services Ids respectively: {$this->input->get('sales_id') } - {$this->input->get('services_id') }";
        echo "<br>TODO: show deal sales info & services backend works info";
    }
    public function sub_services_info() {
        echo "Sales & Sub-Services_id & Services Ids respectively: {$this->input->get('sales_id') } - {$this->input->get('sub_services_id') }- {$this->input->get('services_id') }";
        echo "<br>TODO: show deal sales info & services backend works info";
    }
    // routed to show custom 4 columns page
    // the grocery_crud url is : http://192.168.0.55/legalmis/sales/index/read/1
    // & the action button is default grocery_crud View grid action btn
    // [while we can add our own custom button; but this helps rapid development]
    // REFER: $route['sales/index/read/(:num)'] = 'sales/read-deal/$1';
    public function read_deal($deal_row_id) {
        echo "Deal Row Id: {$deal_row_id}";
        echo "<br>TODO: show custom 4 column page here...";
    }
    public function add_deal() {
          if ($this->session->userdata('superadmin_logged_in')) {
                // FETCH: get all services name only & get sub_services using $this->get_background_data();
                $data['services_list'] = $this->model->getData('services', array('status' => '1'));
                // FETCH: get all services name only & get sub_services using $this->get_background_data();
                $data['sub_services_list'] = $this->model->getData('sub_services', array('status' => '1'));
                // FETCH: get all documents name
                $data['document_list'] = $this->model->getData('document_list', array('status' => '1'));
                // FETCH: get all the payment mode names
                $data['payment_mode'] = $this->model->getData('payment_mode', array('status' => '1'));
                // FETCH: get all the invoice status names
                $data['invoice_status'] = $this->model->getData('invoice_status', array('status' => '1'));
                // FETCH: get all the invoice type names
                $data['invoice_type'] = $this->model->getData('invoice_type', array('status' => '1'));
                // FETCH: get all the invoice type names
                $data['users'] = $this->model->getData('sub_services', array('status' => '1'));
                // FETCH: get all the invoice type names
                $data['clients'] = $this->db->query("SELECT id,client_name,mobile_1 FROM clients ORDER BY client_name ASC")->result();
                // FETCH: get all the invoice type names
                $data['state'] = $this->model->getData('tbl_states');
                // FETCH: get all customer executive
                $data['customer_executive'] = $this->model->getData('customer_executive', array('status' => '1'));
                 $city_data = $this->model->selectWhereData('tbl_cities ',array('status'=>1),array('*'),false);
                    $data['city_data'] = $city_data;
                $this->load->view('add_deal_form', $data);
          }else{
            redirect('welcome');
        }  
    }
    function _check_date($value) {
        // input: "30/03/2022"
        // $new_value = date('Y-m-d', strtotime($value));
        if (empty($value)) {
            $this->form_validation->set_message('_check_date', 'The {field} field is required.');
            return FALSE;
        }
        try {
            $date = DateTime::createFromFormat('d/m/Y', $value);
            $ifFalse = $date->format('Y-m-d');
            return TRUE;
        }
        catch(Exception $e) {
            // echo $e->getMessage();
            // print_r(DateTime::getLastErrors());
            $this->form_validation->set_message('_check_date', 'The {field} field had error: ' . $e->getMessage());
            return FALSE;
        }
    }
    function _check_is_array($value) {
        // log_message('ERROR',json_encode($value));
        if ($value == null || empty($value)) {
            $this->form_validation->set_message('_check_is_array', 'The {field} field is required.');
            return FALSE;
        }
        return TRUE;
        // if (is_array($value)) return TRUE;
        // else
        // {
        //     $this->form_validation->set_message('_check_is_array', 'The {field} field must be a collection of selections');
        //     return FALSE;
        // }
        
    }
    // function email_check($str)
    // {
    //     if (stristr($str,'@uni-email-1.com') !== false) return true;
    //     if (stristr($str,'@uni-email-2.com') !== false) return true;
    //     if (stristr($str,'@uni-email-3.com') !== false) return true;
    //         $this->form_validation->set_message('email_address', 'Please provide an acceptable email address.');
    //         return FALSE;
    // }
    public function getcity() {
        $state_id = $this->input->post('city');
        $query = $this->model->getData('tbl_cities', array('state_id' => $state_id));
        $html = "<option value=''>Select City</option>";
        foreach ($query as $key => $bdd) {
            $html.= "<option value='" . $bdd['id'] . "'>" . $bdd['name'] . "</option>";
        }
        echo json_encode($html);
    }
    public function getpincode() {
        $city_id = $this->input->post('city');
        // echo '<pre>'; print_r($city_id); exit;
        $pincode_data = $this->model->selectWhereData('tbl_pincode',array('fk_city_id'=>$city_id,'status'=>1),array('id','pincode'),false);
        // $html = "<option value=''>Select Pincode</option>";
        // foreach ($query as $key => $bdd) {
        //     $html.= "<option value='" . $bdd['id'] . "'>" . $bdd['pincode'] . "</option>";
        // }
        $data['pincode_data'] = $pincode_data;
        echo json_encode($data);
    }
    public function getselectedservices() {
        $data = array();
        $html = "";
        $service_id = $this->input->post('grp');
        foreach ($service_id[0] as $service_id_key => $service_id_row) {
            $query = $this->model->selectWhereData('sub_services', array('service_id' => $service_id_row, 'status' => '0'), array('id', 'name', 'service_id'), false);
            $check = array_merge($data, $query);
            // echo "<pre>";
            // print_r($check);
            foreach ($check as $key => $bdd) {
                $html.= "<option value='" . $bdd['id'] . '_' . $bdd['service_id'] . "'>" . $bdd['name'] . "</option>";
            }
        }
        //  die();
        echo json_encode($html);
    }
    public function cal_sale_details() {
        $deal_amt = $this->input->post('deal_amt');
        $govt_fees = $this->input->post('govt_fees');
        $associate_fees = $this->input->post('associate_fees');
        $state = $this->input->post('state');
        $invoice_type = $this->input->post('invoice_type');       

        $outstanding = 0;
        $tcs = 0;
        $cgst = 0;
        $sgst = 0;
        $igst = 0;
        $final_round_off = 0;
        if($invoice_type==1){
                if (!empty($deal_amt)) {
                    $deal_amt = $deal_amt;
                } else {
                    $deal_amt = 0;
                }
                if (!empty($govt_fees)) {
                    $govt_fees = $govt_fees;
                } else {
                    $govt_fees = 0;
                }
                if (!empty($associate_fees)) {
                    $associate_fees = $associate_fees;
                } else {
                    $associate_fees = 0;
                }
                $professionalwithgst = $deal_amt - $govt_fees;
                $gstamt = $professionalwithgst / 118;
                $final_gstamt = round($gstamt * 18);
                $professinal_amt = $professionalwithgst - $final_gstamt;
               
                if ($associate_fees != 0) {
                    $final_net_amount = abs($professinal_amt - $associate_fees);
                } else {
                    $final_net_amount = abs($professinal_amt);
                }
        }else{
            $final_net_amount = $deal_amt - $govt_fees - $associate_fees;
            
        }
        if ($state == 22) {
            if($invoice_type==1){
                    $net_income = $final_net_amount + $associate_fees;
                    $sum = 100;
                    $cgst_amt = (($net_income * 18) / $sum);
                    $cgst = $cgst_amt / 2;
                    $sgst = $cgst;
                    $igst = 0;
                    $gstround = (int)($cgst + $sgst);
                    $final_round_off = number_format($gstround - $cgst - $sgst, 2);
            }else{
                $net_income = $deal_amt - $govt_fees - $associate_fees;
                    
                    $cgst_amt = 0;
                    $cgst = 0;
                    $sgst = 0;
                    $igst = 0;
                    $gstround =0 ;
                    $final_round_off = 0;
            }          
         
            $data = array('outstanding' => $outstanding, 'tcs' => $tcs, 'associate_fees' => $associate_fees, 'final_net_amount' => $final_net_amount, 'cgst' => $cgst, 'sgst' => $sgst, 'igst' => $igst, 'final_round_off' => $final_round_off);
        } else if ($state != 22 && !empty($state)) {
            if($invoice_type==1){
                $net_income = $final_net_amount + $associate_fees;
                $sum = 100;
                $cgst_amt = (($net_income * 18) / $sum);
                $igst = $cgst_amt;
                $cgst = 0;
                $sgst = 0;
                $gstround = (int)($igst);
                $final_round_off = number_format($gstround - $igst, 2);
            }else  if($invoice_type == 2){
                $cgst_amt = 0;
                $igst = 0;
                $cgst = 0;
                $sgst = 0;
                $gstround = (int)($igst);
                $final_round_off = number_format($gstround - $igst, 2);
            }
            $data = array('outstanding' => $outstanding, 'tcs' => $tcs, 'associate_fees' => $associate_fees, 'final_net_amount' => $final_net_amount, 'cgst' => $cgst, 'sgst' => $sgst, 'igst' => $igst, 'final_round_off' => $final_round_off);
        } else {
            $data = array('msg' => 'Please Select State',);        
        }
        echo json_encode($data);
    }
    public function cal_client_details() {
        $professional_fees = $this->input->post('professional_fees');
        $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
        $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
        $state = $this->input->post('state');
        $invoice_type = $this->input->post('invoice_type');   
        $total_prof_amt = 0;
        if($invoice_type==1){
                if (!empty($professional_fees)) {
                    $professional_fees = $professional_fees;
                } else {
                    $professional_fees = 0;
                }
                if (!empty($drafting_proceeding_fees)) {
                    $drafting_proceeding_fees = $drafting_proceeding_fees;
                } else {
                    $drafting_proceeding_fees = 0;
                }
                if (!empty($drafting_proceeding_professional_fees)) {
                    $drafting_proceeding_professional_fees = $drafting_proceeding_professional_fees;
                } else {
                    $drafting_proceeding_professional_fees = 0;
                }
        }
        //if state Maharastra
        if ($state == 22) {
             if($invoice_type==1){
                    $total_prof_amt = $professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
                    $sum = 100;
                    $cgst_amt = (($total_prof_amt * 18) / $sum);
                    $cgst = $cgst_amt / 2;
                    $sgst = $cgst;
                    $igst = 0;
                    $gstround = (int)($cgst + $sgst);
                    $final_round_off = number_format($gstround - $cgst - $sgst, 2);
            }else{
                    $total_prof_amt = $professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
                    $cgst_amt = 0;
                    $cgst = 0;
                    $sgst = 0;
                    $igst = 0;
                    $gstround = 0;
                    $final_round_off = 0;
            }
            $data = array('total_prof_amt' => $total_prof_amt, 'cgst' => $cgst, 'sgst' => $sgst, 'igst' => $igst, 'final_round_off' => $final_round_off);
        } else if ($state != 22) {
            if($invoice_type==1){
                $total_prof_amt = $professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
                $data['total_prof_amt'] = $total_prof_amt;
                $sum = 100;
                $cgst_amt = (($total_prof_amt * 18) / $sum);
                $igst = $cgst_amt;
                $cgst = 0;
                $sgst = 0;
                $gstround = (int)($igst);
                $final_round_off = number_format($gstround - $igst, 2);
            }else{
                    $total_prof_amt = $professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
                    $cgst_amt = 0;
                    $cgst = 0;
                    $sgst = 0;
                    $igst = 0;
                    $gstround = 0;
                    $final_round_off = 0;
            }
            $data = array('total_prof_amt' => $total_prof_amt, 'cgst' => $cgst, 'sgst' => $sgst, 'igst' => $igst, 'final_round_off' => $final_round_off);
        } else {
            $data = array('msg' => 'Please Select State',);
        }
        echo json_encode($data);
    }
     private function set_upload_options() {
        $config = array();
        $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '10000000';
        $config['overwrite'] = FALSE;
        return $config;
    }
    public function save_deal() {
        $this->form_validation->set_rules('sale_date', 'Sale Date', 'trim|required', array('required' => 'This field is required'));
        // $this->form_validation->set_rules('services[]', 'Services', 'trim|required',array('required'=>'This field is required'));
        // $this->form_validation->set_rules('sub_services[]', 'Sub Services', 'trim|required',array('required'=>'This field is required'));
        // $this->form_validation->set_rules('document_list[]', 'Document List', 'trim|required',array('required'=>'This field is required'));
        // //$this->form_validation->set_rules('image_files[]', 'Image File', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('deal_id', 'Deal Id', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('invoice_no', 'Invoice No', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('primary_caller', 'Primary Caller', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('secondary_caller', 'Secondary Caller', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('legal_remarks', 'Legal Remark', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('accounts_remarks', 'Account Remark', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required', array('required' => 'This field is required'));
        //$this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required|is_unique[sales.brand_name]',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('class_name', 'Class Name', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('client_name', 'Client Name', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('mobile_1', 'Mobile 1', 'trim|required|numeric', array('required' => 'This field is required'));
        //$this->form_validation->set_rules('mobile_2', 'Mobile 2', 'trim|required|numeric',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('alternate_number', 'Alternate Number', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|encode_php_tags', array('required' => 'This field is required'));
        //$this->form_validation->set_rules('email_address1', 'Alternate Address', 'trim|required|valid_email|encode_php_tags',array('required'=>'This field is required'));
        $this->form_validation->set_rules('gst_no', 'GST No.', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('street', 'Street', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('city', 'City', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('state', 'State', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('fk_pincode', 'Pincode', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('deal_amount', 'Deal Amount', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('amount_received', 'Amount Received', 'trim|required', array('required' => 'This field is required'));
        // $this->form_validation->set_rules('outstanding', 'Outstanding', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('tcs', 'TCS', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('govt_fees', 'GOVT Fees', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('associate_fees', 'Associate Fees', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('net_income', 'Net Income', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('gst_amount', 'GST Amount', 'trim|required|numeric', array('required' => 'This field is required'));
        //$this->form_validation->set_rules('outstanding_followup_date', 'Outstanding Followup Date', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('invoice_type', 'Invoice Type', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('govt_fee', 'GOVT Fee', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('professional_fees', 'Professional Fees', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('drafting_proceeding_fees', 'Drafting Proceeding Fees', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('drafting_proceeding_professional_fees', 'Drafting Proceeding Professional Fees', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('total_professional_amount', 'Total Professional Amount', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('cgst', 'CGST', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('sgst', 'SGST', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('igst', 'IGST', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('round_off', 'Round Off', 'trim|required|numeric', array('required' => 'This field is required'));
        $this->form_validation->set_rules('invoice_name', 'Invoice Name', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('invoice_status', 'Invoice Status', 'trim|required', array('required' => 'This field is required'));
        //$this->form_validation->set_rules('services', 'Services', 'trim|required',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('sub_services', 'Sub Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required', array('required' => 'This field is required'));
        $this->form_validation->set_rules('industry', 'Industry', 'trim|required', array('required' => 'This field is required'));
        if ($this->form_validation->run() == FALSE) {
            //print_r($_POST);die();
            $response['status'] = 'failure';
            $response['error'] = array('sale_date' => strip_tags(form_error('sale_date')),
            //'services' => strip_tags(form_error('services')),
            //'sub_services' => strip_tags(form_error('sub_services')),
            //'image_files' => strip_tags(form_error('image_files')),
            'deal_id' => strip_tags(form_error('deal_id')), 'invoice_no' => strip_tags(form_error('invoice_no')), 'primary_caller' => strip_tags(form_error('primary_caller')), 'secondary_caller' => strip_tags(form_error('secondary_caller')), 'lead_source' => strip_tags(form_error('lead_source')), 'legal_remarks' => strip_tags(form_error('legal_remarks')), 'accounts_remarks' => strip_tags(form_error('accounts_remarks')), 'company_name' => strip_tags(form_error('company_name')),
            //'class_name' => strip_tags(form_error('class_name')),
            'client_name' => strip_tags(form_error('client_name')), 'mobile_1' => strip_tags(form_error('mobile_1')),
            //'mobile_2' => strip_tags(form_error('mobile_2')),
            //'alternate_number' => strip_tags(form_error('alternate_number')),
            'email_address' => strip_tags(form_error('email_address')),
            //'email_address1' => strip_tags(form_error('email_address1')),
            'gst_no' => strip_tags(form_error('gst_no')), 'street' => strip_tags(form_error('street')), 'city' => strip_tags(form_error('city')), 'state' => strip_tags(form_error('state')), 'fk_pincode' => strip_tags(form_error('fk_pincode')), 'deal_amount' => strip_tags(form_error('deal_amount')), 'amount_received' => strip_tags(form_error('amount_received')), 'outstanding' => strip_tags(form_error('outstanding')), 'tcs' => strip_tags(form_error('tcs')), 'govt_fees' => strip_tags(form_error('govt_fees')), 'associate_fees' => strip_tags(form_error('associate_fees')), 'net_income' => strip_tags(form_error('net_income')), 'gst_amount' => strip_tags(form_error('gst_amount')),
            //'outstanding_followup_date' => strip_tags(form_error('outstanding_followup_date')),
            'payment_mode' => strip_tags(form_error('payment_mode')), 'invoice_type' => strip_tags(form_error('invoice_type')),
            //'brand_name' => strip_tags(form_error('brand_name')),
            'govt_fee' => strip_tags(form_error('govt_fee')), 'professional_fees' => strip_tags(form_error('professional_fees')), 'drafting_proceeding_fees' => strip_tags(form_error('drafting_proceeding_fees')), 'drafting_proceeding_professional_fees' => strip_tags(form_error('drafting_proceeding_professional_fees')), 'total_professional_amount' => strip_tags(form_error('total_professional_amount')), 'cgst' => strip_tags(form_error('cgst')), 'sgst' => strip_tags(form_error('sgst')), 'igst' => strip_tags(form_error('igst')), 'round_off' => strip_tags(form_error('round_off')), 'invoice_name' => strip_tags(form_error('invoice_name')), 'invoice_status' => strip_tags(form_error('invoice_status')), 'dob' => strip_tags(form_error('dob')), 'industry' => strip_tags(form_error('industry')),
            //'commission' => strip_tags(form_error('commission')),
            );
        } else {
            $product_gallery = $temp = array();
            $sale_date = $this->input->post('sale_date');
            $client_name = $this->input->post('client_name');
            $deal_id = $this->input->post('deal_id');
            $mobile_1 = $this->input->post('mobile_1');
            $mobile_2 = $this->input->post('mobile_2');
            $alternate_number = $this->input->post('alternate_number');
            $email_address = $this->input->post('email_address');
            $email_address1 = $this->input->post('email_address1');
            $street = $this->input->post('street');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $pincode = $this->input->post('fk_pincode');
            //$commission            = $this->input->post('commission');
            $dob = $this->input->post('dob');
            $industry = $this->input->post('industry');
            $gst_no = $this->input->post('gst_no');
            $clients_id = 0;
            $updated_by = $this->user_id;
            $invoice_number = $this->input->post('invoice_number');
            $lead_source = $this->input->post('lead_source');
            $legal_remarks = $this->input->post('legal_remarks');
            $accounts_remarks = $this->input->post('accounts_remarks');
            $company_name = $this->input->post('company_name');
            //$brand_name         = $this->input->post('brand_name');
            //$class_name         = $this->input->post('class_name');
            $deal_amount = $this->input->post('deal_amount');
            $amount_received = $this->input->post('amount_received');
            $outstanding = $this->input->post('outstanding');
            $tcs = $this->input->post('tcs');
            $govt_fees = $this->input->post('govt_fees');
            $associate_fees = $this->input->post('associate_fees');
            $net_income = $this->input->post('net_income');
            $gst_amount = $this->input->post('gst_amount');
            $outstanding_followup_date = $this->input->post('outstanding_followup_date');
            $primary_caller = $this->input->post('primary_caller');
            $secondary_caller = $this->input->post('secondary_caller');
            $services = $this->input->post('services[]');
            $sub_services = $this->input->post('sub_services[]');
            $document_list = $this->input->post('document_list[]');
            $payment_mode = $this->input->post('payment_mode');
            $invoice_type = $this->input->post('invoice_type');
            $govt_fee = $this->input->post('govt_fee');
            $professional_fees = $this->input->post('professional_fees');
            $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
            $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
            $total_professional_amount = $this->input->post('total_professional_amount');
            $cgst = $this->input->post('cgst');
            $sgst = $this->input->post('sgst');
            $igst = $this->input->post('igst');
            $round_off = $this->input->post('round_off');
            $invoice_name = $this->input->post('invoice_name');
            $invoice_no = $this->input->post('invoice_no');
            $invoice_status = $this->input->post('invoice_status');
            $sub_services = $this->input->post('sub_services');
            $image_files = $this->input->post('image_files[]');
            $sale_date = date('Y-m-d', strtotime($sale_date));
            // echo $this->input->post('outstanding_followup_date');die();
            if ($this->input->post('outstanding_followup_date') != '') {
                $outstanding_followup_date = $this->input->post('outstanding_followup_date');
            } else {
                $outstanding_followup_date = '';
            }
            $pdfpath = base_url() . "uploads/invoice/" . $deal_id . "legal_invoice.pdf";

            $this->load->library('upload');
        $images = array();
        $files1 = $_FILES;
        $img = count($_FILES['image_files']['name']);
     
        for ($i = 0;$i < $img;$i++) {
            $_FILES['userfile']['name'] = $files1['image_files']['name'][$i];
            $_FILES['userfile']['type'] = $files1['image_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files1['image_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files1['image_files']['error'][$i];
            $_FILES['userfile']['size'] = $files1['image_files']['size'][$i];
            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $images[] = $this->upload->data();
        }
        $list = array();
        foreach ($images as $value) {
            array_push($list, 'uploads/images/'.$value['file_name']);
        }
        $screenshotimages = implode(',', $list);
            if (!empty($net_income)) {
                $matches = $net_income + $associate_fees;
            } else {
                $matches = 0;
            }
            //echo $matches;die();
            if ($govt_fees != $govt_fee) {
                $response['status'] = 'failure';
                $response['error'] = array('msg' => "Goverment Fees Dose Not Match !");
            } else if ($total_professional_amount != $matches) {
                $response['status'] = 'failure';
                $response['error'] = array('msg' => "Net Income Does Not Match with the Professional Amount  !");
            } else {
                $curl_data = array(
                    'company_name' => $company_name,
                    //'brand_name'            => $brand_name,
                    //'class_name'            => $class_name,
                    'sale_date' => $sale_date, 
                    'client_name' => $client_name, 
                    'mobile_1' => $mobile_1, 
                    'mobile_2' => $mobile_2, 
                    'alternate_number' => $alternate_number, 
                    'email_address' => $email_address, 
                    'alternate_email' => $email_address1, 
                    'gst_no' => $gst_no, 
                    'deal_id' => $deal_id, 
                    'invoice_number' => $invoice_number, 
                    'primary_caller' => $primary_caller, 
                    'secondary_caller' => $secondary_caller, 
                    'lead_source' => $lead_source, 
                    'street' => $street, 
                    'city' => $city, 
                    'state' => $state, 
                    'pincode' => $pincode,
                     //'commission'            => $commission,
                    'date_of_birth' => $dob, 
                    'industry' => $industry,
                    // 'clients_id'            => $client,
                    //'services'          => $services,
                    //'sub_services'          => $sub_services,
                    'payment_mode' => $payment_mode,
                    //'document_list'          => $document_list,
                    'deal_amount' => $deal_amount, 
                    'amount_received' => $amount_received, 
                    'outstanding' => $outstanding, 
                    'tcs' => $tcs, 
                    'govt_fees' => $govt_fees, 
                    'associate_fees' => $associate_fees, 
                    'net_income' => $net_income, 
                    'gst_amount' => $gst_amount, 
                    'outstanding_followup_date' => $outstanding_followup_date, 
                    'legal_remarks' => $legal_remarks, 
                    'accounts_remarks' => $accounts_remarks, 
                    'invoice_status' => $invoice_status, 
                    'invoice_name' => $invoice_name, 
                    'invoice_number' => $invoice_no, 
                    'invoice_type' => $invoice_type, 
                    'govt_fee' => $govt_fee, 
                    'professional_fees' => $professional_fees, 
                    'drafting_proceeding_fees' => $drafting_proceeding_fees, 
                    'drafting_proceeding_professional_fees' => $drafting_proceeding_professional_fees, 
                    'total_professional_amount' => $total_professional_amount, 
                    'cgst' => $cgst, 
                    'sgst' => $sgst, 
                    'igst' => $igst, 
                    'round_off' => $round_off,
                    // 'clients_id'            => $clients_id,
                    'updated_by' => $updated_by, 
                    'image_url' => $screenshotimages, 
                    'pdfpath' => $pdfpath,
                    'sale_status'=>"Verified"
                );
                // echo '<pre>'; print_r($curl_data); exit;
                $this->db->insert("sales", $curl_data);
                if (!empty($the_insert_id = $this->db->insert_id())) {
                    $services = $this->input->post('services');
                    $class_name = $this->input->post('class_name');
                    if (!empty($services)) {
                        foreach ($services as $services_key => $services_row) {
                            $curl_data = array('sales_id' => $the_insert_id, 'services_id' => $services_row);
                            $this->model->insertData('sales_services', $curl_data);
                            $brand_name[$services_row] = $this->input->post('brand_name_' . $services_row);
                            $class_name[$services_row] = $this->input->post('class_name_' . $services_row);
                        }
                    }
                    if (!empty($brand_name)) {
                        foreach ($brand_name as $brand_name_key => $brand_name_row) {
                            $brands_name = $brand_name_row;
                            $class_name_data = $class_name[$brand_name_key];
                            foreach ($brands_name as $brands_name_key => $brands_name_row) {
                                // echo '<pre>'; print_r($brands_name_key);
                                $insert_brand_data = array('fk_sales_id' => $the_insert_id, 'fk_service_id' => $brand_name_key, 'brand_name' => $brands_name_row,);
                                $brand_last_inserted_id = $this->model->insertData('sale_service_brand', $insert_brand_data);
                                foreach ($class_name_data as $class_name_data_key => $class_name_data_row) {
                                    $class_name_datas = $class_name_data_row;
                                    if ($brands_name_key == $class_name_data_key) {
                                        foreach ($class_name_datas as $class_name_datas_key => $class_name_datas_row) {
                                            $insert_class_data = array('fk_sale_id' => $the_insert_id, 'fk_service_id' => $brand_name_key, 'fk_brand_id' => $brand_last_inserted_id, 'class_name' => $class_name_datas_row);
                                            $this->model->insertData('sale_service_class', $insert_class_data);
                                        }
                                    }
                                }
                            }
                        }
                    }
                    if (!empty($sub_services)) {
                        foreach ($sub_services as $sub_services_key => $sub_services_row) {
                            $sub_services = explode('_', $sub_services_row);
                            foreach ($services as $services_key => $services_row) {
                                if ($sub_services[1] == $services_row) {
                                    $this->db->insert("sales_sub_services", array('sales_id' => $the_insert_id, 'services_id' => $services_row, 'sub_services_id' => $sub_services[0]));
                                }
                            }
                        }
                    }
                    $response['status'] = 'success';
                    $response['error'] = array('msg' => "Sale Report Inserted Successfully !");
                } else {
                    $response['status'] = 'failure';
                    $response['error'] = array('msg' => "Sale Report Inserted UnSuccessfully !");
                }
            }
        }
        //print_r($response);die();
        echo json_encode($response);
    }
    public function get_sub_services() {
        // check request is post
        if (!$this->input->is_ajax_request()) {
            echo (json_encode(array('message' => '<span class="text-danger">Request fail...</span>', 'status' => false)));
            exit();
        }
        /*$this->form_validation->set_rules('selected_services', 'Selected Services', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">No Services Selected, this is required field...</span>',
                'status' => false
            )));
            exit();
        }*/
        if (!is_array($this->input->post('selected_services'))) {
            echo (json_encode(array('message' => '<span class="text-danger">No Services Selected, please select at least one service...</span>', 'status' => false)));
            exit();
        }
        $string_services = "";
        $selected_services = $this->input->post('selected_services');
        foreach ($selected_services as $serv) $string_services.= "'{$serv}',";
        $string_services = rtrim($string_services, ',');
        // FETCH: get all sub_services based on services selections by user
        $get_sub_services = $this->db->query("SELECT id,name from sub_services where service_id in ({$string_services})")->result_array();
        if ($get_sub_services) {
            echo (json_encode(array('message' => '<span class="text-success">Sub-Subservices successfully build based on Services selections...</span>',
            // 'result' => json_encode(serialize($get_sub_services)),
            'result' => $get_sub_services, 'status' => true)));
            exit();
        } else {
            echo (json_encode(array('message' => '<span class="text-danger">No Sub-Services found for all of the selected services...</span>', 'status' => false)));
            exit();
        }
    }
    public function getselectedservices_new() {
        $data = array();
        $html = "";
        $service_id = $this->input->post('service_id');
        $service_details = $this->model->selectWhereData('services', array('id' => $service_id, 'status' => '1'), array('id', 'name', 'brand_name', 'class_name'));
        $query = $this->model->selectWhereData('sub_services', array('service_id' => $service_id, 'status' => '1'), array('id', 'name', 'service_id'), false);
        if (!empty($query)) {
            $check = array_merge($data, $query);
        }
        if (!empty($check)) {
            foreach ($check as $key => $bdd) {
                $html.= "<option value='" . $bdd['id'] . '_' . $bdd['service_id'] . "'>" . $bdd['name'] . "</option>";
            }
        }
        $data1['service_details'] = $service_details;
        if (!empty($html)) {
            $data1['html'] = $html;
        }
        echo json_encode($data1);
    }
    public function get_background_data() {
        // check request is post
        if (!$this->input->is_ajax_request()) {
            echo (json_encode(array('message' => '<span class="text-danger">Request fail...</span>', 'status' => false)));
            exit();
        }
        // FETCH: get all users to show in primary caller 1 & 2
        $get_all_users = $this->db->query("SELECT user_id,username from users order by username asc")->result_array();
        if ($get_all_users) {
            echo (json_encode(array('message' => '<span class="text-success">Primary Caller fetched, please selct only one user...</span>', 'result' => $get_all_users, 'status' => true)));
            exit();
        } else {
            echo (json_encode(array('message' => '<span class="text-danger">Sorry!, no Users found!...</span>', 'status' => false)));
            exit();
        }
    }
      public function edit_sales()
    {
        $id = base64_decode($_GET['id']);
        $this->load->model('supermodel');
        $data['services_list'] = $this->model->getData('services', array('status' => '1'));

        $data['sales_data'] = $this->supermodel->edit_sales_data($id);
        $data['sale_service'] = $this->supermodel->get_sale_service($id);
        if(!empty($data['sale_service']['services_id'])){
            $sale_service_id =  explode(',',$data['sale_service']['services_id']);
            foreach ($sale_service_id as $sale_service_id_key => $sale_service_id_row) {
                $sub_services_list[] = $this->model->selectWhereData('sub_services', array('status' => '1','service_id'=>$sale_service_id_row),array('id','name','service_id'),false);
            }
              $data['sub_services_list'] = $sub_services_list;
        }
        
      
        $data['sale_sub_service'] = $this->supermodel->get_sale_sub_service($id);      
        $sale_service_brand = $this->model->selectWhereData('sale_service_brand',array('fk_sales_id'=>$id),array('*'),false);
        if(!empty($sale_service_brand)){
        foreach ($sale_service_brand as $sale_service_brand_key => $sale_service_brand_row) {
                    $sale_service_class = $this->model->selectWhereData('sale_service_class',array('fk_sale_id'=>$id,'fk_brand_id'=>$sale_service_brand_row['id'],),array('*'),false);
                    if(!empty($sale_service_class)){
                         foreach (@$sale_service_class as $sale_service_class_key => $sale_service_class_row) {
                            if($sale_service_brand_row['id']==$sale_service_class_row['fk_brand_id']){
                                $sale_service_brand[$sale_service_brand_key]['class_name'][] = $sale_service_class_row['class_name'];
                                $sale_service_brand[$sale_service_brand_key]['class_name_id'][] = $sale_service_class_row['id'];
                                $sale_service_brand[$sale_service_brand_key]['sale_service_class']  = implode(",",$sale_service_brand[$sale_service_brand_key]['class_name']);
                                $sale_service_brand[$sale_service_brand_key]['sale_service_class_name_id']  = implode(",",$sale_service_brand[$sale_service_brand_key]['class_name_id']);
                            }            
                        }  
                    }                        
             }  
         }
        $data['sale_service_brand'] = $sale_service_brand;
        $data['state'] = $this->model->getData('tbl_states');
                $data['city'] = $this->model->selectWhereData('tbl_cities',array('state_id'=>$data['sales_data']['state']),array('*'),false);
        $data['pincode'] = $this->model->selectWhereData('tbl_pincode',array('fk_city_id'=>$data['sales_data']['city']),array('*'),false);
        $data['customer_executive']  = $this->model->selectWhereData('customer_executive', array('status' => '1'),array('id','name'),false);
        $data['payment_mode'] = $this->model->getData('payment_mode', array('status' => '1'));
        $data['invoice_status'] = $this->model->getData('invoice_status', array('status' => '1'));
        $data['invoice_type'] = $this->model->getData('invoice_type', array('status' => '1'));
        $data['id']=$id;
        $this->load->view('update_sales',$data);
    }
    function alpha_dash_space($fullname) {
        if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function getEditSelectedServices() {
        $data = array();
        $html = "";
        $service_id = $this->input->post('service_id');
        $service_id_1 = explode(",", $service_id);
        foreach ($service_id_1 as $service_id_1_key => $service_id_1_row) {
            $service_details[$service_id_1_row] = $this->model->selectWhereData('services', array('id' => $service_id_1_row, 'status' => '1'), array('id', 'name', 'brand_name', 'class_name'));
            $sub_service_details[$service_id_1_row] = $this->model->selectWhereData('sub_services', array('service_id' => $service_id_1_row, 'status' => '1'), array('id', 'name', 'service_id'), false);
        }
        $response['status'] = 'success';
        $response['service_id'] = $service_id_1;
        $response['service_details'] = $service_details;
        $response['sub_service_details'] = $sub_service_details;
        echo json_encode($response);
    }
    public function update_sales_deal()
    {
      $id = $this->input->post('id');
      $sale_date = $this->input->post('sale_date');
      $client_name = $this->input->post('client_name');
      $deal_id = $this->input->post('deal_id');
      $mobile_1 = $this->input->post('mobile_1');
      $mobile_2 = $this->input->post('mobile_2');
      $alternate_number = $this->input->post('alternate_number');
      $email_address = $this->input->post('email_address');
      $email_address1 = $this->input->post('email_address1');
      $street = $this->input->post('street');
      $state = $this->input->post('state');
      $city = $this->input->post('city');
      $pincode = $this->input->post('pincode');
      $gst_no = $this->input->post('gst_no');
      $dob = $this->input->post('dob');
      $industry = $this->input->post('industry');
      $invoice_no = $this->input->post('invoice_no');
      $lead_source = $this->input->post('lead_source');
      $legal_remarks = $this->input->post('legal_remarks');
      $accounts_remarks = $this->input->post('accounts_remarks');
      $company_name = $this->input->post('company_name');
      $deal_amount = $this->input->post('deal_amount');
      $amount_received = $this->input->post('amount_received');
      $outstanding = $this->input->post('outstanding');
      $tcs = $this->input->post('tcs');
      $govt_fees = $this->input->post('govt_fees');
      $associate_fees = $this->input->post('associate_fees');
      $net_income = $this->input->post('net_income');
      $gst_amount = $this->input->post('gst_amount');
      $outstanding_followup_date = $this->input->post('outstanding_followup_date');
      $primary_caller = $this->input->post('primary_caller');
      $secondary_caller = $this->input->post('secondary_caller');
      $services = $this->input->post('services');
      $payment_mode = $this->input->post('payment_mode');
      $invoice_type = $this->input->post('invoice_type');
      $invoice_status = $this->input->post('invoice_status');
      $invoice_name = $this->input->post('invoice_name');
      $govt_fee = $this->input->post('govt_fee');
      $professional_fees = $this->input->post('professional_fees');
      $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
      $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
      $total_professional_amount = $this->input->post('total_professional_amount');
      $cgst = $this->input->post('cgst');
      $sgst = $this->input->post('sgst');
      $igst = $this->input->post('igst');
      $round_off = $this->input->post('round_off');
      $sub_services = $this->input->post('sub_services');
      $sales_sub_services_id = $this->input->post('sales_sub_services_id');
      $sale_service_id = $this->input->post('sale_service_id');  
      $last_inserted_image = $this->input->post('last_inserted_image');
        // echo '<pre>'; print_r($_POST); exit;
        $this->form_validation->set_rules('sale_date', 'Sales', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('client_name', 'Client Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('deal_id', 'Deal Id', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('mobile_1', 'Mobile No. 1', 'required|trim|numeric|exact_length[10]', array(
                'required' => 'You must provide a %s',
                'numeric' => 'Contact Number should be 10 digit number',
                'exact_length' => 'Contact Number should be 10 digit number',
            ));
        $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('street', 'Street', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('state', 'State', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('city', 'City', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('gst_no', 'GST No', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('industry', 'Industry', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_no', 'Invoice Number', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('legal_remarks', 'Legal Remark', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('accounts_remarks', 'Account Remark', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('deal_amount', 'Deal Amount', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('amount_received', 'Amount Received', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('outstanding', 'Outstanding', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('tcs', 'TCS', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('govt_fees', 'Govt. Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('associate_fees', 'Associate fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('net_income', 'Net Income', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('gst_amount', 'GST Amount', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('outstanding_followup_date', 'Outstanding followup date', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('primary_caller', 'Primary Caller', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('secondary_caller', 'Secondary Caller', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_type', 'Invoice Type', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_status', 'Invoice Status', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_name', 'Invoice Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('govt_fee', 'GOVT Fee', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('professional_fees', 'Professional Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('drafting_proceeding_fees', 'Drafting / Proceeding Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('drafting_proceeding_professional_fees', 'Drafting / Proceeding / Professional Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('total_professional_amount', 'Total Professional Amount', 'required|trim', array('required' => 'You must provide a %s',));

        if($state==22){
            $this->form_validation->set_rules('cgst', 'CGST', 'required|trim', array('required' => 'You must provide a %s',));
            $this->form_validation->set_rules('sgst', 'SGST', 'required|trim', array('required' => 'You must provide a %s',));
            $this->form_validation->set_rules('igst', 'IGST', 'trim', array('required' => 'You must provide a %s',));
        }else{
            $this->form_validation->set_rules('cgst', 'CGST', 'trim', array('required' => 'You must provide a %s',));
            $this->form_validation->set_rules('sgst', 'SGST', 'trim', array('required' => 'You must provide a %s',));
            $this->form_validation->set_rules('igst', 'IGST', 'required|trim', array('required' => 'You must provide a %s',));
        }
        $this->form_validation->set_rules('round_off', 'Round Off', 'required|trim', array('required' => 'You must provide a %s',));
        if ($this->form_validation->run() == false) {
            $response['status'] = 'failure';
            $response['error'] = array(
                'sale_date' => strip_tags(form_error('sale_date')),
                'client_name' => strip_tags(form_error('client_name')),
                'deal_id' => strip_tags(form_error('deal_id')),
                'mobile_1' => strip_tags(form_error('mobile_1')),
                'email_address' => strip_tags(form_error('email_address')),
                'street' => strip_tags(form_error('street')),
                'state' => strip_tags(form_error('state')),
                'city' => strip_tags(form_error('city')),
                'pincode' => strip_tags(form_error('pincode')),
                'gst_no' => strip_tags(form_error('gst_no')),
                'dob' => strip_tags(form_error('dob')),
                'industry' => strip_tags(form_error('industry')),
                'invoice_no' => strip_tags(form_error('invoice_no')),
                'lead_source' => strip_tags(form_error('lead_source')),
                'legal_remarks' => strip_tags(form_error('legal_remarks')),
                'accounts_remarks' => strip_tags(form_error('accounts_remarks')),
                'company_name' => strip_tags(form_error('company_name')),
                'deal_amount' => strip_tags(form_error('deal_amount')),
                'amount_received' => strip_tags(form_error('amount_received')),
                'outstanding' => strip_tags(form_error('outstanding')),
                'tcs' => strip_tags(form_error('tcs')),
                'govt_fees' => strip_tags(form_error('govt_fees')),
                'associate_fees' => strip_tags(form_error('associate_fees')),
                'net_income' => strip_tags(form_error('net_income')),
                'gst_amount' => strip_tags(form_error('gst_amount')),
                'outstanding_followup_date' => strip_tags(form_error('outstanding_followup_date')),
                'primary_caller' => strip_tags(form_error('primary_caller')),
                'secondary_caller' => strip_tags(form_error('secondary_caller')),
                'payment_mode' => strip_tags(form_error('payment_mode')),
                'invoice_type' => strip_tags(form_error('invoice_type')),
                'invoice_status' => strip_tags(form_error('invoice_status')),
                'invoice_name' => strip_tags(form_error('invoice_name')),
                'govt_fee' => strip_tags(form_error('govt_fee')),
                'professional_fees' => strip_tags(form_error('professional_fees')),
                'drafting_proceeding_fees' => strip_tags(form_error('drafting_proceeding_fees')),
                'drafting_proceeding_professional_fees' => strip_tags(form_error('drafting_proceeding_professional_fees')),
                'total_professional_amount' => strip_tags(form_error('total_professional_amount')),
                // 'cgst' => strip_tags(form_error('cgst')),
                // 'sgst' => strip_tags(form_error('sgst')),
                // 'igst' => strip_tags(form_error('igst')),
                'round_off' => strip_tags(form_error('round_off')),  
            );
        }else{
            $this->load->library('upload');
        $images = array();
        $files1 = $_FILES;
        $img = count($_FILES['image_files']['name']);
     
        for ($i = 0;$i < $img;$i++) {
            $_FILES['userfile']['name'] = $files1['image_files']['name'][$i];
            $_FILES['userfile']['type'] = $files1['image_files']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files1['image_files']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files1['image_files']['error'][$i];
            $_FILES['userfile']['size'] = $files1['image_files']['size'][$i];
            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $images[] = $this->upload->data();
        }
        $list = array();
        foreach ($images as $value) {
            array_push($list, 'uploads/images/'.$value['file_name']);
        }
        $screenshotimages = implode(',',$list);
            $curl_data = array(
                    'sale_date'=>$sale_date,
                    'client_name'=>$client_name,
                    'deal_id'=> $deal_id,
                    'mobile_1'=> $mobile_1,
                    'mobile_2'=> $mobile_2,
                    'alternate_number'=> $alternate_number,
                    'email_address'=> $email_address,
                    'alternate_email'=> $email_address1,
                    'street'=> $street,
                    'state'=> $state,
                    'city'=> $city,
                    'pincode'=> $pincode,
                    'gst_no'=>$gst_no,
                    'date_of_birth'=>$dob,
                    'industry'=>$industry,
                    'invoice_number'=>$invoice_no,
                    'lead_source'=>$lead_source,
                    'legal_remarks'=>$legal_remarks,
                    'accounts_remarks'=>$accounts_remarks,
                    'company_name'=>$company_name,
                    'deal_amount'=>$deal_amount,
                    'amount_received'=>$amount_received,
                    'outstanding'=>$outstanding,
                    'tcs'=>$tcs,
                    'govt_fees'=>$govt_fees,
                    'associate_fees'=>$associate_fees,
                    'net_income'=>$net_income,
                    'gst_amount'=>$gst_amount,
                    'outstanding_followup_date'=>$outstanding_followup_date,
                    'primary_caller'=>$primary_caller,
                    'secondary_caller'=>$secondary_caller,
                    'payment_mode'=>$payment_mode,
                    'invoice_type'=>$invoice_type,
                    'invoice_status'=>$invoice_status,
                    'invoice_name'=>$invoice_name,
                    'govt_fee'=>$govt_fee,
                    'professional_fees'=>$professional_fees,
                    'drafting_proceeding_fees'=>$drafting_proceeding_fees,
                    'drafting_proceeding_professional_fees'=>$drafting_proceeding_professional_fees,
                    'total_professional_amount'=>$total_professional_amount,
                    'cgst'=>$cgst,
                    'sgst'=>$sgst,
                    'igst'=>$igst,
                    'round_off'=>$round_off,
                    'image_url'=>$last_inserted_image.",".$screenshotimages
                );
               $this->model->updateData('sales',$curl_data,array('id'=>$id));
               $exit_service = $this->model->selectWhereData('sales_services',array('sales_id'=>$id),array('services_id','id'),false);
               $exit_sub_service = $this->model->selectWhereData('sales_sub_services',array('sales_id'=>$id),array('sub_services_id','id'),false);

                if(empty($services)){
                            $this->model->deleteData('sales_services',array('sales_id'=>$id));                 
                            $this->model->deleteData('sales_sub_services',array('sales_id'=>$id,));                 
                            $this->model->deleteData('sale_service_brand',array('fk_sales_id'=>$id,));                 
                            $this->model->deleteData('sale_service_class',array('fk_sale_id'=>$id,));                 
               }
               if(!empty($exit_service)){
                    foreach ($exit_service as $exit_service_key => $exit_service_row) {
                        $exit_service[$exit_service_key] =$exit_service_row['services_id'];
                    }
               }     
               if(!empty($exit_sub_service)){
                    foreach ($exit_sub_service as $exit_sub_service_key => $exit_sub_service_row) {
                      $exit_sub_service[$exit_sub_service_key] =$exit_sub_service_row['sub_services_id'];   
                   }
               }          
               if(empty($exit_service)){
                    $delete_sale_service =[];    
                } else {
                     if(!empty($services)){
                            $delete_sale_service = array_diff($exit_service,$services);
                            $insert_sale_service = array_diff($services,$exit_service);
                        }
                }
                if(!empty($sale_service_id)){
                    $sale_service_id = explode(",",$sale_service_id);
                }
                if(!empty($delete_sale_service)){
                        foreach($delete_sale_service as $delete_sale_service_key =>$delete_sale_service_row)
                        {   
                            $this->model->deleteData('sales_services',array('sales_id'=>$id,'services_id'=>$delete_sale_service_row,'id'=>$sale_service_id[$delete_sale_service_key]));                 
                            $this->model->deleteData('sales_sub_services',array('sales_id'=>$id,'services_id'=>$delete_sale_service_row));                 
                            $this->model->deleteData('sale_service_brand',array('fk_sales_id'=>$id,'fk_service_id'=>$delete_sale_service_row));                 
                            $this->model->deleteData('sale_service_class',array('fk_sale_id'=>$id,'fk_service_id'=>$delete_sale_service_row));                        
                        }
                }
                if(!empty($insert_sale_service)){
                        foreach($insert_sale_service as $insert_sale_service_key =>$insert_sale_service_row)
                        {   
                            $insert_service_details= array(
                                'sales_id'=>$id,
                                'services_id'=> $insert_sale_service_row
                            );
                            $this->model->insertData('sales_services',$insert_service_details);
                        }
                }else{
                     if(!empty($services)){
                        foreach ($services as $services_key => $services_row) {
                            if($exit_service[$services_key] != $services_row){
                                $insert_service_details= array(
                                        'sales_id'=>$id,
                                        'services_id'=> $services_row
                                );
                                $the_insert_id = $this->model->insertData('sales_services',$insert_service_details);                                                 
                            }
                                
                        }
                    }
                } 
                 $sub_service1 = [];
                 $sub_service_id = [];

                if(!empty($sub_services)){                   
                            foreach ($sub_services as $sub_services_key => $sub_services_row) {
                                  $sub_services_data = explode("_",$sub_services_row);
                                   $sub_service1[] = $sub_services_data[0];
                                   $sub_service_id[] = $sub_services_data[1];
                              }
                     } 
               $insert_sub_sale_service ="";
               // if(empty($exit_sub_service)){
               //  echo "in"; die;
                      
                // } else {    
                    if(!empty($exit_sub_service)){          
                      $delete_sub_sale_service = array_diff($exit_sub_service,$sub_service1);
                       $insert_sub_sale_service = array_diff($sub_service1,$exit_sub_service);  
                    } else {
                      $delete_sub_sale_service =[];  
                      $insert_sub_sale_service = $sub_service1;   

                    }
                // }
                if(!empty($sales_sub_services_id)){
                    $sales_sub_services_id = explode(",",$sales_sub_services_id);
                }
                if(!empty($delete_sub_sale_service)){
                        foreach($delete_sub_sale_service as $delete_sub_sale_service_key =>$delete_sub_sale_service_row)
                        {   
                            $this->model->deleteData('sales_sub_services',array('sales_id'=>$id,'sub_services_id'=>$delete_sub_sale_service_row));                 
                        }
                }

                if(!empty($insert_sub_sale_service)){
                        foreach($insert_sub_sale_service as $insert_sub_sale_service_key =>$insert_sub_sale_service_row)
                        {    
                           $service_id_1 = $sub_service_id[$insert_sub_sale_service_key];
                           $insert_sub_service_details= array(
                              'sales_id'=>$id,
                              'services_id'=> $service_id_1,
                              'sub_services_id'=> $insert_sub_sale_service_row
                           );
                           $this->model->insertData('sales_sub_services',$insert_sub_service_details);
                              
                        }
                }
                // else{
                //     if(!empty($sub_services))
                //     {
                //         foreach($sub_services as $sub_services_key =>$sub_services_row){
                //             $sub_services= explode('_',$sub_services_row);
                //             foreach($services as $services_key =>$services_row)
                //             {
                //                     if($sub_services[1]==$services_row)
                //                     {
                                        
                //                         $this->db->insert("sales_sub_services", array(
                //                             'sales_id'=> $id,
                //                             'services_id'=> $services_row,
                //                             'sub_services_id'=> $sub_services[0]
                //                         ));                                   
                //                     }
                //             }
   
                //         }
                //     } 
                // }
              if(!empty($services)){
                    foreach ($services as $services_key => $services_row) { 
                    $brand_name_id = $this->input->post('brand_id_'.$services_row); 
                    if(!empty($brand_name_id)){
                        foreach($brand_name_id as $brand_name_id_key => $brand_name_id_row)
                        {
                                $brand_name = $this->input->post('brand_name_'.$services_row.'_'.$brand_name_id_row);
                                $update_brand_deatils=array(
                                    'brand_name'=> $brand_name[0]
                                );
                                $this->model->updateData('sale_service_brand',$update_brand_deatils,array('id'=>$brand_name_id_row));

                                $brand_name_id1 = $this->input->post('brand_id_'.$services_row.'_'.$brand_name_id_row);                            
                                $class_name = $this->input->post('class_name_'.$services_row.'_'.$brand_name_id_row);                          
                                $class_name_id = $this->input->post('class_name_id_'.$services_row.'_'.$brand_name_id_row);
                                $exist_class_name = $this->model->selectWhereData('sale_service_class',array('fk_brand_id'=>$brand_name_id_row),array('class_name'),false);
                                if(!empty($exist_class_name)){
                                        foreach ($exist_class_name as $exist_class_name_key => $exist_class_name_row) {
                                            $exist_class_name[$exist_class_name_key] =$exist_class_name_row['class_name'];
                                        } 
                                }
                                if(empty($exist_class_name)){
                                    $delete_class_name_details =[];    
                                } else {
                                     if(!empty($class_name)){
                                            $delete_class_name_details = array_diff($exist_class_name,$class_name);
                                        }
                                }
                                if(!empty($delete_class_name_details)){
                                        foreach($delete_class_name_details as $delete_class_name_details_key =>$delete_class_name_details_row)
                                        {   
                                                $this->model->deleteData('sale_service_class',array('fk_brand_id'=>$brand_name_id_row,'class_name'=>$delete_class_name_details_row,'id'=>$class_name_id[$delete_class_name_details_key]));                 
                                        }
                                }
                                foreach ($brand_name_id1 as $brand_name_id1_key => $brand_name_id1_row) {
                                    if(!empty($class_name)){
                                       foreach ($class_name as $class_name_key => $class_name_row) {
                                             if(!empty($exist_class_name)){
                                                $insert_class_name_details = array_diff($class_name,$exist_class_name);
                                             } else {
                                                $insert_class_name_details = $class_name;
                                             }
                                              
                                              if(!empty($insert_class_name_details)){
                                                    if($brand_name_id1_key==$class_name_key){
                                                        foreach($insert_class_name_details as $insert_class_name_details_key =>$insert_class_name_details_row)
                                                        {
                                                            $insert_class_data = array(
                                                                'fk_sale_id' =>$id,
                                                                'fk_service_id'=>$services_row,
                                                                'fk_brand_id'=>$brand_name_id_row,
                                                                'class_name'=>$insert_class_name_details_row
                                                            );                                    
                                                            $this->model->insertData('sale_service_class',$insert_class_data);
                                                        }
                                                    }                                            
                                              }      
                                       }
                                   }
                                }                                            
                        }
                    }
                    $brand_name1 = $this->input->post('brand_name_'.$services_row);
                    $class_name_data = $this->input->post('class_name_'.$services_row);
                    if(!empty($brand_name1)){
                        foreach ($brand_name1 as $brand_name1_key => $brand_name1_row) {
                                  if(!empty($brand_name1_row)){
                                        $insert_brand_data = array(
                                            'fk_sales_id' =>$id,
                                            'fk_service_id'=>$services_row,
                                            'brand_name'=>$brand_name1_row,
                                        );
                                        $brand_last_inserted_id = $this->model->insertData('sale_service_brand',$insert_brand_data);    
                                  }
                                  if(!empty($class_name_data)){
                                    foreach ($class_name_data as $class_name_data_key => $class_name_data_row) {
                                            $class_name_datas = $class_name_data_row;
                                                    if($brand_name1_key == $class_name_data_key){
                                                        foreach ($class_name_datas as $class_name_datas_key => $class_name_datas_row) {
                                                             $insert_class_data = array(
                                                                'fk_sale_id' =>$id,
                                                                'fk_service_id'=>$services_row,
                                                                'fk_brand_id'=>$brand_last_inserted_id,
                                                                'class_name'=>$class_name_datas_row
                                                            );                                                    
                                                            $this->model->insertData('sale_service_class',$insert_class_data);
                                                        }
                                                    }
                                            }
                                  }
                        }
                    }
            }
        }
               
       $response['status']='success';
       $response['error']=array('msg' => "Sale Report Updated Successfully !");
      }
      echo json_encode($response);

    }
}
