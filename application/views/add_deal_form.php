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
<div class="container">
   <div class="card-body" style="background-color: ghostwhite;padding: 20px;">
      <div class="row">
         <div class="col-md-12">
            <div class="panel">
               <div class="panel-heading nopaddingbottom">
                  <h4 class="panel-title"><b>Add Sales/Deals Form</b></h4>
               </div>
               <div class="card-body" style="padding: 20px;">
                  <?php echo form_open('Sales/save_deal', array('id' => 'sale_report_form')) ?>
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Sale Date:<span class="text-danger">*</span></label>
                           <input type="date" name="sale_date" id="sale_date" value="<?php echo date('Y-m-d'); ?>"
                              class="form-control">
                           <span class="error_msg" id="sale_date_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Client Name:<span class="text-danger">*</span></label>
                           <input type="text" name="client_name" id="client_name"
                              class="form-control">
                           <span class="error_msg" id="client_name_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Deal Id:<span class="text-danger">*</span></label>
                           <input type="text" name="deal_id" id="deal_id"
                              class="form-control" >
                           <span class="error_msg" id="deal_id_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Mobile Number 1:<span class="text-danger">*</span></label>
                           <input type="text" name="mobile_1" id="mobile_1" maxlength="10"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="mobile_1_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Mobile Number 2:</label>
                           <input type="text" name="mobile_2" id="mobile_2" maxlength="10"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="mobile_2_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Alternate Number:<span style="font-size:9px;">(You can add multiple comma seperated numbers)</span></label>
                           <input type="text" name="alternate_number" id="alternate_number"
                              class="form-control" >
                           <span class="error_msg" id="alternate_number_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Email Address:<span class="text-danger">*</span></label>
                           <input type="text" name="email_address" id="email_address"
                              class="form-control" >
                           <span class="error_msg" id="email_address_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Alternate Email Address:</label>
                           <input type="text" name="email_address1" id="email_address1"
                              class="form-control" >
                           <span class="error_msg" id="email_address1_error"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Street:<span class="text-danger">*</span></label>
                           <input type="text" name="street" id="street"
                              class="form-control" >
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
                                 {?>
                              <option value=<?php echo  $state_row['id'] ?> ><?php echo  $state_row['name'] ?></option>
                              <?php } }?>
                           </select>
                           <div><span class="error_msg" id="state_error"></span></div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>City:<span class="text-danger">*</span></label>
                           <select id="city" class="form-control city" name="city" title="select city.." data-max-options="1" max-options-text="Only 1 selection is allowed" onchange="getpincode(this.value)">
                           </select>
                           <span class="error_msg" id="city_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group pincode_name1">
                            <div class="pincode_select">
                           <label>Pincode:<span class="text-danger">*</span></label>
                           <select id="pincode" class="form-control pincode" name="fk_pincode" title="select pincode.." data-max-options="1" max-options-text="Only 1 selection is allowed">
                           </select>
                           <span class="error_msg" id="fk_pincode_error"></span>
                        </div>
                     </div>
                         <a href="javascript:void();"><span class="pointer-link" data-toggle="modal" data-target="#new_pincode"><b>Add New Pincode</b></span></a>
                     </div>
                     
                  </div>
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>GST No.:<span class="text-danger">*</span></label>
                           <input type="text" name="gst_no" id="gst_no"
                              class="form-control" >
                           <span class="error_msg" id="gst_no_error"></span>
                        </div>
                     </div>
                     <!-- <div class="col-md-3">
                        <div class="form-group">
                           <label>Commission:<span class="text-danger">*</span></label>
                           <input type="text" name="commission" id="commission"
                              class="form-control" >
                           <span class="error_msg" id="commission_error"></span>
                        </div>
                        </div> -->
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>DOB:<span class="text-danger">*</span></label>
                           <input type="date" name="dob" id="dob" value="<?php echo date('Y-m-d'); ?>"
                              class="form-control" >
                           <span class="error_msg" id="dob_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Industry:<span class="text-danger">*</span></label>
                           <input type="text" name="industry" id="industry"
                              class="form-control" >
                           <span class="error_msg" id="industry_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Invoice Number:<span class="text-danger">*</span></label>
                           <input type="text" name="invoice_no" id="invoice_no"
                              class="form-control" >
                           <span class="error_msg" id="invoice_no_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Lead Source:<span class="text-danger">*</span></label>
                           <input type="text" name="lead_source" id="lead_source"
                              class="form-control" >
                           <span class="error_msg" id="lead_source_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Legal Remark:<span class="text-danger">*</span></label>
                           <textarea id="legal_remarks" name="legal_remarks"
                              class="form-control" ></textarea>
                           <span class="error_msg" id="legal_remarks_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Accounts Remark:<span class="text-danger">*</span></label>
                           <textarea id="accounts_remarks" name="accounts_remarks"
                              class="form-control" ></textarea>
                           <span class="error_msg" id="accounts_remarks_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Company name:<span class="text-danger">*</span></label>
                           <input type="text" name="company_name" id="company_name"
                              class="form-control" >
                           <span class="error_msg" id="company_name_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Invoice Type:<span class="text-danger">*</span></label>
                           <select id="invoice_type" class="selectpicker form-control" name="invoice_type" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                              <option value="">Select Invoice Type</option>
                              <?php
                                 foreach($invoice_type as $invoice_type_key => $invoice_type_row) 
                                 {?>
                              <option value=<?php echo  $invoice_type_row['id'] ?> ><?php echo  $invoice_type_row['name'] ?></option>
                              <?php } ?>
                           </select>
                           <span class="error_msg" id="invoice_type_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Deal Amount:<span class="text-danger">*</span></label>
                           <input type="text" name="deal_amount"
                              id="deal_amount" class="form-control cal_outstanding" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="deal_amount_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Amount received:<span class="text-danger">*</span></label>
                           <input type="text" name="amount_received" id="amount_received"
                              class="form-control" onkeypress="return isNumber(event)" >
                           <span class="error_msg" id="amount_received_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Outstanding:<span class="text-danger">*</span></label>
                           <input type="text" name="outstanding" id="outstanding"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="outstanding_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>TCS:<span class="text-danger">*</span></label>
                           <input type="text" name="tcs" id="tcs"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="tcs_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Govt fees:<span class="text-danger">*</span></label>
                           <input type="text" name="govt_fees" id="govt_fees"
                              class="form-control cal_outstanding" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="govt_fees_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Associate fees:<span class="text-danger">*</span></label>
                           <input type="text" name="associate_fees" id="associate_fees"
                              class="form-control cal_outstanding assoc_fee" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="associate_fees_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Net income:<span class="text-danger">*</span></label>
                           <input type="text" name="net_income" id="net_income"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="net_income_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Gst amount:<span class="text-danger">*</span></label>
                           <input type="text" name="gst_amount" id="gst_amount"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="gst_amount_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Outstanding followup date:</label>
                           <input type="date" name="outstanding_followup_date" id="outstanding_followup_date"
                              class="form-control" value="">
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
                                   {?>
                              <option value=<?php echo $customer_executive_row['id'] ?> ><?php echo $customer_executive_row['name'] ?></option>
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
                                   {?>
                              <option value=<?php echo  $customer_executive_row['id'] ?> ><?php echo  $customer_executive_row['name'] ?></option>
                              <?php } }?>
                           </select>
                           <span class="error_msg" id="secondary_caller_error"></span>
                        </div>
                     </div>
                    
                  </div>
                  <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                           <label>Select Services:<span class="text-danger">*</span></label>
                           <select id="services" class=" form-control " multiple="" name="services[]"  data-max-options="1" max-options-text="Only 1 selection is allowed" >
                              <!-- onchange="getservice(this.value)" -->
                              <option value="">Select Services</option>
                              <?php
                                 if (!empty($services_list)){
                                    foreach($services_list as $services_list_key => $services_list_row) 
                                    {?>
                              <option value=<?php echo  $services_list_row['id'] ?> ><?php echo  $services_list_row['name'] ?></option>
                              <?php } }?>
                           </select>
                           <span class="error_msg" id="services_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Select Sub Services:<span class="text-danger">*</span></label>
                           <select id="sub_services" class="form-control "  multiple="" name="sub_services[]"  data-max-options="1" max-options-text="Only 1 selection is allowed">
                              <option value="">Select Sub Services</option>
                           </select>
                           <span class="error_msg" id="sub_services_error"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label>Upload ScreenShot</label>
                           <input type="file" name="image_files[]"  id="image_name" class="form-control" required="" multiple>
                        </div>
                        <span class="error_msg" id="image_files_error"></span>
                     </div>
                  </div>
                  <!-- </div> -->
                  <hr>
                  <div class="row" id="brands_display">
                  </div>
                  <hr>
                  <div style="margin-top: 15px;"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Payment mode:<span class="text-danger">*</span></label>
                           <select id="payment_mode" class="selectpicker form-control" name="payment_mode" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                              <option value="">Select Payment Mode:</option>
                              <?php
                                 foreach($payment_mode as $payment_mode_key => $payment_mode_row) 
                                 {?>
                              <option value=<?php echo  $payment_mode_row['id'] ?> ><?php echo  $payment_mode_row['name'] ?></option>
                              <?php } ?>
                           </select>
                           <span class="error_msg" id="payment_mode_error"></span>
                        </div>
                     </div>
                     
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Invoice status:<span class="text-danger">*</span></label>
                           <select id="invoice_status" class="selectpicker form-control" name="invoice_status" title="select Primary Caller..." data-max-options="1" max-options-text="Only 1 selection is allowed">
                              <option value="">Select Invoice status</option>
                              <?php
                                 foreach($invoice_status as $invoice_status_key => $invoice_status_row) 
                                 {?>
                              <option value=<?php echo  $invoice_status_row['id'] ?> ><?php echo  $invoice_status_row['name'] ?></option>
                              <?php } ?>
                           </select>
                           <span class="error_msg" id="invoice_status_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Invoice Name:<span class="text-danger">*</span></label>
                           <input type="text" name="invoice_name" id="invoice_name"
                              class="form-control">
                           <span class="error_msg" id="invoice_name_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Govt Fees:<span class="text-danger">*</span></label>
                           <input type="text" name="govt_fee" id="govt_fee"
                              class="form-control" onkeypress="return isNumber(event)">
                           <span class="error_msg" id="govt_fee_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Professional Fees:<span class="text-danger">*</span></label>
                           <input type="text" name="professional_fees"
                              id="professional_fees" class="form-control total_professional_amt"  onkeypress="return isNumber(event)">
                           <span class="error_msg" id="professional_fees_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Drafting / Proceeding Fees:<span class="text-danger">*</span></label>
                           <input type="text" name="drafting_proceeding_fees" id="drafting_proceeding_fees"
                              class="form-control total_professional_amt"  onkeypress="return isNumber(event)">
                           <span class="error_msg" id="drafting_proceeding_fees_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Drafting / Proceeding / Professional Fees:<span class="text-danger">*</span></label>
                           <input type="text" name="drafting_proceeding_professional_fees" id="drafting_proceeding_professional_fees"
                              class="form-control total_professional_amt"  onkeypress="return isNumber(event)">
                           <span class="error_msg" id="drafting_proceeding_professional_fees_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Total Professional Amount:<span class="text-danger">*</span></label>
                           <input type="text" name="total_professional_amount"  id="total_professional_amount"
                              class="form-control" onkeypress="return isNumber(event)" readonly>
                           <span class="error_msg" id="total_professional_amount_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>CGST 9%:<span class="text-danger">*</span></label>
                           <input type="text" name="cgst" id="cgst"
                              class="form-control" onkeypress="return isNumber(event)" >
                           <span class="error_msg" id="cgst_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>SGST 9%:<span class="text-danger">*</span></label>
                           <input type="text" name="sgst" id="sgst"
                              class="form-control" onkeypress="return isNumber(event)" >
                           <span class="error_msg" id="sgst_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>IGST 18%:<span class="text-danger">*</span></label>
                           <input type="text" name="igst" id="igst"
                              class="form-control" onkeypress="return isNumber(event)" >
                           <span class="error_msg" id="igst_error"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Round Off:<span class="text-danger">*</span></label>
                           <input type="text" name="round_off" id="round_off"
                              class="form-control" onkeypress="return isNumber(event)" >
                           <span class="error_msg" id="round_off_error"></span>
                        </div>
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
         <div style="margin-top: 10px;"></div>
         <?php echo form_open('Sales/do_upload', array('id' => 'upload_excel_form')) ?>
         <!-- <div class="row">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>Excel Upload</b></h4>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>Upload Excel in Bulk</label>
                  <input type="file" name="file1"  id="file1" class="form-control" required="" multiple>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <input type="submit" name="submit_button" id="submit_button" class="btn btn-primary" value="Save" />
               </div>
            </div>
            </div> -->
      </div>
      <?php echo form_close() ?>
   </div>
