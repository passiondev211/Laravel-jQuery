var winHeight = $(window).height();
    winWidth = $(window).width();
    docHeight = $('body').height();

/* Jump btn and side static btn script */
$('[data-toggle="tooltip"]').tooltip();
if ( $('#footer-wrap').length > 0 ) {

$(function() {
        $('.comments-no').click(function(){
        $(this).parents('.block-info-sec').next().slideToggle('slow');
        $(this).parents('.block-info-sec').find('.expand-sec').addClass('active');
        
        });
    function jumpBtn() {
        var off_set = $('#footer-wrap').offset();
        targetEl = $('.jump-btn');
        if (off_set.top - winHeight < $(window).scrollTop()) {
            $(targetEl).css({
                'position': 'absolute',
                'bottom': $('#footer-wrap').outerHeight() + 20 + 'px'
            })
            if(winWidth < 768) {
                $(targetEl).css({

                })
            }
        }else {
            $(targetEl).css({
                'position': 'fixed',
                'display' : 'block',
                'bottom': 20
            })
            if(winWidth < 768) {
                $(targetEl).css({
                    'right': 20
                })
            }
            else if(winWidth < 1199) {
                $(targetEl).css({
                    'right': 20
                })
            }
            else if( 1480 > winWidth < 1200) {
                $(targetEl).css({
                    'right': 20
                })
            }
            else {
                $(targetEl).css({
                    'right': 20
                })
            }
        }
    };
    function twitterStick() {
        var footerOffset = $('#footer-wrap').offset(),
            twitterSelect = $('.tweet-sidebar');
        
        if (footerOffset.top - winHeight < $(window).scrollTop()) {
            $(twitterSelect).css({
                'bottom': $('#footer-wrap').outerHeight() + 20 + 'px'
            })
        }else {
            $(twitterSelect).css({
                'bottom': 15
            })
        }
    };
    jumpBtn();
    twitterStick();
    $(window).on('scroll load resize', function() {
        jumpBtn();
        twitterStick();
        if ( $(window).scrollTop() < 1100 ) {
            $(targetEl).css({
                'display' : 'none'
            })
        };
    });
 })
}
/* Jump btn and side static btn script end */
$(".off-canvas").mCustomScrollbar({
    theme:"minimal-dark"
});

$('.tweet-active-btn').click(function(){
    $(this).toggleClass('active1');
    $('#main-wrap .container, .tweet-wrap').toggleClass('active1');
    return false;
})

$(window).on('scroll load',function(){
    if ( $('#contents').length > 0 ) {
        if ( $(window).scrollTop() > 130 ) {
            $('.tweet-sidebar').addClass('active mCustomScrollbar')
            $(".tweet-sidebar").mCustomScrollbar({
                theme:"minimal-dark"
            });
        } else if($(window).scrollTop() < 130){
            $('.tweet-sidebar').removeClass('active mCustomScrollbar')
        }
    }
    if ($('#main-wrap .container').hasClass('active')) {
        $('.tweet-sidebar.active.mCustomScrollbar').addClass('active-in');
    } else {
        $('.tweet-sidebar.active.mCustomScrollbar').removeClass('active-in');
    }
})

$('.feed-person-close').click(function(){
    $(this).parents('.feed-top-left').removeClass('active');
    $(this).parents('.feed-top-sec').removeClass('active');
    $(this).parents('.feed-person-sec').fadeOut('fast');
})

$('.dropdown-toggle').click(function(){
    $(this).parent().find('.dropdown-menu').fadeToggle();
})

$('.article-sidebar-top h4').click(function(){
    $(this).parent().hide();
    $('.tweet-side-channel').fadeIn();
})

$('.nav-tabs-close').click(function(){
    $(this).parent().hide();
    $('.article-sidebar-top').fadeIn();
})

if ( $(window).width() < 1380 ) {
    $('.off-canvas-btn').click(function(){
        if ($(this).hasClass('in')) {
            $('#main-wrap .container, .tweet-wrap,.tweet-active-btn').removeClass('active1');
        }else if ( $(this).hasClass('active1') ) {
            $('#main-wrap .container').addClass('active1');
        }
    })
}

$('.side-chat-left .chat-btn').click(function(){
      $(this).parents('.block-add').find('.chat-btn').triggerHandler( "click" );
})

