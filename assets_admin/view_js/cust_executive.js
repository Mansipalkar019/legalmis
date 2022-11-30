function validate_cust_executive(ele){
    hide_message_box(ele);
    var hasError = 0;
    var servicename=$('#servicename').val();
     if(jQuery.trim(servicename) == '')
    {
        showError("Please Enter the Customer Excecutive Name","servicename");hasError=1;
        
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
            jQuery.ajax({
                dataType: 'json',
                type: "POST",
                url: bases_url+"Masters/addcust_exec",
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
                        $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
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

function validate_add_banner1(ele){
    hide_message_box(ele);
    var hasError = 0;
    var image_file=$('#names').val();
   if(jQuery.trim(image_file) == '')
    {
        showError("Please Select the File","names");hasError=1;
        
    }
    else {
        changeError("names");
    }

    if(hasError==1){
        return false;
    }else{
        
    }
}


function delete_cust_exec(ele,service_id){
    if(confirm("Are you sure wanted to delete this Service?")){
        var user = {};
        user.product = {};
        user.product.service_id = service_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"Masters/delete_cust_exec",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ 
                jQuery(ele).html('..').prop('disabled', true);
            },
            success: function(res){
                if(res.status=='1'){ // Success
                      jQuery(ele).closest('tr').remove();
                  }
                        $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
                  
              }
          });
    }
    return false;
}

function validate_update_services(ele){

	var hasError = 0;
	var serviceid = $("#serviceid").val();
	var service_name = $("#service_name").val();

	if(jQuery.trim(service_name)==''){
		 showError("Please Enter Service Name","service_name"); hasError = 1; 
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
        
			jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_cust_exec",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#cust_execModal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#cust_exec_datatable').DataTable().ajax.reload(null,false);
                        //window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#cust_execModal').modal('hide');
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


function delete_banner(ele,category_id){
    if(confirm("Are you sure wanted to delete the selected banner?")){
        var user = {};
        user.product = {};
        user.product.category_id = category_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "delete_banner",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ 
                jQuery(ele).html('..').prop('disabled', true);
            },
            success: function(res){
                if(res.status=='1'){ // Success
                      jQuery(ele).closest('tr').remove();
                  }
              }
          });
    }
    return false;
}


function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};

$(document).on('click', '.a_category_view', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"Masters/get_all_cust_exec",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
                $('#serviceid').val(data['user_id']);
                $('#service_name').val(data['username']);
            
          }
       });
       
    });

   