

filterSelection("all");


function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
<<<<<<< HEAD:js/filter.js
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
=======
     RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1)  AddClass(x[i], "show");
  }
}

// Show filtered elements
function  AddClass(element, name) {
>>>>>>> 110380ae425cda7933900a0396e6f10d8232a484:js/sort.js
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

<<<<<<< HEAD:js/filter.js
function RemoveClass(element, name) {
=======
// Hide elements that are not selected
function  RemoveClass(element, name) {
>>>>>>> 110380ae425cda7933900a0396e6f10d8232a484:js/sort.js
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

  
function filter(){
   var value;
    var rad=document.getElementsByName("brand");
    var i;
    for (i = 0; i < rad.length; i++) { 
        if (rad[i].type == "radio") {
            if(rad[i].checked == true){
                value=rad[i].value;
            }
                
            }
    }
    filterSelection(value);
}