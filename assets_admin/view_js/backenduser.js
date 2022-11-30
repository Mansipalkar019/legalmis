

function error_msg(t) {
    for (var i in t) "" != t[i] ? $("#" + i + "_error").html(t[i]).show() : $("#" + i + "_error").html("").hide();
        $(".error_msg").delay(10000).fadeOut()
  }

$("#add_backend_user_form").submit(function(e) {
    e.preventDefault();
    var formData = new FormData($("#add_backend_user_form")[0]);
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
          
        },
        success: function(response) {
          if (response.status == 'success') {
            $('form#add_backend_user_form').trigger('reset');
             $('#user_list_datatable').DataTable().ajax.reload(null,false);
            swal({
              title: "success",
              text: response.status.msg,
              icon: "success",
              dangerMode: true,
              timer: 1500
           });
            } else if (response.status == 'failure') {
             error_msg(response.error);
            }  else {
                window.location.replace(response["url"]);
            }
        },
        error: function(error, message) {},
    });
    return false;
 });

 function delete_users(ele,user_id){
    if(confirm("Are you sure wanted to delete this Service?")){
        var user = {};
        user.product = {};
        user.product.user_id = user_id;
                    
        var q = JSON.stringify(user);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: bases_url+"AddBackendUsers/delete_users",
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

$(document).on('click', '.edit_user_list_data', function () {
    var id = $(this).attr("id");
      $.ajax({
          url: bases_url+"AddBackendUsers/get_users_data_on_id",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
             var data =  data.user_data
                $('#edit_first_name').val(data.firstname);
                $('#edit_last_name').val(data.lastname);
                $('#edit_mobile_no').val(data.mobile_no);
                $('#edit_email').val(data.email);
                $('#edit_user_name').val(data.username);
                $('#edit_password').val(data.decrytpassword);
                $('#edit_user_id').val(data.user_id);
                $('#edit_roles').val(data.roles_id);
                $('#edit_roles').trigger('change.select2')
          }
       });
       
    });

    $("#update_backend_user_form").submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#update_backend_user_form")[0]);
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
              
            },
            success: function(response) {
              if (response.status == 'success') {
                 $('#user_list_datatable').DataTable().ajax.reload(null,false);
                swal({
                  title: "success",
                  text: response.status.msg,
                  icon: "success",
                  dangerMode: true,
                  timer: 1500
               });

                } else if (response.status == 'failure') {
                 error_msg(response.error);
                }  else {
                    window.location.replace(response["url"]);
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

        $(document).ready(function() {
         $(document).on('click', '.delete_user_list', function(e) {
             var id = $(this).attr("id");
             confirmDelete(id);
             e.preventDefault();
         });
    });

 function confirmDelete(id) {
     swal({
         title: "Delete?",
         text: "Are you sure you want to delete ?",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: "#DD6B55",
         confirmButtonText: "Delete",
         closeOnConfirm: false
     }, function() {
         $.ajax({
             type: "post",
             url: bases_url+"AddBackendUsers/delete_users",
             data: {
                 id: id,
             },
             dataType: 'json',
             success: function(res) {
                swal({
                     title: "Deleted!",
                     text: res.message,
                     timer: 1700,
                     showConfirmButton: false,
                     type: 'success'
                });
                $('#user_list_datatable').DataTable().ajax.reload(null,false);
             }
         })
     });
 }