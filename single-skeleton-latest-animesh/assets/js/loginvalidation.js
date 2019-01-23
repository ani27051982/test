$(document).ready(function()
{
	$("#loginfrm").validate
	({
		rules: 
		{
			email:
			{
				required: true,
				email: true
			},
			password:
			{
				required: true
			}
		},
		messages: 
		{
			email: 
			{
				required: "Please enter email",
				email: "Please enter valid email"
				
			},
			password : 
			{
				required: "Please enter password",						
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

	if(document.getElementById("alert")!=null)
	{
		setTimeout(function(){ $("#alert").fadeOut(); }, 3000);
	}	
	
});
	
$(document).on("click",".loginbtn",function()
{
	if(!$(this).hasClass("disabled"))
	{
		if ($('#loginfrm').valid())
		{
			$("#loginfrm").submit();
		}
	}
	
});
	
$(document).keyup(function(e)
{
	if (e.which == 13) 
	{
		$(".loginbtn").trigger("click");
	}
});