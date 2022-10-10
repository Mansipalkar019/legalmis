function validate_add_roles(ele){
    hide_message_box(ele);
    var hasError = 0;
    var user_name=$('#user_name').val();
    var password=$('#password').val();
    var roles=$('#roles').val();
    if(jQuery.trim(user_name) == '')
    {
        showError("Please Enter the User Name","user_name");hasError=1;
        
    }
    else {
        changeError("user_name");
    }

    if(jQuery.trim(password) == '')
    {
        showError("Please Enter the Password","password");hasError=1;
        
    }
    else {
        changeError("password");
    }

    if(jQuery.trim(roles) == '')
    {
        showError("Please Select Role","roles");hasError=1;
        
    }
    else {
        changeError("roles");
    }

    if(hasError==1){
        return false;
    }else{
        
            var user = {};
            user.product = {};
            user.product.user_name = user_name;
            user.product.password = password;
            user.product.roles = roles;

            var q = JSON.stringify(user);
            jQuery.ajax({
                dataType: 'json',
                type: "POST",
                url: bases_url+"Masters/add_role",
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
                        $('#roles_datatable').DataTable().ajax.reload(null,false);
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

function delete_role(ele,role_id){
    if(confirm("Are you sure wanted to delete this Role?")){
        var user = {};
        user.product = {};
        user.product.role_id = role_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"Masters/delete_roles",
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

function validate_update_roles(ele){

	var hasError = 0;
    var user_name=$('#user_name1').val();
    var password=$('#password1').val();
    var roles1=$('#roles1').val();
   
    var user_id=$('#user_id').val();
    if(jQuery.trim(user_name) == '')
    {
        showError("Please Enter the User Name","user_name");hasError=1;
        
    }
    else {
        changeError("user_name");
    }

    if(jQuery.trim(password) == '')
    {
        showError("Please Enter the Password","password");hasError=1;
        
    }
    else {
        changeError("password");
    }

    if(jQuery.trim(roles1) == '')
    {
        showError("Please Select Role","roles1");hasError=1;
        
    }
    else {
        changeError("roles1");
    }

	if(hasError==1){
		return false;
	}else{
			var user = {};
			user.product = {};
            user.product.user_name = user_name;
            user.product.password = password;
            user.product.roles1 = roles1;
            user.product.user_id = user_id;		
			var q = JSON.stringify(user);
            jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_roles",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#roleModal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#roles_datatable').DataTable().ajax.reload(null,false);
                        window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#roleModal').modal('hide');
                        swal({
                            title: "Warning",
                            text: response.msg,
                            icon: "warning",
                            dangerMode: true,
                            timer: 1000
                          });
                        window.setTimeout(function() { $(".alert-danger").alert('close'); }, 1000);
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
          url: bases_url+"Masters/get_all_roles",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
            $('#roles1').val(data['roles_id']);
            $('#roles1').select2().trigger('change');
            $('#user_id').val(data['user_id']);
                $('#user_name1').val(data['username']);
                $('#password1').val(data['decryptpassword']);
              
          }
       });
       
    });

