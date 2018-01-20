$(document).ready(function(){
$("#sideButton").click(function(){
  document.getElementById("sidebar").style.width="200px";
  document.getElementById("navigation").style.width="200px";
  document.getElementById("navigation").style.opacity="1";
  document.getElementById("navigation").style.transition="0.7s";
  document.getElementById("pageContent").style.marginLeft="230px";
  document.getElementById("sideButton").style.opacity="0";
});

$("#closeButton").click(function(){
  document.getElementById("sidebar").style.width="0px";
  document.getElementById("navigation").style.width="0px";
  document.getElementById("navigation").style.opacity="0";
  document.getElementById("navigation").style.transition="0.2s";
  document.getElementById("pageContent").style.marginLeft="25px";
  document.getElementById("sideButton").style.opacity="1";
});

});
