if ( $('.banner-slider').length > 0 ) {
    ;(function($, window, document, undefined) {
        'use strict';


        // removing the slider background
        if(is.mobile() || $(window).width() < 768) {
            $('.banner-slider > .item-video').remove();
        } else {
            $('.banner-slider > .item-video').each(function() {
                var videoContainer = $(this).find('.item-video-container'),
                    videoPath = videoContainer.attr('data-video'),
                    videoPoster = videoContainer.attr('data-poster');

                videoContainer.vide({
                    mp4: videoPath,
                    poster: videoPoster
                }, {
                    autoplay: false
                });
            });
        }

        var $bannerSlider = $('.banner-slider').bxSlider({
            auto: true,
            controls: false,
            mode: 'fade',
            pager: false,
            pause: 12000,
            speed: 600,

            onSlideBefore: function($element) {
                $('.banner-slider').find('video').each(function() {
                    this.pause();
                });

                $element.find('.child-item').removeClass('active');

                if($element.hasClass('item-video')) {
                    var vide = $element.find('.item-video-container').data('vide'),
                        video = vide.getVideoObject();

                    video.play();

                    $(video).one('ended', function() {
                        $bannerSlider.goToNextSlide();
                        console.log(video);
                    });
                }
            },

            onSlideAfter: function($element) {
                var t = 200;

                $element.find('.child-item').each(function(i) {
                    var child = $(this);

                    setTimeout(function() {
                        child.addClass('active');
                    }, t * i);
                });
            }
        });


    })(jQuery, window, document);
}


if ( $('.kanoop-nav-wrap').length > 0 ) {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.kanoop-nav-wrap').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.kanoop-nav-wrap').removeClass('fixed');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.kanoop-nav-wrap').addClass('fixed');
            }
        }
        
        lastScrollTop = st;
    }
    var offset_top1 = $('.kanoop-market-wrap').offset().top 
    function sticky_nav1(){
        var scroll_top1 = $(window).scrollTop();
        if ( scroll_top1 > offset_top1 ){
            $('.kanoop-nav-wrap').addClass('full_bg')
        }else{
            $('.kanoop-nav-wrap').removeClass('full_bg')
        }
    }
    sticky_nav1();
    $(window).on('scroll load',function(){
        sticky_nav1();

        if ( $(window).scrollTop() > $('.main-content').offset().top ) {
            $('.kanoop-nav-wrap').addClass('touch')
        }else{
            $('.kanoop-nav-wrap').removeClass('touch')
        }

        if ( $(window).scrollTop() > $('.kanoop-nav-wrap').offset().top / 2 ) {
            $('.kanoop-nav-wrap').addClass('active')
        }else{
            $('.kanoop-nav-wrap').removeClass('active')
        }
    })
}

$('.bottom-menu li, .kanoop-nav-wrap li').mouseover(function(){
    $('.bottom-menu li, .kanoop-nav-wrap li').css({
        'opacity' :  0.2
    })
    $(this).css({
        'opacity' :  1
    })
})
$('.bottom-menu li, .kanoop-nav-wrap li').mouseout(function(){
    $('.bottom-menu li, .kanoop-nav-wrap li').css({
        'opacity' :  1
    })
})

if ( $('.header-right-sec').length > 0 ) {
    $('.open_label').click(function(){
        $(this).parents('.home_menu').addClass('active');
        $('#mobile_menu').fadeIn();
    })
    $('.close_label').click(function(){
        $(this).parents('.home_menu').removeClass('active');
        $('#mobile_menu').fadeOut();
    })
}

$('.search-link').click(function(){
    return false;
})

$('.signup-btn,.signup-link').click(function(){
    $('.signup-btn').addClass('active');
    $('.sign-in-popoup').fadeIn();
    $('.login_in, .login-btn').removeClass('active');
    $('body, .sign_up, .kanoop-header-wrap, .header-right').addClass('active');
    return false;
})
$('.login-btn,.login-link').click(function(){
    $('.login-btn').addClass('active');
    $('.sign-in-popoup').fadeIn();
    $('.signup-btn, .sign_up').removeClass('active');
    $('body,.login_in, .kanoop-header-wrap, .header-right').addClass('active');
    return false;
})
$('.sign_up').click(function(){
    $(this).addClass('active')
    $('.login_in, .login-btn').removeClass('active');
    $('.signup-btn').addClass('active');
})
$('.login_in').click(function(){
    $(this).addClass('active');
    $('.signup-btn, .sign_up').removeClass('active');
    $('.login-btn').addClass('active');
})

$('.close-btn').click(function(){
    $('.sign-in-popoup').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
})

