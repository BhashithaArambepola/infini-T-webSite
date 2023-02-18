/*=====Nav Bar======*/
//Submenu Dropdown Toggle
if ($('.main-header li.dropdown ul').length) {
    $('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');

    //Dropdown Button
    $('.main-header li.dropdown .dropdown-btn').on('click', function () {
        $(this).prev('ul').slideToggle(500);
    });

    //Disable dropdown parent link
    $('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function (e) {
        e.preventDefault();
    });
}

//shrink navbar
$(window).scroll(function() {
    if ($(document).scrollTop() > 70) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
});


//rotate w1
$(window).scroll(function() {
    if ($(document).scrollTop() > 1700) {
        $('#welcome-heading').addClass('text-rotateX');
    } else {
        $('#welcome-heading').removeClass('text-rotateX');
    }
});
//rotate w2
$(window).scroll(function() {
    if ($(document).scrollTop() > 500) {
        $('#flagship-heading').addClass('text-rotateX');
    } else {
        $('#flagship-heading').removeClass('text-rotateX');
    }
});

//Side Content Toggle
if ($('.main-header .outer-box .nav-btn').length) {
    //Show Form
    $('.main-header .outer-box .nav-btn').on('click', function (e) {
        e.preventDefault();
        $('body').addClass('side-content-visible');
    });
    //Hide Form
    $('.hidden-bar .inner-box .cross-icon,.form-back-drop,.close-menu').on('click', function (e) {
        e.preventDefault();
        $('body').removeClass('side-content-visible');
    });
    //Dropdown Menu
    $('.fullscreen-menu .navigation li.dropdown > a').on('click', function () {
        $(this).next('ul').slideToggle(500);
    });
}


/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}


//Breadcrumb

$(document).ready(function () {


    $('.first ol li a').click(function () {
        $('.first ol li a.active-1').removeClass('active-1');
        $(this).closest('a').addClass('active-1');
    });



});

/*======Hero section=======*/

//Counter
$('.counter').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({countNum: $this.text()}).animate({
            countNum: countTo
        },

        {

            duration: 1000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
                //alert('finished');
            }

        });


});


/*======Services section=======*/
$(".carousel").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 10000,
    autoplayHoverPause: false,
    responsive: {
        0: {
            items: 1,
            nav: false
        }
    }
});
/*======Contact section=======*/

$(document).ready(function () {

    $('.input').focus(function () {
        $(this).parent().find(".label-txt").addClass('label-active');
    });

    $(".input").focusout(function () {
        if ($(this).val() == '') {
            $(this).parent().find(".label-txt").removeClass('label-active');
        }
        ;
    });

});

//about Us

(function () {
    "use strict";

    var carousels = function () {
        $(".owl-carousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                680: {
                    items: 2,
                    nav: false,
                    loop: false
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
    };

    (function ($) {
        carousels();
    })(jQuery);
})();


//---------------clients----------
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});