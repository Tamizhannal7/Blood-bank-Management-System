 $(document).ready(function () {

 	// script for smooth scrolling //
 	jQuery(document).ready(function ($) {
 		$(".scroll ").click(function (event) {
 			event.preventDefault();

 			$('html,body').animate({
 				scrollTop: $(this.hash).offset().top
 			}, 1000);
 		});
 	});

 	//script  for  ease //
 	$(document).ready(function () {
 		/*
 		 var defaults = {
 			 containerID: 'toTop', // fading element id
 			 containerHoverID: 'toTopHover', // fading element hover id
 			 scrollSpeed: 1200,
 			 easingType: 'linear' 
 		 };
 		 */

 		$().UItoTop({
 			easingType: 'easeOutQuart'
 		});

 	});

 });