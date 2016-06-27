;(function ( $, window, document, undefined ) {
	'use strict'

// hide waypoint stuff via JS immediately in case people have JS disabled.
$('.animateIn').addClass('isHidden');

// if using headroom, automatically add top padding to the body
if ( $('.headroom').length ) {
  $('body').css('padding-top', $('.headroom').height());
}

$(window).load(function() {

  // init Flexslider
  if ( $('.flexslider').length ) {
    $('.flexslider').flexslider({
      animation: "fade",
      //animationSpeed: '8000',
      slideshowSpeed: '5000',
      start: function(slider) { slider.removeClass('loading');  }
    });
  }

  // init Headroom
  if ( $('.headroom').length ) {
    var headroom  = new Headroom(document.querySelector(".headroom"), {
      "offset": 100,
      "tolerance": 5
    });
    headroom.init();
  }

  // init Waypoints
  if ( $('.animateIn').length ) {
    $('.animateIn').waypoint(function(direction) {
      $(this.element).addClass('isShown');
    }, {
      offset: '80%'
    })
  }

  // init onclick for nav
  $('.mobile-nav-toggle').click(function(event) {
    if ($('nav.mobile').hasClass('open')) {
      $('nav.mobile').removeClass('open');
      $('.mobile-nav-toggle').removeClass('open');
      $('body').css({
        overflow: 'auto',
        position: 'static'
      });
    } else {
      $('nav.mobile').addClass('open');
      $('.mobile-nav-toggle').addClass('open');
      $('body').css({
        overflow: 'hidden',
        position: 'fixed'
      });
    }
  });

  $('nav.mobile').find('a').click(function() {
    $('nav.mobile').removeClass('open');
  });

});


// Smooth Scolling https://css-tricks.com/snippets/jquery/smooth-scrolling/
// the higher the "400" number is, the slower is goes.
$(function() {
  $('a[href*=\\#]:not([href=\\#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
          || location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                   scrollTop: target.offset().top
              }, 500);
              return false;
          }
      }
    });
});

})( jQuery, window, document );
