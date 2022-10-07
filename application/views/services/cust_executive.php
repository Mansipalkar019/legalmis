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
               <li role="presentation" ><a href="<?= base_url();?>Masters/documentlist" aria-controls="documentlist" role="tab" >Document List</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/paymentmode" aria-controls="paymentmode" role="tab" >Payment Mode</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicetype" aria-controls="invoicetype" role="tab" >Invoice Type</a></li>
               <li role="presentation"><a href="<?= base_url();?>Masters/invoicestatus" aria-controls="invoicestatus" role="tab" >Invoice Status</a></li>
               <li role="presentation" class="active"><a href="<?= base_url();?>Masters/cust_executive" aria-controls="cust_executive" role="tab" >Customer Executive</a></li>
               <?php if($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?>
                   <li role="presentation"><a href="<?= base_url();?>Masters/Roles" aria-controls="cust_executive" role="tab" >Add Roles</a></li>
               <?php } ?>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabs">
               <div role="tabpanel" class="tab-pane fade in active" id="service">
                  <div class="alert alert-success" style="display:none;"></div>
                  <div class="alert alert-danger" style="display:none;"></div>
                  <form id="basicForm" method="post"
                     action=""
                     enctype="multipart/form-data" class="form-horizontal" novalidate="novalidate"
                     onsubmit="return validate_cust_executive(this);">
                     <div class="row ml20  mb20">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Name<span class="text-danger">*</span></label>
                              <input type="text" name="servicename" dir="ltl" id="servicename" class="form-control" required="">
                           </div>
                        </div>
                        <div class="col-sm-4" style="margin-top:30px;">
                           <button class="btn btn-success">Submit</button>
                        </div>
                     </div>
                     <br>
                  </form>
                  <hr>
                  <table id="cust_exec_datatable" class="table table-striped table-bordered" style="width:100%">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                  </table>
                  <div id="cust_execModal" class="modal fade" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <h4 class="modal-title">Edit Service</h4>
                           </div>
                           <form id="basicForm" method="post"
                              enctype="multipart/form-data" class="form-horizontal" novalidate="novalidate"
                              onsubmit="return validate_update_services(this);">
                              <div class="modal-body">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Name<span class="text-danger">*</span></label>
                                       <input type="text" name="service_name" dir="ltl" id="service_name" class="form-control" required="">
                                       <input type="hidden" name="serviceid" dir="ltl" id="serviceid" class="form-control" required="">
                                    </div>
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
<?php  $this->load->view('footer'); ?>
<script src="<?php echo base_url();?>assets_admin/view_js/cust_executive.js"></script>

<!-- <script src="<?php echo base_url();?>assets_admin/view_js/sub_service.js"></script> -->
<script type="text/javascript">
    $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
        $(".chosen-container").each(function () {
            $(this).attr('style', 'width: 100%');
        });
    }
    
var simpletable = $('#cust_exec_datatable').DataTable({
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
        'url': "<?= base_url() ?>Masters/getallcust_exec",
        "data": function (data) {
        }
    }, 
    // createdRow: function (row, data, index) {
    //     $('td', row).eq(2).addClass('text-capitalize');
    // },
});


</script>