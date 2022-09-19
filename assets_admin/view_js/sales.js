$("#sale_report_form").submit(function(e) {
   e.preventDefault();
   var formData = new FormData($("#sale_report_form")[0]);
   var attributeForm = $(this);
   jQuery.ajax({
       dataType: "json",
       type: "POST",
       url: attributeForm.attr("action"),
       data: formData,
       cache: false,
       processData: false,
       contentType: false,
       mimeType: "multipart/form-data",
       beforeSend: function() {
           //document.getElementById('loader').style.visibility = "visible";
           // $("#loader").fadeIn("slow");
       },
       success: function(response) {
         if (response.status == 'success') {
            //alert('inserted successfully');
            swal({
             title: "success",
             text: response.status.msg,
             icon: "success",
             dangerMode: true,
             timer: 1500
          });
          location.reload();
           } else if (response.status == 'failure') {
            error_msg(response.error);
            //alert('inserted Unsuccessfully');
            swal({
             title: "Warning",
             text: response.error.msg,
             icon: "warning",
             dangerMode: true,
             timer: 1500
          });
           }  else {
               window.location.replace(response["url"]);
           }
       },
       error: function(error, message) {},
   });
   return false;
});

$("#upload_excel_form").submit(function(e) {
   e.preventDefault();
   var formData = new FormData($("#upload_excel_form")[0]);
   var attributeForm = $(this);
   jQuery.ajax({
       dataType: "json",
       type: "POST",
       url: attributeForm.attr("action"),
       data: formData,
       cache: false,
       processData: false,
       contentType: false,
       mimeType: "multipart/form-data",
       beforeSend: function() {
           //document.getElementById('loader').style.visibility = "visible";
           // $("#loader").fadeIn("slow");
       },
       success: function(response) {
         if (response.status == 'success') {
            window.location.replace(bases_url+'Sales/cal_tcs_outstanding');
         }
       },
       error: function(error, message) {},
   });
   return false;
});

   function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
   }
   function error_msg(t) {
     for (var i in t) "" != t[i] ? $("#" + i + "_error").html(t[i]).show() : $("#" + i + "_error").html("").hide();
         $(".error_msg").delay(10000).fadeOut()
   }
   $('#amount_received').on('keyup',function(){
			var deal_amt=$('#deal_amount').val();
         var amount_received=$('#amount_received').val();
          //console.log(deal_amt+':'+amount_received);return;
         $.ajax({
         url: bases_url+'Sales/cal_tcs_outstanding',
         type: 'post',
         dataType: "json",
         data:{
            deal_amt:deal_amt,amount_received:amount_received
         },
         success: function( data ) {   
              $("#outstanding").val(data.outstanding);
              $("#tcs").val(data.tcs);
         }
         });
		});
      $('.total_professional_amt').on('keyup',function(){
			var professional_fees=$('#professional_fees').val();
         var drafting_proceeding_fees=$('#drafting_proceeding_fees').val();
         var drafting_proceeding_professional_fees=$('#drafting_proceeding_professional_fees').val();
         var state=$('#state').val();
          //console.log(deal_amt+':'+amount_received);return;
         $.ajax({
         url: bases_url+'Sales/cal_client_details',
         type: 'post',
         dataType: "json",
         data:{
            professional_fees:professional_fees,drafting_proceeding_fees:drafting_proceeding_fees,
            drafting_proceeding_professional_fees:drafting_proceeding_professional_fees,state:state
         },
         success: function( data ) {   
               if(data.msg)
               {
                  $('#deal_amount').val('');
            
                  swal({
                     title: "Warning",
                     text: data.msg,
                     icon: "warning",
                     dangerMode: true,
                     timer: 1500
                  });
                 
               }else{
                  $("#total_professional_amount").val(data.total_prof_amt);
                  $("#cgst").val(data.cgst);
                  $("#sgst").val(data.sgst);
                  $("#igst").val(data.igst);
                  $("#round_off").val(data.final_round_off);
               }
             
         }
         });
		});

