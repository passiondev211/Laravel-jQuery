var winHeight = $(window).height();
    winWidth = $(window).width();
    docHeight = $('body').height();
    
$(window).load(function() {
    if ( $('.flexslider').length > 0 ) {
        $('.flexslider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: true,
            smoothHeight: true,
            minItems: 1,
            maxItems: 11
        });
    }
});
$(window).load(function() {
    if ( $('.side-slider-outer').length > 0 ) {
        $('.side-slider-outer').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: false
        });
    }
})
$(window).on('scroll load',function(){
	/* Header scripts */
    if ( $(window).scrollTop() > 170 ) {
        /*$('#header-wrap').addClass('active');*/
        $('.block-textarea-outer,#contents').addClass('stick');
        $('.edit-btn').css({
            'opacity' : '1'
        })
    } else if($(window).scrollTop() < 170){
        $('.block-textarea-outer,#contents').removeClass('stick');
        /*$('#header-wrap').removeClass('active');*/
        $('.edit-btn').css({
            'opacity' : '0'
        })
    };

    if ( $(window).scrollTop() > 400 ) {
        $('.tab-right-sec h4').addClass('active');
    } else if($(window).scrollTop() < 400 ){
        $('.tab-right-sec h4').removeClass('active');
    };

    /*if ( $('body').hasClass('hard_code') ) {
        if ( $(window).scrollTop() > 5 ) {
            $('#header-wrap').addClass('active');
            $('.block-textarea-outer,#contents').addClass('stick');
        } else if($(window).scrollTop() < 5){
            $('.block-textarea-outer,#contents').removeClass('stick');
            $('#header-wrap').removeClass('active');
        };
    }*/
})

$('.jump-btn').click(function() {
    $('body,html').animate({
        scrollTop:0
    })
    $(this).hide();
});

$('.tab-left-sec a').click(function() {
    $('body,html').animate({
        scrollTop: $('.tab-info-outer').offset().top
    })
});

/*	Animated slidebar scripts	*/
$(".flyout-btn").click(function(){
	$(".flyout-btn").toggleClass("btn-rotate");
	$(".flyout").find("a").removeClass();
	$(".flyout").removeClass("flyout-init fade").toggleClass("expand");
	$(".flyout-overlay").toggleClass("active");
	return false;
})

$(".flyout").find("a").click(function(){
	$(".flyout-btn").toggleClass("btn-rotate");
	$(".flyout").removeClass("expand").addClass("fade")
	$(this).addClass("clicked")
	$(".flyout-overlay").removeClass("active");
})
$('.anim-icon').click(function(){
	if ( $(this).hasClass('active') ) {
		$(this).addClass('in');
		$(this).removeClass('active');
	}else{
		$(this).addClass('active');
		$(this).removeClass('in');
	}
})

$('.chat-btn').click(function(){
    if( $(this).parents().hasClass('block-post') ){
        $(this).parents('.expand-sec').toggleClass('active');
        $(this).parents().children('.comment-chat-wrap').slideToggle();
    }
})

/*	Animated slidebar scripts	*/
$('.block-txt').click(function(){
    if( $(this).parents().hasClass('block-post') ){
        $(this).parents('.block-post').toggleClass('active').find('.block-txt span,.hide-info').slideToggle();
        $('.btn-expand').parent().toggleClass('active');
    }
})
$('.more-info-btn').click(function(){
    $(this).parent().toggleClass('active');
    $(this).parent().children('span,i.hidden-txt').slideToggle();
    $(this).parent().children('i.visible-txt').fadeToggle();
    return false;
})


/*	OffCanvas scripts	*/
$('.off-canvas a').click(function(){
	if ( $('.off-canvas a').hasClass('active') ) {
		$('.off-canvas a').removeClass('active');
		$(this).toggleClass('active');
	}else{
		$('.off-canvas a').removeClass('active');
		$(this).toggleClass('active');
	}
})
$('.off-canvas-btn').click(function(){
	$('.off-canvas,.off-canvas-overaly').toggleClass('active');
	$('#main-wrap .container').toggleClass('active');
})

