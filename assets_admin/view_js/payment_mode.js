function validate_add_payment_mode(ele){
    hide_message_box(ele);
    var hasError = 0;
    var servicename=$('#servicename').val();
     if(jQuery.trim(servicename) == '')
    {
        showError("Please Enter Payment Mode","servicename");hasError=1;
        
    }
    else {
        changeError("servicename");
    }

    if(hasError==1){
        return false;
    }else{
        
            var user = {};
            user.product = {};
            user.product.servicename = servicename;
                        
            var q = JSON.stringify(user);
            console.log(q);
            jQuery.ajax({
                dataType: 'json',
                type: "POST",
                url: bases_url+"Masters/addpaymentmode",
                data: {'jsonObj' : q},
                cache: false,
                beforeSend: function(){ 
                    jQuery(".btn-quirk").text('Please Wait!.').prop('disabled', true);
                },
                success: function(res){
                    jQuery(".btn-quirk").text('Submit').prop('disabled', false);
                      if(res.status=='1'){ // Success
                        $('form#basicForm').trigger('reset');
                        // $('.alert-success').css('display','block').html(res.msg); 
                        // $('.alert-danger').css('display','none'); 
                        swal({
                            title: "Success",
                            text: res.msg,
                            icon: "success",
                            timer: 1000
                          });
                        $('#paymode_datatable').DataTable().ajax.reload(null,false);
                        //window.setTimeout(function() { $(".alert-success").alert('close'); }, 2000);
                      }else{ // Failed
                        swal({
                            title: "Warning",
                            text: res.msg,
                            icon: "warning",
                            dangerMode: true,
                            timer: 1000
                          });
                        //window.setTimeout(function() { $(".alert-danger").alert('close'); }, 2000);
                      }
                  }
              });
        }
    return false;
}

function validate_update_payment_mode(ele){
    hide_message_box(ele);
    var hasError = 0;
    var relatable_products=$('#relatable_products').val();

    if(jQuery.trim(relatable_products) == '')
    {
        showError("Please Select Related Product","relatable_products");hasError=1;
        
    }
    else {
        changeError("relatable_products");
    }

    if(hasError==1){
        return false;
    }else{
        
    }
}

function delete_payment_mode(ele,service_id){
    if(confirm("Are you sure wanted to delete this Service?")){
        var user = {};
        user.product = {};
        user.product.service_id = service_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"Masters/delete_paymentmode",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ 
                jQuery(ele).html('..').prop('disabled', true);
            },
            success: function(res){
                if(res.status=='1'){ // Success
                      jQuery(ele).closest('tr').remove();
                  }
                        $('#paymode_datatable').DataTable().ajax.reload(null,false);
                  
              }
          });
    }
    return false;
}

function validate_update_pay_mode(ele){

	var hasError = 0;
	var serviceid = $("#serviceid").val();
	var service_name = $("#service_name").val();

	if(jQuery.trim(service_name)==''){
		 showError("Please enter Service Name","service_name"); hasError = 1; 
	}else{
		changeError("service_name");
	}

	if(hasError==1){
		return false;
	}else{
			var user = {};
			user.product = {};
			user.product.serviceid = serviceid;
			user.product.service_name = service_name;
						
			var q = JSON.stringify(user);
            console.log(q);
			jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_Paymentmode",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#pay_mode_Modal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#example').DataTable().ajax.reload(null,false);
                       // window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#pay_mode_Modal').modal('hide');
                        swal({
                            title: "Warning",
                            text: response.msg,
                            icon: "warning",
                            dangerMode: true,
                            timer: 1000
                          });
                        //window.setTimeout(function() { $(".alert-danger").alert('close'); }, 1000);
		          	}
	      		}
	  		});
		}
	
	return false;
}

$(document).on('click', '.a_category_view', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"Masters/get_all_payment_mode",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
                $('#serviceid').val(data['id']);
                $('#service_name').val(data['name']);
            
          }
       });
       
    });

   