$(document).on("submit", "form.js-register", function(event){
    event.preventDefault();

    var $form = $(this);
    var $error = $(".js-error",$form);

    var data = {
        email: $("input[type='email']", $form).val(),
        password: $("input[type='password']", $form).val()
    } 

    if(data.email.length < 6){
        $error.text("Please Enter Valid Email Address.").show();
        return false;
    }
    else if(data.password.length < 11){
        $error.text("Enter A Passphrase having atleast 11 characters in it.").show();
        return false;
    }

    $error.hide();
    return false;
});