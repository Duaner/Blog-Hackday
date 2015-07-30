$('.blog-main .blog-post a').on('click', function(e) {
  var urlClicked = $(this).attr('href');
  var itemParent = $(this).parents('.blog-post').offset().top;

  $('html, body').animate({
    scrollTop: itemParent
  }, function() {
    window.location = urlClicked;
  });

  e.preventDefault();
});
