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
   <?php echo form_open('Workallocation/add_work_allocation', array('id' => 'work_allocation_form')) ?>
      <div class="col-md-6">
         <div class="panel">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>Assign Service</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
           
               <div class="form-group">
                  <label>Select Deal Id:<span class="text-danger">*</span></label>
                  <select id="dealid" class="form-control" name="dealid" onchange="getservices(this.value)">
                    <option value="">Select Deal Id</option>
                    <?php
                        if (!empty($sales_deals)){
                        foreach($sales_deals as $users_key => $users_row) 
                        {?>
                    <option value=<?php echo  $users_row['id'] ?> ><?php echo  $users_row['deal_id'] ?></option>
                    <?php } }?>
                  </select>
                  <span class="error_msg" id="user_error"></span>
               </div>
           
               <div class="services">
                  
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group"  style="margin-top: 15px;">
                  <input type="submit" name="work_allocation_submit" id="work_allocation_submit" class="btn btn-primary" value="Save" />
               </div>
            </div>
         </div>     
      </div>
      <?php echo form_close(); ?>
      <div class="col-md-6">
      <div class="panel">
            <div class="panel-heading nopaddingbottom">
               <h4 class="panel-title"><b>Users Listing</b></h4>
            </div>
            <div class="card-body" style="padding: 20px;">
           
            <div style="overflow-y: auto;">
                  <table id="doc_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                  <thead>
                        <tr>
                           <th>ID</th>
                           <th>Username</th>
                           <th>Service</th>
                           <th>Allocation Date</th>
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
                                    <span class="error_msg" id="mobile_no1_error"></span>
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
                                       <span toggle="#password" class="glyphicon glyphicon-eye-open field-icon toggle-password"></span>
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
<script src="<?= base_url();?>assets_admin/view_js/workallocation.js"></script>
<script type="text/javascript">
$("#dealid").select2({
          placeholder: "Deal Id",
          allowClear: true
      });

$(document).on('select2:unselect', '#dealid',function(e) {
     var data = e.params.data;
     var service_id = data.id
   });

function getservices(saleid) {
 
$.ajax({
url: '<?php echo base_url(); ?>Workallocation/get_all_services',
type: 'post',
dataType: "json",
data:{
   saleid:saleid
},
success: function( data ) {    
   console.log(data);
   html11='';    
   $(".services").empty();
   $.each(data,function(i,member){
      if(saleid == member.sales_id)
      {
         html11 +='<div class="row"><div class="col-md-6" id="removelabel_'+member.id+'"><div class="form-group"><label>Service: '+member.servicename+'</label></div></div><div class="col-md-6" id="show_company_content1_'+member.id+'"><div class="form-group"><label>Enter User Name For '+member.servicename+'<span class="text-danger">* </span></label><div><select class="form-control tokenizer1" multiple="multiple" style="width: 100% !important;" name="class_name_'+member.id+'['+member.id+'][]" id="class_name1_'+member.id+'" ></select></div></div><div class="col-md-6"></div></div><input type="hidden" class="form-control"  name="servicename[]" id="count'+member.id+'" value="'+member.services_id+'"></input><div id="new_brands_display_'+member.id+'"></div><div class="row"></div></div>';  
      }
     else{
      html11 += "";
     }
     
     
   });
   $('.services').append(html11);   
      

      $('.tokenizer1').select2({
            tags: true,
            tokenSeparators: [',', ' '],
            });
           
}
});
} 
</script>