</div>
  <div class="modal fade" id="new_pincode" role="dialog">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Add New Pincode</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
             <?php echo form_open('masters/save_pincode', array('id' => 'add_pincode_form1')) ?>
            <div class="modal-body">
               
               <div class="card-body" >
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Select City<span class="text-danger">*</span></label>
                           <div>
                              <select class="form-control" id="city_id" name="city_id">
                                 <option value="">Select City</option>
                                 <?php
                                    foreach ($city_data as $city_data_key => $city_data_row) {?>
                                 <option value="<?php echo $city_data_row['id']; ?>">
                                    <?php echo $city_data_row['name']; ?>
                                 </option>
                                 <?php 
                                    } ?>
                              </select>
                              <span class="error_msg" id="city_id_error"></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Pincode :<span class="text-danger">*</span></label>
                           <input type="text" name="pincode[]" id="pincode_0" class="form-control" onkeypress="return isNumber(event)" maxlength="6">
                           <span class="error_msg" id="pincode_error"></span>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <button id="addRows" type="button" class="btn btn-info" style="height: 33px; margin-top: 20px; margin-left: -20px;"><i class="glyphicon glyphicon-plus"></i>
                        </button>
                        <input type="hidden" class="form-control"  name="count" id="count" value="0">
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div id="pincode_data_append"></div>
                  </div>
                 
               </div>
      
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary btn-sm ">Submit</button>

            </div>
              <?php echo form_close() ?>
            </div>
         </div>
      </div>