$('#product-page.darktheme .off-canvas-btn').click(function(){
    $('#product-page.darktheme').toggleClass('active');
})


/*	Post Icon scripts	*/
$('.post-top-right a').click(function(){
	if ( $(this).hasClass('active') ) {
		$(this).addClass('in').removeClass('active');
	}else{
		$(this).addClass('active').removeClass('in');
	}
})

$('.arrow-close').click(function(){
    $('.block-add').removeClass('un-active');
    $('body').removeClass('active')
	$('.postSideBtn').removeClass('active');
	$('.post-sidebar, .block-add').removeClass('active');
    $('.sidebar-inner-overlay').removeClass('active');
})

$('.flyout-overlay').click(function(){
	$(this).removeClass('active');
	$('.flyout').removeClass('expand');
	$('flyout-btn').removeClass('btn-rotate');
})
$('.grid-btn a').click(function(){
	$(this).parent().toggleClass('active');
	$('.app-menu').toggleClass('active');
    $('.header-right-inner, .login-menu').removeClass('active');
    return false;
})

document.addEventListener('keyup', function(e){ 
    if(e.which == 27){
          $('.flyout-overlay, .grid-btn, .header-right-inner, .login-menu, .app-menu, body').removeClass('active');
          $('.flyout').removeClass('expand');
          $('.flyout-btn').removeClass('btn-rotate');
          $('.feed-person-sec').fadeOut();
          $('.feed-top-left, .post-sidebar, .block-add, .sidebar-inner-overlay').removeClass('active');
          $('.equalizer-popup').removeClass('in').css({
            'display' : 'none'
          });          
          $('.chioce-sec').slideUp();
          $('.modal-backdrop').remove();
          $('body').removeClass('modal-open');
          $('.feed-popup1a, .feed-popup2, .feed-popup3, .sign-in-popup,.full-img-popup').removeClass('open')
          $('body, .backdrop-img-popup').removeClass('alter');
          $('.live-popup-overlay').removeClass('active');
          $('body').removeClass('.notic-body');
          $('.cart-popup, .cart-tooltip').hide();
          $('.gallary-popup2, .gallary-popup3').removeClass('in');
          $('.gallary-popup2, .gallary-popup3').parents('.photo-popup-backdrop').removeClass('active');
     }
})
$('.header-right-inner a').click(function(){
	$(this).parent().toggleClass('active');
	$('.login-menu').toggleClass('active');
    $('.grid-btn, .app-menu').removeClass('active');
	return false;
})

$('.more-info-dots').click(function(){
	$(this).children('.dropdown-menu').toggleClass('active')
})


$('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').click(function(){
    var click_elem = $(this);
    $(this).parents('.block-right, #contents > .block-textarea-outer').each(function () {
        if (!$(this).hasClass("expand")) {
            click_elem.parents('.block-textarea-outer').find('.post-title').show().focus();
            click_elem.addClass('post-text');
            click_elem.val("");
            $(this).addClass('expand');
            click_elem.parents('.block-textarea-outer').find('.block-textarea-left i.material-icons').text('public');
            click_elem.attr("placeholder", "Add a description");
            click_elem.parents('.block-textarea-outer').find(".icon-swicher").removeClass('expander').addClass('dropdown-toggle');
        }
    });
});
$(document).click(function() {
    $('.block-right, #contents > .block-textarea-outer').removeClass('expand');
    var outer_elem = $('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').parents('.block-textarea-outer');
    $('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right')
        .attr("placeholder", "What's happening?")
        .val("What's happening")
        .removeClass('post-text');
    outer_elem.find('.post-title').hide();
    outer_elem.find('.block-textarea-left i.material-icons').text('select_all');
    outer_elem.find('.block-textarea-left .uploader-select-inner').removeClass('active');
    outer_elem.find('.block-textarea-left .uploader-select-inner .dropdown-menu').hide();
    outer_elem.find('.icon-swicher').removeClass('dropdown-toggle').addClass('expander');

});