$('.social-link a:nth-child(2)').click(function(){
    $('.sign-in-popoup').fadeOut();
    $('.signup-popup6').fadeIn();
    $('.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
    return false;
})
$('.signup-popup6 button').click(function(){
    $('.signup-popup6').fadeOut();
    $('body').removeClass('active');
})

document.addEventListener('keyup', function(e){ 
    if(e.which == 27){
        $('.sign-in-popoup').fadeOut();
        $('.signup-popup6').fadeOut();
        $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
    }
})

if ( $('#morphsearch').length > 0 ) {
    (function() {
        var morphSearch = document.getElementById( 'morphsearch' ),
            input = morphSearch.querySelector( 'input.morphsearch-input' ),
            ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
            isOpen = isAnimating = false,
            // show/hide search area
            toggleSearch = function(evt) {
                // return if open and the input gets focused
                if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

                if( isOpen ) {
                    classie.remove( morphSearch, 'open' );

                    // trick to hide input text once the search overlay closes 
                    // todo: hardcoded times, should be done after transition ends
                    if( input.value !== '' ) {
                        setTimeout(function() {
                            classie.add( morphSearch, 'hideInput' );
                            setTimeout(function() {
                                classie.remove( morphSearch, 'hideInput' );
                                input.value = '';
                            }, 300 );
                        }, 500);
                    }
                    
                    input.blur();
                }
                else {
                    classie.add( morphSearch, 'open' );
                }
                isOpen = !isOpen;
            };

        // events
        input.addEventListener( 'focus', toggleSearch );//keyUp
        ctrlClose.addEventListener( 'click', toggleSearch );
        // esc key closes search overlay
        // keyboard navigation events
        document.addEventListener( 'keydown', function( ev ) {
            var keyCode = ev.keyCode || ev.which;
            if( keyCode === 27 && isOpen ) {
                toggleSearch(ev);
            }
        } );


        /***** for demo purposes only: don't allow to submit the form *****/
        morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    })();
}

if ( $('.kanoop-technology-wrap').length > 0 ) {
    var techImgSlider = $('.tech-img').owlCarousel({
        controls: false,
        dots: false,
        items: 1
    });

    var techInfoSlider = $('.tech-info').owlCarousel({
        controls: false,
        dots: false,
        items: 1,
    });

    var techCarousel = $('.tech-carousel ul').owlCarousel({
        controls: false,
        margin: 30,
        dots: false,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            600: { items: 3 }
        }
    });

    $('.tech-carousel ul').on('click', 'li', function(e) {
        e.preventDefault();

        if($(this).hasClass('active')) return;

        var $this = $(this),
            index = parseInt($this.attr('data-index')) - 1;

        $this.closest('ul').find('li').removeClass('active');
        $this.addClass('active');

        techInfoSlider.trigger('to.owl.carousel', [index, 500, true]);
        techImgSlider.trigger('to.owl.carousel', [index, 500, true]);
    })
    .parent().find('> .material-icons').on('click', function(e) {
        e.preventDefault();

        var ev;

        if($(this).hasClass('prev')) {
            ev = 'prev.owl.carousel';
        } else if($(this).hasClass('next')) {
            ev = 'next.owl.carousel';
        }

        techCarousel.trigger(ev);
    });
}
$(window).load(function() {
    new WOW().init();
    if ( $('.flexslider').length > 0 ) {
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            slideshowSpeed: 5000
        });
    }
    if ( $('.kanoop-market-slider').length > 0 ) {
      $('.kanoop-market-slider').flexslider({
        animation: "slide",
        controlNav: false,
        directionNav: false,
        smoothHeight: true,
        pauseOnHover: true
      });
    }
    if ( $('.kanoop-event-slider').length > 0 ) {
      $('.kanoop-event-slider').flexslider({
        animation: "slide",
        controlNav: false
      });
    }
    $('.banner-slider *').css({
        'opacity' : 1
    })
});

$(window).scroll(function() {
    var e = $(window).scrollTop();
  $(".kanoop-banner-inner").css({
    "margin-top": -.09 * e
  }), $(".kanoop-banner-inner").css({
    opacity: ($('.kanoop-banner-inner').height() - e) / $('.kanoop-banner-inner').height()
  })
})

if ( $('.main-content').length > 0 ) {
    function autoScroll() {
        
          $('.kanoop-nav-wrap a[href^="#"]').on('click',function (e) {
             
          var target = this.hash;
          var target1 = $(target);
          
          
              $('html, body').stop().animate({
                'scrollTop': target1.offset().top - $('.kanoop-nav-wrap').outerHeight() + 1
              }, 1000, 'swing');
              
              $('.kanoop-nav-wrap a').removeClass('active');
              $(this).addClass('active');
            return false;
          });
    }

    function refrence_nav(){
        var mid_scroll = $(window).scrollTop();

        if (  mid_scroll < $('.kanoop-nav-wrap').offset().top ) {
            $('.kanoop-nav-wrap a').removeClass('active')
        }
        if ( mid_scroll > $('#about').offset().top - $('.kanoop-nav-wrap').outerHeight() ) {
            $('.kanoop-nav-wrap a').removeClass('active')
            $('.kanoop-nav-wrap a[href="#about"]').addClass('active')
        }
        if ( mid_scroll > $('#what-we-do').offset().top - $('.kanoop-nav-wrap').outerHeight() ) {
            $('.kanoop-nav-wrap a').removeClass('active')
            $('.kanoop-nav-wrap a[href="#what-we-do"]').addClass('active')
        }
        if ( mid_scroll > $('#discover').offset().top - $('.kanoop-nav-wrap').outerHeight() ) {
            $('.kanoop-nav-wrap a').removeClass('active')
            $('.kanoop-nav-wrap a[href="#discover"]').addClass('active')
        }
    }

    autoScroll();
    refrence_nav();
    $(window).on('load scroll' ,function(){
        refrence_nav();
        autoScroll();
    })
}
$('.email-frm .btn-signup').click(function(){
    $('.sign-in-popoup').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').addClass('out_hid');
    $('.signup-popup1').fadeIn();
})

