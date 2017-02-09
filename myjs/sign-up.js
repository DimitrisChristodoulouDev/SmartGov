$('document').ready(function () {
    $('#sign_up').validate({
        rules: {
			
			'email': {
                required: true,
				email:true,
            },
			'password': {
                required: true,
            },
            'terms': {
                required: true,
            },
            'confirm': {
                equalTo: '[name="password"]'
            }
        },
		 messages:
	   {

            password: "Please enter a password",
			email:"please enter your email",
			terms:"please accept the facking terms",
			confirm:"put the same facking password",
       },
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
            $(element).parents('.form-group').append(error);
        },
		submitHandler: submitForm
    });
}); 
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#sign_up").serialize();
				
			$.ajax({
			type : 'POST',
			url  : 'php/register.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response == "Account exist."){	
								$("#error").fadeIn(1000, function(){	
									$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+ response +' !</div>');
									$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
									});
					}
					else if (response == "Username in use."){	
									$("#error").fadeIn(1000, function(){						
										$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+ response +' !</div>');
										$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
									});
					}
					else if (response == "Passwords are not the same"){	
									$("#error").fadeIn(1000, function(){						
										$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+ response +' !</div>');
										$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
									});
					}
					else if (response == "Account created now Check email form confirmation"){	
						$("#error").fadeIn(1000, function(){
										$("#register-form")[0].reset();
										$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+ response +' !</div>');
										$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
									});
					}
			  }
			});
				return false;
		}