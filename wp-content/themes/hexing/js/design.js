// Navbar background change

// $(document).ready(function(){
// 	$(window).scroll(function(){
// 		var scroll = $(window).scrollTop();
// 		if (scroll > 0) {
//             var element = document.getElementById("nav_menu");
//             element.classList.remove("o_nav_menus");
//             element.classList.add("o_nav_menus-scroll");
// 			$('.o_navbar ul ul li a').css('color','#373a36'); 
// 			$('.o_navbar ul li a').css('color','#373a36');
// 		}
// 		else{
// 			var element = document.getElementById("nav_menu");
//             element.classList.remove("o_nav_menus-scroll");
//             element.classList.add("o_nav_menus");
// 			$('.o_navbar ul ul li a').css('color','#373a36');
// 			$('.o_navbar ul li a').css('color','#ffffff');
// 		}
// 	})
//   })
  
// $(document).ready(function(){
// 	$(window).scroll(function(){
// 		var scroll = $(window).scrollTop();
// 		if (scroll > 0) {
//             var element = document.getElementById("o_navbarid");
//             element.classList.add("o_navbar-scroll");
// 		}
  
// 		else{
// 			var element = document.getElementById("o_navbarid");
//             element.classList.remove("o_navbar-scroll");
// 		}
// 	})
//   })

// Menu Items hover effect
$(document).ready(function(){ 
    $('.why_cambrian_title').hover(function(){ 
        $(this).addClass('animate__animated animate__bounce'); 
    }); 
}); 