function inpfocus(x) {
    x.placeholder = "";

}
function inpblur(x) {
    x.placeholder = x.getAttribute("placehoolder");
}

function check() {
    var UserName = document.getElementById("userN").value;
    var Password = document.getElementById("userP").value;

    if (UserName != "NRBI" || Password != "0000") {
        window.alert("Invalid Username or Password");
        document.getElementById("formaction").action = "adminlog.php";
    }
    else if (UserName == "NRBI" && Password == "0000") {
        window.alert("Welcome admin");
        document.getElementById("formaction").action = "dashboard.php";
    }
}

function LoginFormValidation() {
    var letters = /[A-Za-z]/;
    var Uname = document.getElementById("userN").value;
    var Upass = document.getElementById("userP").value;
    if (!Uname.match(letters)) {
        window.alert("Username should contain letters");
    }

    if (!Upass == null) {
        window.alert("Passwords should not be empty");
    }
   
}

function PopUpValidation() {
    var checking = /[A-Za-z]/;

    var Pname = document.getElementById("pAddname").value;
    var Pdescription = document.getElementById("pAdddescription").value;
    var Ptype = document.getElementById("pAddtype").value;
    var Pweight = document.getElementById("pAddweight").value;
    var Pquantity = document.getElementById("pAddquantity").value;


   
    if(!Pname.match(checking) || !Pname.match(" ")){
        window.alert("Product name should not be empty");
    }
    if(!Pdescription.match(checking) || !Pdescription.match(" ")){
        window.alert("Product description should not be empty");
    }
    if(!Ptype.match(checking) || !Ptype.match(" ")){
        window.alert("Product type not be empty");
    }
    if(!Pweight.match(checking) || !Pweight.match(" ")){
        window.alert("Product weight not be empty");
    }
    if(!Pquantity.match(checking) || !Pquantity.match(" ")){
        window.alert("Product quantity should not be empty");
    }


}

function calling() {
    LoginFormValidation();
    check();

}

$(document).ready(function () {

    $(function () {

        $("#btnTrigger").click(function AddproductBTN() {
            $(".popupBody").show();
            $(".pAdd").show();
            $('.fbody').css({
                "filter": "blur(5px)"
            });
            return false;
        });

        $(".btnBack").click(function CancelproductBTN() {
            $(".pAdd").hide();
            $(".popupBody").hide();
            $('.fbody').css({
                "filter": "blur(0px)"
            });
            return false;
        });

    });
    $(function () {

        $("#EditBTN").click(function EditproductBTN() {
            $(".EditPOP").show();
            $(".pEdit").show();
            $('.fbody').css({
                "filter": "blur(5px)"
            });
            return false;
        });

        $(".ebtnBack").click(function CancelEditBTN() {
            $(".pEdit").hide();
            $(".EditPOP").hide();
            $('.fbody').css({
                "filter": "blur(0px)"
            });
            return false;
        });

    });
    $('.login h3').css("top", "0px");
    $('.in-left').css("left", "0px");
    $('.in-right').css("right", "0px");
    $('.inputs').css("bottom", "0px");
    $('form').css({
        "background-color": "#f3f2f2",
        "padding": "40px",
        "border-radius": "4px",
        "opacity": ".9"
    });
    $('.fbody').css("background-image", "url(../images/gb.jpg)");
    $('.fbody').css("background-repeat", "no-repeat, repeat");
    $('.fbody').css("background-size", "cover");


    $('.log-body').css("background-image", "url(../images/gb.jpg)");
    $('.log-body').css("background-repeat", "no-repeat, repeat");
    $('.log-body').css("background-size", "cover");

    $('.dbody').css("background-image", "url(../images/gb.jpg)");
    $('.dbody').css("background-repeat", "no-repeat, repeat");
    $('.dbody').css("background-size", "cover");

    $('.managetable td').slideDown(700);
    $('.converttobtn').css("font-size", "17px");
    $('.stat').slideDown(1000);
    $('.handling2').css({ "right": "0px" });
    $('.handling1').css({ "left": "0px" });



});