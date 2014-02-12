$(document).ready(function(){
	$('#B1').attr('disabled','');
    var emailok = false;
    var boxes = $(".input_s1_normal");
    var myForm = $("#reg_form"), username = $("#username"), email = $("#email_address"), emailInfo = $("#emailInfo");
 
    //give some effect on focus
    boxes.focus(function(){
        $(this).addClass("input_s1_focus");
    });
    //reset on blur
    boxes.blur(function(){
        $(this).removeClass("input_s1_focus");
    });
 
    //Form Validation
    myForm.submit(function(){
        /*if(username.attr("value") == "")
        {
            alert("Enter Username");
            username.focus();
            return false;
        }
        if(email.attr("value") == "")
        {
            alert("Enter Email");
            email.focus();
            return false;
        } */
        if(!emailok)
        {
            alert("The email you entered is already existed");
            email.attr("value","");
            email.focus();
            return false;
        }
    });
 
    //send ajax request to check email
    email.blur(function(){
        $.ajax({
            type: "POST",
            data: "email="+$(this).attr("value"),
            url: "check_email_exist.php",
            beforeSend: function(){
                emailInfo.html("Checking Email...");
            },
            success: function(data){
                if(data == "invalid")
                {
                    emailok = false;
                    emailInfo.html("Invalid Email");
                }
                else if(data != "0")
                {
                    emailok = false;
                    emailInfo.html("Email Already Exist");
                }
                else
                {
                    emailok = true;
                    emailInfo.html("Email OK");
                }
            }
        });
    });
});