$('.signup-close-btn1').click(function(){
    $('.signup-popup1').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})

$('#email1').keyup(function(){
    var emaval = $(this).val();
    $('.signup-popoup-inner p span').text(emaval)
    $('#email2').val(emaval)
})
$('.signup-more a').click(function(){
    $('.signup-check').slideToggle();
})

$('.forgot_pw, .signup-popup6 a').click(function(){
    $('.sign-in-popoup, .signup-popup6').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').addClass('out_hid');
    $('.signup-popup2').fadeIn();
    return false;
})
$('.signup-close-btn2').click(function(){
    $('.signup-popup2').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})

$('.signup-close-btn3').click(function(){
    $('.signup-popup3').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})

$('.join_kanoop_btn').click(function(){
    $('.signup-popup2').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active out_hid');
    $('body').addClass('reset-page');
    $('.reset-popup1').addClass('active');
    return false;
})

$('.back_login_btn').click(function(){
    $('.signup-popup3').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active out_hid');
    $('body').addClass('reset-page');
    $('.reset-popup3').addClass('active');
    return false;
})
$('.signup-close-btn4').click(function(){
    $('.signup-popup4').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})

$('.merchant_btn').click(function(){
    $('.sign-in-popoup, .signup-popup1').fadeOut();
    $('body,.kanoop-header-wrap, .header-right ,.header-right a').removeClass('active');
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').addClass('out_hid');
    $('.signup-popup5').fadeIn();
    return false;
})
$('.signup-close-btn5').click(function(){
    $('.signup-popup5').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})



$('.step_1 .btn-green').click(function(){
    $(this).parents('.frm').removeClass('active')
    $('.order1').removeClass('active');
    $('.step_2,.order2').addClass('active')
    return false;
})

$('.step_2 .btn-green').click(function(){
    $(this).parents('.frm').removeClass('active')
    $('.order2').removeClass('active');
    $('.step_3,.order3').addClass('active')
    return false;
})

$('.step_3 .btn-green').click(function(){
    $('.signup-popup5').fadeOut();
    $('body').removeClass('out_hid');
    $('.header-right a,.order3').removeClass('active');
    $('.step_1,.order1').addClass('active')
    $(this).parents('.frm').removeClass('active')
    return false;
})

$('.step_2 .btn-back').click(function(){
    $(this).parents('.frm').removeClass('active')
    $('.order2').removeClass('active');
    $('.step_1,.order1').addClass('active')
    return false;
})

$('.step_3 .btn-back').click(function(){
    $(this).parents('.frm').removeClass('active')
    $('.order3').removeClass('active');
    $('.step_2,.order2').addClass('active');
    return false;
})

$('.join-next-step').click(function(){
    $('.notification-overlay2').show();
    $('.signup-popup1').fadeOut();
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').removeClass('out_hid');
    $('.header-right a').removeClass('active');
})

$('.notification-overlay2 .close-noti-btn').click(function(){
    $('.notification-overlay2').hide();
})

$('.not-btn + button').click(function(){
    $('.notification-overlay2').hide();
})

$('.length-input').on('input', function() {
    if ($(this).val().length>8) {
        $(this).next('i').show();
    }else{
        $(this).next('i').hide();
    }
});

$('.conf-pass').on('input', function() {
    if ($(this).val() == $('.length-input').val() ) {
        $(this).next('i').show();
    }else{
        $(this).next('i').hide();
    }
});
$('.reset-email-form button').click(function(){
    $('.reset-popup1').removeClass('active');
    $('.reset-popup2').addClass('active');
})
$('.reset-bar-link').click(function(){
    $('body').removeClass('reset-page');
    $('.reset-popup2').removeClass('active');
    $('body, .kanoop-header-wrap, .kanoop-nav-wrap').addClass('out_hid');
    $('.signup-popup3').fadeIn();
    return false;
})

$('.password-config button').click(function(){
    $('.reset-popup3').removeClass('active');
    $('.reset-popup4').addClass('active');
})

$('.discover-project-info-content p a').click(function(){
    $(this).parent().toggleClass('active');
    return false;
})

if ( $('.kanoop-terms-slider').length > 0 ) {
    $('.owl-slider1,.owl-slider2').owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
    });
}
$('.morphsearch-input').focus(function(){
    $('body').addClass('hider');
})
$('.morphsearch-close').click(function(){
    $('body').removeClass('hider');
})