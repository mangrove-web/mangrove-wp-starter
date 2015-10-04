jQuery(function() {
  jQuery('.carousel').find('.item:first').addClass('active');
  jQuery('.carousel-indicators').find('.item:first').addClass('active');
  jQuery('.carousel').carousel({
    interval: false
    });
});