$('.morphsearch-form .magnify').click(function () {
    $('.morphsearch-form .morphsearch-input').focus();
});
$('.expand-sec.expand-sec-first .hide-active .chat-btn').hover(function (e) {
    $(this).find('.chat-count').show('slide', {direction: 'right'}, 100, function () {
        $(this).css({visibility: "visible"});
    });
},function (e) {
    $(this).find('.chat-count').css({visibility: "hidden"}).hide('slide', {direction: 'left'}, 100);
}
);
$('.block-right textarea, #contents > .block-textarea-outer input.post-title, .block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').keyup(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        $('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').focus();
    } 
    if ($('.block-right textarea, #contents > .block-textarea-outer input.post-title').val().length > 0 || $('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').val().length > 0) {
        $('.block-textarea-outer form .icon-sec-right .post-btn').attr('disabled', false);
    } else {
        $('.block-textarea-outer form .icon-sec-right .post-btn').attr('disabled', true);
    }
});
$('.block-right textarea, #contents > .block-textarea-outer input.post-title').keypress(function (e) {
    if ($(this).val().length > 35 || ($(this).val().length == 0 && e.key == " ")) {
        return false;
    }
});
$('.block-right textarea, #contents > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').keypress(function (e) {
    if ($(this).val().length > 140 || ($(this).val().length == 0 && e.key == " ")) {
        return false;
    }
});
/* { Feed page function } */

/*filter script*/

$('.filter-button').click(function(){
    $(this).addClass('active')
    $('.filterbar-wrap').toggleClass('active');

})
$('.filter-right .close-btn').click(function(){
  $('.filterbar-wrap, .filter-button').removeClass('active');
})


/*social icon script*/
$('.social-icon').click(function(){
    var filterIndex = $(this).parents('li').index()
        socialLeft = $(this).parent().offset().left
        
    if ( $(this).parent().hasClass('active') ) {
        $(this).parent().removeClass('active')
        $('.social-icon').removeClass('active');
        $('.filter-sec').removeClass('active');
    }else{
        $('.social-icon').parent().removeClass('active');
        $('.social-icon').removeClass('active');
        $(this).parent().addClass('active')
        $(this).addClass('active');
        $('.filter-sec').eq(filterIndex).addClass('active')
        if ( winWidth < 480 ) {
            $('.filter-sec.active').css('left', socialLeft + 140);
        }else if ( winWidth < 768 ) {
            $('.filter-sec.active').css('left', socialLeft + 150);
        } else{
            $('.filter-sec.active').css('left', socialLeft + 43 );
        };
    };
})

/* post-sidebar cartsec */
/*, .box-cart-btn*/
$('.cart-menubtn').click(function(){
    $('.feed-popup3').addClass('open');
    $('body').addClass('active');
    return false;
});
$('.box-cart-btn').click(function(){
    $(this).parents('.feed-title').find('.cart-tooltip').toggle();
    return false;
})

/* post-sidebar main */
$('.feed-title, .block-post-cout .feed-heading-right .detail-btn').click(function(){

    $('.post-sidebar, .block-add').removeClass('active');
    $(this).parents('.block-add').addClass('active');
    $('.sidebar-inner-overlay').addClass('active');
    if ( $('.contentSidebar').hasClass('active') ) {
    }else{
        $(this).parents('.block-add').find('.contentSidebar').toggleClass('active')
    }
    return false;
});


$('.formBtn').click(function(){
    $('.post-sidebar').removeClass('active');
    $(this).parents('.block-add').find('.formSidebar').toggleClass('active')
    $('.sidebar-inner-overlay').addClass('active');
    return false;
});

$('.chat-com-btn').click(function(){
    $('.post-sidebar').removeClass('active');
    $(this).parents('.block-add').find('.chatSidebar').toggleClass('active')
    return false;
});

