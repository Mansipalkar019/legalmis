function validate_add_doclist(ele){
    hide_message_box(ele);
    var hasError = 0;
    var servicename=$('#servicename').val();
    var services=$('#services').val();
    if(jQuery.trim(servicename) == '')
    {
        showError("Please Enter the Document Name","servicename");hasError=1;
        
    }
    else {
        changeError("servicename");
    }

    if(jQuery.trim(services) == '')
    {
        showError("Please Select Service","services");hasError=1;
        
    }
    else {
        changeError("services");
    }

    if(hasError==1){
        return false;
    }else{
        
            var user = {};
            user.product = {};
            user.product.servicename = servicename;
            user.product.services = services;

            var q = JSON.stringify(user);
            console.log(q);
            jQuery.ajax({
                dataType: 'json',
                type: "POST",
                url: bases_url+"Masters/add_doc",
                data: {'jsonObj' : q},
                cache: false,
                beforeSend: function(){ 
                    jQuery(".btn-quirk").text('Please Wait!.').prop('disabled', true);
                },
                success: function(res){
                    jQuery(".btn-quirk").text('Submit').prop('disabled', false);
                      if(res.status=='1'){ // Success
                        $('form#basicForm').trigger('reset');
                        $('#services').val(null).trigger('change');
                        // $('.alert-success').css('display','block').html(res.msg); 
                        // $('.alert-danger').css('display','none'); 
                        swal({
                            title: "Success",
                            text: res.msg,
                            icon: "success",
                            timer: 1000
                          });
                        $('#doc_list_datatable').DataTable().ajax.reload(null,false);
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

function validate_update_banner(ele){
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

function delete_doc_list(ele,service_id){
    if(confirm("Are you sure wanted to delete this Service?")){
        var user = {};
        user.product = {};
        user.product.service_id = service_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"Masters/delete_documentlist",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ 
                jQuery(ele).html('..').prop('disabled', true);
            },
            success: function(res){
                if(res.status=='1'){ // Success
                      jQuery(ele).closest('tr').remove();
                  }
                   $('#doc_list_datatable').DataTable().ajax.reload(null,false);
              }
          });
    }
    return false;
}

function validate_update_doclist(ele){

	var hasError = 0;
	var serviceid = $("#serviceid").val();
	var service_name = $("#service_name").val();
    var id = $("#service_id").val();
	if(jQuery.trim(service_name)==''){
		 showError("Please Enter Document List","service_name"); hasError = 1; 
	}else{
		changeError("service_name");
	}

    if(jQuery.trim(serviceid)==''){
        showError("Please Select Service ","serviceid"); hasError = 1; 
   }else{
       changeError("serviceid");
   }
	if(hasError==1){
		return false;
	}else{
			var user = {};
			user.product = {};
			user.product.serviceid = serviceid;
			user.product.service_name = service_name;
            user.product.id = id;		
			var q = JSON.stringify(user);
            jQuery.ajax({
				dataType: 'json',
				type: "POST",
				url: bases_url+"Masters/Update_Doclist",
				data: {'jsonObj' : q},
				cache: false,
				beforeSend: function(){ 
					jQuery(".btn-save").html('Please Wait!.').prop('disabled', true);
				},
				success: function(response){
					if(response.status=='1'){ // Success
                        $('#doclistModal').modal('hide');
                        swal({
                            title: "Success",
                            text: response.msg,
                            icon: "success",
                            timer: 1000
                          });
                      
                        $('#doc_list_datatable').DataTable().ajax.reload(null,false);
                        window.setTimeout(function() { $(".alert-success").alert('close'); }, 1000);
		          	}else{ // Failed
                        $('#doclistModal').modal('hide');
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


function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};

$(document).on('click', '.edit_document_list', function () {
    var id = $(this).attr("id");
       $.ajax({
          url: bases_url+"masters/get_doc_list_on_id",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
               
                $('#service_name').val(data['name']);
                $('#service_id').val(data['id']);
                $('#serviceid').val(data['service_id']);
                $('#serviceid').trigger('change.select2');
             
          }
       });
       
    });

    function delete_sales_report(ele,id){

        swal({
            title: "Delete?",
            text: "Are you sure you want to delete ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Delete",
            closeOnConfirm: false
        }).then(function() {
            $.ajax({
                type: "post",
                url: bases_url+'Sales/delete_service',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(res) {
                    swal({
                        title: "Deleted!",
                        text: res.error,
                        timer: 1700,
                        showConfirmButton: false,
                        type: 'success'
                    });
                    $('#doc_list_datatable').DataTable().ajax.reload(null,false);
                }
            })
        });
        // swal({
        //     title: "Are you sure?",
        //     text: "You want to delete this sale report ?",
        //     type: "warning",
        //     showCancelButton: true,
        //     closeOnConfirm: false,
        //     showLoaderOnConfirm: true,
        //     confirmButtonClass: "btn-danger",
        //     confirmButtonText: "Yes, delete it!",
        //   }).then(function() {
        //     setTimeout(function() {
        //       $.post( bases_url+'Sales/delete_service', {
        //           id: id
        //         },
        //         function(response) {
        //         if (response.status == 'success') {
        //               $('#doc_list_datatable').DataTable().ajax.reload(null,false);
                     
        //         }
                 
        //         }
        //       );
          
        //     }, 50);
        //   });
       
     }