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

   <div class="row">
   <?php echo form_open('AddBackendUsers/add_backend_users', array('id' => 'add_backend_user_form')) ?>
      <div class="col-md-6">
         <div class="panel">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>Add Users</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
           
               <div class="form-group">
                  <label>First Name:<span class="text-danger">*</span></label>
                  <input type="text" name="firstname" id="firstname"
                     class="form-control">
                  <span class="error_msg" id="firstname_error"></span>
               </div>
           
               <div class="form-group">
                  <label>Last Name:<span class="text-danger">*</span></label>
                  <input type="text" name="lastname" id="lastname"
                     class="form-control" >
                  <span class="error_msg" id="lastname_error"></span>
               </div>

               <div class="form-group">
                  <label>Mobile No:<span class="text-danger">*</span></label>
                  <input type="text" name="mobile_no" id="mobile_no"
                     class="form-control"  onkeypress="return isNumber(event)">
                  <span class="error_msg" id="mobile_no_error" maxlength="10"></span>
               </div>

               <div class="form-group">
                  <label>Email Id:<span class="text-danger">*</span></label>
                  <input type="text" name="email" id="email"
                     class="form-control">
                  <span class="error_msg" id="email_error"></span>
               </div>
               <div class="form-group">
                  <label>Username:<span class="text-danger">*</span></label>
                  <input type="text" name="username" id="username"
                     class="form-control">
                  <span class="error_msg" id="username_error"></span>
               </div>
               <div class="form-group">
                  <label>Password:<span class="text-danger">*</span></label>
                  <input type="password" name="password" id="password"
                     class="form-control">
                     <span toggle="#password" class="glyphicon glyphicon-eye-close field-icon toggle-password"></span>
                  <span class="error_msg" id="password_error"></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group"  style="margin-top: 15px;">
                  <input type="submit" name="add_backend_user_submit" id="add_backend_user_submit" class="btn btn-primary" value="Save" />
               </div>
            </div>
         </div>     
      </div>
      <?php echo form_close(); ?>
      <div class="col-md-6">
      <div class="panel">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>Add Users</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
           
            <div style="overflow-y: auto;">
                  <table id="doc_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                  <thead>
                        <tr>
                           <th>Action</th>
                           <th>ID</th>
                           <th>Role Name</th>
                           <th>Username</th>
                           <th>Contact No</th>
                           <th>Email</th>
                          
                        </tr>
                     </thead>
                </table>
                <div id="UserModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Users</h4>
                           </div>
                           <?php echo form_open('AddBackendUsers/update_backend_users', array('id' => 'update_backend_user_form')) ?>
                              <div class="modal-body">

                                 <div class="form-group">
                                    <label>First Name:<span class="text-danger">*</span></label>
                                    <input type="text" name="firstname1" id="firstname1"
                                       class="form-control">
                                    <span class="error_msg" id="firstname1_error"></span>
                                    <input type="hidden" name="userid" id="userid"
                                       class="form-control">
                                 </div>
                              
                                 <div class="form-group">
                                    <label>Last Name:<span class="text-danger">*</span></label>
                                    <input type="text" name="lastname1" id="lastname1"
                                       class="form-control" >
                                    <span class="error_msg" id="lastname1_error"></span>
                                 </div>

                                 <div class="form-group">
                                    <label>Mobile No:<span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_no1" id="mobile_no1"
                                       class="form-control"  onkeypress="return isNumber(event)">
                                    <span class="error_msg" id="mobile_no1_error" maxlength="10"></span>
                                 </div>

                                 <div class="form-group">
                                    <label>Email Id:<span class="text-danger">*</span></label>
                                    <input type="text" name="email1" id="email1"
                                       class="form-control">
                                    <span class="error_msg" id="email1_error"></span>
                                 </div>
                                 <div class="form-group">
                                    <label>Username:<span class="text-danger">*</span></label>
                                    <input type="text" name="username1" id="username1"
                                       class="form-control">
                                    <span class="error_msg" id="username1_error"></span>
                                 </div>
                                 <div class="form-group">
                                    <label>Password:<span class="text-danger">*</span></label>
                                    <input type="password" name="password1" id="password1"
                                       class="form-control">
                                       <span toggle="#password1" class="glyphicon glyphicon-eye-close field-icon toggle-password1"></span>
                                    <span class="error_msg" id="password1_error"></span>
                                 </div>

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

</div>
<?php  $this->load->view('footer'); ?>
<script src="<?= base_url();?>assets_admin/view_js/backenduser.js"></script>
<script type="text/javascript">
   var simpletable = $('#doc_list_datatable').DataTable({
    "responsive": true,
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'language': {
        'processing': '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>',
        searchPlaceholder: "Enter Username or Email"
        
    },
   'ajax': {
       'url': "<?= base_url() ?>AddBackendUsers/getuserlist",
       'method': "POST",
       'dataType':'json',
       "data": function (data) {
        
       }
   }, 
   createdRow: function (row, data, index) {
        $('td', row).eq(2).addClass('text-capitalize');
    },
});

$(".toggle-password").click(function() {

$(this).toggleClass('glyphicon glyphicon-eye-close').toggleClass('glyphicon glyphicon-eye-open');
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});

$(".toggle-password1").click(function() {
$(this).toggleClass('glyphicon glyphicon-eye-close').toggleClass('glyphicon glyphicon-eye-open');
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>