// $("#gst_no").change(function () {
//   var inputtext = $(this).val();
//   var gstinformat = new RegExp('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9]{1}Z[a-zA-Z0-9]{1}$');
//   if (gstinformat.test(inputtext)) {
//   }
//   else {
//    swal({
//    title: "Warning",
//    text: 'Please Enter Valid GSTIN Number',
//    icon: "warning",
//    dangerMode: true,
//    timer: 1500
// });
//   }
// });
 
   //  $('.assoc_fee').on('keyup',function(){
   //    var deal_amt=$('#deal_amount').val();
   //    var govt_fees=$('#govt_fees').val();
   //    var associate_fees=$('#associate_fees').val();
   //    $.ajax({
   //    url: bases_url+'Sales/cal_sale_details',
   //    type: 'post',
   //    dataType: "json",
   //    data:{
   //       deal_amt:deal_amt,govt_fees:govt_fees,associate_fees:associate_fees
   //    },
   //    success: function( data ) {   
          
   //    }
   //    });
   // });

   // $('.assoc_fee').on('keyup',function(){
   //    var deal_amt=$('#deal_amount').val();
   //    var govt_fees=$('#govt_fees').val();
   //    var associate_fees=$('#associate_fees').val();
   //    $.ajax({
   //    url: bases_url+'Sales/cal_sale_details',
   //    type: 'post',
   //    dataType: "json",
   //    data:{
   //       deal_amt:deal_amt,govt_fees:govt_fees,associate_fees:associate_fees
   //    },
   //    success: function( data ) {   
          
   //    }
   //    });
   // });

   $('.cal_outstanding').on('keyup',function(){
      var deal_amt=$('#deal_amount').val();
      var govt_fees=$('#govt_fees').val();
      var associate_fees=$('#associate_fees').val();
      var state=$('#state').val();
      $.ajax({
      url: bases_url+'Sales/cal_sale_details',
      type: 'post',
      dataType: "json",
      data:{
         deal_amt:deal_amt,govt_fees:govt_fees,associate_fees:associate_fees,state:state
      },
      success: function( data ) {   
         //$("#outstanding").val(data.outstanding);
         
         if(data.msg){
            $('#deal_amount').val('');
            swal({
               title: "Warning",
               text: data.msg,
               icon: "warning",
               dangerMode: true,
               timer: 1500
            });
         }else{
            $("#tcs").val(data.tcs);
            $("#net_income").val(data.final_net_amount);
            $("#associate_fees").val(data.associate_fees);
            $("#cgst").val(data.cgst);
            $("#sgst").val(data.sgst);
            $("#igst").val(data.igst);
            $("#round_off").val(data.final_round_off);
         }
       
         //$("#govt_fees").val(data.govt_fees);
      }
      });
   });

   $('#state').on('change', function (e) {
      var state = $("#state").val();
      var deal_amt=$('#deal_amount').val();
      var govt_fees=$('#govt_fees').val();
      var associate_fees=$('#associate_fees').val();
      var professional_fees=$('#professional_fees').val();
      var drafting_proceeding_fees=$('#drafting_proceeding_fees').val();
      var drafting_proceeding_professional_fees=$('#drafting_proceeding_professional_fees').val();
      $.ajax({
         url: bases_url+'Sales/cal_sale_details',
         type: 'post',
         dataType: "json",
         data:{
            deal_amt:deal_amt,govt_fees:govt_fees,associate_fees:associate_fees,state:state
         },
         success: function( data ) {   
            //$("#outstanding").val(data.outstanding);
            if(data.msg){
               swal({
                  title: "Warning",
                  text: data.msg,
                  icon: "warning",
                  dangerMode: true,
                  timer: 1500
               });
            }else{
               $("#tcs").val(data.tcs);
               $("#net_income").val(data.final_net_amount);
               $("#associate_fees").val(data.associate_fees);
               $("#cgst").val(data.cgst);
               $("#sgst").val(data.sgst);
               $("#igst").val(data.igst);
               $("#round_off").val(data.final_round_off);
            }
          
            //$("#govt_fees").val(data.govt_fees);
         }
         });
         $.ajax({
            url: bases_url+'Sales/cal_client_details',
            type: 'post',
            dataType: "json",
            data:{
               professional_fees:professional_fees,drafting_proceeding_fees:drafting_proceeding_fees,
               drafting_proceeding_professional_fees:drafting_proceeding_professional_fees,state:state
            },
            success: function( data ) {   
                  if(data.msg)
                  {
                      
                     swal({
                        title: "Warning",
                        text: data.msg,
                        icon: "warning",
                        dangerMode: true,
                        timer: 1500
                     });
                  }else{
                     $("#total_professional_amount").val(data.total_prof_amt);
                     $("#cgst").val(data.cgst);
                     $("#sgst").val(data.sgst);
                     $("#igst").val(data.igst);
                     $("#round_off").val(data.final_round_off);
                  }
                
            }
            });
   });

   $("#govt_fee").change(function () {
      var inputtext = $('#govt_fees').val();
      var gstinformat = $('#govt_fee').val();
      if (inputtext == gstinformat) {
      }
      else {
       swal({
       title: "Warning",
       text: 'Goverment Fees Dose Not Match !',
       icon: "warning",
       dangerMode: true,
       timer: 1500
    });
      }
    });

    $("#total_professional_amount").change(function () {
      var total_professional_amount = $('#total_professional_amount').val();
      var net_income = $('#net_income').val();
      var associate_fees = $('#associate_fees').val();

      var total=net_income+associate_fees;

      if (total_professional_amount == total) {
      }
      else {
       swal({
       title: "Warning",
       text: 'Net Income Does Not Match with the Professional Amount !',
       icon: "warning",
       dangerMode: true,
       timer: 1500
      });
      }
    });
    

 