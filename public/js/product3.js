$('.oxy-group input').blur(function() {
  if ($(this).val() != '') {
    $(this).parents('.oxy-group').addClass('active')
  } else {
    $(this).parents('.oxy-group').removeClass('active')
  }
})

if ( $('.oxy-section').length > 0 ) {
	$('.oxy-section').parallax("50%", 0.1);
}

