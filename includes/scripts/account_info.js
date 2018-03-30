function saveData() {
    var letters = /[A-Za-z]/;
    var number = /\d/;
    var at = "@";

    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var currentPassword = document.getElementById("cpass").value;
    var newPassword = document.getElementById("npass").value;
    var confirmNewPassword = document.getElementById("cnpass").value;
    var email = document.getElementById("email").value;
    
    if(!firstname.match(letters)) {
    window.alert("First name must be letters");
    }
    if(!lastname.match(letters)) {
    window.alert("Last name must be letters");
    }
    if(!email.match(at)) {
    window.alert("Email must contain @");
    }
    if(newPassword != confirmNewPassword) {
    window.alert("Password do not match");
    }
}