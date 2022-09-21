public function print_sales1()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');
        $sales_id=base64_decode($_GET['id']);
        $getsalesrecordbyid=$this->supermodel->getsalesrecordbyid($sales_id);
        //print_r($getsalesrecordbyid);die();
        error_reporting(0);
        ini_set('memory_limit', '256M');
        ini_set("pcre.backtrack_limit", "1000000");
        // $this->load->view('admin/stock_pdf_reports');
        $pdfFilePath = FCPATH."uploads/invoice/legal.pdf";
        $pdfFilePaths = base_url()."uploads/invoice/legal'".$data_row['id']."'.pdf";
        $html = $this->load->view('printinvoice/print_sale_page1',array('data' => $getsalesrecordbyid), true);
        $this->load->library('m_pdf');
        $mpdf=new mPDF('utf-8','A4');
        $mpdf->showImageErrors = true;
        // $mpdf->debug = true;
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->AddPage('L', 'A4');  
        $mpdf->WriteHTML($html);        
        //$mpdf->Image(base_url().'assets_admin/images/letterhead.png', 0, 0, 210, 28.5, 'png', '', true, false);
        $mpdf->Output($pdfFilePath,"F");
        $response['path']=$pdfFilePaths; 
        $this->load->view('printinvoice/print_sale_page1');
       
    }

    $invoice = '<span><a href="'.base_url().'Sales/print_sales1?id='.base64_encode($data_row['id']).'">
                <i class="glyphicon glyphicon-pencil invoice_view" aria-hidden="true" 
                 ></i> </a></span>&nbsp;&nbsp;';