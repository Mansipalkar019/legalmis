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
         <h4 class="panel-title"><b>Add City</b></h4>
      </div>
      <?php echo form_open('masters/save_city', array('id' => 'add_city_form')) ?>
      <div class="card-body" >
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label>Select State<span class="text-danger">*</span></label>
                  <div>
                     <select class="form-control" id="state_id" name="state_id">
                        <option value="">Select State</option>
                        <?php
                           foreach ($state as $state_key => $state_row) {?>
                        <option value="<?php echo $state_row['id']; ?>">
                           <?php echo $state_row['name']; ?>
                        </option>
                        <?php 
                           } ?>
                     </select>
                     <span class="error_msg" id="state_id_error"></span>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>City Name:<span class="text-danger">*</span></label>
                  <input type="text" name="name[]" id="name_0" class="form-control">
                  <span class="error_msg" id="name_error"></span>
               </div>
            </div>
            <div class="col-md-2">
               <button id="addRows" type="button" class="btn btn-info" style="height: 33px; margin-top: 20px; margin-left: -20px;"><i class="glyphicon glyphicon-plus"></i>
               </button>
               <input type="hidden" class="form-control"  name="count" id="count" value="0">
            </div>
           
         </div>
          <hr>
         <div class="row"><div id="state_data_append"></div>
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
</div>
<div class="col-md-12">
   <div class="panel">
      <div class="panel-heading nopaddingbottom">
         <h4 class="panel-title"><b>City List</b></h4>
      </div>
      <div class="card-body" style="padding: 20px;">
         <div style="overflow-y: auto;">
            <table id="city_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>State Name</th>
                     <th>City Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
            <div id="City_Modal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title">Edit City Details</h4>
                     </div>
                     <?php echo form_open('masters/Update_city_data', array('id' => 'update_city_form')) ?>
                     <div class="modal-body">
                        <div class="form-group">
                           <label>State Name:<span class="text-danger">*</span></label>
                           <div><span id="edit_state"></span></div>
                           <input type="hidden" name="edit_city_id" id="edit_city_id"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label>City Name:<span class="text-danger">*</span></label>
                           <input type="text" name="edit_city" id="edit_city"
                              class="form-control">
                           <span class="error_msg" id="edit_city_error"></span>
                           
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
      $('#state_id').select2();
     load_city_data();
   });
   
   function load_city_data() {
     var simpletable = $('#city_list_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>masters/display_all_city_data',
             type: "POST"
         },
     });
   }
    $('#add_city_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#add_city_form")[0]);
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
                   $('form#add_city_form').trigger('reset');
                   $('#state_id').val(null).trigger('change');   
                   $('#city_list_datatable').DataTable().ajax.reload(null,false);
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
   
   $(document).on('click', '.edit_city', function () {
   var id = $(this).attr("id");
      $.ajax({
         url: bases_url+"masters/get_city_data_on_id",
         method: "POST",
         data: {
            id: id
         },
         dataType: "json",
         success: function (data) {
           var data = data.city_data;
               $('#edit_city_id').val(data['id']);
               $('#edit_state').text(data['state_name']);
               $('#edit_city').val(data['name']);
           
         }
      });
      
   });
   
   
   $('#update_city_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#update_city_form")[0]);
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
                   $('form#update_city_form').trigger('reset');
                   $('#City_Modal').modal('hide');
                   $('#city_list_datatable').DataTable().ajax.reload(null,false);
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
     $(document).on('click', '.delete_city', function(e) {
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
             url: bases_url+"masters/delete_city",
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
                $('#city_list_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
   }
   
    $('#addRows').click(function() {
              
       var latest_count = $('#count').val();             
       var new_count = parseInt(latest_count) + 1;
      
       var html2 = '';             
          html2 += '<div class="col-md-4"><div class="form-group"><label>Enter City <span class="text-danger">* </span></label><input type="text" class="form-control" style="width: 100% !important;" name="name[]" id="name_'+new_count+'" ></div><button id="removeRow" type="button" class="btn btn-danger btn-sm removeRow" style="height: 29px;margin-top: 23px;">-</button></div></div></div></div></div></div>';   
   
       $('#state_data_append').append(html2);
   
   });
        $(document).on('click', '#removeRow', function() {
            var latest_count = $('#count').val();
            var new_count = parseInt(latest_count) - 1;
            $('#count').val(new_count);
            $(this).closest("div").remove();      
         });
</script>