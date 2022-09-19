function service() {
    var service =$("#service").val();

    if(jQuery.trim(service) == "")
    { showError("Please Enter Service Name","service"); hasError=1; }
    else{ changeError("service")}

    if(hasError ==1)
    {
        return false;
    }else{
        $.ajax({
            type: "POST",
            url: bases_url + 'Services/saveservice',
            data: {
                service: service,
            },
            success: function(result) {
                var productdata = $.parseJSON(result);
                if (productdata['status'] == 'success') {
                   
                } else {
                   
                }
    
            }
        });
    }
    
}