$('.donateBtn').click(function(){
    $('.post-sidebar').removeClass('active');
    $(this).parents('.block-add').removeClass('active');
    $(this).parents('.block-add').find('.donateSidebar').toggleClass('active')
    $('.sidebar-inner-overlay').removeClass('active');
    return false;
});

$('.arrow-close, .purCloseBtn').click(function(){
    $('.post-sidebar, .block-add').removeClass('active');
    return false;
})

/* stopPropagation */
$('.feed-top-left p, .feed-person-sec, .cart-menubtn, .block-post-sec, .feed-title a,.block-post-cout .feed-title, .cart-outer, .full-popup-dialog, .login-menu, .app-menu, .btn-primary, .comment-chat-wrap, .feed-modal-dialog, .feed-top-right, .comment-section-info, .expand-sec, .block-txt, .sidebarWrap, .block-right form, .block-textarea-outer form').click(function(e){
    e.stopPropagation()
});

/* public person script */
$('.feed-person-btn').click(function(){
    if ( $(this).parents('.feed-top-left').hasClass('active') ) {
        $('.feed-person-sec').fadeOut();
        $('.feed-top-left, .feed-top-sec').removeClass('active');
    } else{
        $('.feed-person-sec').fadeOut();
        $('.feed-top-left, .feed-top-sec').removeClass('active');
        $(this).parents('.feed-top-sec').addClass('active')
        $(this).parents('.feed-top-left').addClass('active');
        $(this).parents().children('.feed-person-sec').fadeIn('fast');
    }
})

$('.share-left i').click(function(){
    $('.share-modal, .share-modal-overlay').fadeIn('active')
})

$('.share-modal-overlay, .share-close').click(function(){
    $('.share-modal, .share-modal-overlay').fadeOut('active')
})


/* range slider */
if ( $('.slider-vertical').length > 0 ) {
    $( ".slider-vertical" ).slider({
        orientation: "vertical",
        range: "min",
        min: 0,
        max: 23,
        value: 20,
        change: function( event, ui ) {
            $(this).find( "em" ).text( ui.value );
            if($(this).find( "em" ).text() >= 21 ){
                $('.chioce-sec').fadeIn();
                $('body').addClass('active-in')
            }else{
                $('.chioce-sec').fadeOut();
                $('body').removeClass('active-in')
            }
        }
    });
    $( ".slider-vertical .ui-slider-handle").prepend($('.timeDigit').html())
    $( ".timeDigit em" ).text( $( ".slider-vertical" ).slider( "value" ) );
}
$('.slider-vertical i').click(function() {
    $(this).next().toggle()
})

$('.feed-popup-btn').click(function(){
    $('.feed-popup1a').addClass('open');
    $('.feed-popup1a.open textarea').focus();
    $('body').addClass('active');
})
$('.feed-product-popup, .sign-in-popup').click(function(){
    $(this).removeClass('open')
    $('body').removeClass('active');
})

$('.popup-closeBtn, .cont-btn').click(function(){
    $('.feed-popup3').removeClass('open')
    $('body').removeClass('active');
})

$('.next-btn').click(function(){
    $(this).parents('.feed-popup1a').removeClass('open');
    $('.feed-popup2').addClass('open')
    $('body').addClass('active');
    return false;
})

$('.form-next-btn').click(function(){
    $(this).parents('.feed-popup2').removeClass('open');
    $('.sign-in-popup').addClass('open')
    $('body').addClass('active');
    return false;
})
$('.feed-body-top-rt .dropdown-toggle, .visible-active .dropdown-toggle, .pin-btn').click(function(){
    return false;
})

$('.start-btn').click(function(){
    $('.modal-form-right .inner').addClass('active');
    return false
})
$('.expander').click(function(){
    $('.kanoop-sec').fadeToggle();
    return false;
})
$('.comment-chat-fig > a').mouseover(function(){
    $(this).next().toggle();
    return false;
})
$('.equalizerBtn').click(function(){
    $('.equalizer-popup').addClass('in').css({
        'display' : 'block'
    });
    $('body').addClass('modal-open').prepend('<div class="modal-backdrop fade in"></div>');
})

