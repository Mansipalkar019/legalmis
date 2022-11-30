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
               <li role="presentation"><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation" class="active"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
                <?php if($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?>
               <!-- <li role="presentation" ><a href="<?= base_url();?>Masters/Roles" aria-controls="cust_executive" role="tab" >Add Roles</a></li> -->
               <?php } ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="paymentmode">
                  <div class="alert alert-success" style="display:none;"></div>
                  <div class="alert alert-danger" style="display:none;"></div>
                  <?php echo form_open('masters/add_payment_mode', array('id' => 'add_payment_mode_form')) ?>
                     <div class="row ml20  mb20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Name<span class="text-danger">*</span></label>
                              <input type="text" name="payment_name" id="payment_name" class="form-control">
                              <span class="error_msg" id="payment_name_error"></span>
                           </div>
                        </div>
                        <div class="col-sm-4" style="margin-top:30px;">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                     <br>
                  <?php echo form_close() ?>
                  <hr>
                  <table id="paymode_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="pay_mode_Modal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Payment Mode</h4>
                           </div>
                          <?php echo form_open('masters/Update_payment_mode', array('id' => 'Update_payment_mode_form')) ?>
                              <div class="modal-body">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Name<span class="text-danger">*</span></label>
                                       <input type="text" name="edit_payment_name" id="edit_payment_name" class="form-control" >
                                       <input type="hidden" name="edit_payment_id" id="edit_payment_id" class="form-control" >
                               <span class="error_msg" id="edit_payment_name_error"></span>

                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-success">Submit</button>
                                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
<script src="<?php echo base_url();?>assets_admin/view_js/payment_mode.js"></script>
<!-- <script src="<?php echo base_url();?>assets_admin/view_js/sub_service.js"></script> -->
<script type="text/javascript">
    $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
        $(".chosen-container").each(function () {
            $(this).attr('style', 'width: 100%');
        });
    }
   $(document).ready(function() {
     load_payment_mode_data();
   });

 function load_payment_mode_data() {
     var simpletable = $('#paymode_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>Masters/getallpaymentmode',
             type: "POST"
         },
     });
 }
  $('#add_payment_mode_form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#add_payment_mode_form")[0]);
        var PaymentModeForm = $(this);
        jQuery.ajax({
            dataType: 'json',
            type: 'POST',
            url: PaymentModeForm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            mimeType: "multipart/form-data",
            success: function(response) {
                if (response.status == 'success') {
                    $('form#add_payment_mode_form').trigger('reset');
                    $('#paymode_datatable').DataTable().ajax.reload(null,false);
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
   $(document).on('click', '.edit_payment_mode', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"masters/get_payment_mode_on_id",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
               var data = data.payment_mode;
                $('#edit_payment_name').val(data['name']);
                $('#edit_payment_id').val(data['id']);
         
          }
       });
       
    });
     $('#Update_payment_mode_form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#Update_payment_mode_form")[0]);
        var PaymentModeForm = $(this);
        jQuery.ajax({
            dataType: 'json',
            type: 'POST',
            url: PaymentModeForm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            mimeType: "multipart/form-data",
            success: function(response) {
                if (response.status == 'success') {
                    $('form#Update_payment_mode_form').trigger('reset');
                    $('#pay_mode_Modal').modal('hide');
                    $('#paymode_datatable').DataTable().ajax.reload(null,false);
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
         $(document).on('click', '.delete_payment_mode', function(e) {
             var id = $(this).attr("id");
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
             url: bases_url+"masters/delete_payment_mode",
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
                 $('#paymode_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }
</script>