<?php
   defined('BASEPATH') or exit('No direct script access allowed');
   // $CI = &get_instance();
   ?>
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
   </style>
<?php  $this->load->view('header')?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="tab" role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" ><a href="<?= base_url();?>Masters" aria-controls="service" role="tab" >Services</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/subservices" aria-controls="subservice" role="tab" >Sub Services</a></li>
               <li role="presentation" ><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
              <li role="presentation"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
               <?php if($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?>
               <!-- <li role="presentation"><a href="<?= base_url();?>Masters/Roles" aria-controls="cust_executive" role="tab" >Add Roles</a></li> -->
               <?php } ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="service">
                  <div class="alert alert-success" style="display:none;"></div>
                  <div class="alert alert-danger" style="display:none;"></div>
                   <?php echo form_open('masters/add_customer_executive', array('id' => 'add_customer_executive_form')) ?>
                     <div class="row ml20  mb20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Customer Executive Name<span class="text-danger">*</span></label>
                              <input type="text" name="cust_executive" id="cust_executive" class="form-control" >
                              <span class="error_msg" id="cust_executive_error"></span>
                           </div>
                        </div>
                        <div class="col-sm-4" style="margin-top:30px;">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                     <br>
                <?php echo form_close()?>
                  <hr>
                  <table id="cust_exec_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="cust_execModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Customer Executive </h4>
                           </div>
                            <?php echo form_open('masters/update_customer_executive', array('id' => 'update_customer_executive_form')) ?>
                              <div class="modal-body">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Customer Executive Name<span class="text-danger">*</span></label>
                                       <input type="text" name="edit_customer_executive_name" id="edit_customer_executive_name" class="form-control"> 
                                       <span class="error_msg" id="edit_customer_executive_name_error"></span>
                                       <input type="hidden" name="edit_customer_executive_id" id="edit_customer_executive_id" class="form-control">
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-success">Submit</button>
                                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                        </div>
                        <?php echo form_close()?>
                     </div>
                  </div>
               </div>
             
            </div>
         </div>
      </div>
   </div>
</div>
<?php  $this->load->view('footer'); ?>
<script src="<?php echo base_url();?>assets_admin/view_js/cust_executive.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
     load_customer_executive_data();
 });

 function load_customer_executive_data() {
     var simpletable = $('#cust_exec_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>Masters/getallcust_exec',
             type: "POST"
         },
     });
 }
 $('#add_customer_executive_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#add_customer_executive_form")[0]);
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
                   $('form#add_customer_executive_form').trigger('reset');
   
                   $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
                    swal({
                        title: "success",
                        text: response.msg,
                        icon: "success",
                        dangerMode: true,
                        timer: 1500
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
 $(document).on('click', '.edit_customer_executive', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"Masters/get_customer_excutive_on_id",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
            var data = data.customer_executive;
                $('#edit_customer_executive_id').val(data['id']);
                $('#edit_customer_executive_name').val(data['name']);
          },
       });       
});
$('#update_customer_executive_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#update_customer_executive_form")[0]);
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
                   $('form#update_customer_executive_form').trigger('reset');
                   $('#cust_execModal').modal('hide');
                   $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
                    swal({
                        title: "success",
                        text: response.msg,
                        icon: "success",
                        dangerMode: true,
                        timer: 1500
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
$(document).ready(function() {
     $(document).on('click', '.delete_customer_executive', function(e) {
         var id = $(this).attr("id");
         // alert(id);
         confirmDelete(id);
         e.preventDefault();
     });
 });

 function confirmDelete(id) {
     swal({
         title: "Delete?",
         text: "Are you sure you want to delete ?",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Delete",
         closeOnConfirm: false
     }, function() {
         $.ajax({
             type: "post",
             url: bases_url+"Masters/delete_cust_exec",
             data: {
                 id: id,
             },
             dataType: 'json',
             success: function(res) {
                 swal({
                     title: "Deleted!",
                     text: res.message,
                     timer: 1700,
                     showConfirmButton: false,
                     type: 'success'
                 });
                $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }
</script>