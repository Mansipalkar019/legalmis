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
               <h4 class="panel-title"><b>Add State</b></h4>
            </div>
              <?php echo form_open('masters/save_state', array('id' => 'add_state_form')) ?>
            <div class="card-body" >
              
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>State Name:<span class="text-danger">*</span></label>
                        <input type="text" name="state_name" id="state_name"          class="form-control">
                        <span class="error_msg" id="state_name_error"></span>
                     </div>
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
      </div>
      
      <div class="col-md-12">
         <div class="panel">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>State List</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
               <div style="overflow-y: auto;">
                  <table id="state_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                     <thead>
                        <tr>
                          
                           <th>ID</th>
                           <th>State Name</th>                        
                             <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="State_Modal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit State Details</h4>
                           </div>
                           <?php echo form_open('masters/Update_state_data', array('id' => 'update_state_form')) ?>
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>State Name:<span class="text-danger">*</span></label>
                                 <input type="text" name="edit_state" id="edit_state"
                                    class="form-control">
                                 <span class="error_msg" id="edit_state_error"></span>
                                 <input type="hidden" name="edit_state_id" id="edit_state_id"
                                    class="form-control">
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
      $('#roles').select2();
     load_users_data();
   });
   
   function load_users_data() {
     var simpletable = $('#state_list_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>masters/get_all_state_data',
             type: "POST"
         },
     });
   }

    $('#add_state_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#add_state_form")[0]);
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
                   $('form#add_state_form').trigger('reset');
   
                   $('#state_list_datatable').DataTable().ajax.reload(null,false);
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
   
   $(document).on('click', '.edit_state', function () {
   var id = $(this).attr("id");
      $.ajax({
         url: bases_url+"masters/get_state_data_on_id",
         method: "POST",
         data: {
            id: id
         },
         dataType: "json",
         success: function (data) {
           var data = data.state_data;
               $('#edit_state_id').val(data['id']);
               $('#edit_state').val(data['name']);
           
         }
      });
      
   });
   
   
   $('#update_state_form').submit(function(e) {
       e.preventDefault();
       var formData = new FormData($("#update_state_form")[0]);
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
                   $('form#update_state_form').trigger('reset');
                   $('#State_Modal').modal('hide');
                   $('#state_list_datatable').DataTable().ajax.reload(null,false);
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
     $(document).on('click', '.delete_state', function(e) {
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
             url: bases_url+"Masters/delete_state",
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
                $('#state_list_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }
</script>