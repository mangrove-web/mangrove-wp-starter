jQuery(function(){jQuery("#threat").waypoint(function(e){if(e==="down"){jQuery(".navbar-default").removeClass("hide").fadeOut(100);jQuery(".navbar-default").addClass("navbar-fixed-top").fadeIn("3000");jQuery(".navbar-side").removeClass("hide");jQuery(".navbar-side").addClass("fixed-nav").fadeIn("3000")}else{jQuery(".navbar-default").removeClass("navbar-fixed-top").fadeOut(100);jQuery(".navbar-default").fadeOut("3000");jQuery(".navbar-side").fadeOut("3000");jQuery(".navbar-side").removeClass("fixed-nav")}},{offset:200});jQuery(".gallery").waypoint(function(e){e==="down"?jQuery(".navbar-side").addClass("white"):jQuery(".navbar-side").addClass("white")},{offset:0});jQuery(".carousel").find(".item:first").addClass("active");jQuery(".carousel-indicators").find(".item:first").addClass("active");jQuery(".carousel").carousel({interval:!1})});