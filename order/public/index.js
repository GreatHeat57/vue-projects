$(document).ready(function(){
  $(".right-circle").click(function(){
    $(".lang-sec").show(200);
  });
    $(".lang").click(function(){
    $(".lang-sec").hide(200);
  });
    $(".fprgetright").click(function(){
    	$(".signinsec").hide(200);
        $(".forgetpasspopup").show(200);
  });
    $(".signin").click(function(){
    	$(".main").hide(200);
        $(".signinsec").show(200);
  });
});

// function myFunction() {
//   var x = document.getElementById("myInput");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// } 
// function myFunction1() {
//   var x = document.getElementById("mypass");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// } 
// function myFunction2() {
//   var x = document.getElementById("myconfirmpass");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// } 