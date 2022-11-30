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
            <li role="presentation" class="active"><a href="<?= base_url();?>Masters" aria-controls="service" role="tab" >Services</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/subservices" aria-controls="subservice" role="tab" >Sub Services</a></li>
               <li role="presentation" ><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
                 <!--  <li role="presentation"><a href="<?= base_url();?>Masters/Roles" aria-controls="cust_executive" role="tab" >Add Roles</a></li> -->
              </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="service">
                  <div class="alert alert-success" style="display:none;"></div>
                  <div class="alert alert-danger" style="display:none;"></div>
                  <?php echo form_open('masters/addservice', array('id' => 'add_service_form')) ?>
                     <div class="row ml20  mb20">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Name<span class="text-danger">*</span></label>
                              <input type="text" name="servicename" id="servicename" class="form-control">
                               <span class="error_msg" id="servicename_error"></span>
                           </div>
                        </div>
                       
                        <div class="col-md-4 " id="featured">
                                 <label>Select Attributes: </label><br>
                                 <div class="form-group">
                                    <input type="checkbox" id="brandname" name="brandname"  class="brandname"> Brand Name &nbsp;&nbsp;
                                    <input type="checkbox" id="classname" name="classname" class="classname"> Class Name &nbsp;&nbsp;
                                   
                                 </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                           <label>Terms & Condition:<span class="text-danger">*</span></label>
                           <textarea id="terms" name="terms"
                           class="form-control" ></textarea>
                            <span class="error_msg" id="terms_error"></span>
                           </div>
                        </div>
                        <div class="col-sm-4" style="margin-top:30px;">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                     <br>
                    <?php echo form_close() ?>
                  <hr>
                  <table id="service_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Brand Name</th>
                           <th>Class Name</th>
                           <th>Terms & Condition</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="myModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Service</h4>
                           </div>
                          <?php echo form_open('masters/Update_Service', array('id' => 'edit_service_form')) ?>
                              <div class="modal-body">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Name<span class="text-danger">*</span></label>
                                       <input type="text" name="edit_service_name"  id="edit_service_name" class="form-control">
                                       <input type="hidden" name="serviceid" id="serviceid" class="form-control">
                                         <span class="error_msg" id="edit_service_name_error"></span>
                                    </div>

                                 </div>
                                 <div class="col-md-12 " id="featured">
                                 <label>Select Attributes: </label><br>
                                 <div class="form-group">
                                    <input type="checkbox" id="brand" name="brand" class="brand"> Brand Name &nbsp;&nbsp;
                                    <input type="checkbox" id="class" name="class" class="class"> Class Name &nbsp;&nbsp;
                                   
                                 </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Terms & Condition:<span class="text-danger">*</span></label>
                                    <textarea id="terms1" name="terms1" class="form-control" ></textarea>
                                    </div>
                                    <span class="error_msg" id="terms1_error"></span>

                                 </div>
                                 
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-success">Submit</button>
                                 <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
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
</div>

<?php  $this->load->view('footer'); ?>
<!--   <script src="assets_admin/view_js/service.js"></script> -->
<script type="text/javascript">
    $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
        $(".chosen-container").each(function () {
            $(this).attr('style', 'width: 100%');
        });
    }
   $(document).ready(function() {
      load_service_data();

      $('#terms').summernote();
      $('#terms1').summernote();
 });

 function load_service_data() {
     var simpletable = $('#service_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>Masters/getallservices',
             type: "POST"
         },
     });
 } 

  $('#add_service_form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#add_service_form")[0]);
        var ServicesForm = $(this);
        jQuery.ajax({
            dataType: 'json',
            type: 'POST',
            url: ServicesForm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            mimeType: "multipart/form-data",
            success: function(response) {
                if (response.status == 'success') {
                    $('form#add_service_form').trigger('reset');
                    $('#terms').code('');
                     $('#service_datatable').DataTable().ajax.reload(null,false);

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

   $(document).on('click', '.servies_edit', function () {
       var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"Masters/get_edit_services_data",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
                var data = data.service_data;
                $('#serviceid').val(data['id']);
                $('#edit_service_name').val(data['name']);
                $("#terms1").summernote("code", data["terms"]);
                if(data['brand_name'] == "Yes")
                {
                    $('.brand').prop('checked', true);

                }else{
                    $('.brand').prop('checked', false);
                }

                if(data['class_name'] == "Yes")
                {
                    $('.class').prop('checked', true);

                }else{
                    $('.class').prop('checked', false);
                }
          }
       });
       
   });
   $('#edit_service_form').submit(function(e) {
     e.preventDefault();
     var formData = new FormData($("#edit_service_form")[0]);
     var Edit_ServicesForm = $(this);
     jQuery.ajax({
         dataType: 'json',
         type: 'POST',
         url: Edit_ServicesForm.attr('action'),
         data: formData,
         cache: false,
         processData: false,
         contentType: false,
         mimeType: "multipart/form-data",
         success: function(response) {
             if (response.status == 'success') {
                 $('form#edit_service_form').trigger('reset');
                 $('#myModal').modal('hide');
                 $('#service_datatable').DataTable().ajax.reload(null,false);

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
     $(document).on('click', '.delete_services', function(e) {
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
             url: bases_url+"Masters/delete_service",
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
                $('#service_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }

</script>