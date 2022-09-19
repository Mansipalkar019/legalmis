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

    <div style="overflow-x:auto;">
          <table id="doc_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                <thead>
                        <tr>
                           <th>Action</th>
                           <th>ID</th>
                           <th>Company Name</th>
                           <th>Brand Name</th>
                           <th>Class Name</th>
                           <th>Sale Date</th>
                           <th>Client Name</th>
                           <th>Service</th>
                           <th>Sub Service</th>
                           <th>Contact No</th>
                           <th>Eamil</th>
                           <th>Gst No</th>
                           <th>Deal Id</th>
                           <th>Invoice Number</th>
                           <th>Primary Caller</th>
                           <th>Secondary Caller</th>
                           <th>Lead Source</th>
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
                           <th>Outstanding Followup Date</th>
                           <th>Remarks</th>
                           <th>Invoice Status</th>
                           <th>Invoice Name</th>
                           <th>Invoice Type</th>
                           <th>Govt Fee</th>
                           <th>Professional Fees</th>
                           <th>Drafting Proceeding Fees</th>
                           <th>Drafing Proceeding Professional Fees</th>
                           <th>Total Professional Amount</th>
                           <th>cgst</th>
                           <th>sgst</th>
                           <th>igst</th>
                           <th>Round Off</th> 
                        </tr>
                     </thead>
                </table>
             
   </div>
</div>
<?php  $this->load->view('footer'); ?>
<script src="<?php echo base_url();?>assets_admin/view_js/documentlist.js"></script>
<script type="text/javascript">
    $(".chosen-select").chosen({width: "95%"}); 
   function resizeChosen() {
        $(".chosen-container").each(function () {
            $(this).attr('style', 'width: 100%');
        });
    }
    $(document).ready(function () {
    var table = $('#doc_list_datatable').DataTable();
    $('#doc_list_datatable').parent().addClass('table-responsive');
});

var simpletable = $('#doc_list_datatable').DataTable({
    "responsive": true,
      "dom": 'lBfrtip',
      dom: 'lBfrtip',
             buttons: [
 'csvHtml5',
 'pdfHtml5'
 ],
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    'language': {
        'processing': '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>',
        searchPlaceholder: "Enter Deal Id"
        
    },
    'ajax': {
        'url': "<?= base_url() ?>Sales/getsalesrecord",
        "data": function (data) {
           console.log(data);
        }
    }, 
  
});
</script>