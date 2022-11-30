<?php $this->load->view('header'); ?>
<style type="text/css">
   @media print {
   .breadcrumb,.form-inline,.tableuser,.headers,.main-footer,.badge,.badge-primary,.noprint {display: none;}
   }
   /* Adapts a floating label for use with a left-handed input group icon */
.form-floating > .bi-calendar-date + .datepicker_input + label {
  padding-left: 3.5rem;
  z-index: 3;
}
</style>
<!--==================breadcrumb====================-->
<div class="container first-body bdy">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Sales</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color: #000;">View all Sale/Deal</li>
               </ol>
            </nav>
         </div>
      </div>
     
      <div class="row">
         <div class="col-md-12 px-3" style="margin-bottom: 5px;text-align:center;">
            <div class="bg-white" >
               <form class="form-inline">
                  <div class="form-group">
                     <label class="mr-2 form-label">From:</label>
                     <input type="text" name="from_date" id="from_date"  class="form-control mr-2 datepicker" style="width:150px;" placeholder="DD/MM/YYYY">
                  </div>
                  <div class="form-group">
                     <label class="mr-2">To:</label>
                     <input type="text" class="form-control mr-2 datepicker" name="to_date" id="to_date" style="width:150px;" placeholder="DD/MM/YYYY">
                  </div>
                  <div class="form-group">
                  <button class="btn btn-success btn-sm"  type="button" id="btn-search-by-date"><i class="fa fa-search" aria-hidden="true" style="width: 200px;">&nbsp;<span>Search</span> </i></button>
                  </div>
            </form>
               <hr>
               <div class="container-fluid" >
                
                  <div style="overflow-y: auto;">
                  <table id="doc_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                  <div class="form-group" style="float:right;">
                  <button class="btn btn-success btn-sm" type="button" id="btn-excel-download" ><i class="fa fa-search" aria-hidden="true" style="width: 200px;">&nbsp;<span>Export to Excel</span> </i></a>
                 </div>
                  <thead>
                        <tr>
                           <th>Action</th>
                           <th>ID</th>
                           <th>Company Name</th>
                           <th>Sale Date</th>
                           <th>Client Name</th>
                           <th>Service</th>
                           <th>Sub Service</th>
                           <th>Contact No</th>
                           <th>Email</th>
                           <th>Gst No</th>
                           <th>Deal Id</th>
                           <th>Invoice Number</th>
                           <!-- <th>Primary Caller</th>
                           <th>Secondary Caller</th> -->
                           <!-- <th>Lead Source</th> -->
                           <th>Street</th>
                           <th>City</th>
                           <th>State</th>
                           <th>Pincode</th>
                           <th>Payment Mode</th>
                           <th>Deal Amount</th>
                           <th>Amount Received</th>
                           <th>Outstanding</th>
                           <th>Tcs</th>
                           <th>Govt Fees</th>
                           <th>Associate Fees</th>
                           <th>Net Income</th>
                           <th>Gst Amount</th>
                           <!-- <th>Outstanding Followup Date</th> -->  
                           <!-- <th>Invoice Status</th>
                           <th>Invoice Name</th>
                           <th>Invoice Type</th> -->
                           <th>Govt Fee</th>
                           <th>Professional Fees</th>
                           <th>Drafting Proceeding Fees</th>
                           <th>Drafing Proceeding Professional Fees</th>
                           <th>Total Professional Amount</th>
                           <th>cgst</th>
                           <th>sgst</th>
                           <th>igst</th>
                           <th>Round Off</th> 
                           <th>Remarks</th>
                        </tr>
                     </thead>
                </table>

                <div class="modal fade" id="modal_form" role="dialog" data-easein="bounceDownIns">
    <div class="modal-dialog modal-lg" style="width:auto !important;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Services</h3>
            </div>
            <div class="modal-body form">
              
                    <input type="hidden" value="" name="id" class="id"/> 
                    <div style="overflow-x:auto;">
          <table class="table table-striped table-bordered data-table brand_list_datatable"  cellspacing="0" width="100%">
                <thead>
                        <tr>
                           <th>Id</th>
                           <th>Service</th>
                           <th>Brand Name</th>
                           <th>Class Name</th>
                        </tr>
                     </thead>
                </table>
              
            </div>
        
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

                  </div>
                  
               </div>
            </div >
         </div>
      </div>
   </div>
</div>
<!-- bodypart -->
<?php $this->load->view('footer'); ?>
<script src="<?php echo base_url();?>assets_admin/view_js/documentlist.js"></script>
<script type="text/javascript">
$("#to_date").datepicker({ dateFormat: 'dd/mm/Y' });
$("#from_date").datepicker({ dateFormat: 'dd/mm/Y'});

$(".chosen-select").chosen({width: "95%"}); 
function resizeChosen() {
   $(".chosen-container").each(function () {
      $(this).attr('style', 'width: 100%');
   });
}

var simpletable = $('#doc_list_datatable').DataTable({
    "responsive": true,
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'language': {
        'processing': '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>',
        searchPlaceholder: "Enter Deal Id"
        
    },
   'ajax': {
       'url': "<?= base_url() ?>Sales/getsalesrecord",
       'method': "POST",
       'dataType':'json',
       "data": function (data) {
           data.from_date = $('#from_date').val();
           data.to_date = $('#to_date').val();
       }
   }, 
   createdRow: function (row, data, index) {
        $('td', row).eq(2).addClass('text-capitalize');
    },
});

$('#btn-search-by-date').click(function () { //button filter event click
       simpletable.ajax.reload(null, false); //just reload table
   });
   
    
   $(document).on('click','.edit_service_data',function (){
      var id = $(this).attr("id");

   var brand_list_datatable = $('.brand_list_datatable').DataTable({
     
      destroy: true,
      "responsive": true,
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'language': {
        'processing': '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>',
        searchPlaceholder: "Enter Deal Id"
        
    },
   'ajax': {
       'url': "<?= base_url() ?>Sales/getsalesrecord1",
       'method': "POST",
       'dataType':'json',
       "data": function (data) {
           data.id = id;
       }
   }, 
   createdRow: function (row, data, index) {
        $('td', row).eq(2).addClass('text-capitalize');
    },
});
$('#modal_form').modal('show'); 
   });

   $('#btn-excel-download').click(function () { 
      var from_date=$('#from_date').val();
      var to_date=$('#to_date').val();
      $.ajax({
                type:"POST",
                async: "true",
                url:"<?php echo base_url(); ?>Sales/sales_exceldownload",
                dataType:"json",
                data:{
                    fromdate:from_date,
               todate:to_date
                },
                success: function(response)
                {
                 window.location.replace(response['url']);
                }
            });
   });
</script>