<?php  $this->load->view('footer'); ?>
<script src="<?= base_url();?>assets_admin/view_js/sales.js"></script>
<script type="text/javascript">
   function getcity(state_id) {
      if(state_id==""){
          $(".city").html("");
          $('.city').trigger('change.select2');               
      }else{
            $.ajax({
               url: '<?php echo base_url(); ?>Sales/getcity',
               type: 'post',
               dataType: "json",
               data:{
               city:state_id
               },
               success: function( data ) {   
                     if(data!==""){
                        $(".city").html(data);
                        $('.city').trigger('change.select2');               
                     }else{
                        $(".city").html("");
                        $('.city').trigger('change.select2');               
                     }              
               }
            });
      }
   
   } 
   
   function getpincode(city) {
      if(city==""){
         $("#pincode").html("");
         $("#pincode").trigger('change.select2');               
      }else{
            $.ajax({
                  url: '<?php echo base_url(); ?>Sales/getpincode',
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
                        }else{
                           $("#pincode").html("");
                           $("#pincode").trigger('change.select2');               
                        }
                  }
            });
      }
   } 
   
   function getservice(city) {
   var grp = [];
   $('#services').each(function(x,v){
   var temp =[]
     $(v).find('option:selected').each(function(i, selected){
        var services=$(selected).text();
        temp.push($(selected).val());
     });
     grp.push(temp)
   });
   } 
        
      $("#state").select2({
          placeholder: "Select State",
          allowClear: true
      });
      $("#city").select2({
          placeholder: "Select City",
          allowClear: true
      });
      $("#pincode").select2({
          placeholder: "Select Pincode",
          allowClear: true
      });
      $("#primary_caller").select2({
          placeholder: "Select Primary Caller",
          allowClear: true
      });
      $("#secondary_caller").select2({
          placeholder: "Select Secondary Caller",
          allowClear: true
      });
      $("#services").select2({
          placeholder: " Select Services",
          allowClear: true
      });
      $("#sub_services").select2({
          placeholder: " Select Sub Services",
          allowClear: true
      });
       $('#city_id').select2();
      // $("#brand_name").select2({
      //     placeholder: " Select Sub Services",
      //     allowClear: true
      // });
   
   
   function get_brand_name(city) {
   $('#brand_name').each(function(x,v){
   var brand_list =[]
     $(v).find('option:selected').each(function(i, selected){
        var brand_name=$(selected).text();
        brand_list.push($(selected).val());
     });
     grp.push(brand_list)
   });
   }
   
   function get_class_name(city) {
   $('#class_name').each(function(x,v){
   var class_list =[]
     $(v).find('option:selected').each(function(i, selected){
        var class_name=$(selected).text();
        class_list.push($(selected).val());
     });
     grp.push(class_list)
   });
   }
   
   $(document).on('select2:select','#services', function(e) {
      var data = e.params.data;
      var service_id = data.id;
      var count = $(this).select2('data').length;
      if(count > 1)
      {
          $('#count'+service_id+'').val(0);
      }
      $.ajax({
      url: '<?php echo base_url(); ?>Sales/getselectedservices_new',
      type: 'post',
      dataType: "json",
      data: {service_id: service_id},
      success: function( response ) {  
         var html11="";
         var service_id_1 = response.service_details.id;
     
       if(response.service_details.brand_name == "Yes" && response.service_details.class_name == "NA")
         {
            html11 +='<div class="row"><div class="col-md-2" id="removelabel_'+service_id_1+'"><div class="form-group"><label>Service: '+response.service_details.name+'</label></div></div><div class="col-md-4" id="show_brand_content_'+service_id_1+'"><div class="form-group"><label>Enter Brand Name<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer" " style="width: 100% !important;" name="brand_name_'+service_id_1+'[]" id="brand_name_'+service_id_1+'" onchange="get_brand_name(this.value)"></input></div></div></div><div class="col-md-2"><button id="addRows_'+service_id_1+'" type="button" class="btn btn-info" style="height:35px;"><i class="glyphicon glyphicon-plus"></i></button></div></div><input type="hidden" class="form-control"  name="count'+service_id_1+'" id="count'+service_id_1+'" value="0"></input><div id="new_brands_display_'+service_id_1+'"></div><div class="row"></div></div>'; 
   
         }
   
         if(response.service_details.class_name == "Yes" && response.service_details.class_name == "Yes")
         {
             html11 +='<div class="row"><div class="col-md-2" id="removelabel_'+service_id_1+'"><div class="form-group"><label>Service: '+response.service_details.name+'</label></div></div><div class="col-md-4" id="show_brand_content_'+service_id_1+'"><div class="form-group"><label>Enter Brand Name<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer" " style="width: 100% !important;" name="brand_name_'+service_id_1+'[]" id="brand_name_'+service_id_1+'" onchange="get_brand_name(this.value)"></input></div></div></div><div class="col-md-4" id="show_company_content_'+service_id_1+'"><div class="form-group"><label>Enter Class Name<span class="text-danger">* </span></label><div><select class="form-control tokenizer" multiple="multiple" style="width: 100% !important;" name="class_name_'+service_id_1+'[0][]" id="class_name_'+service_id_1+'" onchange="get_class_name(this.value)"></select></div></div></div><div class="col-md-2"><button id="addRows_'+service_id_1+'" type="button" class="btn btn-info" style="height:35px;"><i class="glyphicon glyphicon-plus"></i></button></div></div><input type="hidden" class="form-control"  name="count'+service_id_1+'" id="count'+service_id_1+'" value="0"></input><div id="new_brands_display_'+service_id_1+'"></div><div class="row"></div></div>'; 
         }
       
      $('#brands_display').append(html11);   
      // $('#'+'brand_name_'+service_id_1).select2({
      //    tags: true,
      //    tokenSeparators: [',', ' '],
      // });
      $('#'+'class_name_'+service_id_1).select2({
         tags: true,
         tokenSeparators: [',', ' '],
      });
    
       $('.tokenizer').trigger('change.select2');
   
     
      $('#addRows_'+service_id_1+'').click(function() {
              
               var latest_count = $('#count'+service_id_1+'').val();
             
               var new_count = parseInt(latest_count) + 1;
              
               var html2 = '';             
   
             if(response.service_details.brand_name == "Yes" && response.service_details.class_name == "NA")
               {
                  html2 += '<div class="row"><div id="inputnewrow_'+new_count+'"><div class="col-md-3" id="show_brand_content1_'+new_count+service_id_1+'"><div class="form-group"><label>Enter Brand Name For '+response.service_details.name+'<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer1" style="width: 100% !important;" name="brand_name_'+service_id_1+'[]" id="brand_name1_'+new_count+service_id_1+'" onchange="get_brand_name(this.value)"></input></div></div></div></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height:30px;margin-top:5px;">Remove</button></div></div></div>';    
               }
   
               if(response.service_details.class_name == "Yes" && response.service_details.class_name == "Yes")
               {
                  html2 += '<div class="row"><div id="inputnewrow_'+new_count+'"><div class="col-md-3" id="show_brand_content1_'+new_count+service_id_1+'"><div class="form-group"><label>Enter Brand Name For '+response.service_details.name+'<span class="text-danger">* </span></label><div><input type="text" class="form-control tokenizer1" style="width: 100% !important;" name="brand_name_'+service_id_1+'[]" id="brand_name1_'+new_count+service_id_1+'" onchange="get_brand_name(this.value)"></input></div></div></div><div class="col-md-3" id="show_company_content1_'+new_count+service_id_1+'"><div class="form-group"><label>Enter Class Name For '+response.service_details.name+'<span class="text-danger">* </span></label><div><select class="form-control tokenizer1" multiple="multiple" style="width: 100% !important;" name="class_name_'+service_id_1+'['+new_count+'][]" id="class_name1_'+new_count+service_id_1+'" ></select></div></div></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height:30px;margin-top:5px;">Remove</button></div></div></div>';   
               }        
               
               $('#new_brands_display_'+service_id_1+'').append(html2);
            
            // $('#'+'brand_name_'+count1+service_id_1).select2({
            // tags: true,
            // tokenSeparators: [',', ' '],
            // });
            $('#count'+service_id_1+'').val(new_count);
            $('#'+'class_name1_'+new_count+service_id_1).select2({
            tags: true,
            tokenSeparators: [',', ' '],
            });
          
      
            $(document).on('select2:unselect', '#services',function(e) {
            var data1 = e.params.data;
            var service_id_1 = data1.id;
            //   $('#brand_name_'+service_id). select2('destroy');
            $('#brand_name1_'+new_count+service_id_1). remove();
            $('#show_brand_content1_'+new_count+service_id_1).remove();
            $('#show_company_content1_'+new_count+service_id_1).remove();
            $('#addRows_'+new_count+service_id_1).remove();
            $('#removeRow').remove();
            });
   
            });
   
            $('.tokenizer1').trigger('change.select2');
   
         
            if(response.html != ""){
               
               $("#sub_services").html(response.html);
               $('#sub_services').trigger('change.select2');
            }
           
      }
      });
   });
   
   $(document).on('click', '#removeRow', function() {
            var latest_count = $('#count').val();
            var new_count = parseInt(latest_count) - 1;
            $('#count').val(new_count);
            $(this).closest("div").remove();      
         });
   
   $(document).on('select2:unselect', '#services',function(e) {
     var data = e.params.data;
     var service_id = data.id;
     
   //   $('#brand_name_'+service_id). select2('destroy');
     $('#brand_name_'+service_id). remove();
     $('#show_brand_content_'+service_id).remove();
     $('#show_company_content_'+service_id).remove();
     $('#removelabel_'+service_id).remove();
     $('#addRows_'+service_id).remove();
   });
      $('#addRows').click(function() {
              
       var latest_count = $('#count').val();             
       var new_count = parseInt(latest_count) + 1;
      
       var html2 = '';             
          html2 += '<div class="col-md-4"><div class="form-group"><label>Pincode <span class="text-danger">* </span></label><input type="text" class="form-control" style="width: 100% !important;" name="pincode[]" id="pincode_'+new_count+'"  onkeypress="return isNumber(event)" maxlength="6"></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height: 29px;margin-top: 23px;">-</button></div></div></div></div></div></div>';   
   
       $('#pincode_data_append').append(html2);
   
   });
        $(document).on('click', '#removeRow', function() {
            var latest_count = $('#count').val();
            var new_count = parseInt(latest_count) - 1;
            $('#count').val(new_count);
            $(this).closest("div").remove();      
         });
  $('#add_pincode_form1').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#add_pincode_form1")[0]);
       var InvoiceTypeForm = $(this);
       jQuery.ajax({
           dataType: 'json',
           type: 'POST',
           url: InvoiceTypeForm.attr('action'),
           data: formData,
           cache: false,
           processData: false,
           contentType: false,
           mimeType: "multipart/form-data",
           success: function(response) {
               if (response.status == 'success') {
                   $('form#add_pincode_form1').trigger('reset');
                   $('#city_id').val(null).trigger('change');
                   $('#pincode_data_append').html('');
                   $('#new_pincode').modal('hide');  
                   swal({
                        title: "success",
                        text: response.msg,
                        icon: "success",
                        dangerMode: true,
                        timer: 1500
                     });            
                     var city_data = $('#city').val();
                     // console.log(city_data);
                      $.ajax({
                        url: bases_url +'Sales/getpincode',
                        type: 'post',
                        dataType: "json",
                        data:{
                        city:city_data
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

                                 // $('.pincode_name1').load(bases_url + 'Sales/add_deal .pincode_select', function() {
                                 // $("#pincode").select2({
                                 //             width: "95%"
                                 //         });
                                 // }).fadeIn('slow');
                              }else{
                                 $("#pincode").html("");
                                 $("#pincode").trigger('change.select2');               
                              }
                        }
                  });

                    
               } else if (response.status == 'failure') {
                   error_msg(response.error)
               } else {
                   window.location.replace(response['url']);
               }
           },
           error: function(error, message) {
   
           }
       });
       return false;
   });
   
   
</script>