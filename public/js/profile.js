$('.profile-tweet-right-info i,.profile-post-drop i').click(function(){
	$(this).parent().find('.dropdown-menu').fadeToggle();
})


$(".off-canvas").mCustomScrollbar({
    theme:"minimal-dark"
});

$('.block-right textarea, .profile-content > .block-textarea-outer textarea').not('.icon-sec ,.icon-sec-right').click(function(){
    $(this).parents('.block-right, .profile-content > .block-textarea-outer').addClass('expand')
})

$(document).click(function() {
    $('.block-right, .profile-content > .block-textarea-outer').removeClass('expand')
});