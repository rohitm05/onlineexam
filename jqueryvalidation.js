   // alert("123");
    $("#reg-form").validate({
        rules: {
            name: "required",
            inputEmail: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 12
            },
            dob: "required",
            post: "required",
            city: "required",
            exper: "required",
            notice: "required",
            inputPassword: {
                required: true,
                minlength: 7
            },
            confirmPassword: {
                required: true,
                minlength: 7,
                equalTo: "#inputPassword"
            },
        },
        messages: {
            name: {
                required: "Please enter your name",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter only valid email",
            },
            mobile: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value",
            },
            dob: "Please enter a date of Birth",
            post: "Please enter select your post applying for",
            city: "Please enter select your city",
            exper: "Please enter select your experience level",
            notice: "Please enter select notice period",
            inputPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long",
            },
            confirmPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long",
                equalTo: "Please enter the same password as above",
            },
        },
        submitHandler: submitForm
    });


function submitForm()
{
	

 	
        var data = $("#reg-form").serialize(); 
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'user-register-backend.php', // the url where we want to POST
            //data        :  data ,// our data object
            data:  data,
            contentType: false,
            cache: false,
          processData:false,
            success     :  function(resultFromRegistration)
            			   {
            			   	 alert(resultFromRegistration);
            			   	 $('#reg-form')[0].reset();
            			   }
            
        });
       
   

}
