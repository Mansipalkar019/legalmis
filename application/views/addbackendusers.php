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
               <h4 class="panel-title"><b>Add Users</b></h4>
            </div>
              <?php echo form_open('AddBackendUsers/add_backend_users', array('id' => 'add_backend_user_form')) ?>
            <div class="card-body" >
              
               <div class="row">
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>First Name:<span class="text-danger">*</span></label>
                        <input type="text" name="firstname" id="firstname"          class="form-control">
                        <span class="error_msg" id="firstname_error"></span>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Last Name:<span class="text-danger">*</span></label>
                        <input type="text" name="lastname" id="lastname"           class="form-control">
                        <span class="error_msg" id="lastname_error"></span>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Username:<span class="text-danger">*</span></label>
                        <input type="text" name="user_name" id="user_name" class="form-control">
                        <span class="error_msg" id="user_name_error"></span>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Mobile No:<span class="text-danger">*</span></label>
                        <input type="text" name="mobile_no" id="mobile_no"         class="form-control" onkeypress="return isNumber(event)">
                        <span class="error_msg" id="mobile_no_error"></span>
                     </div>
                  </div>                
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Email Id:<span class="text-danger">*</span></label>
                        <input type="text" name="email" id="email" class="form-control">
                        <span class="error_msg" id="email_error"></span>
                     </div>
                  </div>
                  
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Password:<span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span toggle="#password" class="glyphicon glyphicon-eye-close field-icon toggle-password"></span>
                        <span class="error_msg" id="password_error"></span>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Select Role<span class="text-danger">*</span></label>
                                    <select class="form-control" id="roles"
                                        name="roles">
                                        <option value=""></option>
                                        <?php if(isset($roles) && !empty($roles)){ 
                                        foreach ($roles as $roles_key => $roles_value) {?>
                                        <option value="<?php echo $roles_value['id']; ?>">
                                        <?php echo $roles_value['roles']; ?>
                                        </option>
                                        <?php }
                                        } ?>
                                    </select>
                                    <span class="error_msg" id="roles_error"></span>                        
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
               <h4 class="panel-title"><b>Users List</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
               <div style="overflow-y: auto;">
                  <table id="user_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                     <thead>
                        <tr>
                          
                           <th>ID</th>
                           <th>Full Name</th>                        
                           <th>Username</th>
                           <th>Role Name</th>                          
                           <th>Email</th>
                            <th>Contact No</th>
                             <th>Action</th>
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
                                 <input type="text" name="edit_first_name" id="edit_first_name"
                                    class="form-control">
                                 <span class="error_msg" id="edit_first_name_error"></span>
                                 <input type="hidden" name="edit_user_id" id="edit_user_id"
                                    class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Last Name:<span class="text-danger">*</span></label>
                                 <input type="text" name="edit_last_name" id="edit_last_name"
                                    class="form-control" >
                                 <span class="error_msg" id="edit_last_name_error"></span>
                              </div>
                              <div class="form-group">
                                 <label>Mobile No:<span class="text-danger">*</span></label>
                                 <input type="text" name="edit_mobile_no" id="edit_mobile_no"
                                    class="form-control"  onkeypress="return isNumber(event)">
                                 <span class="error_msg" id="edit_mobile_no_error"></span>
                              </div>
                              <div class="form-group">
                                 <label>Email Id:<span class="text-danger">*</span></label>
                                 <input type="text" name="edit_email" id="edit_email"
                                    class="form-control">
                                 <span class="error_msg" id="edit_email_error"></span>
                              </div>
                              <div class="form-group">
                                 <label>Username:<span class="text-danger">*</span></label>
                                 <input type="text" name="edit_user_name" id="edit_user_name" readonly class="form-control">
                                 <span class="error_msg" id="edit_user_name_error"></span>
                              </div>
                              <!-- <div class="form-group">
                                 <label>Password:<span class="text-danger">*</span></label>
                                 <input type="password" name="edit_password" id="edit_password" class="form-control">
                                 <span toggle="#edit_password" class="glyphicon glyphicon-eye-close field-icon toggle-password1"></span>
                                 <span class="error_msg" id="edit_password_error"></span>
                              </div>
                           </div> -->

                     <div class="form-group">
                        <label>Select Role<span class="text-danger">*</span></label>
                                    <select class="form-control" id="edit_roles"
                                        name="edit_roles">
                                        <option value=""></option>
                                        <?php if(isset($roles) && !empty($roles)){ 
                                        foreach ($roles as $roles_key => $roles_value) {?>
                                        <option value="<?php echo $roles_value['id']; ?>">
                                        <?php echo $roles_value['roles']; ?>
                                        </option>
                                        <?php }
                                        } ?>
                                    </select>
                                    <span class="error_msg" id="roles_error"></span>                        
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
     var simpletable = $('#user_list_datatable').DataTable({
         rowReorder: {
             selector: 'td:nth-child(2)'
         },
         responsive: true,
         "ajax": {
             url: '<?= base_url() ?>AddBackendUsers/get_user_list',
             type: "POST"
         },
     });
   }
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