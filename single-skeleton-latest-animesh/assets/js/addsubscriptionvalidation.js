function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	{
	// Firefox, Opera 8.0+, Safari
		xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
	// Internet Explorer
		try
		{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}

$(document).ready(function()
{
	$(".paypalpayment").append("<div class='paidcheck paymentbuttons' style='text-align: center;' id='pay_subscription'></div>");
	$.validator.addMethod('alphanumericformat', function(value, element, param)
	{
  		var _URL = window.URL;
        var  pattern=/^[A-z a-z 0-9.]+$/;
		var $el=$(element);
		return $el.val().match(pattern);
          
   });
	
	$.validator.addMethod('charactersonly', function(value, element, param)
	{
  		var _URL = window.URL;
        var  pattern=/^[A-z a-z .]+$/;
		var $el=$(element);
		return $el.val().match(pattern);
          
   });
	
	$.validator.addMethod('numbersonly', function(value, element, param)
	{
  		var _URL = window.URL;
        var  pattern=/^[0-9+]+$/;
		var $el=$(element);
		return $el.val().match(pattern);
          
   });
	
   function constaclsubscriuserspassword()
   {
	 return $('.constacl_subscri_users_password').val()!="";
   }
	
	$("#addsubscriptionfrm").validate
	({
		rules: 
		{
			constacl_subscri_organization_name:
			{
				required: true,
				minlength: 3,
				maxlength: 255,
				alphanumericformat: true
			},
			constacl_subscri_organization_email:
			{
				required: true,
				email: true
			},
			constacl_subscri_organization_contactno:
			{
				required: true,
				numbersonly: true
			},
			constacl_subscri_organization_address:
			{
				required: true,
			},
			constacl_subscri_organization_isactive:
			{
				required: true,
			},
			constacl_subscri_organization_subscription_days:
			{
				required: true,
			},
			constacl_subscri_users_name:
			{
				required: true,
				minlength: 3,
				maxlength: 255,
				alphanumericformat: true
			},
			constacl_subscri_users_email:
			{
				required: true,
				email:true
			},
			constacl_subscri_users_contactno:
			{
				required: true,
				numbersonly: true
			},
			constacl_subscri_users_password:
			{
				required: true,
				minlength: 3,
				maxlength: 255
			},
			constacl_subscri_users_re_password:
			{
				required: true,
				minlength: 3,
				maxlength: 255,
				equalTo: '#constacl_subscri_users_password'
			},
			constacl_subscri_users_isactive:
			{
				required: true
			}		
		},
		messages: 
		{
			constacl_subscri_organization_name: 
			{
				required: "Please enter organization name",
				minlength: "Organization name should have minimum 3 characters",
				maxlength: "Organization name should only have Maximum 255 Characters",
				charactersonly: "Organization name should be in alphanumeric characters only"
				
			},
			constacl_subscri_organization_email : 
			{
				required: "Please enter organization email",
				email: "Please enter organization email in email format"
			},
			constacl_subscri_organization_contactno : 
			{
				required: "Please enter organization contactno.",
				numbersonly: "Please enter organization contactno in number format, only + sign allowed"
			},
			constacl_subscri_organization_address :
			{
				required: "Please enter organization address."
			},
			constacl_subscri_organization_isactive :
			{
				required: "Please select organization status"
			},
			constacl_subscri_organization_subscription_days :
			{
				required: "Please select organization subscription plan."
			},
			constacl_subscri_users_name :
			{
				required: "Please enter organization admin name",
				minlength: "Organization admin name should have minimum 3 characters",
				maxlength: "Organization admin name should only have Maximum 255 Characters",
				charactersonly: "Organization admin name should be in alphanumeric characters only"
			},
			constacl_subscri_users_email :
			{
				required: "Please enter organization admin email",
				email: "Please enter organization admin email in email format"
			},
			constacl_subscri_users_contactno :
			{
				required: "Please enter organization admin contactno.",
				numbersonly: "Please enter organization admin contactno in number format, only + sign allowed"
			},
			constacl_subscri_users_password :
			{
				required: "Please enter organization admin password",
				minlength: "Organization admin password should have minimum 3 characters",
				maxlength: "Organization admin password should only have Maximum 255 Characters"
			},
			constacl_subscri_users_re_password :
			{
				required: "Please enter organization admin re password",
				minlength: "Organization admin re password should have minimum 3 characters",
				maxlength: "Organization admin re password should only have Maximum 255 Characters",
				equalTo: "Organization admin re password should be equal to password",
			},
			constacl_subscri_users_isactive :
			{
				required: "Please select organization admin status",
			}
			
		},
		errorElement: 'span',
		errorElementClass: 'pdt_error_class_validate',
		errorClass: 'pdt_error_class_validate',
		errorPlacement: function(error, element) {},
		highlight: function(element, errorClass, validClass) {
			$(element).addClass(this.settings.errorElementClass).removeClass(errorClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(this.settings.errorElementClass).removeClass(errorClass);
		},
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		errorPlacement: function (error, element) {  error.insertAfter(element); error.fadeOut(5000, function() { $(this).remove(); });}
	});
	
	
	
	$("#editsubscriptionfrm").validate
	({
		rules: 
		{
			constacl_subscri_organization_name:
			{
				required: true,
				minlength: 3,
				maxlength: 255,
				alphanumericformat: true
			},
			constacl_subscri_organization_email:
			{
				required: true,
				email: true
			},
			constacl_subscri_organization_contactno:
			{
				required: true,
				numbersonly: true
			},
			constacl_subscri_organization_address:
			{
				required: true,
			},
			constacl_subscri_organization_isactive:
			{
				required: true,
			},
			constacl_subscri_users_name:
			{
				required: true,
				minlength: 3,
				maxlength: 255,
				alphanumericformat: true
			},
			constacl_subscri_users_email:
			{
				required: true,
				email:true
			},
			constacl_subscri_users_contactno:
			{
				required: true,
				numbersonly: true
			},
			constacl_subscri_users_password:
			{
				minlength:
				{
						depends:constaclsubscriuserspassword,
						param:3
				},
				maxlength: 
				{
						depends:constaclsubscriuserspassword,
						param:255
				}
			},
			constacl_subscri_users_isactive:
			{
				required: true
			}		
		},
		messages: 
		{
			constacl_subscri_organization_name: 
			{
				required: "Please enter organization name",
				minlength: "Organization name should have minimum 3 characters",
				maxlength: "Organization name should only have Maximum 255 Characters",
				charactersonly: "Organization name should be in alphanumeric characters only"
				
			},
			constacl_subscri_organization_email : 
			{
				required: "Please enter organization email",
				email: "Please enter organization email in email format"
			},
			constacl_subscri_organization_contactno : 
			{
				required: "Please enter organization contactno.",
				numbersonly: "Please enter organization contactno in number format, only + sign allowed"
			},
			constacl_subscri_organization_address :
			{
				required: "Please enter organization address."
			},
			constacl_subscri_organization_isactive :
			{
				required: "Please select organization status"
			},
			constacl_subscri_users_name :
			{
				required: "Please enter organization admin name",
				minlength: "Organization admin name should have minimum 3 characters",
				maxlength: "Organization admin name should only have Maximum 255 Characters",
				charactersonly: "Organization admin name should be in alphanumeric characters only"
			},
			constacl_subscri_users_email :
			{
				required: "Please enter organization admin email",
				email: "Please enter organization admin email in email format"
			},
			constacl_subscri_users_contactno :
			{
				required: "Please enter organization admin contactno.",
				numbersonly: "Please enter organization admin contactno in number format, only + sign allowed"
			},
			constacl_subscri_users_password :
			{
				minlength: "Organization admin password should have minimum 3 characters",
				maxlength: "Organization admin password should only have Maximum 255 Characters"
			},
			constacl_subscri_users_isactive :
			{
				required: "Please select organization admin status",
			}
			
		},
		errorElement: 'span',
		errorElementClass: 'pdt_error_class_validate',
		errorClass: 'pdt_error_class_validate',
		errorPlacement: function(error, element) {},
		highlight: function(element, errorClass, validClass) {
			$(element).addClass(this.settings.errorElementClass).removeClass(errorClass);
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(this.settings.errorElementClass).removeClass(errorClass);
		},
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		errorPlacement: function (error, element) {  error.insertAfter(element); error.fadeOut(5000, function() { $(this).remove(); });}
	});
	

	
	
});
	
$(document).on("click",".savesubscription",function(e)
{
	e.preventDefault();
	if(!$(this).hasClass("disabled"))
	{
		if ($('#addsubscriptionfrm').valid())
		{
			var SITE_URL=$(".base_url").val();
			//alert(SITE_URL);
			var constacl_subscri_organization_name=$(".constacl_subscri_organization_name").val();
			var constacl_subscri_organization_email=$(".constacl_subscri_organization_email").val();
			var constacl_subscri_organization_contactno= $(".constacl_subscri_organization_contactno").val();
			var constacl_subscri_organization_address=$(".constacl_subscri_organization_address").val();
			var constacl_subscri_organization_isactive=$(".constacl_subscri_organization_isactive").val();
			var constacl_subscri_organization_subscription_days=$(".constacl_subscri_organization_subscription_days").val();
			var constacl_subscri_organization_subscription_fees_amount = $(".constacl_subscri_organization_subscription_days option:selected").attr("feesamount");
			var constacl_subscri_users_name=$(".constacl_subscri_users_name").val();
			var constacl_subscri_users_email=$(".constacl_subscri_users_email").val();
			var constacl_subscri_users_contactno=$(".constacl_subscri_users_contactno").val();
			var constacl_subscri_users_password=$(".constacl_subscri_users_password").val();
			var constacl_subscri_users_password_confirmation=$(".constacl_subscri_users_re_password").val();
			var constacl_subscri_users_isactive=$(".constacl_subscri_users_isactive").val();
			subscription_add=GetXmlHttpObject();
			if (subscription_add==null)
			{
				alert ("Your browser does not support AJAX!");
				return;
			} 
			var token = $('meta[name="csrf-token"]').attr('content');
			//alert(constacl_subscri_organization_subscription_fees_amount);
			var formData = new FormData();
			formData.append("constacl_subscri_organization_name",constacl_subscri_organization_name);
			formData.append("constacl_subscri_organization_email",constacl_subscri_organization_email);
			formData.append("constacl_subscri_organization_contactno",constacl_subscri_organization_contactno);
			formData.append("constacl_subscri_organization_address",constacl_subscri_organization_address);
			formData.append("constacl_subscri_organization_isactive",constacl_subscri_organization_isactive);
			formData.append("constacl_subscri_organization_subscription_days",constacl_subscri_organization_subscription_days);
			formData.append("constacl_subscri_users_name",constacl_subscri_users_name);
			formData.append("constacl_subscri_users_email",constacl_subscri_users_email);
			formData.append("constacl_subscri_users_contactno",constacl_subscri_users_contactno);
			formData.append("constacl_subscri_users_password",constacl_subscri_users_password);
			formData.append("constacl_subscri_users_password_confirmation",constacl_subscri_users_password_confirmation);
			formData.append("constacl_subscri_users_isactive",constacl_subscri_users_isactive);
			formData.append("constacl_subscri_organization_subscription_fees_amount",constacl_subscri_organization_subscription_fees_amount);
			subscription_add.onreadystatechange=stateChangedgetsavesubscriptiondetails;
				 
			subscription_add.open("post", SITE_URL+"/save-subscription", true);
			 
			if (token) 
			{
				subscription_add.setRequestHeader("X-CSRF-TOKEN", token);
			}
			else
			{
			 	subscription_add.setRequestHeader("enctype", "multipart/form-data");
			
			}
			subscription_add.send(formData);
			$(".savesubscription").addClass("disabled");
			$(".loadingsavesubscriptions").show();
			//$("#addsubscriptionfrm").submit();
		}
	}
	
});

function stateChangedgetsavesubscriptiondetails() 
{
	if (subscription_add.readyState==4)
	{
		//alert(subscription_add.responseText);
		var response_add=JSON.parse(subscription_add.responseText);
		$(".savesubscription").removeClass("disabled");
		$(".loadingsavesubscriptions").hide();
		if(response_add['errors'])
		{
			if(response_add.errors.constacl_subscri_organization_name)
			{
				 $(".constacl_subscri_organization_name_error").html(response_add["errors"]["constacl_subscri_organization_name"]);
				 $(".constacl_subscri_organization_name_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_name_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_organization_email)
			{
				 $(".constacl_subscri_organization_email_error").html(response_add["errors"]["constacl_subscri_organization_email"]);
				 $(".constacl_subscri_organization_email_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_email_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_organization_contactno)
			{
				 $(".constacl_subscri_organization_contactno_error").html(response_add["errors"]["constacl_subscri_organization_contactno"]);
				 $(".constacl_subscri_organization_contactno_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_contactno_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_organization_address)
			{
				 $(".constacl_subscri_organization_address_error").html(response_add["errors"]["constacl_subscri_organization_address"]);
				 $(".tbl_brand_id_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_address_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_organization_isactive)
			{
				 $(".tbl_seller_id_error").html(response_add["errors"]["constacl_subscri_organization_isactive"]);
				 $(".constacl_subscri_organization_isactive_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_isactive_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_organization_subscription_days)
			{
				 $(".constacl_subscri_organization_subscription_days_error").html(response_add["errors"]["constacl_subscri_organization_subscription_days"]);
				 $(".constacl_subscri_organization_subscription_days_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_subscription_days_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_name)
			{
				 $(".constacl_subscri_users_name_error").html(response_add["errors"]["constacl_subscri_users_name"]);
				 $(".constacl_subscri_users_name_error").show();
				 setTimeout(function(){ $(".tbl_medicine_in_stock_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_email)
			{
				 $(".constacl_subscri_users_email_error").html(response_add["errors"]["constacl_subscri_users_email"]);
				 $(".constacl_subscri_users_email_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_email_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_contactno)
			{
				 $(".constacl_subscri_users_contactno_error").html(response_add["errors"]["constacl_subscri_users_contactno"]);
				 $(".constacl_subscri_users_contactno_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_contactno_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_password)
			{
				 $(".constacl_subscri_users_password_error").html(response_add["errors"]["constacl_subscri_users_password"]);
				 $(".constacl_subscri_users_password_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_password_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_re_password)
			{
				 $(".constacl_subscri_users_re_password_error").html(response_add["errors"]["constacl_subscri_users_re_password"]);
				 $(".constacl_subscri_users_re_password_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_re_password_error").fadeOut(); }, 3000);
			}
			
			if(response_add.errors.constacl_subscri_users_isactive)
			{
				 $(".constacl_subscri_users_isactive_error").html(response_add["errors"]["constacl_subscri_users_isactive"]);
				 $(".constacl_subscri_users_isactive_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_isactive_error").fadeOut(); }, 3000);
			}
						
		}
		
		else if(response_add['success'])
		{
			/*$(".constacl_subscri_organization_name").val("");
			$(".constacl_subscri_organization_email").val("");
			$(".constacl_subscri_organization_contactno").val("");
			$(".constacl_subscri_organization_address").val("");
			$(".constacl_subscri_organization_isactive").val("");
			$(".constacl_subscri_organization_subscription_days").val("");
			$(".constacl_subscri_users_name").val("");
			$(".constacl_subscri_users_email").val("");
			$(".constacl_subscri_users_contactno").val("");
			$(".constacl_subscri_users_password").val("");
			$(".constacl_subscri_users_re_password").val("");
			$(".constacl_subscri_users_isactive").val("");*/
			if(response_add['constacl_subscri_organization_subscription_type']	== "Trial")
			{
				$(".constacl_subscri_organization_name").val("");
				$(".constacl_subscri_organization_email").val("");
				$(".constacl_subscri_organization_contactno").val("");
				$(".constacl_subscri_organization_address").val("");
				$(".constacl_subscri_organization_isactive").val("");
				$(".constacl_subscri_organization_subscription_days").val("");
				$(".constacl_subscri_users_name").val("");
				$(".constacl_subscri_users_email").val("");
				$(".constacl_subscri_users_contactno").val("");
				$(".constacl_subscri_users_password").val("");
				$(".constacl_subscri_users_re_password").val("");
				$(".constacl_subscri_users_isactive").val("");
				
				if($(".alert").hasClass("alert-danger"))
				{
					$(".alert").removeClass("alert-danger");
				}
				$(".alert").addClass("alert-success");
				$(".notification_msg").html("Thanks for choosing 14 Days Trial Subscription");
				$(".response_notification").show();
				setTimeout(function(){ $(".response_notification").fadeOut(); }, 5000);
			}
			else
			{
				$(".constacl_subscri_organization_subscription_id").remove();
				$("<br><input type='hidden' class='constacl_subscri_organization_subscription_id' value='"+response_add['constacl_subscri_organization_subscription_id']+"'>").insertAfter(".response_notification_paypal");
				$(".alert").addClass("alert-success");
				$(".notification_msg").text("Thanks for choosing " + response_add["subscriptiontype"] +" Subscription at the cost of " + response_add["subscriptioncost"] +". Please pay the cost from paypal");
				$(".response_notification").show();
				
				$(".response_notification_paypal").show();
				$(".addsubscriptionformlayout").hide();
			}
		}	
	}
}



$(document).on("click",".updatesubscription",function(e)
{
	e.preventDefault();
	if(!$(this).hasClass("disabled"))
	{
		if ($('#editsubscriptionfrm').valid())
		{
			var SITE_URL=$(".base_url").val();
			//alert(SITE_URL);
			var constacl_subscri_organization_name=$(".constacl_subscri_organization_name").val();
			var constacl_subscri_organization_email=$(".constacl_subscri_organization_email").val();
			var constacl_subscri_organization_contactno= $(".constacl_subscri_organization_contactno").val();
			var constacl_subscri_organization_address=$(".constacl_subscri_organization_address").val();
			var constacl_subscri_organization_isactive=$(".constacl_subscri_organization_isactive").val();
			var constacl_subscri_users_name=$(".constacl_subscri_users_name").val();
			var constacl_subscri_users_email=$(".constacl_subscri_users_email").val();
			var constacl_subscri_users_contactno=$(".constacl_subscri_users_contactno").val();
			var constacl_subscri_users_password=$(".constacl_subscri_users_password").val();
			var constacl_subscri_users_isactive=$(".constacl_subscri_users_isactive").val();
			var constacl_subscri_organization_id = $(".constacl_subscri_organization_id").val();
			var constacl_subscri_users_id = $(".constacl_subscri_users_id").val();
			subscription_update=GetXmlHttpObject();
			if (subscription_update==null)
			{
				alert ("Your browser does not support AJAX!");
				return;
			} 
			var token = $('meta[name="csrf-token"]').attr('content');
			//alert(constacl_subscri_organization_subscription_fees_amount);
			var formData = new FormData();
			formData.append("constacl_subscri_organization_name",constacl_subscri_organization_name);
			formData.append("constacl_subscri_organization_email",constacl_subscri_organization_email);
			formData.append("constacl_subscri_organization_contactno",constacl_subscri_organization_contactno);
			formData.append("constacl_subscri_organization_address",constacl_subscri_organization_address);
			formData.append("constacl_subscri_organization_isactive",constacl_subscri_organization_isactive);
			
			formData.append("constacl_subscri_users_name",constacl_subscri_users_name);
			formData.append("constacl_subscri_users_email",constacl_subscri_users_email);
			formData.append("constacl_subscri_users_contactno",constacl_subscri_users_contactno);
			formData.append("constacl_subscri_users_password",constacl_subscri_users_password);
			
			formData.append("constacl_subscri_users_isactive",constacl_subscri_users_isactive);
			formData.append("constacl_subscri_organization_id",constacl_subscri_organization_id);
			formData.append("constacl_subscri_users_id",constacl_subscri_users_id);
			subscription_update.onreadystatechange=stateChangedgetupdatesubscriptiondetails;
				 
			subscription_update.open("post", SITE_URL+"/update-subscription", true);
			 
			if (token) 
			{
				subscription_update.setRequestHeader("X-CSRF-TOKEN", token);
			}
			else
			{
			 	subscription_update.setRequestHeader("enctype", "multipart/form-data");
			
			}
			subscription_update.send(formData);
			$(".updatesubscription").addClass("disabled");
			$(".loadingsavesubscriptions").show();
			//$("#addsubscriptionfrm").submit();
		}
	}
	
});

function stateChangedgetupdatesubscriptiondetails() 
{
	if (subscription_update.readyState==4)
	{
		//alert(subscription_add.responseText);
		var response_update=JSON.parse(subscription_update.responseText);
		$(".updatesubscription").removeClass("disabled");
		$(".loadingsavesubscriptions").hide();
		if(response_update['errors'])
		{
			if(response_update.errors.constacl_subscri_organization_name)
			{
				 $(".constacl_subscri_organization_name_error").html(response_update["errors"]["constacl_subscri_organization_name"]);
				 $(".constacl_subscri_organization_name_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_name_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_organization_email)
			{
				 $(".constacl_subscri_organization_email_error").html(response_update["errors"]["constacl_subscri_organization_email"]);
				 $(".constacl_subscri_organization_email_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_email_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_organization_contactno)
			{
				 $(".constacl_subscri_organization_contactno_error").html(response_update["errors"]["constacl_subscri_organization_contactno"]);
				 $(".constacl_subscri_organization_contactno_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_contactno_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_organization_address)
			{
				 $(".constacl_subscri_organization_address_error").html(response_update["errors"]["constacl_subscri_organization_address"]);
				 $(".tbl_brand_id_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_address_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_organization_isactive)
			{
				 $(".tbl_seller_id_error").html(response_update["errors"]["constacl_subscri_organization_isactive"]);
				 $(".constacl_subscri_organization_isactive_error").show();
				 setTimeout(function(){ $(".constacl_subscri_organization_isactive_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_users_name)
			{
				 $(".constacl_subscri_users_name_error").html(response_update["errors"]["constacl_subscri_users_name"]);
				 $(".constacl_subscri_users_name_error").show();
				 setTimeout(function(){ $(".tbl_medicine_in_stock_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_users_email)
			{
				 $(".constacl_subscri_users_email_error").html(response_update["errors"]["constacl_subscri_users_email"]);
				 $(".constacl_subscri_users_email_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_email_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_users_contactno)
			{
				 $(".constacl_subscri_users_contactno_error").html(response_update["errors"]["constacl_subscri_users_contactno"]);
				 $(".constacl_subscri_users_contactno_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_contactno_error").fadeOut(); }, 3000);
			}
			
			if(response_update.errors.constacl_subscri_users_password)
			{
				 $(".constacl_subscri_users_password_error").html(response_update["errors"]["constacl_subscri_users_password"]);
				 $(".constacl_subscri_users_password_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_password_error").fadeOut(); }, 3000);
			}
					
			
			if(response_update.errors.constacl_subscri_users_isactive)
			{
				 $(".constacl_subscri_users_isactive_error").html(response_update["errors"]["constacl_subscri_users_isactive"]);
				 $(".constacl_subscri_users_isactive_error").show();
				 setTimeout(function(){ $(".constacl_subscri_users_isactive_error").fadeOut(); }, 3000);
			}
						
		}
		
		else if(response_update['success'])
		{
			if($(".alert").hasClass("alert-danger"))
			{
				$(".alert").removeClass("alert-danger");
			}
			$(".alert").addClass("alert-success");
			$(".notification_msg").html(response_update['message']);
			$(".response_notification").show();
			setTimeout(function(){ $(".response_notification").fadeOut(); }, 5000);
		}
	}
}


	
$(document).keyup(function(e)
{
	if (e.which == 13) 
	{
		if(document.getElementById("addsubscriptionfrm")!=null)
		{
			$(".savesubscription").trigger("click");
		}
		else
		{
			$(".updateesubscription").trigger("click");
		}
	}
});

$("body").on("click",".okcancel",function(e)
{
	$(".constacl_subscri_organization_name").val("");
	$(".constacl_subscri_organization_email").val("");
	$(".constacl_subscri_organization_contactno").val("");
	$(".constacl_subscri_organization_address").val("");
	$(".constacl_subscri_organization_isactive").val("");
	$(".constacl_subscri_organization_subscription_days").val("");
	$(".constacl_subscri_users_name").val("");
	$(".constacl_subscri_users_email").val("");
	$(".constacl_subscri_users_contactno").val("");
	$(".constacl_subscri_users_password").val("");
	$(".constacl_subscri_users_re_password").val("");
	$(".constacl_subscri_users_isactive").val("");
	$(".response_notification").hide();
	$(".response_notification_paypal").hide();
	$(".addsubscriptionformlayout").show();
});

paypal.Button.render({

            env: 'sandbox', // sandbox | production
			
			/*client: {
								sandbox:    'AZglp837HvGGpVGBWuF3DgknhO0yyRCUqQS02_l28e5jcf0uG0aNwDeyVzf8RVNvpDBmeNtDIlMh-Gpk'
								//production: 'AbiftHIu143t9OcKpcCVeg6F6xcDPX532ZZqEvs4btsa0coi8P0H9UvTKnG15D5zrvHm_itXxiC4d_at'
							},*/

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,
			
			
            // payment() is called when the button is clicked
            payment: function() 
			{

                // Set up a url on your server to create the payment
               var SITE_URL=$(".base_url").val();
			   var CREATE_URL =SITE_URL+"/createsubscriptionfees" ;
			  
                // Make a call to your server to set up the payment
                return paypal.request.post(CREATE_URL, {
        _token:    $('meta[name="csrf-token"]').attr('content'),
		constacl_subscri_subscription_type_value: $(".constacl_subscri_organization_subscription_days").val()
    })
                    .then(function(res)
					{
						//alert(res);
						if(res["error"])
						{
							
							if($(".alert").hasClass("alert-success"))
							{
								$(".alert").removeClass("alert-success");
							}
							$(".alert").addClass("alert-danger");
							$(".notification_msg").html(res['message']);
							$(".response_notification").show();
						}
						else
						{
					//alert(res.id);
						//alert(JSON.parse(res));
                        	return res.id;
						}
                    });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) 
			{

                // Set up a url on your server to execute the payment
                var SITE_URL=$(".base_url").val();
				var EXECUTE_URL =SITE_URL+"/executesubscriptionfees" ;
				//alert(JSON.stringify(data));
                // Set up the data you need to pass to your server
                var data = 
				{
                    payment_id: data.paymentID,
                    payer_id: data.payerID,
					_token: $('meta[name="csrf-token"]').attr('content')
                   
				};
				
				//alert(data.payment_id);
				//alert(data.payer_id);

                // Make a call to your server to execute the payment
                return paypal.request.post(EXECUTE_URL, data)
                    .then(function (res)
					{
						//alert(JSON.stringify(res));
						var executeresponse = res;
						var SITE_URL=$(".base_url").val();
						var UPDATE_URL =SITE_URL+"/updatesubscriptionfees" ;
						$("#pay_subscription").fadeOut(500);
						var htmltable = "";
						htmltable +="<h3 style='font-weight:bold; font-size:16px;'>Payment Details</h3>";
						htmltable +="<table width=100% border=1 bordercolor='#000000' style='cellpadding:5px;font-size:14px; margin-left:25px;margin-right:25px;padding:5px;'>";
			htmltable +="<tr><th style='font-weight:bold;color:#FF0000!important;;text-align:center;'>Payment Status</th><td style='font-weight:bold;color:#FF0000;text-align:center;'>"+executeresponse.state+"</td></tr><tr><th style='font-weight:bold;color:#FF0000;text-align:center;'>Transaction Id</th><td style='font-weight:bold;color:#FF0000;text-align:center;'>"+executeresponse.id+"</td></tr><tr><th style='font-weight:bold;color:#FF0000;text-align:center;'>Payment Payer Id</th><td style='font-weight:bold;color:#FF0000;text-align:center;'>"+executeresponse['payer']['payer_info'].payer_id+"</td></tr></table>";
			
			htmltable +="<br><br><center><button type='button' class='btn btn-primary btn-block btn-flat okcancel' style='width:200px;'>Back</button></center>";
						//alert(executeresponse["payer"]["payer_info"].payer_id);
						$(".paypalpayment").html(htmltable);
						
						subscription_update=GetXmlHttpObject();
						
						if (subscription_update==null)
						{
							alert ("Your browser does not support AJAX!");
							return;
						}
						
						var token = $('meta[name="csrf-token"]').attr('content');
						var formData = new FormData();
						formData.append("constacl_subscri_organization_subscription_organization_id",$(".constacl_subscri_organization_subscription_id").val()); 			  
						formData.append("constacl_subscri_organization_subscription_payment_status",executeresponse.state);
						formData.append("constacl_subscri_organization_subscription_transactionid",executeresponse.id);
						formData.append("constacl_subscri_organization_subscription_payer_id",executeresponse["payer"]["payer_info"].payer_id);
						client_update.open("POST", UPDATE_URL, true);
						if (token)
						{
							client_update.setRequestHeader("X-CSRF-TOKEN", token);
						}
						else
						{
							client_update.setRequestHeader("enctype", "multipart/form-data");
						}
						client_update.send(formData);
						client_update.onreadystatechange = function()
						{
							if (client_update.readyState === 4)
							{
								if (client_update.status === 200)
								{
																	
								} 
								else
								{
																	
								}
							} 
							else 
							{
								
							}
						}
						
                        
                    });
            },
			onCancel: function(data, actions) 
			{
				var SITE_URL=$(".base_url").val();
				var CANCEL_URL =SITE_URL+"/cancelsubscriptionfees" ;
				var data = 
				{
                    payment_id: data.paymentID,
                    payer_id: data.payerID,
					_token: $('meta[name="csrf-token"]').attr('content'),
					constacl_subscri_organization_subscription_id: $(".constacl_subscri_organization_subscription_id").val()
					
                };
				return paypal.request.post(CANCEL_URL, data)
                    .then(function (res)
					{
						var cancelresponse = res;
						//alert(cancelresponse);
                        
						if($(".alert").hasClass("alert-success"))
						{
							$(".alert").removeClass("alert-success");
						}
						$(".alert").addClass("alert-danger");
						$(".notification_msg").html("Payment has been cancelled by user, below are the details of it");
						
						var htmltable = "";
						htmltable +="<h3 style='font-weight:bold; font-size:16px;'>Payment Details</h3>";
						htmltable +="<table width=90% border=1 bordercolor='#000000' style='cellpadding:5px;font-size:14px; margin-left:25px;margin-right:25px;padding:5px;'>";
			htmltable +="<tr><th style='font-weight:bold;color:#FF0000!important;;text-align:center;'>Payment Id</th><td style='font-weight:bold;color:#FF0000;text-align:center;'>"+cancelresponse['payment_id']+"</td></tr><tr><th style='font-weight:bold;color:#FF0000!important;;text-align:center;'>Payment Status</th><td style='font-weight:bold;color:#FF0000;text-align:center;'>"+cancelresponse['constacl_subscri_organization_subscription_payment_status']+"</td></tr></table>";
			htmltable +="<br><br><center><button type='button' class='btn btn-primary btn-block btn-flat okcancel' style='width:200px;'>Back</button></center>";
						
						$("#pay_subscription").fadeOut(500);
						$(".paypalpayment").html(htmltable);
					});
				//alert(JSON.stringify(data));
				//alert($(".paymentcancelled").text());
    			// Show a cancel page or return to cart
			}

        }, '#pay_subscription');