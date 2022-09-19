				
							(function ($) {	
								$.fn.serializeFormJSON = function () {
									var o = {};
									var a = this.serializeArray();
									$.each(a, function () {
										if (o[this.name]) {
											if (!o[this.name].push) {
												o[this.name] = [o[this.name]];
											}
											o[this.name].push(this.value || '');
										} else {
											o[this.name] = this.value || '';
										}
									});
									return o;
								};
							});
							
							function showErrorOnElement(id){
								$("#"+id).addClass("errorOnElemet");
							}
							
							function changeErrorOnElement(id){
								$("#"+id).removeClass("errorOnElemet");
							}
							
							function showError(msg, id){
								if($("#"+id).closest(".form-group").hasClass("has-error")){
									$("#"+id).closest(".form-group").find("label.error").html("<label class='error'>"+ msg +"</label>");
								}else{
									$("#"+id).closest(".form-group").addClass("has-error");
									$( "<label class='error'>"+ msg +"</label>" ).appendTo( $("#"+id).closest(".form-group") );
								}
							}
							
							function changeError(id){
								$("#"+id).closest(".form-group").removeClass("has-error");
								$("#"+id).closest(".form-group").find("label.error").remove();
							}
							
							function trim(str){ 
								return((""+str).replace(/^\s*([\s\S]*\S+)\s*$|^\s*$/,'$1') ); 
							}
							
							function isValidEmail(value){
								var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
								if(filter.test(trim(value)))
									return true;
								else
									return false;
							} 
							
							function isPhone(value){
								if(value.length !=10){
									return false;
								}else{
									var iChars = "0123456789+-#/() ";
									for (var i = 0; i < value.length; i++){
										if (iChars.indexOf(value.charAt(i)) == -1){
											return false;
										}
									} 
									return true;
								}
							}
							
							function is_mobile_number(value){
								var iChars = "0123456789";
								if(value.length!=10){
									return false;
								}
								for (var i = 0; i < value.length; i++){
									if (iChars.indexOf(value.charAt(i)) == -1){
										return false;
									}
								} 
								return true;
							}
							
							
							function isNumber(value){
								var iChars = "0123456789";
								for (var i = 0; i < value.length; i++){
									if (iChars.indexOf(value.charAt(i)) == -1){
										return false;
									}
								} 
								return true;
							}
							
							function isNumberKey(evt) {
								evt = (evt) ? evt : window.event;
								var charCode = (evt.which) ? evt.which : evt.keyCode;
								if (charCode > 31 && (charCode < 48 || charCode > 57)) {
									return false;
								}
								return true;
							}
							
							function isNumDigit(value){
								var iChars = "0123456789.";
								for (var i = 0; i < value.length; i++){
									if (iChars.indexOf(value.charAt(i)) == -1){
										return false;
									}
								} 
								return true;
							}
							
							function isPincode(value){
								var iChars = "0123456789() ";
								for (var i = 0; i < value.length; i++){
									if (iChars.indexOf(value.charAt(i)) == -1){
										return false;
									}
								} 
								return true;
							} //End of isPinocde()
							
							function is_int(value){
								if(value>0 && (value/1)==0){
									return true;
								}else{
									return false;
								}
							}
							
							function checkXSLFile(inputfiled) {
								var file = $('input[name=' + inputfiled + ']').val();
								var exts = ['xls','xlsx'];
								// first check if file field has any value
								if (file) {
									// split file name at dot
									var get_ext = file.split('.');
									// reverse name to check extension
									get_ext = get_ext.reverse();
									// check file type is valid as given in 'exts' array
									if ($.inArray(get_ext[0].toLowerCase(), exts) > -1) {
										return true;
									} else {
										return false;
									}
								}
							}
							
							
							function check_csv_file(inputfiled) {
								var file = $('input[name=' + inputfiled + ']').val();
								var exts = ['csv'];
								// first check if file field has any value
								if (file) {
									// split file name at dot
									var get_ext = file.split('.');
									// reverse name to check extension
									get_ext = get_ext.reverse();
									// check file type is valid as given in 'exts' array
									if ($.inArray(get_ext[0].toLowerCase(), exts) > -1) {
										return true;
									} else {
										return false;
									}
								}
							}
							
							
							function check_image_file(inputfiled) {
								var file = $('input[name=' + inputfiled + ']').val();
								var exts = ['png','jpg'];
								// first check if file field has any value
								if (file) {
									// split file name at dot
									var get_ext = file.split('.');
									// reverse name to check extension
									get_ext = get_ext.reverse();
									// check file type is valid as given in 'exts' array
									if ($.inArray(get_ext[0].toLowerCase(), exts) > -1) {
										return true;
									} else {
										return false;
									}
								}
							}
							
							
							function scrollToElement(selector, time, verticalOffset) {
								time = typeof (time) != 'undefined' ? time : 1000;
								verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
								element = $(selector);
								offset = element.offset();
								offsetTop = offset.top + verticalOffset;
								$('html, body').animate({
									scrollTop: offsetTop
								}, time);
							}
							
							function is_email_exist(email){
								var user = {};
								user.account = {};
								user.account.emailaddress = email;
								var q = JSON.stringify(user);
							
								var result = jQuery.ajax({
									url: jsBaseUrl+"home/check_email_address",
									type: 'POST',
									data: {'jsonObj': q},
									cache: false,
									async: false,
									success: function(eMsg) {
									}
								}).responseText;
								return result;
							}
							
							
							function is_offer_exist(offer_code){
								var offer = {};
								offer.account = {};
								offer.account.offer_code = offer_code;
								var q = JSON.stringify(offer);
							
								var result = jQuery.ajax({
									url: jsBaseUrl+"home/check_offer",
									type: 'POST',
									data: {'jsonObj': q},
									cache: false,
									async: false,
									success: function(eMsg) {
									}
								}).responseText;
								return result;
							}
							
							function hide_message_box(ele){
								jQuery(ele).find('.alert-success').css('display','none'); 
								jQuery(ele).find('.alert-danger').css('display','none'); 
							}
							
							
						
							