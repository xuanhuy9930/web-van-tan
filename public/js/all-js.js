// slide
jQuery(document).ready(function($) {
			$('.slider').slick({
				dots: false,
				infinite: true,
				speed: 500,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: true,
				responsive: [{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 400,
					settings: {
						arrows: false,
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			});
		});
jQuery(document).ready(function($) {
			$('.sp-finish').slick({
				dots: false,
				infinite: true,
				speed: 500,
				slidesToShow: 4,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: false,
				responsive: [{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 400,
					settings: {
						arrows: false,
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			});
		});
// sticky
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header3");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// menu-responsive
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}