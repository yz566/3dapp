(function ($) {
  "use strict";

  //menu header bar
	$(".header-bar").on("click", function (e) {
		$(".main-menu, .header-bar").toggleClass("active");
	});
	$(".main-menu li a").on("click", function (e) {
		var element = $(this).parent("li");
		if (element.hasClass("open")) {
			element.removeClass("open");
			element.find("li").removeClass("open");
			element.find("ul").slideUp(300, "swing");
		} else {
			element.addClass("open");
			element.children("ul").slideDown(300, "swing");
			element.siblings("li").children("ul").slideUp(300, "swing");
			element.siblings("li").removeClass("open");
			element.siblings("li").find("li").removeClass("open");
			element.siblings("li").find("ul").slideUp(300, "swing");
		}
	});
	//menu header bar
	//menu top fixed bar
	var fixed_top = $(".header-section");
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 220) {
			fixed_top.addClass("menu-fixed animated fadeInDown");
			fixed_top.removeClass("slideInUp");
			$("body").addClass("body-padding");
		} else {
			fixed_top.removeClass("menu-fixed fadeInDown");
			fixed_top.addClass("slideInUp");
			$("body").removeClass("body-padding");
		}
	});
	//menu top fixed bar

	/*-------- Odometer Counter Start--------*/
	$(".odometer-item").each(function () {
	$(this).isInViewport(function (status) {
		if (status === "entered") {
			for (
				var i = 0;
				i < document.querySelectorAll(".odometer").length;
				i++
			) {
				var el = document.querySelectorAll(".odometer")[i];
				el.innerHTML = el.getAttribute("data-odometer-final");
			}
		}
	});
	});
	/*-------- Odometer Counter End--------*/

	$(".portfolio-slide").owlCarousel({
        loop: true,
		margin: 20,
		smartSpeed: 1400,
        autoplayTimeout: 1900,
		autoplay: true,
		nav: true,
        dots: true,
        responsiveClass: true,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            500: {
                items: 2,
            },
            767: {
                items: 2,
            },
            991: {
                items: 2,
            },
            1199: {
                items: 3,
            },
            1399: {
                items: 4,
            },
        },
    });

		//testtimonial-slide-area-start-here
		var swiper = new Swiper(".client-slide", {
			spaceBetween: 10,
			speed: 1000,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			loop: "true",
			pagination: {
				el: ".dot",
				clickable: true,
			},
			breakpoints: {
				575: {
					slidesPerView: 1,
				},
				992: {
					slidesPerView: 2,
				},
			},
		});
		//testtimonial-slide-area-end-her

		
	/*---------- Video Section ----------*/
    $(function() {
    $('.g-img').magnificPopup({
        type: 'image',
        gallery:{
          enabled:true
        }
      });
      $('.play-btn, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    });
    /*---------- Video Section ----------*/

	var swiper = new Swiper(".mySwiper", {
		effect: "cards",
		grabCursor: true,
		loop:true,
	  });

	// wow animation
	new WOW().init();
	// wow animation


	/*-- Preloader Start--*/
	setTimeout(function() {
		$('.boxes-bg').fadeToggle();
	}, 2000);
	/*-- Preloader End--*/

/*---------- Logo Section ----------*/
$('.logo-wrapper').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText: [
        '<i class="fas fa-angle-left"></i>',
		'<i class="fas fa-angle-right"></i>',
    ],
    responsive:{
    0:{
        items:2
    },
        576:{
            items:3
        },
        600:{
            items:4
        },
        1000:{
            items:5
        },
        1199:{
            items:5
        }
    }
});
/*---------- Logo Section ----------*/

//Back-to-top-area-start-here
var scrollPath = document.querySelector(".scroll-up path");
var pathLength = scrollPath.getTotalLength();
scrollPath.style.transition = scrollPath.style.WebkitTransition = "none";
scrollPath.style.strokeDasharray = pathLength + " " + pathLength;
scrollPath.style.strokeDashoffset = pathLength;
scrollPath.getBoundingClientRect();
scrollPath.style.transition = scrollPath.style.WebkitTransition =
	"stroke-dashoffset 10ms linear";
var updatescroll = function () {
	var scroll = $(window).scrollTop();
	var height = $(document).height() - $(window).height();
	var scroll = pathLength - (scroll * pathLength) / height;
	scrollPath.style.strokeDashoffset = scroll;
};
updatescroll();
$(window).scroll(updatescroll);
var offset = 50;
var duration = 950;
jQuery(window).on("scroll", function () {
	if (jQuery(this).scrollTop() > offset) {
		jQuery(".scroll-up").addClass("active-scroll");
	} else {
		jQuery(".scroll-up").removeClass("active-scroll");
	}
});
jQuery(".scroll-up").on("click", function (event) {
	event.preventDefault();
	jQuery("html, body").animate(
		{
			scrollTop: 0,
		},
		duration
	);
	return false;
});
//Back-to-top-area-end-here



//search-area-start-here
var $searchWrap = $(".search-wrap");
var $navSearch = $(".nav-search");
var $searchClose = $("#search-close");

$(".search-trigger").on("click", function (e) {
	e.preventDefault();
	$searchWrap.animate({ opacity: "toggle" }, 500);
	$navSearch.add($searchClose).addClass("open");
});

$(".search-close").on("click", function (e) {
	e.preventDefault();
	$searchWrap.animate({ opacity: "toggle" }, 500);
	$navSearch.add($searchClose).removeClass("open");
});

function closeSearch() {
	$searchWrap.fadeOut(200);
	$navSearch.add($searchClose).removeClass("open");
}

$(document.body).on("click", function (e) {
	closeSearch();
});

$(".search-trigger, .main-search-input").on("click", function (e) {
	e.stopPropagation();
});
//search-area-end-here


//contact form js
	 $(function () {
		// Get the form.
		var form = $("#contact-form");
		// Get the messages div.
		var formMessages = $(".form-message");
		// Set up an event listener for the contact form.
		$(form).submit(function (e) {
			// Stop the browser from submitting the form.
			e.preventDefault();
			// Serialize the form data.
			var formData = $(form).serialize();
			// Submit the form using AJAX.
			$.ajax({
				type: "POST",
				url: $(form).attr("action"),
				data: formData,
			})
				.done(function (response) {
					// Make sure that the formMessages div has the 'success' class.
					$(formMessages).removeClass("error");
					$(formMessages).addClass("success");
					// Set the message text.
					$(formMessages).text(response);
					// Clear the form.
					$("#form input, #form textarea").val("");
				})
				.fail(function (data) {
					// Make sure that the formMessages div has the 'error' class.
					$(formMessages).removeClass("success");
					$(formMessages).addClass("error");
					// Set the message text.
					if (data.responseText !== "") {
						$(formMessages).text(data.responseText);
					} else {
						$(formMessages).text(
							"Oops! An error occured and your message could not be sent."
						);
					}
				});
		});
	});



	

})(jQuery);