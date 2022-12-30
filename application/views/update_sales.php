<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets_admin/datepicker/bootstrap-datepicker.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets_admin/datepicker/datepicker.css">
      <style>
         .chosen-container-single .chosen-single {
         background: 0 0 !important;
         box-shadow: none !important;
         border-radius: 4px;
         height: 3.5rem !important;
         }
         #services_chosen{
         width:100% !important;
         height:30px !important;
         }
         .select2-container {
         padding: 0;
         }
         .tokenizationSelect2{
         width: 300px;
         }
      </style>
      <?php  $this->load->view('header')?>
   </head>
   <body>
      <div class="container-fluid">
         <div class="card-body" style="background-color: ghostwhite;padding: 20px; width: 100% !important;">
            <div class="row">
               <div class="col-md-12">
                  <div class="panel">
                     <div class="panel-heading nopaddingbottom" style="width: 100%">
                        <h4 class="panel-title"><b>Update Sale/Deal Form</b>
                        </h4>
                        <?php echo form_open('Sales/update_sales_deal', array('id' => 'update_sale_deal_form')) ?>
                        <div class="card-body" style="padding: 20px;">
                           <div class="row">
                              <input type="hidden" name="id" id="id" value="<?=$id?>">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Sale Date:<span class="text-danger">*</span></label>
                                    <input type="text" name="sale_date" id="sale_date" value="<?=$sales_data['sale_date'] ?>"
                                       class="form-control">
                                    <span class="error_msg" id="sale_date_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Client Name:<span class="text-danger">*</span></label>
                                    <input type="text" name="client_name" id="client_name"
                                       class="form-control" value="<?=$sales_data['client_name']?>">
                                    <span class="error_msg" id="client_name_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Deal Id:<span class="text-danger">*</span></label>
                                    <input type="text" name="deal_id" id="deal_id"
                                       class="form-control" value="<?=$sales_data['deal_id']?>">
                                    <span class="error_msg" id="deal_id_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Mobile Number 1:<span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_1" id="mobile_1" maxlength="10" class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['mobile_1']?>">
                                    <span class="error_msg" id="mobile_1_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Mobile Number 2:<span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_2" id="mobile_2" maxlength="10"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['mobile_2']?>">
                                    <span class="error_msg" id="mobile_2_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Alternate Number:<span class="text-danger">* </span> <span style="font-size:9px;">(You can add multiple comma seperated numbers)</span></label>
                                    <input type="text" name="alternate_number" id="alternate_number" value="<?=$sales_data['alternate_number']?>"
                                       class="form-control" >
                                    <span class="error_msg" id="alternate_number_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Email Address:<span class="text-danger">*</span></label>
                                    <input type="text" name="email_address" id="email_address"
                                       class="form-control" value="<?=$sales_data['email_address']?>">
                                    <span class="error_msg" id="email_address_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Alternate Email Address:<span class="text-danger">*</span></label>
                                    <input type="text" name="email_address1" id="email_address1"
                                       class="form-control" value="<?=$sales_data['alternate_email']?>" >
                                    <span class="error_msg" id="email_address1_error"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Street:<span class="text-danger">*</span></label>
                                    <input type="text" name="street" id="street"
                                       class="form-control"value="<?=$sales_data['street']?>" >
                                    <span class="error_msg" id="street_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>State:<span class="text-danger">*</span></label>
                                    <select id="state" class="form-control" name="state" title="select services.." data-max-options="1" max-options-text="Only 1 selection is allowed"  onchange="getcity(this.value)">
                                       <option value="">Select State</option>
                                       <?php
                                          if (!empty($state)){
                                          foreach($state as $state_key => $state_row) 
                                          { 
                                             $selected="";
                                             if($state_row['id']== $sales_data['state']){
                                                $selected ="selected";
                                             }else{
                                                $selected ="";
                                             }
                                             ?>
                                       <option value=<?php echo  $state_row['id'] ?> <?=$selected?> ><?php echo  $state_row['name'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <div><span class="error_msg" id="state_error"></span></div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>City:<span class="text-danger">*</span></label>
                                    <select id="city" class="form-control city" name="city" title="select city.." data-max-options="1" max-options-text="Only 1 selection is allowed" onchange="getpincode(this.value)">
                                       <option value=""></option>
                                       <?php
                                          if (!empty($city)){
                                          foreach($city as $city_key => $city_row) 
                                          { 
                                             $selected="";
                                             if($city_row['id']== $sales_data['city']){
                                                $selected ="selected";
                                             }else{
                                                $selected ="";
                                             }
                                             ?>
                                       <option value=<?php echo  $city_row['id'] ?> <?=$selected?> ><?php echo  $city_row['name'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <span class="error_msg" id="city_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Pincode:<span class="text-danger">*</span></label>
                                    <select id="pincode" class="form-control pincode" name="pincode" title="select pincode.." data-max-options="1" max-options-text="Only 1 selection is allowed">
                                       <option value=""></option>
                                       <?php
                                          if (!empty($pincode)){
                                          foreach($pincode as $pincode_key => $pincode_row) 
                                          { 
                                             $selected="";
                                             if($pincode_row['id']== $sales_data['pincode']){
                                                $selected ="selected";
                                             }else{
                                                $selected ="";
                                             }
                                             ?>
                                       <option value=<?php echo  $pincode_row['id'] ?> <?=$selected?> ><?php echo  $pincode_row['pincode'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <span class="error_msg" id="pincode_error"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>GST No.:<span class="text-danger">*</span></label>
                                    <input type="text" name="gst_no" id="gst_no"
                                       class="form-control" value="<?=$sales_data['gst_no']?>">
                                    <span class="error_msg" id="gst_no_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>DOB:<span class="text-danger">*</span></label>
                                    <input type="text" name="dob" id="dob" value="<?=$sales_data['date_of_birth'] ?>"
                                       class="form-control" >
                                    <span class="error_msg" id="dob_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Industry:<span class="text-danger">*</span></label>
                                    <input type="text" name="industry" id="industry" class="form-control" value="<?=$sales_data['industry']?>">
                                    <span class="error_msg" id="industry_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Invoice Number:<span class="text-danger">*</span></label>
                                    <input type="text" name="invoice_no" id="invoice_no"
                                       class="form-control" value="<?=$sales_data['invoice_number'] ?>" >
                                    <span class="error_msg" id="invoice_no_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Lead Source:<span class="text-danger">*</span></label>
                                    <input type="text" name="lead_source" id="lead_source" class="form-control" value="<?=$sales_data['lead_source']?>" >
                                    <span class="error_msg" id="lead_source_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Legal Remark:<span class="text-danger">*</span></label>
                                    <textarea id="legal_remarks" name="legal_remarks" class="form-control" value="<?=$sales_data['legal_remarks']?>"><?=$sales_data['legal_remarks']?></textarea>
                                    <span class="error_msg" id="legal_remarks_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Accounts Remark:<span class="text-danger">*</span></label>
                                    <textarea id="accounts_remarks" name="accounts_remarks" class="form-control" value="<?=$sales_data['accounts_remarks']?>"><?=$sales_data['accounts_remarks']?></textarea>
                                    <span class="error_msg" id="accounts_remarks_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Company name:<span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" id="company_name" class="form-control" value="<?=$sales_data['company_name']?>">
                                    <span class="error_msg" id="company_name_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Deal Amount:<span class="text-danger">*</span></label>
                                    <input type="text" name="deal_amount"
                                       id="deal_amount" class="form-control cal_outstanding" onkeypress="return isNumber(event)" value="<?=$sales_data['deal_amount']?>">
                                    <span class="error_msg" id="deal_amount_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Amount received:<span class="text-danger">*</span></label>
                                    <input type="text" name="amount_received" id="amount_received"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['amount_received']?>">
                                    <span class="error_msg" id="amount_received_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Outstanding:<span class="text-danger">*</span></label>
                                    <input type="text" name="outstanding" id="outstanding"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['outstanding']?>">
                                    <span class="error_msg" id="outstanding_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>TCS:<span class="text-danger">*</span></label>
                                    <input type="text" name="tcs" id="tcs"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['tcs']?>">
                                    <span class="error_msg" id="tcs_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Govt fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="govt_fees" id="govt_fees" class="form-control cal_outstanding" onkeypress="return isNumber(event)" value="<?=$sales_data['govt_fees']?>">
                                    <span class="error_msg" id="govt_fees_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Associate fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="associate_fees" id="associate_fees"
                                       class="form-control cal_outstanding assoc_fee" onkeypress="return isNumber(event)" value="<?=$sales_data['associate_fees']?>">
                                    <span class="error_msg" id="associate_fees_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Net income:<span class="text-danger">*</span></label>
                                    <input type="text" name="net_income" id="net_income"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['net_income']?>">
                                    <span class="error_msg" id="net_income_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Gst amount:<span class="text-danger">*</span></label>
                                    <input type="text" name="gst_amount" id="gst_amount" class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['gst_amount']?>">
                                    <span class="error_msg" id="gst_amount_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Outstanding followup date:<span class="text-danger">*</span></label>
                                    <input type="text" name="outstanding_followup_date" id="outstanding_followup_date"
                                       class="form-control"value="<?=$sales_data['outstanding_followup_date']?>">
                                    <span class="error_msg" id="outstanding_followup_date_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Primary Caller:<span class="text-danger">*</span></label>
                                    <select id="primary_caller" class="form-control" name="primary_caller" title="select Primary Caller..."  data-placeholder="Select Primary Caller">
                                       <option value=""></option>
                                       <?php
                                          if (!empty($customer_executive)){
                                            foreach($customer_executive as $customer_executive_key => $customer_executive_row) 
                                            { 
                                                if($customer_executive_row['id']== $sales_data['primary_caller']){
                                                   $selected = "selected";
                                                }else{
                                                   $selected ="";
                                                }
                                             ?>
                                       <option value=<?php echo $customer_executive_row['id'] ?> <?=$selected?>><?php echo $customer_executive_row['name'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <span class="error_msg" id="primary_caller_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Secondary Caller:<span class="text-danger">*</span></label>
                                    <select id="secondary_caller" class="form-control" name="secondary_caller" title="select Secondary Caller..." >
                                       <option value="">Select Secondary Caller</option>
                                       <?php
                                          if (!empty($customer_executive)){
                                            foreach($customer_executive as $customer_executive_key => $customer_executive_row) 
                                            { 
                                             if($customer_executive_row['id']== $sales_data['primary_caller']){
                                                   $selected = "selected";
                                                }else{
                                                   $selected ="";
                                                }
                                                ?>
                                       <option value=<?php echo  $customer_executive_row['id'] ?> <?=$selected?>><?php echo  $customer_executive_row['name'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <span class="error_msg" id="secondary_caller_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <input type="hidden" name="sale_service_id" id="sale_service_id" value="<?=@$sale_service['sales_services_id']?>">
                                    <label>Select Services:<span class="text-danger">*</span></label>
                                    <select id="services" class=" form-control " multiple="" name="services[]"  data-max-options="1" max-options-text="Only 1 selection is allowed" >
                                       <!-- onchange="getservice(this.value)" -->
                                       <option value="">Select Services</option>
                                       <?php $services_id = explode(',',$sale_service['services_id']);
                                          if (!empty($services_list)){
                                             foreach($services_list as $services_list_key => $services_list_row) 
                                             { 
                                                if(in_array($services_list_row ['id'],$services_id)){ 
                                                   $selected = "selected";
                                                }else{
                                                   $selected ="";
                                                }
                                          
                                                ?>
                                       <option value=<?php echo  $services_list_row['id'] ?> <?=$selected?>><?php echo  $services_list_row['name'] ?></option>
                                       <?php } }?>
                                    </select>
                                    <span class="error_msg" id="services_error"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <input type="hidden" name="sales_sub_services_id" id="sales_sub_services_id" value="<?=@$sale_sub_service['sales_sub_services_id']?>">
                                    <label>Select Sub Services:<span class="text-danger">*</span></label>
                                    <select id="sub_services" class="form-control "  multiple="multiple" name="sub_services[]"  >
                                       <?php $sub_services_id = explode(',',$sale_sub_service['sub_services_id']);
                                          if (!empty($sub_services_list)){
                                           
                                             foreach($sub_services_list as $sub_services_list_key => $sub_services_list_row){     
                                             if(!empty($sub_services_list_row)){ 
                                                foreach ($sub_services_list_row as $sub_services_list_row_key => $sub_services_list_row_row) {  
                                                   if(in_array($sub_services_list_row_row['id'],$sub_services_id)){ 
                                                         $selected = "selected";
                                                      }else{
                                                         $selected ="";
                                                      }
                                                ?>
                                       <option value=<?= $sub_services_list_row_row['id'].'_'.$sub_services_list_row_row['service_id'] ?> <?=$selected?>><?= $sub_services_list_row_row['name'] ?></option>
                                       <?php }}} }?>
                                    </select>
                                    <span class="error_msg" id="sub_services_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Upload ScreenShot</label>
                                    <input type="file" name="image_files[]"  id="image_name" class="form-control" multiple>
                                 </div>
                                 <span class="error_msg" id="image_files_error"></span>
                                  <input type="hidden" class="form-control" name="last_inserted_image" id="last_inserted_image" value="<?=$sales_data['image_url']?>">
                              </div>
                           </div>
                           <hr>
                           <?php
                              $html = "";
                              if(!empty($sale_service_brand)){
                              foreach($sale_service_brand as $sale_service_brand_key => $sale_service_brand_row){     
                                 $class_name_key = 0;  
                                 $key = array_search('8', array_column($services_list, 'id')); 
                                 $service_array_ref_key = array_search($sale_service_brand_row['fk_service_id'], array_column($services_list, 'id'));
                                 $related_service_info = $services_list[$service_array_ref_key];
                                 ?>      
                           <div class="row">
                              <div class="col-md-6 show_brand_content_<?=$sale_service_brand_row['fk_service_id']?>" id="show_brand_content_<?=$sale_service_brand_row['fk_service_id']?>">
                                 <div class="form-group">
                                    <label>Enter Brand Name
                                    <span class="text-danger">* 
                                    </span></label>
                                    <div>
                                       <input type="text" class="form-control tokenizer" style="width: 100% !important;" name="brand_name_<?=$sale_service_brand_row['fk_service_id']?>_<?=$sale_service_brand_row['id']?>[]" id="brand_name_<?=$sale_service_brand_key?>" value="<?=$sale_service_brand_row['brand_name']?>" onchange="get_brand_name(this.value)"> 
                                       <input type="hidden" class="form-control" name="brand_id_<?=$sale_service_brand_row['fk_service_id']?>_<?=$sale_service_brand_row['id']?>[]" id="brand_id_<?=$sale_service_brand_key?>" value="<?=$sale_service_brand_row['id']?>" >
                                       <input type="hidden" class="form-control" name="brand_id_<?=$sale_service_brand_row['fk_service_id']?>[]" id="brand_id_<?=$sale_service_brand_key?>" value="<?=$sale_service_brand_row['id']?>">
                                    </div>
                                 </div>
                              </div>
                              <?php if($related_service_info['class_name']=='Yes'){ 

                                 ?>
                              <div class="col-md-6 show_company_content_<?=$sale_service_brand_row['fk_service_id']?>" id="show_company_content_<?=$sale_service_brand_key?>">
                                 <div class="form-group">
                                    <label>Enter Class Name<span class="text-danger">* </span></label>
                                    <select class="form-control tokenizer class_name" multiple="multiple" name="class_name_<?=$sale_service_brand_row['fk_service_id']?>_<?=$sale_service_brand_row['id']?>[]" id="class_name_<?=$sale_service_brand_key?>" onchange="get_class_name(this.value)">
                                       <?php foreach($sale_service_brand_row['class_name'] as $class_name_key => $class_name_row){ 

                                          ?>
                                       <option value="<?=@$class_name_row?>" selected><?=@$class_name_row?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <?php }
                                 if(!empty($sale_service_brand_row['class_name_id'])){
                                   foreach($sale_service_brand_row['class_name_id'] as $class_name_id_key => $class_name_id_row){ ?>
                              <input type="hidden" id="class_name_id_<?=$sale_service_brand_key?>" name="class_name_id_<?=$sale_service_brand_row['fk_service_id']?>_<?=$sale_service_brand_row['id']?>[]" value="<?=$class_name_id_row?>">
                              <?php  } } ?> 
                           </div>
                           <?php }} ?>
                           <hr>
                           <div class="row" id="brands_display">
                           </div>
                           <hr>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Payment mode:<span class="text-danger">*</span></label>
                                    <select id="payment_mode" class="selectpicker form-control" name="payment_mode" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                                       <option value="">Select Payment Mode:</option>
                                       <?php
                                          foreach($payment_mode as $payment_mode_key => $payment_mode_row) 
                                          {
                                                $selected="";
                                                if($payment_mode_row['id']== $sales_data['payment_mode']){
                                                   $selected ="selected";
                                                }else{
                                                   $selected ="";
                                                }
                                             ?>
                                       <option value=<?php echo  $payment_mode_row['id'] ?> <?=$selected?>><?php echo  $payment_mode_row['name'] ?></option>
                                       <?php } ?>
                                    </select>
                                    <span class="error_msg" id="payment_mode_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Invoice Type:<span class="text-danger">*</span></label>
                                    <select id="invoice_type" class="selectpicker form-control" name="invoice_type" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                                       <option value="">Select Invoice Type</option>
                                       <?php
                                          foreach($invoice_type as $invoice_type_key => $invoice_type_row) 
                                          {  
                                                $selected="";
                                                if($invoice_type_row['id']== $sales_data['invoice_type']){
                                                   $selected ="selected";
                                                }else{
                                                   $selected ="";
                                                }
                                                ?>
                                       <option value=<?php echo  $invoice_type_row['id'] ?> <?=$selected?>><?php echo  $invoice_type_row['name'] ?></option>
                                       <?php } ?>
                                    </select>
                                    <span class="error_msg" id="invoice_type_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Invoice status:<span class="text-danger">*</span></label>
                                    <select id="invoice_status" class="selectpicker form-control" name="invoice_status" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                                       <option value="">Select Invoice status</option>
                                       <?php
                                          foreach($invoice_status as $invoice_status_key => $invoice_status_row) 
                                          {
                                                $selected="";
                                                if($invoice_status_row['id']== $sales_data['invoice_status']){
                                                   $selected ="selected";
                                                }else{
                                                   $selected ="";
                                                }
                                             ?>
                                       <option value=<?php echo  $invoice_status_row['id'] ?> <?=$selected?> ><?php echo  $invoice_status_row['name'] ?></option>
                                       <?php } ?>
                                    </select>
                                    <span class="error_msg" id="invoice_status_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Invoice Name:<span class="text-danger">*</span></label>
                                    <input type="text" name="invoice_name" id="invoice_name" class="form-control" value="<?=$sales_data['invoice_name']?>">
                                    <span class="error_msg" id="invoice_name_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Govt Fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="govt_fee" id="govt_fee" value="<?=$sales_data['govt_fee']?>"
                                       class="form-control" onkeypress="return isNumber(event)">
                                    <span class="error_msg" id="govt_fee_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Professional Fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="professional_fees"
                                       id="professional_fees" class="form-control total_professional_amt"  onkeypress="return isNumber(event)" value="<?=$sales_data['total_professional_amount']?>">
                                    <span class="error_msg" id="professional_fees_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Drafting / Proceeding Fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="drafting_proceeding_fees" id="drafting_proceeding_fees"  value="<?=$sales_data['drafting_proceeding_fees']?>"
                                       class="form-control total_professional_amt"  onkeypress="return isNumber(event)">
                                    <span class="error_msg" id="drafting_proceeding_fees_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Drafting / Proceeding / Professional Fees:<span class="text-danger">*</span></label>
                                    <input type="text" name="drafting_proceeding_professional_fees" id="drafting_proceeding_professional_fees" 
                                       class="form-control total_professional_amt"  onkeypress="return isNumber(event)"  value="<?=$sales_data['drafting_proceeding_professional_fees']?>">
                                    <span class="error_msg" id="drafting_proceeding_professional_fees_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Total Professional Amount:<span class="text-danger">*</span></label>
                                    <input type="text" name="total_professional_amount"  id="total_professional_amount" value="<?=$sales_data['total_professional_amount']?>"
                                       class="form-control" onkeypress="return isNumber(event)" readonly>
                                    <span class="error_msg" id="total_professional_amount_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>CGST 9%:<span class="text-danger">*</span></label>
                                    <input type="text" name="cgst" id="cgst"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['cgst']?>">
                                    <span class="error_msg" id="cgst_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>SGST 9%:<span class="text-danger">*</span></label>
                                    <input type="text" name="sgst" id="sgst"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['sgst']?>">
                                    <span class="error_msg" id="sgst_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>IGST 18%:<span class="text-danger">*</span></label>
                                    <input type="text" name="igst" id="igst"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['igst']?>">
                                    <span class="error_msg" id="igst_error"></span>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Round Off:<span class="text-danger">*</span></label>
                                    <input type="text" name="round_off" id="round_off"
                                       class="form-control" onkeypress="return isNumber(event)" value="<?=$sales_data['round_off']?>">
                                    <span class="error_msg" id="round_off_error"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4" >
                              <div class="form-group"  style="margin-top: 35px;">
                                 <input type="submit" name="submit_button" id="submit_button" class="btn btn-primary" value="Save" />
                              </div>
                           </div>
                        </div>
                        <?php echo form_close() ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <?php  $this->load->view('footer'); ?>
      <script type="text/javascript" src="<?php echo base_url();?>assets_admin/datepicker/bootstrap-datepicker.js"></script> 
      <script src="<?= base_url();?>assets_admin/view_js/sales.js"></script>
      <script type="text/javascript">
         $("#sale_date").datepicker({
            dateFormat: 'Y-mm-dd'
         });
         $("#outstanding_followup_date").datepicker({
            dateFormat: 'Y-mm-dd'
         });
         $("#state").select2({
            placeholder: "Select State",
            allowClear: true,
         });
         $("#city").select2({
            placeholder: "Select City",
            allowClear: true,
         });
         $("#pincode").select2({
            placeholder: "Select Pincode",
            allowClear: true,
         });
         $("#services").select2({
            placeholder: " Select Services",
            allowClear: true,
         });
         
         $("#sub_services").select2({
            // placeholder: " Select Sub Services",
            // allowClear: true
         });
         $('#' + 'class_name').select2({
            tags: true,
            tokenSeparators: [',', ' '],
         });
         
         $('.tokenizer').trigger('change.select2');
         
         function getcity(city) {
            $.ajax({
               url: '<?php echo base_url(); ?>Sales/getcity',
               type: 'post',
               dataType: "json",
               data: {
                  city: city
               },
               success: function (data) {
                  $(".city").html(data);
                  $('.city').trigger("chosen:updated");
               }
            });
         }
         
         function getpincode(city) {
            $.ajax({
                              url: bases_url +'Sales/getpincode',
                              type: 'post',
                              dataType: "json",
                              data:{
                              city:city
                              },
                              success: function( data ) { 
                                    if(data!==""){        
                                       var pincode_data = data.pincode_data;
                                       var html = "";
                                        html += '<option value=""></option>';
                                        $.each(pincode_data, function(pincode_data_index, pincode_data_row) {
                                            html += '<option value="' + pincode_data_row.id + '">' + pincode_data_row.pincode + "</option>";
                                        });
                                       $("#pincode").html(html);
                                       $('#pincode').trigger('change.select2');
                                    }else{
                                       $("#pincode").html("");
                                       $("#pincode").trigger('change.select2');               
                                    }
                              }
                        });
         }
         
         function get_brand_name(city) {
            $('#brand_name').each(function (x, v) {
               var brand_list = [];
               var grp = [];
               $(v).find('option:selected').each(function (i, selected) {
                  var brand_name = $(selected).text();
                  brand_list.push($(selected).val());
               });
               grp.push(brand_list)
            });
         }
         
         function get_class_name(city) {
            $('#class_name').each(function (x, v) {
               var class_list = [];
               var grp = [];
               $(v).find('option:selected').each(function (i, selected) {
                  var class_name = $(selected).text();
                  class_list.push($(selected).val());
               });
               grp.push(class_list)
            });
         }
         $(document).ready(function () {
            $('.class_name').select2({
               tags: true,
               tokenSeparators: [',', ' '],
            });
         
            $('.tokenizer').trigger('change.select2');
            var id = $('#id').val();
            var options = document.getElementById('services').selectedOptions;

            var values = Array.from(options).map(({
               value
            }) => value);

            var text = Array.from(options).map(({
               text
            }) => text);
            var count = values.length;
            var fruits = [];
            var fruits_1=''
            if (count > 0) {
               $.each(values, function (key, value) {
                  $('#count' + value + '').val(0);
                  fruits.push(value);
                  fruits_1 = fruits.join(',');
               });
            }
         
            if(fruits_1){
               $.ajax({
                  url: '<?php echo base_url(); ?>Sales/getEditSelectedServices',
                  type: 'post',
                  dataType: "json",
                  data: {
                     service_id: fruits_1
                  },
                  success: function (response) {
                     if(response.status=='success'){
                        var service_id_info = response.service_id;
                        var sub_service_info = response.sub_service_details;
                        var service_details_info = response.service_details;
         
                        var service_html = '';
                        $.each(service_id_info, function (service_id_info_key, service_id_info_row) {
                           var sub_services_option_html='';
                           var sub_service_info_1=sub_service_info[service_id_info_row];
                           if(sub_service_info_1){
                              $.each(sub_service_info_1, function (sub_service_info_1_key, sub_service_info_1_row) {
                                 sub_services_option_html+='<option value="'+sub_service_info_1_row.id+'">'+sub_service_info_1_row.name+'</option>';
                              });
                           }
                           // $("#sub_services").html(sub_services_option_html);
                           // $('#sub_services').trigger('change.select2');
                           var service_html_1='';
                           var service_details_info_1 = service_details_info[service_id_info_row];
                           
                           if (service_details_info_1.brand_name == "Yes") {
                           service_html_1 += '<div class="row"><div class="col-md-2" id="removelabel_' + service_id_info_row + '"><div class="form-group"><label>Service: ' + service_details_info_1.name + '</label></div></div><div class="col-md-4 show_brand_content_'+service_id_info_row+'" id="show_brand_content_' + service_id_info_row + '"><div class="form-group"><label>Enter Brand Name<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer" style="width: 100% !important;" name="brand_name_' + service_id_info_row + '[]" id="brand_name_' + service_id_info_row + '" onchange="get_brand_name(this.value)"></input></div></div></div>';
                           }
                           if(service_details_info_1.class_name == "Yes"){
                              var rdmString = Math.random().toString(36).substr(2, length);
                              service_html_1+='<div class="col-md-4 show_company_content_' + service_id_info_row + '" id="show_company_content_' + service_id_info_row + '"><div class="form-group"><label>Enter Class Name<span class="text-danger">* </span></label><div><select class="form-control tokenizer" multiple="multiple" style="width: 100% !important;" name="class_name_' + service_id_info_row + '[0][]" id="class_name_' + service_id_info_row +'_'+rdmString+'" onchange="get_class_name(this.value)"></select></div></div></div>';
                           }
                           if (service_details_info_1.brand_name == "Yes" || service_details_info_1.class_name == "Yes") {
                              service_html_1 +='<div class="col-md-2"><button id="addRows_' + service_id_info_row + '" type="button" class="btn btn-info edit_sales_add_more" style="height:35px;"><i class="glyphicon glyphicon-plus"></i></button></div></div><input type="hidden" class="form-control"  name="count' + service_id_info_row + '" id="count' + service_id_info_row + '" value="0"></input><div id="new_brands_display_' + service_id_info_row + '"></div><div class="row"></div>';
                           }
                              // </div>
                           $('#brands_display').append(service_html_1);
                           if(service_details_info_1.class_name == "Yes"){
                              $('#' + 'class_name_' + service_id_info_row+'_'+rdmString).select2({
                                 tags: true,
                                 tokenSeparators: [',', ' '],
                              });
                              $('#' + 'class_name_' + service_id_info_row+'_'+rdmString).trigger('change.select2');
                           }
                        });
                     }
                  }
               });
            }
         });
         $(document).on('click', '.edit_sales_add_more', function (e) {
            let service_id_info = $(this).attr('id');
            let service_id_info_1 = service_id_info.split("_");
            let service_id = service_id_info_1[1];
         
            var latest_count = $('#count' + service_id + '').val();
            var new_count = parseInt(latest_count) + 1;
            $.ajax({
                  url: '<?php echo base_url(); ?>Sales/getselectedservices_new',
                  type: 'post',
                  dataType: "json",
                  data: {
                     service_id: service_id
                  },
                  success: function (response) {
                     var html2 = '';
                     var service_id_1 = response.service_details.id;
                     if (response.service_details.brand_name == "Yes") {
                        html2 += '<div class="row"><div id="inputnewrow_' + new_count + '"><div class="col-md-3" id="show_brand_content1_' + new_count + service_id_1 + '"><div class="form-group"><label>Enter Brand Name For ' + response.service_details.name + '<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer1" style="width: 100% !important;" name="brand_name_' + service_id_1 + '[]" id="brand_name1_' + new_count + service_id_1 + '" onchange="get_brand_name(this.value)"></input></div></div></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height:30px;margin-top:5px;">Remove</button>';
                        if(response.service_details.class_name == "Yes"){
                           html2 += '<div class="col-md-3" id="show_company_content1_' + new_count + service_id_1 + '"><div class="form-group"><label>Enter Class Name For ' + response.service_details.name + '<span class="text-danger">* </span></label><div><select class="form-control tokenizer1" multiple="multiple" style="width: 100% !important;" name="class_name_' + service_id_1 + '[' + new_count + '][]" id="class_name1_' + new_count + service_id_1 + '" </select></div></div></div>';
                        }
                        
                        html2 +='</div></div></div>';
                        $('#new_brands_display_'+service_id_1+'').append(html2);
                        if(response.service_details.class_name == "Yes"){
                           $('#'+'class_name1_'+new_count+service_id_1).select2({
                              tags: true,
                              tokenSeparators: [',', ' '],
                           });
                           $('#'+'class_name1_'+new_count+service_id_1).trigger('change.select2');
                        }
                        $('#count'+service_id_1+'').val(new_count);         
                     }
                  }
               });
         });
         
         $(document).on('select2:select', '#services', function (e) {
            var data = e.params.data;
            var service_id = data.id;
            var count = $(this).select2('data').length;
            if (count > 0) {
               $('#count' + service_id + '').val(0);
            }
            $.ajax({
               url: '<?php echo base_url(); ?>Sales/getselectedservices_new',
               type: 'post',
               dataType: "json",
               data: {
                  service_id: service_id
               },
               success: function (response) {
                  if (response.html) {
                     $("#sub_services").html(response.html);
                     $('#sub_services').trigger('change.select2');
                  }
                  var html11 = "";
                  var service_id_1 = response.service_details.id;
                  if (response.service_details.brand_name == "Yes" && response.service_details.class_name == "NA") {
                     html11 += '<div class="row"><div class="col-md-2" id="removelabel_' + service_id_1 + '"><div class="form-group"><label>Service: ' + response.service_details.name + '</label></div></div><div class="col-md-4 show_brand_content_'+service_id_1+'" id="show_brand_content_' + service_id_1 + '"><div class="form-group"><label>Enter Brand Name<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer" " style="width: 100% !important;" name="brand_name_' + service_id_1 + '[]" id="brand_name_' + service_id_1 + '" onchange="get_brand_name(this.value)"></input></div></div></div><div class="col-md-2"><button id="addRows_' + service_id_1 + '" type="button" class="btn btn-info" style="height:35px;"><i class="glyphicon glyphicon-plus"></i></button></div></div><input type="hidden" class="form-control"  name="count' + service_id_1 + '" id="count' + service_id_1 + '" value="0"></input><div id="new_brands_display_' + service_id_1 + '"></div><div class="row"></div></div>';
                  }
         
                  if (response.service_details.class_name == "Yes" && response.service_details.class_name == "Yes") {
                     html11 += '<div class="row"><div class="col-md-2" id="removelabel_' + service_id_1 + '"><div class="form-group"><label>Service: ' + response.service_details.name + '</label></div></div><div class="col-md-4 show_brand_content_'+service_id_1+'" id="show_brand_content_' + service_id_1 + '"><div class="form-group"><label>Enter Brand Name<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer" " style="width: 100% !important;" name="brand_name_' + service_id_1 + '[]" id="brand_name_' + service_id_1 + '" onchange="get_brand_name(this.value)"></input></div></div></div><div class="col-md-4 show_company_content_' + service_id_1 + '" id="show_company_content_' + service_id_1 + '"><div class="form-group"><label>Enter Class Name<span class="text-danger">* </span></label><div><select class="form-control tokenizer " multiple="multiple" style="width: 100% !important;" name="class_name_' + service_id_1 + '[0][]" id="class_name_' + service_id_1 + '" onchange="get_class_name(this.value)"></select></div></div></div><div class="col-md-2"><button id="addRows_' + service_id_1 + '" type="button" class="btn btn-info" style="height:35px;"><i class="glyphicon glyphicon-plus"></i></button></div></div><input type="hidden" class="form-control"  name="count' + service_id_1 + '" id="count' + service_id_1 + '" value="0"></input><div id="new_brands_display_' + service_id_1 + '"></div><div class="row"></div></div>';
                  }
                  $('#brands_display').append(html11);
                  // $('#'+'brand_name_'+service_id_1).select2({
                  //    tags: true,
                  //    tokenSeparators: [',', ' '],
                  // });
                  $('#' + 'class_name_' + service_id_1).select2({
                     tags: true,
                     tokenSeparators: [',', ' '],
                  });
                  $('.tokenizer').trigger('change.select2');
                  $('#addRows_' + service_id_1 + '').click(function () {
                     var latest_count = $('#count' + service_id_1 + '').val();
                     var new_count = parseInt(latest_count) + 1;
                     var html2 = '';
                     if (response.service_details.brand_name == "Yes" && response.service_details.class_name == "NA") {
                        html2 += '<div class="row"><div id="inputnewrow_' + new_count + '"><div class="col-md-3" id="show_brand_content1_' + new_count + service_id_1 + '"><div class="form-group"><label>Enter Brand Name For ' + response.service_details.name + '<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer1" style="width: 100% !important;" name="brand_name_' + service_id_1 + '[]" id="brand_name1_' + new_count + service_id_1 + '" onchange="get_brand_name(this.value)"></input></div></div></div></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height:30px;margin-top:5px;">Remove</button></div></div></div>';
                     }
         
                     if (response.service_details.class_name == "Yes" && response.service_details.class_name == "Yes") {
                        html2 += '<div class="row"><div id="inputnewrow_' + new_count + '"><div class="col-md-3" id="show_brand_content1_' + new_count + service_id_1 + '"><div class="form-group"><label>Enter Brand Name For ' + response.service_details.name + '<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer1" style="width: 100% !important;" name="brand_name_' + service_id_1 + '[]" id="brand_name1_' + new_count + service_id_1 + '" onchange="get_brand_name(this.value)"></input></div></div></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height:30px;margin-top:5px;">Remove</button><div class="col-md-3" id="show_company_content1_' + new_count + service_id_1 + '"><div class="form-group"><label>Enter Class Name For ' + response.service_details.name + '<span class="text-danger">* </span></label><div><select class="form-control tokenizer1" multiple="multiple" style="width: 100% !important;" name="class_name_' + service_id_1 + '[' + new_count + '][]" id="class_name1_' + new_count + service_id_1 + '" </select></div></div></div></div></div></div>';
                     }
                     $('#new_brands_display_' + service_id_1 + '').append(html2);
         
                     // $('#'+'brand_name_'+count1+service_id_1).select2({
                     // tags: true,
                     // tokenSeparators: [',', ' '],
                     // });
                     $('#count' + service_id_1 + '').val(new_count);
                     $('#' + 'class_name1_' + new_count + service_id_1).select2({
                        tags: true,
                        tokenSeparators: [',', ' '],
                     });
         
                     $(document).on('select2:unselect', '#services', function (e) {
                        var data1 = e.params.data;
                        var service_id_1 = data1.id;
                        //   $('#brand_name_'+service_id). select2('destroy');
                        $('#brand_name1_' + new_count + service_id_1).remove();
                        $('#show_brand_content1_' + new_count + service_id_1).remove();
                        $('#show_company_content1_' + new_count + service_id_1).remove();
                        $('#addRows_' + new_count + service_id_1).remove();
                        $('#removeRow').remove();
                     });
                  });
                  $('.tokenizer1').trigger('change.select2');
               }
            });
         });
         
         $(document).on('click', '#removeRow', function () {
            var latest_count = $('#count').val();
            var new_count = parseInt(latest_count) - 1;
            $('#count').val(new_count);
            $(this).closest("div").remove();
         });
         
         $(document).on('select2:unselect', '#services', function (e) {
            var data = e.params.data;
            var service_id = data.id
            $('#brand_name_' + service_id).remove();
            $('.show_brand_content_' + service_id).remove();
            $('.show_company_content_' + service_id).remove();
            $('#removelabel_' + service_id).remove();
            $('#addRows_' + service_id).remove();
             $("#sub_services").html("");
                     $('#sub_services').trigger('change.select2');
         });
                      
      </script>
   </body>
</html>