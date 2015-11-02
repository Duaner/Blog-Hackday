$(function(){


	$('.blog-main .blog-post a').pageParser({
		container: $("#containerAjax"),
		parseElement: "#main",
		before : beforeLoading,
		finished : afterLoading
	});

})

function beforeLoading(){
	console.log('Avant chargement');
	var itemParent = $(this).parents('.blog-post').offset().top;

	console.log($(this).parents('.blog-post'));
	$('html, body').animate({
		scrollTop: itemParent
	});
	NProgress.start();	
	$('body').addClass('stop-scrolling')
}

function afterLoading(){
	$('html, body').scrollTop(0);
	NProgress.done();
	$('.blog-post').not($(this).parents('.blog-post')).hide();
	$('.blog-header.home').hide();
	$('body').removeClass('stop-scrolling')
}