$('.equalizer-popup').click(function(){
    $(this).removeClass('in').css({
      'display' : 'none'
    });
    $('.modal-backdrop').remove();
    $('body').removeClass('modal-open');
})

$('.equalizer-popup .close').click(function(){
    $('.modal').removeClass('in').css({
      'display' : 'none'
    });
    $('.modal-backdrop').remove();
    $('body').removeClass('modal-open');
})
$('body').click(function(){
    $('.grid-btn, .app-menu, header-right-inner, .login-menu').removeClass('active')
})

$('.block-add').mouseover(function(){
    $(this).find('.video-wrap').addClass('active');
})
$('.product-main .video-wrap').mouseover(function(){
    $(this).addClass('active');
})

$('.block-post-outer').click(function(){
    $('.full-img-popup').addClass('open');
    $('body').addClass('active');
    return false;
})
$('.full-img-popup').click(function(){
    $(this).removeClass('open');
    $('body').removeClass('active');  
})


/* Product page Scripts */
$('.reward-box.green').click(function(){
    $('.reward-box.green').fadeIn();
    $(this).fadeOut();
    /**/
    $('.main-sidebar-product').find('.main-sidebar-select').slideUp();
    $(this).parents('.main-sidebar-product').find('.main-sidebar-select').slideDown();
    $('.main-sidebar-product').removeClass('active');
    $(this).parents('.main-sidebar-product').addClass('active');

    $('.side-slider-btn-sec').slideUp();
    $('.main-sidebar-product').find('.enter-show, .order-step1, .order-step2').slideUp();
    $('.main-sidebar-product').find('.enter-hide').slideDown();
    $('.main-sidebar-top').slideDown();
})

$('.cont-btn').mouseover(function(){
    $(this).addClass('txt-btn');
})

$('.cont-btn').click(function(){
    $(this).parent().slideUp();
    $(this).parents('.main-sidebar-product').find('.enter-show').slideDown();
    $(this).parents('.main-sidebar-product').find('.enter-hide').slideUp();
})

$('.orderBtn').click(function(){
    $(this).parents('.side-slider-btn-sec').slideUp();
    $(this).parents('.main-sidebar-product').find('.order-step1').slideDown();
    $(this).parents('.main-sidebar-top').slideUp();
    return false;
})
$('.btn-addcart').click(function(){
    $(this).parents('.main-sidebar-product').find('.order-step1').slideUp();
    $(this).parents('.main-sidebar-product').find('.order-step2').slideDown();
    return false;
})


/*$('.tab-wrap')*/
/* if ( $('.tab-wrap-outer').length > 0 ) {
    var offset_top = $('.tab-wrap-outer').offset().top 
    function sticky_fun(){
        var scroll_top = $(window).scrollTop();
        if ( scroll_top > offset_top - 70 ){
           $(".tab-wrap-outer").addClass("sticky");
            $(".banner-wrap,.tab-info-outer").addClass("stick");
            $("#header-wrap, #morphsearch").addClass("activeOut");
            $(".tab-right-sec").addClass("shrink");
        } else{
            $(".tab-wrap-outer").removeClass("sticky");
            $(".banner-wrap,.tab-info-outer").removeClass("stick");
            $("#header-wrap, #morphsearch").removeClass("activeOut");
        }

        if ( scroll_top > offset_top + 70 ){
            $(".header-outer-wrap, #morphsearch, .tab-info-outer, .tab-wrap-outer").addClass("active");
        }else{
            $(".header-outer-wrap, #morphsearch, .tab-info-outer, .tab-wrap-outer").removeClass("active");
        }

    } 
    sticky_fun();
    $(window).on('load scroll' ,function(){
        sticky_fun();
    })
} */

