document.getElementById("mn").onclick = function(){
    var drop = document.getElementById("had3");
    drop.classList.toggle('show_menu');
}
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
function myFunction(){
   
    document.getElementById("per-in").style.display ="block";
    document.getElementById("rusl").style.display ="none";
 } 
 function myFunction1(){
    document.getElementById("per-in").style.display ="none";
   
    document.getElementById("rusl").style.display ="block";
 
 } 
 function myFunction2(){
    document.getElementById("per-in").style.display ="none";
   
    document.getElementById("rusl").style.display ="none";
    document.getElementById("emp").style.display ="block";
 
 } 
 function myFunction3(){
    document.getElementById("per-in").style.display ="none";
   
    document.getElementById("rusl").style.display ="none";
    document.getElementById("cour").style.display ="block";
 } 


/*var affch = document.querySelectorAll("affch"),
    items = document.querySelectorAll("da-co");
 
for(var i=0; i<items.length; i++){
    items[i].onclick = function(){
        for(var j=0; j<affch.length; j++){
            affch[i].classList.add("show");
        }
    }
}*/