<?php
   defined('BASEPATH') or exit('No direct script access allowed');
   // $CI = &get_instance();
   ?>
<style>
   .select2-container {
   width: 100% !important;
   padding: 0;
   }
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
   <div class="row">
      <div class="col-md-12">
         <div class="tab" role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
               <li role="presentation" ><a href="<?= base_url();?>Masters" aria-controls="service" role="tab" >Services</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/subservices" aria-controls="subservice" role="tab" >Sub Services</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
               <?php if($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?>
               <li role="presentation"  class="active"><a href="<?= base_url();?>Masters/Roles" aria-controls="cust_executive" role="tab" >Add Roles</a></li>
               <?php } ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="subservice">
                  <form id="basicForm" class="form-horizontal" novalidate="novalidate"
                     onsubmit="return validate_add_roles(this);">
                     <div class="row">
                            <div class="alert alert-success" style="display:none;"></div>
                            <div class="alert alert-danger" style="display:none;"></div>
                            <div class="col-sm-4 ml20">
                            <div class="form-group">
                              <label>First Name:<span class="text-danger">*</span></label>
                              <input type="text" name="firstname" id="firstname"
                                 class="form-control">
                              <span class="error_msg" id="firstname_error"></span>
                           </div>
                           </div>
                           <div class="col-sm-4 ml20">
                           <div class="form-group">
                              <label>Last Name:<span class="text-danger">*</span></label>
                              <input type="text" name="lastname" id="lastname"
                                 class="form-control" >
                              <span class="error_msg" id="lastname_error"></span>
                           </div>
                           </div>
                           <div class="col-sm-4 ml20">
                           <div class="form-group">
                              <label>Mobile No:<span class="text-danger">*</span></label>
                              <input type="text" name="mobile_no" id="mobile_no"
                                 class="form-control"  onkeypress="return isNumber(event)" maxlength=10>
                              <span class="error_msg" id="mobile_no_error"></span>
                           </div>
                           </div>
                           <div class="col-sm-4 ml20">
                           <div class="form-group">
                              <label>Email Id:<span class="text-danger">*</span></label>
                              <input type="text" name="email" id="email"
                                 class="form-control">
                              <span class="error_msg" id="email_error"></span>
                           </div>
                           </div>
                            <div class="col-sm-4 ml20">
                            <div class="form-group">
                                <label>Enter User Name<span class="text-danger">*</span></label>
                                <input type="text" name="user_name" dir="ltl"
                                    id="user_name" class="form-control" required="">
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label>Enter Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" dir="ltl"
                                    id="password" class="form-control" required="">
                                    <span toggle="#password" class="glyphicon glyphicon-eye-close field-icon toggle-password"></span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-group">
                                <label>Select Role<span class="text-danger">*</span></label>
                                <div>
                                    <select class="form-control" id="roles"
                                        name="roles">
                                        <option value="">Select Role</option>
                                        <?php if(isset($roles) && !empty($roles)){ 
                                        foreach ($roles as $roles_key => $roles_value) {?>
                                        <option value="<?php echo $roles_value['id']; ?>">
                                        <?php echo $roles_value['roles']; ?>
                                        </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            </div>
                     </div>
                     <div class="row">
                     <div class="col-sm-4" >
                                <div class="form-group" style="margin-top: 15px;">
                                    <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                                </div>
                            </div>
                     </div>
                     
                  </form>
                  <hr>
                  <table id="roles_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Role</th>
                           <th>Username</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="roleModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Sub Service</h4>
                           </div>
                           <form id="basicForm" method="post"
                              enctype="multipart/form-data" class="form-horizontal" novalidate="novalidate"
                              onsubmit="return validate_update_roles(this);">
                              <div class="modal-body">
                              <input type="hidden" name="user_id" id="user_id" class="form-control" required="">  
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
                                       class="form-control"  onkeypress="return isNumber(event)" maxlength=10>
                                    <span class="error_msg" id="mobile_no1_error" maxlength="10"></span>
                                 </div>

                                 <div class="form-group">
                                    <label>Email Id:<span class="text-danger">*</span></label>
                                    <input type="text" name="email1" id="email1"
                                       class="form-control">
                                    <span class="error_msg" id="email1_error"></span>
                                 </div>  
                              
                              <div class="form-group">
                                <label>Select Role<span class="text-danger">*</span></label>
                                    <select class="form-control" id="roles1"
                                        name="roles1">
                                        <option value="">Select Role</option>
                                        <?php if(isset($roles) && !empty($roles)){ 
                                        foreach ($roles as $roles_key => $roles_value) {?>
                                        <option value="<?php echo $roles_value['id']; ?>">
                                        <?php echo $roles_value['roles']; ?>
                                        </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Enter User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="user_name1" dir="ltl"
                                    id="user_name1" class="form-control" required="">                         
                                </div>
                                <div class="form-group">
                                    <label>Enter Password<span class="text-danger">*</span></label>
                                    <input type="password" name="password1" dir="ltl"
                                    id="password1" class="form-control" required="">
                                    <span toggle="#password1" class="glyphicon glyphicon-eye-close field-icon toggle-password1"></span>
                                 
                                </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-success">Submit</button>
                                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                        </div>
                        </form>
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
<script src="<?php echo base_url();?>assets_admin/view_js/roles.js"></script>
<script type="text/javascript">
   $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
       $(".chosen-container").each(function () {
           $(this).attr('style', 'width: 100%');
       });
   }
   var simpletable = $('#roles_datatable').DataTable({
     // "dom": 'lBfrtip',
     dom: 'lBfrtip',
            buttons: [
   
   'csvHtml5',
   'pdfHtml5'
   ],
   'processing': true,
   'serverSide': true,
   'serverMethod': 'post',
   'language': {
       'processing': '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'
   },
   'ajax': {
       'url': "<?= base_url() ?>Masters/getallroles",
       "data": function (data) {
           
       }
   }, 

   });
   
   $("#roles").select2({
         placeholder: "Select Role",
         allowClear: true
     });

   $("#roles1").select2({
      placeholder: "Select Role",
      allowClear: true
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