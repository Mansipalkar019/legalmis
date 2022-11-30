function validate_add_banner(ele){
    hide_message_box(ele);
    var hasError = 0;
    var servicename=$('#servicename').val();
    var terms=$('#terms').val();
    if(jQuery.trim(servicename) == '')
    {
        showError("Please Enter the Service Name","servicename");hasError=1;    }
    else {
        changeError("servicename");
    }

    if(jQuery.trim(terms) == '')
    {
        showError("Please Enter the Terms & Condition","terms");hasError=1;
    }
    else {
        changeError("terms");
    }

    if(hasError==1){
        return false;
    }
    else{
        
            var user = {};
            user.product = {};
            //   var brandname = document.getElementById('brandname').checked = true;
            //   alert(brandname);
            //  var classname = document.getElementById('classname').checked = true;
            user.product.servicename = servicename;
            user.product.terms=terms;
            //  user.product.brandname = brandname;
            //  user.product.classname = classname;
           
                if (document.getElementById('brandname').checked == true) {
                    user.product.brandname="Yes";
                } else {
                    user.product.brandname="NA";
                }
          
          
                if (document.getElementById('classname').checked == true) {
                    user.product.classname="Yes";
                } else {
                    user.product.classname="NA";
                }
          
                 
            var q = JSON.stringify(user);
            jQuery.ajax({
                dataType: 'json',
                type: "POST",
                url: bases_url+"Masters/addservice",
                data: {'jsonObj' : q},
                cache: false,
                beforeSend: function(){ 
                    jQuery(".btn-quirk").text('Please Wait!.').prop('disabled', true);
                },
                success: function(res){
                    jQuery(".btn-quirk").text('Submit').prop('disabled', false);
                      if(res.status=='1'){ // Success
                        $('form#basicForm').trigger('reset');
                        $('#terms').code('');
                        swal({
                            title: "Success",
                            text: res.msg,
                            icon: "success",
                            timer: 1000
                          });
                        $('#service_datatable').DataTable().ajax.reload(null,false);
                      }else{ // Failed
                        swal({
                            title: "Warning",
                            text: res.msg,
                            icon: "warning",
                            dangerMode: true,
                            timer: 1000
                          });
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


function delete_services(ele,service_id){
    if(confirm("Are you sure wanted to delete this Service?")){
        var user = {};
        user.product = {};
        user.product.service_id = service_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"Masters/delete_service",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ 
                jQuery(ele).html('..').prop('disabled', true);
            },
            success: function(res){
                if(res.status=='1'){ // Success
                      jQuery(ele).closest('tr').remove();
                  }
                    $('#service_datatable').DataTable().ajax.reload(null,false);
              }
          });
    }
    return false;
}

function validate_update_services(ele){

	var hasError = 0;
	var serviceid = $("#serviceid").val();
	var service_name = $("#service_name").val();
    var terms1 = $("#terms1").val();
   
	if(jQuery.trim(service_name)==''){
		 showError("Please Enter Service Name","service_name"); hasError = 1; 
	}else{
		changeError("service_name");
	}

    if(jQuery.trim(terms1)==''){
        showError("Please Enter Service Name","terms1"); hasError = 1; 
   }else{
       changeError("terms1");
   }

	if(hasError==1){
		return false;
	}else{
			var user = {};
			user.product = {};
			user.product.serviceid = serviceid;
			user.product.service_name = service_name;
            user.product.terms1 = terms1;
            if (document.getElementById('brand').checked == true) {
                user.product.brandname="Yes";
            } else {
                user.product.brandname="NA";
            }
            if (document.getElementById('class').checked == true) {
                user.product.classname="Yes";
            } else {
                user.product.classname="NA";
            }	
			var q = JSON.stringify(user);
        	jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_Service",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#myModal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#service_datatable').DataTable().ajax.reload(null,false);
                        //window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#myModal').modal('hide');
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



   