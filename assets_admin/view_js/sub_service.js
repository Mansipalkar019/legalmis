function validate_add_subservice(ele){
     hide_message_box(ele);
     var hasError = 0;
     var services=$('#services').val();
     var sub_service_name=$('#sub_service_name').val();
      if(jQuery.trim(services) == '')
     {
         showError("Please Select the Service","services");hasError=1;
         
     }
     else {
         changeError("services");
     }

     if(jQuery.trim(sub_service_name) == '')
     {
         showError("Please Select the Service Name","sub_service_name");hasError=1;
         
     }
     else {
         changeError("sub_service_name");
     }
 
     if(hasError==1){
         return false;
     }else{
         
             var user = {};
             user.product = {};
             user.product.services = services;
             user.product.sub_service_name = sub_service_name;
                         
             var q = JSON.stringify(user);
            
             jQuery.ajax({
                 dataType: 'json',
                 type: "POST",
                 url: bases_url+'Masters/addsubservice',
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
                         $('#sub_service_datatable').DataTable().ajax.reload(null,false);
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

 function validate_update_sub_services(ele){

	var hasError = 0;
	var serviceid = $("#serviceid").val();
	var name = $("#name").val();
    var id = $("#id").val();
	if(jQuery.trim(serviceid)==''){
		 showError("Select Service","serviceid"); hasError = 1; 
	}else{
		changeError("serviceid");
	}

     if(jQuery.trim(name)==''){
          showError("Please Enter sub service","name"); hasError = 1; 
    }else{
         changeError("name");
    }

	if(hasError==1){
		return false;
	}else{
			var user = {};
			user.product = {};
			user.product.serviceid = serviceid;
			user.product.name = name;
            user.product.id = id;	
			var q = JSON.stringify(user);
          	jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_Sub_Service",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#subserviceModal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#sub_service_datatable').DataTable().ajax.reload(null,false);
                        window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#subserviceModal').modal('hide');
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

function delete_sub_service(ele,service_id){
     if(confirm("Are you sure wanted to delete the selected banner?")){
         var user = {};
         user.product = {};
         user.product.service_id = service_id;
                     
         var q = JSON.stringify(user);
         jQuery.ajax({
             dataType: 'json',
             type: "POST",
             url: bases_url+"Masters/delete_sub_service",
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
 $(document).on('click', '.a_category_view', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"Masters/get_all_sub_services",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
        
            $('#serviceid').val(data['service_id']);
                $('#serviceid').trigger('change.select2');
               
                $('#name').val(data['name']);
                $('#id').val(data['id']);
            
          }
       });
       
    });