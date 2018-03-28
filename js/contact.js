
function validateForm(){
    window.alert("in");
    var letters = /[A-Za-z]/;
    var dot=".";
    var at = "@";
    var name = document.getElementById("input_name").value;
    var email = document.getElementById("input_email").value;     
    var msg = document.getElementById("input_message").value;
    if(!firstname.match(letters)) {
    window.alert("Name is required.");
    }
    if(!email.match(at) ) {
    window.alert("Valid email is required.");
    }
    if(!msg.match(letters) ) {
    window.alert("Please, write us a message.");
    }
    
}