$('.tweet-fig-link').click(function(){
    $('.uploader-image').toggle();
    return false;
})
$(document).ready(function(){
    //$('body').addClass('notic-body');
})
$('.notic-close-link, .close-noti-btn,.notification-btn').click(function(){
    $('body').removeClass('notic-body');
    return false;
})

$('.notic-step-bot a').click(function(){
    return false;
})
$('.lead-more').click(function(){
    $('.notic-step-overlay1').addClass('active');
    $('.login-menu, .header-right-inner').removeClass('active');
    return false;
})
$('.notic-step-overlay2 .back-btn').click(function(){
    $('.notic-step-overlay1').addClass('active');
    $('.tweet-wrap').removeClass('active');
    $(this).parents('.notic-step-overlay2').removeClass('active');
})
$('.notic-step-overlay3 .back-btn').click(function(){
    $('.notic-step-overlay2, .tweet-wrap').addClass('active');
    $(this).parents('.notic-step-overlay3').removeClass('active');
})
$('.notic-step-overlay4 .back-btn').click(function(){
    $('.notic-step-overlay3').addClass('active');
    $('.morphsearch').removeClass('hold');
    $(this).parents('.notic-step-overlay4').removeClass('active');
})

$('.notic-step-overlay1 .step-next').click(function(){
    $('.notic-step-overlay2,.tweet-wrap').addClass('active');
    $(this).parents('.notic-step-overlay1').removeClass('active');
})
$('.notic-step-overlay2 .step-next').click(function(){
    $('.notic-step-overlay3').addClass('active');
    $('.tweet-wrap').removeClass('active');
    $(this).parents('.notic-step-overlay2').removeClass('active');
})
$('.notic-step-overlay3 .step-next').click(function(){
    $('.morphsearch').addClass('hold');
    $('.notic-step-overlay4').addClass('active');
    $(this).parents('.notic-step-overlay3').removeClass('active');
})

$('.notic-step-top-right span').click(function(){
    $('.notic-step-overlay,.tweet-wrap').removeClass('active')
})
$('.got-input-btn').click(function(){
    $('.re-confirm-popup').addClass('active');
    $('.notic-step-overlay').removeClass('active');
    $('.morphsearch').removeClass('hold');
})
$('.re-confirm-close').click(function(){
    $(this).parents('.re-confirm-popup').removeClass('active');
})


$('.add-photo-btn').click(function(){
    $('.uploader-image').fadeIn();
})
$('.cancel-btn').click(function(){
    $('.uploader-image').fadeOut();
    return false;
})
$('.upload-btn').click(function(){
    $('.uploader-sec1').addClass('active');
    $('.uploader-image').fadeOut();
    return false;
})

$('.uploader-close').click(function(){
    $(this).parents('.uploader-sec').removeClass('active');
})
$('.uploader-sec1 .panding-btn').click(function(){
    $('.uploader-sec1').removeClass('active');
    $('.uploader-sec2').addClass('active');
})
$('.uploader-sec2 .panding-btn').click(function(){
    $('.uploader-sec2').removeClass('active');
    //updated by dh;
    localStorage.setItem('description',$('#profile_description').val());
    $('.uploader-sec3').addClass('active');
})
$('.uploader-sec3 .panding-btn').click(function(){
    $('.uploader-sec3').removeClass('active');
    //updated by dh;

    localStorage.setItem('birthYear',$('#birthYear').val());
    localStorage.setItem('birthMonth',$('#birthMonth').val());
    localStorage.setItem('birthDate',$('#birthDate').val());
    $('.uploader-sec4').addClass('active');
})
$('.uploader-sec4 .panding-btn').click(function(){
    $('.uploader-sec4').removeClass('active');
    localStorage.setItem('location',$('#location').val());
    updateAvata();
    $('.uploader-sec5').addClass('active');
})


$('.post-time-sec').click(function(){
    //$(this).addClass('red');
    //$(this).parents('.block-add').find('.heart-sec').addClass('red')
    $(this).parents('.block-add').find('.anim-icon').click();
})

// $('.heart-sec').click(function(){
//     // $(this).parents('.block-add').find('.post-time-sec').addClass('red');
//     // $(this).addClass('red')
// })
$('.cart-outer').click(function(e){
    e.preventDefault();
})
$('.cart-outer em').click(function(){
    $(this).parent().find('.cart-tooltip').toggle();
})

