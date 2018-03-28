function validateRegisterForm() {
    var letters = /[A-Za-z]/;
    var number = /\d/;
    var at = "@";
    
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("ln").value;
    var password = document.getElementById("pass").value;
    var cpassword = document.getElementById("cpass").value;
    var email = document.getElementById("email").value;
    var deliveryAddress = document.getElementById("daddress").value;
    var sameAddress = document.getElementById("asDelivery");
    var billingAddress = document.getElementById("baddress").value;
    var phonenumber = document.getElementById("phonenumber").value;
    var birthdate = document.getElementById("bdate").value;
    
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