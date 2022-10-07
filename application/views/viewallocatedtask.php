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
#doc_list_datatable tbody tr.selected {
    color: white;
    background-color: #eeeeee;
}
table.dataTable tbody tr.selected {
    color: white !important;
    background-color: #eeeeee !important;
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
                  <table id="doc_list_datatable" class="table table-striped  table-hover table-bordered data-table"  cellspacing="0" width="100%">
                
                  <thead>
                        <tr>
                           <th>ID</th>
                           <th>Services</th>
                           <th>Created On</th>
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
        searchPlaceholder: ""
        
    },
    
   'ajax': {
       'url': "<?= base_url() ?>ViewAllocatedTask/get_allocated_work_listing",
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



   $(document).on('click','.edit_image_document',function (){
      var id = $(this).attr("id");
      $.ajax({
				type:"POST",
				async: "true",
				url:"<?php echo base_url(); ?>Sales/getsalesdocimages",
				dataType:"json",
				data:{
					id:id,
				},
				success: function(response)
				{
               $.each(response, function (key, value) {
                  $('.columns').html('<img src="'+bases_url+value+'" height="64px" width="64px">');
					})
             
				}
			});
   $('#modal_form1').modal('show'); 
   });

   $('#btn-excel-download').click(function () { 
      var from_date=$('#from_date').val();
      var to_date=$('#to_date').val();
      $.ajax({
				type:"POST",
				async: "true",
				url:"<?php echo base_url(); ?>ViewAllocatedTask/get_allocated_work_listing",
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