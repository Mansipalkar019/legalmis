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
<div class="container-fluid first-body bdy">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
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
                  <button class="btn btn-success btn-sm"  type="submit"><i class="fa fa-search" aria-hidden="true" style="width: 200px;">&nbsp;<span>Search</span> </i></button>
                  </div>
                
                  <!-- <a href="<?php echo base_url();?>booking/reset?reset=1" class="btn btn-danger mr-2 "><i class="fa fa-search" aria-hidden="true">Reset</i></a> -->
               </form>
               <hr>
               <div class="container-fluid" >
                  <form class="form-inline" method="post" action="<?php echo base_url(); ?>booking/excel_data">
                 
                  <div style="overflow-y: auto;">
                  <table id="doc_list_datatable" class="table table-striped table-bordered data-table"  cellspacing="0" width="100%">
                  <div class="form-group" style="float:right;">
                  <button class="btn btn-success btn-sm" id="btn-search-by-date"  type="submit"><i class="fa fa-search" aria-hidden="true" style="width: 200px;">&nbsp;<span>Export to Excel</span> </i></button>
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

function edit_person(id)
{
    save_method = 'update';
   
    $.ajax({
        url : "<?php echo site_url('Sales/getbrandclasslst/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('.id').val(data);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded

            $('#brand_list_datatable').DataTable({
            processing: true,
            serverSide: true,
           'ajax': {
        'url': "<?php echo site_url('Sales/getsalesrecord1/')?>/" + id,
        "data": function (data) {
        }
    },  
            });

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

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
$("#to_date").datepicker({ dateFormat: 'dd/mm/Y' });
$("#from_date").datepicker({ dateFormat: 'dd/mm/Y'});
var simpletable = $('#doc_list_datatable').DataTable({
   
    'ajax': {
        'url': "<?= base_url() ?>Sales/getsalesrecord",
        "data": function (data) {
            alert($('#from_date').val());
            data.from_date = $('#from_date').val();
            data.to_date = $('#to_date').val();
        }
    }, 
});

$('#btn-search-by-date').click(function () { //button filter event click
        simpletable.ajax.reload(null, false); //just reload table
    });
</script>