function error_msg(t) {
    for (var i in t) "" != t[i] ? $("#" + i + "_error").html(t[i]).show() : $("#" + i + "_error").html("").hide();
        $(".error_msg").delay(10000).fadeOut()
  }

  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
   }

$("#work_allocation_form").submit(function(e) {
    e.preventDefault();
    var formData = new FormData($("#work_allocation_form")[0]);
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
            swal({
              title: "success",
              text: response.status.msg,
              icon: "success",
              dangerMode: true,
              timer: 1500
           });
           window.location.replace(bases_url+'Workallocation');
            } else if (response.status == 'failure') {
             error_msg(response.error);
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

$(document).on('click', '.a_category_view', function () {
    var id = $(this).attr("id");
      $.ajax({
          url: bases_url+"AddBackendUsers/get_all_users",
          method: "POST",
          data: {
             id: id
          },
          dataType: "json",
          success: function (data) {
            $('#firstname1').val(data.firstname);
            $('#lastname1').val(data.lastname);
            $('#mobile_no1').val(data.mobile_no);
            $('#email1').val(data.email);
            $('#username1').val(data.username);
            $('#password1').val(data.decrytpassword);
            $('#userid').val(data.user_id);
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
                swal({
                  title: "success",
                  text: response.status.msg,
                  icon: "success",
                  dangerMode: true,
                  timer: 1500
               });
               window.location.replace(bases_url+'AddBackendUsers');
                } else if (response.status == 'failure') {
                 error_msg(response.error);
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