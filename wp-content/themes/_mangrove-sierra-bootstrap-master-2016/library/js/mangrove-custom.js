jQuery(function() {
  jQuery('.carousel').find('.item:first').addClass('active');
  jQuery('.carousel-indicators').find('.item:first').addClass('active');
  jQuery('.carousel').carousel({
    interval: false
    });
});

// jQuery(document).ready(function(){
//   // Target your .container, .wrapper, .post, etc.
//   jQuery(".video_wrap").fitVids();
// });


jQuery(window).load(function() {
  // The slider being synced must be initialized first
  jQuery('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  jQuery('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});

jQuery(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    jQuery(".fitvid").fitVids();
  });