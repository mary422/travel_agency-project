// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

//button

$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});


//slider
var carousel = function(){
  $(".home-slider").owlCarousel({
    loop: true;
    autoplay: true;
    margin: 0;
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    nav: true,
    dots: false,
    autoplayHoverPause: false,
    items: 1,
    navText: [
    "<span class='ion-ios-arrow-back'></span>",
    "<span class='ion-ios-arrow-forward'></span>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  $(".carousel.-testimony").owlCarousel({
    loop: true,
    autoplay: true,
    center: true,
    margin: 30,
    nav: false,
    stagePadding: 0,
    items: 1,
    navText: [
    "<span class='ion-ios-arrow-back'></span>",
    "<span class='ion-ios-arrow-forward'></span>",
    ],
    responsive: {
      0: {
        items: 1,
      },
        600: {
          items: 2,
      ,}
      1000: {
        items: 3,
      },
    },
  })
  carousel();