if ( $('.morphsearch').length > 0 ) {
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

if ( $('.wow').length > 0 ) {
    new WOW().init();
}

if ( $('.parallax').length > 0 ) {
    $('.parallax').parallax();
}




$(".video-sec video").prop('muted', true);
$(".video-sec").find('video')[0].play();

$('.play_btn,.volume_cont').click(function(e){
    $('.play_btn,.volume_cont').fadeIn();
    $(this).fadeOut();
    $('.video-wrap').removeClass('shadow');
    $(this).parents('.video-wrap').addClass('shadow');
    $("video").prop('muted', true);
    $('video').attr({
        'controls' : false
    });
    $(this).parent().find('video').attr({
        'controls' : 'controls'
    });
    $(this).parent().find('video').prop('muted', false);
    $(this).parent().find('video')[0].currentTime = 0;
    $(this).parent().find('video')[0].play();
});


$('.play_btn').click(function() {
    $(this).parents('.video-wrap').find('.volume_cont').fadeOut();
})
$('.volume_cont').click(function() {
    $(this).parents('.video-wrap').find('.play_btn').fadeOut();
})

$(".banner-video img,.play_button").click(function(e){
    var singleVideo = $(this).parent('.banner-video').find('video')[0];
    singleVideo.play();
    console.log("here");
    $(this).fadeOut();
    $('.banner-video img').fadeOut();
    $(this).parent().find('video').attr({
        'controls' : 'controls',
        'autoplay' : 'autoplay'
    })
});

$(window).on('load scroll', function(e){
    console.log("sdf");
    if ( $('#video').length > 0 ) {
        var video = document.getElementById("video");
        if(video.paused==true){
            $('.main-sidebar').removeClass('active');
            $('.banner-video').css({
                'position': 'relative',
                'top': '0',
                'width': '657px',
                'left': '0',
                'transition': 'all 0.3s',
                'transform': 'none',
                'margin-left': '0',
                'padding-bottom': '33.2%'
            })
        }else{
            var offSet_top = $('.product-wrap').offset().top,
                scrolltop = $(window).scrollTop();
            if ( scrolltop > offSet_top -160 ){
                $('.main-sidebar').addClass('active');
               $('.banner-video').css({
                    'position': 'fixed',
                    'top': '160px',
                    'width': '551px',
                    'transition': 'all 0.3s ease 0s',
                    'padding-bottom': '14%',
                    'z-index': '12',
                    'transform': 'translateX(-50%)',
                    'margin-left': '387.5px',
                    'left': '50%',
               })
            } else{
                $('.main-sidebar').removeClass('active');
                $('.banner-video').css({
                    'position': 'relative',
                    'top': '0',
                    'width': '657px',
                    'left': '0',
                    'transition': 'all 0.3s',
                    'transform': 'none',
                    'margin-left': '0',
                    'padding-bottom': '33.2%'
                }) 
            }
        }
    }
})


$('.pushing-form textarea').not('.icon-sec ,.icon-sec-right').click(function(){
    $(this).parents('.pushing-form').addClass('expand')
})
$(document).click(function() {
    $('.pushing-form').removeClass('expand')
});
$('.chioce-sec span').click(function(){
    $(this).parents('.chioce-sec').slideUp();
    $('body').addClass('hard_code')
})
$('.fancy_popup').hover(function(){
    $(this).parent('li').find('.buzz-item').addClass('active');
},function(){
    $(this).parent('li').find('.buzz-item').removeClass('active');
})

$('.static-head').click(function(){
    $(this).toggleClass('active');
    $('#contents').toggleClass('shot_head');
})
$('.close-textarea').click(function(){
    $(this).parents('.modal').hide();
    $('.modal-backdrop').hide();
})


$('.cammal1').click(function(){
    $('.gallary-popup2').addClass('in');
    $('.gallary-popup2').parents('.photo-popup-backdrop').addClass('active');
    return false;
})
/*$('.cammal2').click(function(){
    $('.gallary-popup1').addClass('in');
    $('.gallary-popup1').parents('.photo-popup-backdrop').addClass('active');
    return false;
})*/
$('.cammal3').click(function(){
    $('.gallary-popup3').addClass('in');
    $('.gallary-popup3').parents('.photo-popup-backdrop').addClass('active');
    return false;
})

$('.photo-gallary-left i,.photo-gallary-right span').click(function(){
    $('.gallary-popup2').removeClass('in');
    $('.gallary-popup2').parents('.photo-popup-backdrop').removeClass('active');
})
$('.photo-gallary-inner-l i, .photo-gallary-inner-ld i').click(function(){
    $('.gallary-popup1').removeClass('in');
    $('.gallary-popup1').parents('.photo-popup-backdrop').removeClass('active');
})
$('.photo-popup-close').click(function(){
    $('.gallary-popup3').removeClass('in');
    $('.gallary-popup3').parents('.photo-popup-backdrop').removeClass('active');
    return false;
})
$('.material-icons1').click(function(){
    $(this).parent().addClass('active')
    $('.gallary-popup2').addClass('active');
})
$('.material-icons2').click(function(){
    $(this).parent().removeClass('active')
    $('.gallary-popup2').removeClass('active');
})
$('.photo-popup-btn').click(function(){
    $('.photo-popup-img-sec').hide();
    $('.photo-popup-input-group').show();
    $('.gallary-popup3').addClass('active');
    return false;
})

$('.btn-flat').click(function(){
    $('.flat-sec').toggleClass('active');
    return false;
})
$('.photo-gallary-inner-ld b').click(function(){
    $('.photo-gallary-inner-l').addClass('active')
    $(this).parent().removeClass('active');
})

$('.photo-gallary-inner-l b').click(function(){
    $('.photo-gallary-inner-ld').addClass('active')
    $(this).parent().removeClass('active');
})

var alse = $('<span><b></b><a href="#"></a><input type="text" placeholder="choice "></span>')

$('.photo-popup-btn a').click(function(){
    $('.photo-popup-input-group').after().append(alse)
})


$('.photo-popup-input-group b').click(function(){
    $(this).parent('span').fadeOut();
})

$('.sidebar_slider-sec .flexslider img, .side-slider-fig img, .block-post-fig a').click(function(){
    $('body, .backdrop-img-popup').addClass('alter')
    return false;
})
$('.backdrop-close').click(function(){
    $('body, .backdrop-img-popup').removeClass('alter');
})

$('.search-active-btn').click(function(){
    $('.morphsearch-input').trigger('focus');
    return false;
})
$('.backdrop-img-outer .block-textarea-upper-fig').click(function(){
    $(this).next('.feed-person-sec').fadeToggle();
})

$('.ship_cart').click(function(){
    $(this).parent().find('.cart-popup').toggle();
    return false;
})

$("body").delegate(".stainlesss","click",function() {	
	$(".second").toggle();
	//$("#first").toggle();
	
	$("#main_video").toggle(1000);
	$("#watch_image").toggle(1000);
	$("#apple").toggle();
	$("#tex").toggle();
	$(".title-side").toggle();
	if($(this).find(".fa-angle-down").length > 0)
	{
		$(this).find(".fa-angle-down").addClass("fa-angle-up");
		$(this).find(".fa-angle-down").removeClass("fa-angle-down");
		$(".stainlesss").addClass("active");
		$(".second").addClass("active");
		$("#product-page #header-wrap").css("background","#fafafa");
		$(".right_bar.staineless").css("background","#fafafa");
		$(".apple_edition").css("background","#fff");
	}
	else
	{
		$(this).find(".fa-angle-up").addClass("fa-angle-down");
		$(this).find(".fa-angle-up").removeClass("fa-angle-up");
		$(".stainlesss").removeClass("active");
		$(".second").removeClass("active");
		$("#product-page #header-wrap").css("background","#fff");
		$(".right_bar.staineless").css("background","#fff");
		$(".apple_edition").css("background","#FAFAFA");
	}
	
});
$(".go_to_first").click(function() {
	$("#second").toggle();
	$("#first").toggle();
	$(".apple_edition").css("background","#FAFAFA");
});

$("#home video").click(function() {
	$(this).css("-webkit-filter","none");
});

$('#home .video').parent().click(function () {
    if($(this).children("#home .video").get(0).paused){
        $(this).children("#home .video").get(0).play();
        $(this).children("#home .playpause").fadeOut();
    }else{
       $(this).children("#home .video").get(0).pause();
        $(this).children("#home .playpause").fadeIn();
    }
});

$(".bxslider > li > div > span").click(function() {
	$(".bxslider > li > div > span").removeClass("active");
	$(".bxslider > li > div > span img").remove();
	$(this).addClass("active");
	$(this).find("span").html('<img src="img/tick.png">');
	$("#continue").css("background","#a3bdd2");
});
if($(window).width() >= 768)
{
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1700) {
			$(".company_info .tab-wrap-outer").addClass("fixed");
		} else {
			$(".company_info .tab-wrap-outer").removeClass("fixed");
		}
	});
	$("#showLeftPush").hide();
}
else
{
	$("#showLeftPush").hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1900) {
			$("#showLeftPush").show();
			$(".company_info .tab-wrap-outer").hide();
			$(".company_info .tab-wrap-outer").addClass("fixed");
		} else {
			$("#showLeftPush").hide();
			$(".company_info .tab-wrap-outer").show();
			$(".company_info .tab-wrap-outer").removeClass("fixed");
		}
	});
	
	//$(".company_info .tab-wrap-outer").css("position","fixed");
	/* $("#showLeftPush").click(function() {
		$(".company_info .tab-wrap-outer").toggle();
	}); */
}
$("#showLeftPush").click(function() {
				if($(".company_info .tab-wrap-outer").is(':visible')){
					$(".company_info .tab-wrap-outer").hide();
				}
				else
				{
					$(".company_info .tab-wrap-outer").show();
				}
			});
