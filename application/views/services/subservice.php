
<style>
   .select2-container {
   width: 100% !important;
   padding: 0;
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
               <li role="presentation" class="active"><a href="<?= base_url();?>Masters/subservices" aria-controls="subservice" role="tab" >Sub Services</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="subservice">
                   <?php echo form_open('masters/addsubservice', array('id' => 'add_sub_service_form')) ?>
                     <div class="row ml20  mb20">
                        <div class="alert alert-success" style="display:none;"></div>
                        <div class="alert alert-danger" style="display:none;"></div>
                        <div class="col-sm-4 mr20">
                           <div class="form-group">
                              <label>Select service<span class="text-danger">*</span></label>
                              <div>
                                 <select class="form-control" id="services"
                                    name="services">
                                    <option value="">Select Service</option>
                                    <?php if(!empty($get_service_info)){ 
                                       foreach ($get_service_info as $service_data_key => $service_data_value) {?>
                                    <option value="<?php echo $service_data_value['id']; ?>">
                                       <?php echo $service_data_value['name']; ?>
                                    </option>
                                    <?php }
                                       } ?>
                                 </select>
                                 <span class="error_msg" id="services_error"></span>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4 ml20">
                           <div class="form-group">
                              <label>Enter Sub Service Name<span class="text-danger">*</span></label>
                              <input type="text" name="sub_service_name" id="sub_service_name" class="form-control">
                                 <span class="error_msg" id="sub_service_name_error"></span>

                           </div>
                        </div>
                        <div class="col-sm-4" >
                           <div class="form-group" style="margin-top: 30px;">
                              <button type="submit" class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                           </div>
                        </div>
                     </div>
                     <br>
                    <?php echo form_close() ?>
                  <hr>
                  <table id="sub_service_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Service</th>
                           <th>Sub Service</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="subserviceModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Sub Service</h4>
                           </div>
                           <?php echo form_open('masters/Update_Sub_Service', array('id' => 'update_sub_service_form')) ?>
                              <div class="modal-body">
                                 <div class="form-group">
                                    <label>Select service<span class="text-danger">*</span></label>
                                    <select class="form-control" id="serviceid"
                                       name="serviceid">
                                       <option value="">Select Service</option>
                                       <?php if(isset($get_service_info) && !empty($get_service_info)){ 
                                          foreach ($get_service_info as $category_key => $category_value) {?>
                                       <option value="<?php echo $category_value['id']; ?>">
                                          <?php echo $category_value['name']; ?>
                                       </option>
                                       <?php }
                                          } ?>
                                    </select>
                                    <span class="error_msg" id="serviceid_error"></span>

                                 </div>
                                 <div class="form-group">
                                    <label>Enter Sub Service Name<span class="text-danger">*</span></label>
                                    <input type="text" name="edit_name" id="edit_name" class="form-control">
                                    <input type="hidden" name="id" id="id" class="form-control" required="">                          
                                    <span class="error_msg" id="edit_name_error"></span>

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
</div>
<?php  $this->load->view('footer'); ?>
<!-- <script src="assets_admin/view_js/sub_service.js"></script> -->
<script type="text/javascript">
   $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
       $(".chosen-container").each(function () {
           $(this).attr('style', 'width: 100%');
       });
   }
   
    $(document).ready(function() {
        load_sub_service_data();
    });
   
   function load_sub_service_data() {
    var simpletable = $('#sub_service_datatable').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
        "ajax": {
            url: '<?= base_url() ?>Masters/getallsubservices',
            type: "POST"
        },
    });
   } 
   $("#services").select2({
         placeholder: "Select Services",
         allowClear: true
     });
   $("#serviceid").select2({
           placeholder: "Select Services",
           allowClear: true
   });
    $('#add_sub_service_form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#add_sub_service_form")[0]);
        var Sub_ServicesForm = $(this);
        jQuery.ajax({
            dataType: 'json',
            type: 'POST',
            url: Sub_ServicesForm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            mimeType: "multipart/form-data",
            success: function(response) {
                if (response.status == 'success') {
                    $('form#add_sub_service_form').trigger('reset');
                     $('#services').val(null).trigger('change');
                    $('#sub_service_datatable').DataTable().ajax.reload(null,false);

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
    $(document).on('click', '.edit_sub_services_data', function () {
        var id = $(this).attr("id");
        $.ajax({
          url: bases_url+"Masters/get_sub_services_on_id",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
            var data = data.sub_service_details;
                $('#serviceid').val(data['service_id']);
                $('#serviceid').trigger('change.select2');               
                $('#edit_name').val(data['name']);
                $('#id').val(data['id']);
          }
        });       
    });
    $('#update_sub_service_form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#update_sub_service_form")[0]);
        var UpdateSub_ServicesForm = $(this);
        jQuery.ajax({
            dataType: 'json',
            type: 'POST',
            url: UpdateSub_ServicesForm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            mimeType: "multipart/form-data",
            success: function(response) {
                if (response.status == 'success') {
                    $('form#update_sub_service_form').trigger('reset');
                    $('#subserviceModal').modal('hide');
                    $('#sub_service_datatable').DataTable().ajax.reload(null,false);

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
         $(document).on('click', '.delete_sub_services', function(e) {
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
             url: bases_url+"masters/delete_sub_service",
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
                $('#sub_service_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }
</script>