if ( $(window).scrollTop() > 0 ) {
    $('#morphsearch').addClass('hide');
}else{
    $('#morphsearch').removeClass('hide');
}

if ( $('#header-wrap').length > 0 ) {
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#header-wrap').outerHeight();

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
            $('#header-wrap, #morphsearch').removeClass('fixed');
            $('#morphsearch').addClass('hide');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('#header-wrap, #morphsearch').addClass('fixed');
                $('#morphsearch').removeClass('hide');
            }
        }
        
        lastScrollTop = st;
    }
}
if ( $('.live-content-right').length > 0 ) {
    /*$( ".datepicker").datepicker();*/
    $('#datetimepicker').datetimepicker({
        format: 'LT'
    });
}
$('.cammal4').click(function(){
    $('.live-popup-overlay').addClass('active');
    $('body').addClass('active');
    return false;
})
$('.live-popup-head i').click(function(){
    $('body, .live-popup-overlay').removeClass('active');
})
$('.addCardLink').click(function(){
    $('.flip-container').addClass('active')
    return false;
})

$('.place-btn-sec a').click(function(){
    $(this).parents('.feed-popup1').removeClass('bActive').addClass('lastActive');
    return false;
})

$('.material-top i').click(function(){
    $('.feed-product-popup.feed-popup1').removeClass('open');
    $('body').removeClass('active');
})
$('.uploader-select-inner .dropdown-toggle').click(function(){
    if ( $(this).parents('.uploader-select-inner').hasClass('active') ) {
        $('.uploader-select-inner').removeClass('active');
        $('.uploader-select-inner .dropdown-menu').hide();
    }else{
        $('.uploader-select-inner').removeClass('active')
        $(this).parent().addClass('active');
        $('.uploader-select-inner .dropdown-menu').hide();
        $(this).next('.dropdown-menu').fadeIn();
    }

    if ( $('.uploader-select-inner').hasClass('active') ){
        $('.tweet-wrap').addClass('big');
        $('.off-canvas,#header-wrap').addClass('big');
    }else{
        $('.tweet-wrap').removeClass('big');
        $('.off-canvas,#header-wrap').removeClass('big');
    }
})
$(document).ready(function () {
    if ( $('#jqxWidget').length > 0 ) {
      $("#jqxWidget").jqxCalendar({ width: '100%', height: '319px' });
      $('#jqxWidget').bind('valuechanged', function (event) {
          var date = event.args.date;
          $("#log").val(date.toDateString());
      });
    }
});


$('.chat-right-btn').click(function(){
    $(this).parents('.animsition-inner').toggleClass('active')
})

$('.feed-top-left-info-drop > a').click(function(){
    $(this).parent().toggleClass('active')
    return false;
})

$('.feed-top-dropmenu-inner a').click(function(){
    var atext = $(this).text();
    $(this).parents('.feed-top-left-info-drop').next('.feed-top-left-info-data').find('span').text(atext)
    $('.feed-top-dropmenu-inner li').removeClass('active');
    $(this).parent('li').addClass('active')
    return false;
})

$('.spon-price-wrap .next').click(function(){
    $(this).parents('.feed-popup1').addClass('active');
    return false;
})

$('.feed-foot-rt .next').click(function(){
    $(this).parents('.feed-popup1').removeClass('active').addClass('bActive');
    return false;
})

$('.feed-foot-rt .rback').click(function(){
    $(this).parents('.feed-popup1').removeClass('bActive open');
    $('body').removeClass('active')
    return false;
})

$('.form-selected-right a').click(function(){
    $(this).parents('.feed-popup3').removeClass('open');
    $('.cart-popup').show();
    $('body').removeClass('active');
    return false;
})

$('.show-btn').click(function(){
    $(this).parents('.comment-chat-inner').toggleClass('active');
    return false;
})

$('.material-label-btn').click(function(){
    $(this).toggleClass('active');
    return false;
})

$('.step-btn1').click(function(){
    $('.label-dropdown-step').hide();
    $('.label-dropdown-step2').show();
    return false;
})
$('.arrow-back').click(function(){
    $('.label-dropdown-step').hide();
    $('.label-dropdown-step1').show();
    return false;
})