$(document).ready(function() {
	$("#aspect_ratio video").prop('muted',true);			
$("#aspect_ratio video").click( function (){
    $(this).prop('muted', !$(this).prop('muted'));
});
});

$(".media_close").click(function() {
	$("#settings3 .left_div").hide();
	$("#settings3 .right_div").css("width","100%");
	$("#settings3 .aspect_ratio").css("padding-bottom","45%");
	$(".media_open").show();
});
$(".media_open").click(function() {
	$("#settings3 .left_div").show();
	$("#settings3 .right_div").removeAttr("style");
	$("#settings3 .aspect_ratio").removeAttr("style");
	$(".media_open").hide();
});

$(".collapse_video").click(function(){
	if ($(".image_after_video").css('display') == 'none') {
		$(".image_after_video").show();
		$(".collapse_video").removeClass("absolute");
		$(".live_text").removeClass("absolute");
	}
	else {
		$(".image_after_video").hide();
		$(".collapse_video").addClass("absolute");
		$(".live_text").addClass("absolute");
	}
});

$(".adults_div .plus").click(function() {
	value = $(this).parent().find(".value").val();
	$(this).parent().find(".value").val(parseInt(value)+1);
});
$(".adults_div .minus").click(function() {
	value = $(this).parent().find(".value").val();
	if(parseInt(value)-1 >= 0)
	$(this).parent().find(".value").val(parseInt(value)-1);
});

$("#buy_button").click(function(){
	$("#buy_div").html($(".right_bar.staineless").html());
	$("#buy_div").toggle();
});

$(document).mouseup(function(e) {
    var $container = $("#buy_button");

    // if the target of the click isn't the container nor a descendant of the container
    if (!$container.is(e.target) && $container.has(e.target).length === 0) {
        //$("#buy_div").hide();
    }
});

//var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();
var countDownDate = new Date().getTime()+1000 * 60 * 60 * 24;
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    //var distance = countDownDate - now;
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    //document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    //+ minutes + "m " + seconds + "s ";
	
	$("#demo").html('<span>'+days+'<font>DAYS</font></span><span class="colon">:</span><span>'+hours+'<font>HRS</font></span><span class="colon">:</span><span>'+minutes+'<font>MIN</font></span><span class="colon">:</span><span>'+seconds+'<font>SEC</font></span>');
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
