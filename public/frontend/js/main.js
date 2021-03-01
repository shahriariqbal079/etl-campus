(function ($) {
    "use strict";
    $(document).ready(function () {
        /****************************************
              -------*** JS Table ***-------
                     ----------------
              
              01. PRELOADER JS
              02. BOTTOMtoTOP JS
              03. MAIN SLIDER JS
              04. STICKY HEADER JS
              05. COUNTER-UP JS
              06. AOS ANIMATION JS
              07. MODAL VIDEO JS
              08. PARALLAX JS
              09. VANILLA TILT JS
              10. MOBILE MENU JS
              11. CLIENT SLIDER JS
              12. TESTIMONIAL JS
              
              
        *****************************************/


        /************************************************
             -------*** 01. PRELOADER JS ***-------
                        ----------------
        *************************************************/
        setTimeout(function () {
            $('.preloader').fadeOut();
        }, 30);



        /************************************************
             -------*** 02. BOTTOMtoTOP JS ***-------
                         ----------------
        *************************************************/
        $(window).scroll(function () {
            if ($(this).scrollTop() > 600) {
                $('.btm-to-top').show();
            } else {
                $('.btm-to-top').hide();
            }
        });



        /************************************************
             -------*** 03. MAIN SLIDER JS ***-------
                         ----------------
        *************************************************/
        $('.etl-main-slider-area-start').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });



        /************************************************
             -------*** 04. STICKY HEADER JS ***-------
                         -----------------
        *************************************************/
        $(window).scroll(function () {
            var sticky = $('.etl-navigation-area-start'),
                scroll = $(window).scrollTop();
            if (scroll < 200) sticky.removeClass('sticky');
            else sticky.addClass('sticky').animate({
                scrollTop: 0
            }, 1000);
        });


        /************************************************
             -------*** 05. COUNTER-UP JS ***-------
                         --------------
        *************************************************/
        $('.counter').counterUp({
            delay: 5,
            time: 1000
        });


        /************************************************
             -------*** 06. AOS ANIMATION JS ***-------
                         -----------------
        *************************************************/
        AOS.init();



        /************************************************
             -------*** 07. MODAL VIDEO JS ***-------
                         -----------------
        *************************************************/
        $(".js-modal-btn").modalVideo();



        /************************************************
             -------*** 08. PARALLAX JS ***-------
                         -------------
        *************************************************/
        $('.etl-course-teacher-area-start').parallax({
            imageSrc: 'assets/images/map.png'
        });



        /************************************************
             -------*** 09. VANILLA TILT JS ***-------
                         ----------------
        *************************************************/
        VanillaTilt.init(document.querySelectorAll(".mouse-move"), {
            max: 25,
            speed: 400
        });


        /************************************************
             -------*** 10. MOBILE MENU JS ***-------
                         ----------------
        *************************************************/
        $('.drawer').drawer();



        /************************************************
             -------*** 11. CLIENT SLIDER JS ***-------
                        -------------------
        *************************************************/
        $('.class-name').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });


        /************************************************
             -------*** 12. TESTIMONIAL JS ***-------
                        -------------------
        *************************************************/
        $('.class-name').owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });

    });
}(jQuery));
