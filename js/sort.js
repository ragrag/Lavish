var $divs = $("div.column");

$('#byName').on('click', function () {
    var sortDivsNames = $divs.sort(function (a, b) {
        var x=$(a).find("h6").text();
        var y=$(b).find("h6").text();
        return x>y;
    });
    $(".table").html(sortDivsNames);
});

$('#byPrice').on('click', function () {
    var sortPriceDiv = $divs.sort(function (a, b) {
     var x=parseInt($(a).find(".product_price").text());
       y=parseInt($(b).find(".product_price").text()); 
        return x > y;
    });
    $(".table").html(sortPriceDiv);
});

filterSelection("all");


function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
     RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1)  AddClass(x[i], "show");
  }
}

// Show filtered elements
function  AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function  RemoveClass(element, name) {
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