let welcome_box =  document.getElementById("welcome_popup");
function remove_popup()
     {
         welcome_box.style.display="none";
     }
setTimeout (function welcome_popup()
 {
     welcome_box.style.display="none";
 },3000);
 

 let nav_menu =document.getElementById("nav-menu");

 function show_menu(){
     nav_menu.style.display="block";
 }
 function hide_menu(){
    nav_menu.style.display="none";
}