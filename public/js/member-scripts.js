$(window).on('scroll load',function(){
	/* Header scripts */
    /*if ( $(window).scrollTop() > 5 ) {
        $('#header-wrap').addClass('active');
        $('.block-textarea-outer,#contents').addClass('stick');
    } else if($(window).scrollTop() < 5){
        $('.block-textarea-outer,#contents').removeClass('stick');
        $('#header-wrap').removeClass('active');
    };*/

    if ( $(window).scrollTop() > 400 ) {
        $('.tab-right-sec h4').addClass('active');
    } else if($(window).scrollTop() < 400 ){
        $('.tab-right-sec h4').removeClass('active');
    };
})


/*	OffCanvas scripts	*/

/*  OffCanvas scripts   */
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

$('.arrow-close').click(function(){
    $('.block-add').removeClass('un-active');
    $('body').removeClass('active')
	$('.postSideBtn').removeClass('active');
	$('.post-sidebar, .block-add').removeClass('active');
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
          $('.feed-person-sec, .card-container, .membership-overlay').fadeOut();
          $('.feed-top-left,.container ,.off-canvas-overaly ,.off-canvas ,.off-canvas-btn').removeClass('active');
          $('.equalizer-popup').removeClass('in').css({
            'display' : 'none'
          });
          $('.modal-backdrop').remove();
          $('.feed-popup1, .feed-popup2, .sign-in-popup,.full-img-popup').removeClass('open');
     }
})
$('.header-right-inner a').click(function(){
	$(this).parent().toggleClass('active');
	$('.login-menu').toggleClass('active');
    $('.grid-btn, .app-menu').removeClass('active');
	return false;
})

/* Jump btn and side static btn script end */

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

/* stopPropagation */
$('.feed-top-left p, .feed-person-sec, .block-post-sec, .feed-title a, .full-popup-dialog, .login-menu, .app-menu, .btn-primary, .comment-chat-wrap, .feed-modal-dialog, .feed-top-right, .comment-section-info, .expand-sec, .block-txt, .sidebarWrap, .block-right form, .block-textarea-outer form').click(function(e){
    e.stopPropagation()
});

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

if ( $('.wow').length > 0 ) {
    new WOW().init();
}

$('.anim-icon').click(function(){
    if ( $(this).hasClass('active') ) {
        $(this).addClass('in');
        $(this).removeClass('active');
    }else{
        $(this).addClass('active');
        $(this).removeClass('in');
    }
})

$('.addNewCard').click(function(){
    $('.card-container').fadeIn();
    $('body').addClass('active');
})
$('.close').click(function(){
    $('.card-container').fadeOut();
    $('body').removeClass('active');
})

$('.membershipPlan').click(function(){
    $('.membershipPlan').removeClass('selectedMembershipPlan');
    $(this).addClass('selectedMembershipPlan');
    if ( $(this).is('.membershipPlan1') ) {
        $('.planAmountPerPeriodText span').fadeOut('fast');
        $('.yearPack').fadeIn();
    }
    if ( $(this).is('.membershipPlan2') ) {
        $('.planAmountPerPeriodText span').fadeOut('fast');
        $('.monthPack').fadeIn();
    }
})


$('.detail-calendar').click(function(){
    $(this).next('.include-sec').fadeToggle();
    return false;
})

$('.continue-btn').click(function(){
    $('.membership-overlay').fadeIn();
    return false;
})
$('.membership-close').click(function(){
    $('.membership-overlay').fadeOut();
})
$('.membership-overlay').click(function(){
    $(this).fadeOut();
})

$('.addCardLink').click(function(){
    $('.flip-container').addClass('active')
    return false;
})

$('.place-btn-sec a').click(function(){
    $('.flip-container').removeClass('active')
    return false;
})

$('.onCardInfo').click(function(){
    $('.card-detail-formt').addClass('active');
    $('.membershipOut').hide();
    $(this).parents('.card-container').fadeOut();
    $('body').removeClass('active');
})

$('.home-detail-foot,.home-adsec .adbtn').click(function(){
    $('.home-detail-head1').fadeOut();
    $('.home-detail-head2').fadeIn();
    return false;
})

$('.place-btn-sec a').click(function(){
    $('.order-popup').fadeIn();
})
$('.order-btn1').click(function(){
    $('.order-popup').fadeOut();
    return false;
})

$(".off-canvas").mCustomScrollbar({
    theme:"minimal-dark"
});
$('.search-active-btn').click(function(){
    $('.morphsearch-input').trigger('focus');
    return false;
})

$('.card-detail input + label').click(function(){
    $('.card-detail .place-btn-sec').show();
})

$('.ad-ons-sec-outer').click(function(){
    if($(this).parent().hasClass("active")){
        $(".ad-ons-sec-inner").removeClass("active");
    }
    else{
        $(".ad-ons-sec-inner").removeClass("active");
        $(this).parent().addClass("active")
    }
})
$('.ship_cart').click(function(){
    $(this).parent().find('.cart-popup').toggle();
    return false;
})