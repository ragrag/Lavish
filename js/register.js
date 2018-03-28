function validateRegisterForm() {
    var letters = /[A-Za-z]/;
    var number = /\d/;
    var at = "@";
    
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var password = document.getElementById("pass").value;
    var cpassword = document.getElementById("cpass").value;
    var email = document.getElementById("email").value;
    var deliveryAddress = document.getElementById("daddress").value;
    var sameAddress = document.getElementById("asDelivery");
    var billingAddress = document.getElementById("baddress").value;
    var phonenumber = document.getElementById("phonenumber").value;
    var birthdate = document.getElementById("bdate").value;
    var termsAndConditions = document.getElementById("t&c");
    
    if(!termsAndConditions.checked)
    {
    window.alert("You must agree to terms and conditions");    
    }
    if(!firstname.match(letters)) {
    window.alert("First name must be letters");
    }
    if(!lastname.match(letters)) {
    window.alert("Last name must be letters");
    }
    if(!email.match(at)) {
    window.alert("Email must contain @");
    }
    if(cpassword != password) {
    window.alert("Password do not match");
    }     
    if(!phonenumber.match(number))
    {
        window.alert("Phone number contains numbers only");
    } else {
    return true;
    } 
}

function deliveryAddress() {
    if(!document.getElementById("baddress").readOnly)
    {
        document.getElementById("baddress").readOnly = true; 
    }
    else if(document.getElementById("baddress").readOnly)
    {
        document.getElementById("baddress").readOnly = false;
    }
    
    
}