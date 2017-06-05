$('.knoop-verify button').click(function(){
	$(this).next("a").trigger('click');
})
$('.next-link').click(function(){
	var href = $(this).attr('href');
	window.location.href = href;
})

$('.select-sroll a').click(function(){
	$(this).toggleClass('active');
	return false;
})
$('.menu a').click(function(){
	/*$(this).parent('li').toggleClass('active');
	$(this).parent('li').nextAll('.sub-menu').toggleClass('active');
	return false;*/
	var menu_id	= $(this).parent().attr('id');
	$('.'+menu_id).toggle()
})

	

$('.span-search i').click(function(){
	$('.span-search input').trigger('focus');
})