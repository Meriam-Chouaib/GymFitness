jQuery(document).ready(function($){
   //Make the menu responsive 
   $('#menu-main-navigation').slicknav();

   //Run the bx slider library on testimonials 
   $('.testimonials-list').bxSlider();
});


window.onscroll = () => {
   const scroll = window.scrollY;
   fixedMenu(scroll);
}

// Add fixed enu on top 
function fixedMenu(scroll){
   const headerScroll = document.querySelector('.navigation-bar'); //division eli feha header eli feha logo w menu zouz 
  

   //in the case that scroll is greater than 300 add some classes (ya3ni yahbet louta bel curseur)
   if(scroll >300){
    
      headerScroll.classList.add('fixed-top');
   }
   else {
      
      headerScroll.classList.remove('fixed-top');
   }

}