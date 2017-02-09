$('document').ready(function () {
    $('#sign_in').validate({

		 rules:
	  {
			email: {
			required: true,
                email:true,
			},
			password: {
            required: true,
            },
			permission: {
            required: true,
            },
	   },
       messages:
	   {
            email:{
                      required: "Please enter your email"
                     },
            password: "Please enter your password",
			permission: "Please select your permission",
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
        },
        submitHandler: submitForm
    });
});
function submitForm()
{
    var data = $("#sign_in").serialize();

    $.ajax({

        type : 'POST',
        url  : 'php/login.php',
        data : data,
        beforeSend: function()
        {
            $("#error").fadeOut();
            $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span><br> &nbsp; sending ...');
        },
        success :  function(response)
        {

            if (response == "ok") {
                $("#btn-login").html('Signing In ...');
               // $("#loader").html('<img width="300" height="200" src="images/loader.gif" >');
                setTimeout(' window.location.href = "homepage.php"; ', 4000);

            } else {
              /* $("#error").fadeIn(1000, function () {
                    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + response + ' !</div>');
                });*/
              swal('oops...',"Correct your fields or no configuration yet",'error');
                $("#btn-login").html('Sign In');
            }
        }
    });
    return false;
}