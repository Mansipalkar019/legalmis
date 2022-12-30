<style>
   .field-icon {
   float: right;
   margin-left: -25px;
   margin-top: -25px;
   margin-right: 5px;
   position: relative;
   z-index: 2;
   }
</style>
<?php  $this->load->view('header')?>
<div class="container">
<div class="card-body" style="background-color: ghostwhite;padding: 20px;">
<div class="col-md-12">
   <div class="panel">
      <div class="panel-heading nopaddingbottom">
         <h4 class="panel-title"><b>Add Pincode</b></h4>
      </div>
      <?php echo form_open('masters/save_pincode', array('id' => 'add_pincode_form')) ?>
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
         <div class="row">
            <div class="col-md-3">
               <div class="form-group"  style="margin-top: 15px;">
                  <input type="submit" class="btn btn-primary" value="Save" />
               </div>
            </div>
         </div>
        
      </div>
       <?php echo form_close(); ?>

   </div>
</div>
<div class="col-md-12">
   <div class="panel">
      <div class="form-group">
         <a href="<?=base_url()?>uploads/add_pincode.xls">Download Sample File</a>
      </div>
      <?php echo form_open('masters/excel_upload_pincode', array('id' => 'excel_import_pincode_form')) ?>
      <div class="col-md-12">
         <div class="form-group">
            <label for="">Upload File</label>
            <input type="file" name="upload_pincode" class="form-control" id="upload_pincode">
            <span class="error_msg" id="upload_pincode_error"></span>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="form-group"  style="margin-top: 15px;">
               <input type="submit" class="btn btn-primary" value="Save" />
            </div>
         </div>
      </div>
      <?php echo form_close(); ?>
   </div>
</div>
<div class="col-md-12">
   <div class="panel">
      <div class="panel-heading nopaddingbottom">
         <h4 class="panel-title"><b>Pincode List</b></h4>
      </div>
      <div class="card-body" style="padding: 20px;">
         <div style="overflow-y: auto;">
            <table id="pincode_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>City Name</th>
                     <th>Pincode</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
            <div id="pincode_Modal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title">Edit Pincode Details</h4>
                     </div>
                     <?php echo form_open('masters/Update_pincode_data', array('id' => 'update_pincode_form')) ?>
                     <div class="modal-body">
                        <div class="form-group">
                           <label>City Name:<span class="text-danger">*</span></label>
                           <div><span id="edit_city"></span></div>
                           <input type="hidden" name="edit_pincode_id" id="edit_pincode_id"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label>Pincode :<span class="text-danger">*</span></label>
                           <input type="text" name="edit_pincode" id="edit_pincode" onkeypress="return isNumber(event)" class="form-control" maxlength="6">
                           <span class="error_msg" id="edit_pincode_error"></span>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-success">Submit</button>
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <?php echo form_close(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  $this->load->view('footer'); ?>
<script src="<?= base_url();?>assets_admin/view_js/backenduser.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $('#city_id').select2();
     load_city_data();
   });
   
   function load_city_data() {
     var simpletable = $('#pincode_list_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>masters/get_all_pincode_data',
             type: "POST"
         },
     });
   }
    $('#add_pincode_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#add_pincode_form")[0]);
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
                   $('form#add_pincode_form').trigger('reset');
                      $('#city_id').val(null).trigger('change');
                   $('#pincode_data_append').html('');
                   $('#pincode_list_datatable').DataTable().ajax.reload(null,false);
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
   
   $(document).on('click', '.edit_pincode', function () {
   var id = $(this).attr("id");
      $.ajax({
         url: bases_url+"masters/get_pincode_data_on_id",
         method: "POST",
         data: {
            id: id
         },
         dataType: "json",
         success: function (data) {
           var data = data.pincode_data;
               $('#edit_pincode_id').val(data['id']);
               $('#edit_city').text(data['name']);
               $('#edit_pincode').val(data['pincode']);
           
         }
      });
      
   });
   
   
   $('#update_pincode_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#update_pincode_form")[0]);
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
                   $('form#update_pincode_form').trigger('reset');
                   $('#pincode_Modal').modal('hide');
                   $('#pincode_list_datatable').DataTable().ajax.reload(null,false);
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
     $(document).on('click', '.delete_pincode', function(e) {
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
             url: bases_url+"masters/delete_pincode",
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
                $('#pincode_list_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
   }
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


   $('#excel_import_pincode_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#excel_import_pincode_form")[0]);
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
                   $('form#excel_import_pincode_form').trigger('reset');
                   // $('#city_id').val(null).trigger('change');
                   // $('#pincode_data_append').html('');
                   $('#pincode_list_datatable').DataTable().ajax.reload(null,false);
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
</script>