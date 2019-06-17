(function ($, root, undefined) {

	$(document).ready(function(){


   // RESIZE HEADER SCROLLTOP

    // $(window).scroll(function(){
    //   var $header = $('.header');
		// 	var $menu_section = $('.large-menu, .container-logo-menu');
		// 	var $menu_cta = $('.menu-cta');
    //   if ($(this).scrollTop() > 80){
		// 		$menu_section.css({"-webkit-transform":"translateY(-80px)"});
		// 		$menu_cta.css({"-webkit-transform":"translateY(-125px)"});
    //   }
    //   else{
		// 		$menu_section.css({"-webkit-transform":"translateY(0px)"});
		// 		$menu_cta.css({"-webkit-transform":"translateY(80px)"});
    //   }
    // });
		// $(window).scroll(function(){
		// 	var $win = $(window);
		// 	var $winH = $win.height();
		// 	var $entretienShdw = $('.img-entretien-shadow');
    //   if ($(this).scrollTop() > $winH ){
		// 		$entretienShdw.css({"-webkit-transform":"translate(-12px, 12px)"});
    //   }
    //   else{
		// 		$entretienShdw.css({"-webkit-transform":"translate(0px)"});
    //   }
    // });



    // MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").slideToggle("slow");
        $("#header-sticky").css('background-color','transparent');
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

        });

      // ADD class anim with Delay
        $('#menu-btn').click(function() {
            if ( $('body').hasClass( "responsive" ) ) {
                $('.nav-mobile li').removeClass('animation-fade-out')
                var delay = 0;
                 $('.nav-mobile li').each(function() {
                   var $li = $(this);
                   setTimeout(function() {
                     $li.addClass('animation-fade-up');
                   }, delay+=100); // delay 100 ms
                 });
            }
            else {
                setTimeout(function() {
                    $('.nav-mobile li').removeClass('animation-fade-up');
                }, 800);
            }
        });
        $('ul>li>a').click(function() {
         // $('body').removeClass('responsive');
         $('.nav-mobile').css('display', 'none');
         $('#menu-btn > button').toggleClass('menu-open');
        });

		// START RESIZE
      $(window).on("load resize", function () {

			/* ARCHIVE PARALLAX */

			//when the window is scrolling, do stuff
			// $(window).scroll(function() {
			//   //capture the curren position of the window
			//   var windowTop = $(window).scrollTop();
			//   var imgElts = document.querySelectorAll('.archive-parallax:nth-child(2n+1), .index-parallax:nth-child(2n+1)');
			//   var imgEltsPair = document.querySelectorAll('.archive-parallax:nth-child(2n), .index-parallax:nth-child(2n)');
			// 	  for (var i = 0; i < imgElts.length; i++) {
			// 		var transform = imgElts[i].offsetTop - windowTop;
			// 	if (transform < 2000) {
			// 			transform = transform / 10;
			// 			console.log(transform);
			// 		}else{
			// 			transform = 0;
			// 		}
			// 	imgElts[i].style.transform = "translateY(" + transform + "px)";
			//   }
			//
			//   for (var i = 0; i < imgEltsPair.length; i++) {
			//    var transform = -imgEltsPair[i].offsetTop + windowTop;
		  //  if (transform < 2000) {
			// 		transform = transform / 10;
			// 		console.log(transform);
			//    }else{
			// 		transform = 0;
			//    }
		  //  imgEltsPair[i].style.transform = "translateY(" + transform + "px)";
		  // }
			//
		  // });
    }).resize();
		// END RESIZE


		// SMOOTH SCROLL
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 500);
		});

		});
})(jQuery, this);
