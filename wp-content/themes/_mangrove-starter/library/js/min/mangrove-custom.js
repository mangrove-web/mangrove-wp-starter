!function(t,e){"use strict";"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?module.exports=e():t.Headroom=e()}(this,function(){"use strict";function t(t){this.callback=t,this.ticking=!1}function e(t){return t&&"undefined"!=typeof window&&(t===window||t.nodeType)}function n(t){if(arguments.length<=0)throw new Error("Missing arguments in extend function");var i,o,a=t||{};for(o=1;o<arguments.length;o++){var r=arguments[o]||{};for(i in r)"object"!=typeof a[i]||e(a[i])?a[i]=a[i]||r[i]:a[i]=n(a[i],r[i])}return a}function i(t){return t===Object(t)?t:{down:t,up:t}}function o(t,e){e=n(e,o.options),this.lastKnownScrollY=0,this.elem=t,this.tolerance=i(e.tolerance),this.classes=e.classes,this.offset=e.offset,this.scroller=e.scroller,this.initialised=!1,this.onPin=e.onPin,this.onUnpin=e.onUnpin,this.onTop=e.onTop,this.onNotTop=e.onNotTop,this.onBottom=e.onBottom,this.onNotBottom=e.onNotBottom}var a={bind:!!function(){}.bind,classList:"classList"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,t.prototype={constructor:t,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},o.prototype={constructor:o,init:function(){return o.cutsTheMustard?(this.debouncer=new t(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this):void 0},destroy:function(){var t=this.classes;this.initialised=!1,this.elem.classList.remove(t.unpinned,t.pinned,t.top,t.notTop,t.initial),this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var t=this.elem.classList,e=this.classes;!t.contains(e.pinned)&&t.contains(e.unpinned)||(t.add(e.unpinned),t.remove(e.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var t=this.elem.classList,e=this.classes;t.contains(e.unpinned)&&(t.remove(e.unpinned),t.add(e.pinned),this.onPin&&this.onPin.call(this))},top:function(){var t=this.elem.classList,e=this.classes;t.contains(e.top)||(t.add(e.top),t.remove(e.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var t=this.elem.classList,e=this.classes;t.contains(e.notTop)||(t.add(e.notTop),t.remove(e.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var t=this.elem.classList,e=this.classes;t.contains(e.bottom)||(t.add(e.bottom),t.remove(e.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var t=this.elem.classList,e=this.classes;t.contains(e.notBottom)||(t.add(e.notBottom),t.remove(e.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(t){return Math.max(t.offsetHeight,t.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var t=document.body,e=document.documentElement;return Math.max(t.scrollHeight,e.scrollHeight,t.offsetHeight,e.offsetHeight,t.clientHeight,e.clientHeight)},getElementHeight:function(t){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(t){var e=0>t,n=t+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return e||n},toleranceExceeded:function(t,e){return Math.abs(t-this.lastKnownScrollY)>=this.tolerance[e]},shouldUnpin:function(t,e){var n=t>this.lastKnownScrollY,i=t>=this.offset;return n&&i&&e},shouldPin:function(t,e){var n=t<this.lastKnownScrollY,i=t<=this.offset;return n&&e||i},update:function(){var t=this.getScrollY(),e=t>this.lastKnownScrollY?"down":"up",n=this.toleranceExceeded(t,e);this.isOutOfBounds(t)||(t<=this.offset?this.top():this.notTop(),t+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(t,n)?this.unpin():this.shouldPin(t,n)&&this.pin(),this.lastKnownScrollY=t)}},o.options={tolerance:{up:0,down:0},offset:0,scroller:window,classes:{pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom",initial:"headroom"}},o.cutsTheMustard="undefined"!=typeof a&&a.rAF&&a.bind&&a.classList,o}),function(t){var e=!0;t.flexslider=function(n,i){var o=t(n);o.vars=t.extend({},t.flexslider.defaults,i);var a,r=o.vars.namespace,s=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,l=("ontouchstart"in window||s||window.DocumentTouch&&document instanceof DocumentTouch)&&o.vars.touch,c="click touchend MSPointerUp keyup",d="",u="vertical"===o.vars.direction,p=o.vars.reverse,h=o.vars.itemWidth>0,v="fade"===o.vars.animation,m=""!==o.vars.asNavFor,f={};t.data(n,"flexslider",o),f={init:function(){o.animating=!1,o.currentSlide=parseInt(o.vars.startAt?o.vars.startAt:0,10),isNaN(o.currentSlide)&&(o.currentSlide=0),o.animatingTo=o.currentSlide,o.atEnd=0===o.currentSlide||o.currentSlide===o.last,o.containerSelector=o.vars.selector.substr(0,o.vars.selector.search(" ")),o.slides=t(o.vars.selector,o),o.container=t(o.containerSelector,o),o.count=o.slides.length,o.syncExists=t(o.vars.sync).length>0,"slide"===o.vars.animation&&(o.vars.animation="swing"),o.prop=u?"top":"marginLeft",o.args={},o.manualPause=!1,o.stopped=!1,o.started=!1,o.startTimeout=null,o.transitions=!o.vars.video&&!v&&o.vars.useCSS&&function(){var t=document.createElement("div"),e=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var n in e)if(void 0!==t.style[e[n]])return o.pfx=e[n].replace("Perspective","").toLowerCase(),o.prop="-"+o.pfx+"-transform",!0;return!1}(),o.ensureAnimationEnd="",""!==o.vars.controlsContainer&&(o.controlsContainer=t(o.vars.controlsContainer).length>0&&t(o.vars.controlsContainer)),""!==o.vars.manualControls&&(o.manualControls=t(o.vars.manualControls).length>0&&t(o.vars.manualControls)),""!==o.vars.customDirectionNav&&(o.customDirectionNav=2===t(o.vars.customDirectionNav).length&&t(o.vars.customDirectionNav)),o.vars.randomize&&(o.slides.sort(function(){return Math.round(Math.random())-.5}),o.container.empty().append(o.slides)),o.doMath(),o.setup("init"),o.vars.controlNav&&f.controlNav.setup(),o.vars.directionNav&&f.directionNav.setup(),o.vars.keyboard&&(1===t(o.containerSelector).length||o.vars.multipleKeyboard)&&t(document).bind("keyup",function(t){var e=t.keyCode;if(!o.animating&&(39===e||37===e)){var n=39===e?o.getTarget("next"):37===e?o.getTarget("prev"):!1;o.flexAnimate(n,o.vars.pauseOnAction)}}),o.vars.mousewheel&&o.bind("mousewheel",function(t,e,n,i){t.preventDefault();var a=0>e?o.getTarget("next"):o.getTarget("prev");o.flexAnimate(a,o.vars.pauseOnAction)}),o.vars.pausePlay&&f.pausePlay.setup(),o.vars.slideshow&&o.vars.pauseInvisible&&f.pauseInvisible.init(),o.vars.slideshow&&(o.vars.pauseOnHover&&o.hover(function(){o.manualPlay||o.manualPause||o.pause()},function(){o.manualPause||o.manualPlay||o.stopped||o.play()}),o.vars.pauseInvisible&&f.pauseInvisible.isHidden()||(o.vars.initDelay>0?o.startTimeout=setTimeout(o.play,o.vars.initDelay):o.play())),m&&f.asNav.setup(),l&&o.vars.touch&&f.touch(),(!v||v&&o.vars.smoothHeight)&&t(window).bind("resize orientationchange focus",f.resize),o.find("img").attr("draggable","false"),setTimeout(function(){o.vars.start(o)},200)},asNav:{setup:function(){o.asNav=!0,o.animatingTo=Math.floor(o.currentSlide/o.move),o.currentItem=o.currentSlide,o.slides.removeClass(r+"active-slide").eq(o.currentItem).addClass(r+"active-slide"),s?(n._slider=o,o.slides.each(function(){var e=this;e._gesture=new MSGesture,e._gesture.target=e,e.addEventListener("MSPointerDown",function(t){t.preventDefault(),t.currentTarget._gesture&&t.currentTarget._gesture.addPointer(t.pointerId)},!1),e.addEventListener("MSGestureTap",function(e){e.preventDefault();var n=t(this),i=n.index();t(o.vars.asNavFor).data("flexslider").animating||n.hasClass("active")||(o.direction=o.currentItem<i?"next":"prev",o.flexAnimate(i,o.vars.pauseOnAction,!1,!0,!0))})})):o.slides.on(c,function(e){e.preventDefault();var n=t(this),i=n.index(),a=n.offset().left-t(o).scrollLeft();0>=a&&n.hasClass(r+"active-slide")?o.flexAnimate(o.getTarget("prev"),!0):t(o.vars.asNavFor).data("flexslider").animating||n.hasClass(r+"active-slide")||(o.direction=o.currentItem<i?"next":"prev",o.flexAnimate(i,o.vars.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){o.manualControls?f.controlNav.setupManual():f.controlNav.setupPaging()},setupPaging:function(){var e,n,i="thumbnails"===o.vars.controlNav?"control-thumbs":"control-paging",a=1;if(o.controlNavScaffold=t('<ol class="'+r+"control-nav "+r+i+'"></ol>'),o.pagingCount>1)for(var s=0;s<o.pagingCount;s++){n=o.slides.eq(s),void 0===n.attr("data-thumb-alt")&&n.attr("data-thumb-alt","");var l=""!==n.attr("data-thumb-alt")?l=' alt="'+n.attr("data-thumb-alt")+'"':"";if(e="thumbnails"===o.vars.controlNav?'<img src="'+n.attr("data-thumb")+'"'+l+"/>":'<a href="#">'+a+"</a>","thumbnails"===o.vars.controlNav&&!0===o.vars.thumbCaptions){var u=n.attr("data-thumbcaption");""!==u&&void 0!==u&&(e+='<span class="'+r+'caption">'+u+"</span>")}o.controlNavScaffold.append("<li>"+e+"</li>"),a++}o.controlsContainer?t(o.controlsContainer).append(o.controlNavScaffold):o.append(o.controlNavScaffold),f.controlNav.set(),f.controlNav.active(),o.controlNavScaffold.delegate("a, img",c,function(e){if(e.preventDefault(),""===d||d===e.type){var n=t(this),i=o.controlNav.index(n);n.hasClass(r+"active")||(o.direction=i>o.currentSlide?"next":"prev",o.flexAnimate(i,o.vars.pauseOnAction))}""===d&&(d=e.type),f.setToClearWatchedEvent()})},setupManual:function(){o.controlNav=o.manualControls,f.controlNav.active(),o.controlNav.bind(c,function(e){if(e.preventDefault(),""===d||d===e.type){var n=t(this),i=o.controlNav.index(n);n.hasClass(r+"active")||(i>o.currentSlide?o.direction="next":o.direction="prev",o.flexAnimate(i,o.vars.pauseOnAction))}""===d&&(d=e.type),f.setToClearWatchedEvent()})},set:function(){var e="thumbnails"===o.vars.controlNav?"img":"a";o.controlNav=t("."+r+"control-nav li "+e,o.controlsContainer?o.controlsContainer:o)},active:function(){o.controlNav.removeClass(r+"active").eq(o.animatingTo).addClass(r+"active")},update:function(e,n){o.pagingCount>1&&"add"===e?o.controlNavScaffold.append(t('<li><a href="#">'+o.count+"</a></li>")):1===o.pagingCount?o.controlNavScaffold.find("li").remove():o.controlNav.eq(n).closest("li").remove(),f.controlNav.set(),o.pagingCount>1&&o.pagingCount!==o.controlNav.length?o.update(n,e):f.controlNav.active()}},directionNav:{setup:function(){var e=t('<ul class="'+r+'direction-nav"><li class="'+r+'nav-prev"><a class="'+r+'prev" href="#">'+o.vars.prevText+'</a></li><li class="'+r+'nav-next"><a class="'+r+'next" href="#">'+o.vars.nextText+"</a></li></ul>");o.customDirectionNav?o.directionNav=o.customDirectionNav:o.controlsContainer?(t(o.controlsContainer).append(e),o.directionNav=t("."+r+"direction-nav li a",o.controlsContainer)):(o.append(e),o.directionNav=t("."+r+"direction-nav li a",o)),f.directionNav.update(),o.directionNav.bind(c,function(e){e.preventDefault();var n;""!==d&&d!==e.type||(n=t(this).hasClass(r+"next")?o.getTarget("next"):o.getTarget("prev"),o.flexAnimate(n,o.vars.pauseOnAction)),""===d&&(d=e.type),f.setToClearWatchedEvent()})},update:function(){var t=r+"disabled";1===o.pagingCount?o.directionNav.addClass(t).attr("tabindex","-1"):o.vars.animationLoop?o.directionNav.removeClass(t).removeAttr("tabindex"):0===o.animatingTo?o.directionNav.removeClass(t).filter("."+r+"prev").addClass(t).attr("tabindex","-1"):o.animatingTo===o.last?o.directionNav.removeClass(t).filter("."+r+"next").addClass(t).attr("tabindex","-1"):o.directionNav.removeClass(t).removeAttr("tabindex")}},pausePlay:{setup:function(){var e=t('<div class="'+r+'pauseplay"><a href="#"></a></div>');o.controlsContainer?(o.controlsContainer.append(e),o.pausePlay=t("."+r+"pauseplay a",o.controlsContainer)):(o.append(e),o.pausePlay=t("."+r+"pauseplay a",o)),f.pausePlay.update(o.vars.slideshow?r+"pause":r+"play"),o.pausePlay.bind(c,function(e){e.preventDefault(),""!==d&&d!==e.type||(t(this).hasClass(r+"pause")?(o.manualPause=!0,o.manualPlay=!1,o.pause()):(o.manualPause=!1,o.manualPlay=!0,o.play())),""===d&&(d=e.type),f.setToClearWatchedEvent()})},update:function(t){"play"===t?o.pausePlay.removeClass(r+"pause").addClass(r+"play").html(o.vars.playText):o.pausePlay.removeClass(r+"play").addClass(r+"pause").html(o.vars.pauseText)}},touch:function(){function t(t){t.stopPropagation(),o.animating?t.preventDefault():(o.pause(),n._gesture.addPointer(t.pointerId),x=0,c=u?o.h:o.w,m=Number(new Date),l=h&&p&&o.animatingTo===o.last?0:h&&p?o.limit-(o.itemW+o.vars.itemMargin)*o.move*o.animatingTo:h&&o.currentSlide===o.last?o.limit:h?(o.itemW+o.vars.itemMargin)*o.move*o.currentSlide:p?(o.last-o.currentSlide+o.cloneOffset)*c:(o.currentSlide+o.cloneOffset)*c)}function e(t){t.stopPropagation();var e=t.target._slider;if(e){var i=-t.translationX,o=-t.translationY;return x+=u?o:i,d=x,y=u?Math.abs(x)<Math.abs(-i):Math.abs(x)<Math.abs(-o),t.detail===t.MSGESTURE_FLAG_INERTIA?void setImmediate(function(){n._gesture.stop()}):void((!y||Number(new Date)-m>500)&&(t.preventDefault(),!v&&e.transitions&&(e.vars.animationLoop||(d=x/(0===e.currentSlide&&0>x||e.currentSlide===e.last&&x>0?Math.abs(x)/c+2:1)),e.setProps(l+d,"setTouch"))))}}function i(t){t.stopPropagation();var e=t.target._slider;if(e){if(e.animatingTo===e.currentSlide&&!y&&null!==d){var n=p?-d:d,i=n>0?e.getTarget("next"):e.getTarget("prev");e.canAdvance(i)&&(Number(new Date)-m<550&&Math.abs(n)>50||Math.abs(n)>c/2)?e.flexAnimate(i,e.vars.pauseOnAction):v||e.flexAnimate(e.currentSlide,e.vars.pauseOnAction,!0)}a=null,r=null,d=null,l=null,x=0}}var a,r,l,c,d,m,f,g,w,y=!1,b=0,S=0,x=0;s?(n.style.msTouchAction="none",n._gesture=new MSGesture,n._gesture.target=n,n.addEventListener("MSPointerDown",t,!1),n._slider=o,n.addEventListener("MSGestureChange",e,!1),n.addEventListener("MSGestureEnd",i,!1)):(f=function(t){o.animating?t.preventDefault():(window.navigator.msPointerEnabled||1===t.touches.length)&&(o.pause(),c=u?o.h:o.w,m=Number(new Date),b=t.touches[0].pageX,S=t.touches[0].pageY,l=h&&p&&o.animatingTo===o.last?0:h&&p?o.limit-(o.itemW+o.vars.itemMargin)*o.move*o.animatingTo:h&&o.currentSlide===o.last?o.limit:h?(o.itemW+o.vars.itemMargin)*o.move*o.currentSlide:p?(o.last-o.currentSlide+o.cloneOffset)*c:(o.currentSlide+o.cloneOffset)*c,a=u?S:b,r=u?b:S,n.addEventListener("touchmove",g,!1),n.addEventListener("touchend",w,!1))},g=function(t){b=t.touches[0].pageX,S=t.touches[0].pageY,d=u?a-S:a-b,y=u?Math.abs(d)<Math.abs(b-r):Math.abs(d)<Math.abs(S-r);var e=500;(!y||Number(new Date)-m>e)&&(t.preventDefault(),!v&&o.transitions&&(o.vars.animationLoop||(d/=0===o.currentSlide&&0>d||o.currentSlide===o.last&&d>0?Math.abs(d)/c+2:1),o.setProps(l+d,"setTouch")))},w=function(t){if(n.removeEventListener("touchmove",g,!1),o.animatingTo===o.currentSlide&&!y&&null!==d){var e=p?-d:d,i=e>0?o.getTarget("next"):o.getTarget("prev");o.canAdvance(i)&&(Number(new Date)-m<550&&Math.abs(e)>50||Math.abs(e)>c/2)?o.flexAnimate(i,o.vars.pauseOnAction):v||o.flexAnimate(o.currentSlide,o.vars.pauseOnAction,!0)}n.removeEventListener("touchend",w,!1),a=null,r=null,d=null,l=null},n.addEventListener("touchstart",f,!1))},resize:function(){!o.animating&&o.is(":visible")&&(h||o.doMath(),v?f.smoothHeight():h?(o.slides.width(o.computedW),o.update(o.pagingCount),o.setProps()):u?(o.viewport.height(o.h),o.setProps(o.h,"setTotal")):(o.vars.smoothHeight&&f.smoothHeight(),o.newSlides.width(o.computedW),o.setProps(o.computedW,"setTotal")))},smoothHeight:function(t){if(!u||v){var e=v?o:o.viewport;t?e.animate({height:o.slides.eq(o.animatingTo).innerHeight()},t):e.innerHeight(o.slides.eq(o.animatingTo).innerHeight())}},sync:function(e){var n=t(o.vars.sync).data("flexslider"),i=o.animatingTo;switch(e){case"animate":n.flexAnimate(i,o.vars.pauseOnAction,!1,!0);break;case"play":n.playing||n.asNav||n.play();break;case"pause":n.pause()}},uniqueID:function(e){return e.filter("[id]").add(e.find("[id]")).each(function(){var e=t(this);e.attr("id",e.attr("id")+"_clone")}),e},pauseInvisible:{visProp:null,init:function(){var t=f.pauseInvisible.getHiddenProp();if(t){var e=t.replace(/[H|h]idden/,"")+"visibilitychange";document.addEventListener(e,function(){f.pauseInvisible.isHidden()?o.startTimeout?clearTimeout(o.startTimeout):o.pause():o.started?o.play():o.vars.initDelay>0?setTimeout(o.play,o.vars.initDelay):o.play()})}},isHidden:function(){var t=f.pauseInvisible.getHiddenProp();return t?document[t]:!1},getHiddenProp:function(){var t=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var e=0;e<t.length;e++)if(t[e]+"Hidden"in document)return t[e]+"Hidden";return null}},setToClearWatchedEvent:function(){clearTimeout(a),a=setTimeout(function(){d=""},3e3)}},o.flexAnimate=function(e,n,i,a,s){if(o.vars.animationLoop||e===o.currentSlide||(o.direction=e>o.currentSlide?"next":"prev"),m&&1===o.pagingCount&&(o.direction=o.currentItem<e?"next":"prev"),!o.animating&&(o.canAdvance(e,s)||i)&&o.is(":visible")){if(m&&a){var c=t(o.vars.asNavFor).data("flexslider");if(o.atEnd=0===e||e===o.count-1,c.flexAnimate(e,!0,!1,!0,s),o.direction=o.currentItem<e?"next":"prev",c.direction=o.direction,Math.ceil((e+1)/o.visible)-1===o.currentSlide||0===e)return o.currentItem=e,o.slides.removeClass(r+"active-slide").eq(e).addClass(r+"active-slide"),!1;o.currentItem=e,o.slides.removeClass(r+"active-slide").eq(e).addClass(r+"active-slide"),e=Math.floor(e/o.visible)}if(o.animating=!0,o.animatingTo=e,n&&o.pause(),o.vars.before(o),o.syncExists&&!s&&f.sync("animate"),o.vars.controlNav&&f.controlNav.active(),h||o.slides.removeClass(r+"active-slide").eq(e).addClass(r+"active-slide"),o.atEnd=0===e||e===o.last,o.vars.directionNav&&f.directionNav.update(),e===o.last&&(o.vars.end(o),o.vars.animationLoop||o.pause()),v)l?(o.slides.eq(o.currentSlide).css({opacity:0,zIndex:1}),o.slides.eq(e).css({opacity:1,zIndex:2}),o.wrapup(y)):(o.slides.eq(o.currentSlide).css({zIndex:1}).animate({opacity:0},o.vars.animationSpeed,o.vars.easing),o.slides.eq(e).css({zIndex:2}).animate({opacity:1},o.vars.animationSpeed,o.vars.easing,o.wrapup));else{var d,g,w,y=u?o.slides.filter(":first").height():o.computedW;h?(d=o.vars.itemMargin,w=(o.itemW+d)*o.move*o.animatingTo,g=w>o.limit&&1!==o.visible?o.limit:w):g=0===o.currentSlide&&e===o.count-1&&o.vars.animationLoop&&"next"!==o.direction?p?(o.count+o.cloneOffset)*y:0:o.currentSlide===o.last&&0===e&&o.vars.animationLoop&&"prev"!==o.direction?p?0:(o.count+1)*y:p?(o.count-1-e+o.cloneOffset)*y:(e+o.cloneOffset)*y,o.setProps(g,"",o.vars.animationSpeed),o.transitions?(o.vars.animationLoop&&o.atEnd||(o.animating=!1,o.currentSlide=o.animatingTo),o.container.unbind("webkitTransitionEnd transitionend"),o.container.bind("webkitTransitionEnd transitionend",function(){clearTimeout(o.ensureAnimationEnd),o.wrapup(y)}),clearTimeout(o.ensureAnimationEnd),o.ensureAnimationEnd=setTimeout(function(){o.wrapup(y)},o.vars.animationSpeed+100)):o.container.animate(o.args,o.vars.animationSpeed,o.vars.easing,function(){o.wrapup(y)})}o.vars.smoothHeight&&f.smoothHeight(o.vars.animationSpeed)}},o.wrapup=function(t){v||h||(0===o.currentSlide&&o.animatingTo===o.last&&o.vars.animationLoop?o.setProps(t,"jumpEnd"):o.currentSlide===o.last&&0===o.animatingTo&&o.vars.animationLoop&&o.setProps(t,"jumpStart")),o.animating=!1,o.currentSlide=o.animatingTo,o.vars.after(o)},o.animateSlides=function(){!o.animating&&e&&o.flexAnimate(o.getTarget("next"))},o.pause=function(){clearInterval(o.animatedSlides),o.animatedSlides=null,o.playing=!1,o.vars.pausePlay&&f.pausePlay.update("play"),o.syncExists&&f.sync("pause")},o.play=function(){o.playing&&clearInterval(o.animatedSlides),o.animatedSlides=o.animatedSlides||setInterval(o.animateSlides,o.vars.slideshowSpeed),o.started=o.playing=!0,o.vars.pausePlay&&f.pausePlay.update("pause"),o.syncExists&&f.sync("play")},o.stop=function(){o.pause(),o.stopped=!0},o.canAdvance=function(t,e){var n=m?o.pagingCount-1:o.last;return e?!0:m&&o.currentItem===o.count-1&&0===t&&"prev"===o.direction?!0:m&&0===o.currentItem&&t===o.pagingCount-1&&"next"!==o.direction?!1:t!==o.currentSlide||m?o.vars.animationLoop?!0:o.atEnd&&0===o.currentSlide&&t===n&&"next"!==o.direction?!1:!o.atEnd||o.currentSlide!==n||0!==t||"next"!==o.direction:!1},o.getTarget=function(t){return o.direction=t,"next"===t?o.currentSlide===o.last?0:o.currentSlide+1:0===o.currentSlide?o.last:o.currentSlide-1},o.setProps=function(t,e,n){var i=function(){var n=t?t:(o.itemW+o.vars.itemMargin)*o.move*o.animatingTo,i=function(){if(h)return"setTouch"===e?t:p&&o.animatingTo===o.last?0:p?o.limit-(o.itemW+o.vars.itemMargin)*o.move*o.animatingTo:o.animatingTo===o.last?o.limit:n;switch(e){case"setTotal":return p?(o.count-1-o.currentSlide+o.cloneOffset)*t:(o.currentSlide+o.cloneOffset)*t;case"setTouch":return p?t:t;case"jumpEnd":return p?t:o.count*t;case"jumpStart":return p?o.count*t:t;default:return t}}();return-1*i+"px"}();o.transitions&&(i=u?"translate3d(0,"+i+",0)":"translate3d("+i+",0,0)",n=void 0!==n?n/1e3+"s":"0s",o.container.css("-"+o.pfx+"-transition-duration",n),o.container.css("transition-duration",n)),o.args[o.prop]=i,(o.transitions||void 0===n)&&o.container.css(o.args),o.container.css("transform",i)},o.setup=function(e){if(v)o.slides.css({width:"100%","float":"left",marginRight:"-100%",position:"relative"}),"init"===e&&(l?o.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+o.vars.animationSpeed/1e3+"s ease",zIndex:1}).eq(o.currentSlide).css({opacity:1,zIndex:2}):0==o.vars.fadeFirstSlide?o.slides.css({opacity:0,display:"block",zIndex:1}).eq(o.currentSlide).css({zIndex:2}).css({opacity:1}):o.slides.css({opacity:0,display:"block",zIndex:1}).eq(o.currentSlide).css({zIndex:2}).animate({opacity:1},o.vars.animationSpeed,o.vars.easing)),o.vars.smoothHeight&&f.smoothHeight();else{var n,i;"init"===e&&(o.viewport=t('<div class="'+r+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(o).append(o.container),o.cloneCount=0,o.cloneOffset=0,p&&(i=t.makeArray(o.slides).reverse(),o.slides=t(i),o.container.empty().append(o.slides))),o.vars.animationLoop&&!h&&(o.cloneCount=2,o.cloneOffset=1,"init"!==e&&o.container.find(".clone").remove(),o.container.append(f.uniqueID(o.slides.first().clone().addClass("clone")).attr("aria-hidden","true")).prepend(f.uniqueID(o.slides.last().clone().addClass("clone")).attr("aria-hidden","true"))),o.newSlides=t(o.vars.selector,o),n=p?o.count-1-o.currentSlide+o.cloneOffset:o.currentSlide+o.cloneOffset,u&&!h?(o.container.height(200*(o.count+o.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){o.newSlides.css({display:"block"}),o.doMath(),o.viewport.height(o.h),o.setProps(n*o.h,"init")},"init"===e?100:0)):(o.container.width(200*(o.count+o.cloneCount)+"%"),o.setProps(n*o.computedW,"init"),setTimeout(function(){o.doMath(),o.newSlides.css({width:o.computedW,marginRight:o.computedM,"float":"left",display:"block"}),o.vars.smoothHeight&&f.smoothHeight()},"init"===e?100:0))}h||o.slides.removeClass(r+"active-slide").eq(o.currentSlide).addClass(r+"active-slide"),o.vars.init(o)},o.doMath=function(){var t=o.slides.first(),e=o.vars.itemMargin,n=o.vars.minItems,i=o.vars.maxItems;o.w=void 0===o.viewport?o.width():o.viewport.width(),o.h=t.height(),o.boxPadding=t.outerWidth()-t.width(),h?(o.itemT=o.vars.itemWidth+e,o.itemM=e,o.minW=n?n*o.itemT:o.w,o.maxW=i?i*o.itemT-e:o.w,o.itemW=o.minW>o.w?(o.w-e*(n-1))/n:o.maxW<o.w?(o.w-e*(i-1))/i:o.vars.itemWidth>o.w?o.w:o.vars.itemWidth,o.visible=Math.floor(o.w/o.itemW),o.move=o.vars.move>0&&o.vars.move<o.visible?o.vars.move:o.visible,o.pagingCount=Math.ceil((o.count-o.visible)/o.move+1),o.last=o.pagingCount-1,o.limit=1===o.pagingCount?0:o.vars.itemWidth>o.w?o.itemW*(o.count-1)+e*(o.count-1):(o.itemW+e)*o.count-o.w-e):(o.itemW=o.w,o.itemM=e,o.pagingCount=o.count,o.last=o.count-1),o.computedW=o.itemW-o.boxPadding,o.computedM=o.itemM},o.update=function(t,e){o.doMath(),h||(t<o.currentSlide?o.currentSlide+=1:t<=o.currentSlide&&0!==t&&(o.currentSlide-=1),o.animatingTo=o.currentSlide),o.vars.controlNav&&!o.manualControls&&("add"===e&&!h||o.pagingCount>o.controlNav.length?f.controlNav.update("add"):("remove"===e&&!h||o.pagingCount<o.controlNav.length)&&(h&&o.currentSlide>o.last&&(o.currentSlide-=1,o.animatingTo-=1),f.controlNav.update("remove",o.last))),o.vars.directionNav&&f.directionNav.update()},o.addSlide=function(e,n){var i=t(e);o.count+=1,o.last=o.count-1,u&&p?void 0!==n?o.slides.eq(o.count-n).after(i):o.container.prepend(i):void 0!==n?o.slides.eq(n).before(i):o.container.append(i),o.update(n,"add"),o.slides=t(o.vars.selector+":not(.clone)",o),o.setup(),o.vars.added(o)},o.removeSlide=function(e){var n=isNaN(e)?o.slides.index(t(e)):e;o.count-=1,o.last=o.count-1,isNaN(e)?t(e,o.slides).remove():u&&p?o.slides.eq(o.last).remove():o.slides.eq(e).remove(),o.doMath(),o.update(n,"remove"),o.slides=t(o.vars.selector+":not(.clone)",o),o.setup(),o.vars.removed(o)},f.init()},t(window).blur(function(t){e=!1}).focus(function(t){e=!0}),t.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,fadeFirstSlide:!0,thumbCaptions:!1,pauseOnAction:!0,pauseOnHover:!1,pauseInvisible:!0,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",customDirectionNav:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:1,maxItems:0,move:0,allowOneSlide:!0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){},init:function(){}},t.fn.flexslider=function(e){if(void 0===e&&(e={}),"object"==typeof e)return this.each(function(){var n=t(this),i=e.selector?e.selector:".slides > li",o=n.find(i);1===o.length&&e.allowOneSlide===!1||0===o.length?(o.fadeIn(400),e.start&&e.start(n)):void 0===n.data("flexslider")&&new t.flexslider(this,e)});var n=t(this).data("flexslider");switch(e){case"play":n.play();break;case"pause":n.pause();break;case"stop":n.stop();break;case"next":n.flexAnimate(n.getTarget("next"),!0);break;case"prev":case"previous":n.flexAnimate(n.getTarget("prev"),!0);break;default:"number"==typeof e&&n.flexAnimate(e,!0)}}}(jQuery),function(){"use strict";function t(i){if(!i)throw new Error("No options passed to Waypoint constructor");if(!i.element)throw new Error("No element option passed to Waypoint constructor");if(!i.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,i),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=i.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),n[this.key]=this,e+=1}var e=0,n={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete n[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.invokeAll=function(t){var e=[];for(var i in n)e.push(n[i]);for(var o=0,a=e.length;a>o;o++)e[o][t]()},t.destroyAll=function(){t.invokeAll("destroy")},t.disableAll=function(){t.invokeAll("disable")},t.enableAll=function(){t.invokeAll("enable")},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=o.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+n,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,i[t.waypointContextKey]=this,n+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var n=0,i={},o=window.Waypoint,a=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete i[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,o.requestAnimationFrame(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){e.didScroll&&!o.isTouch||(e.didScroll=!0,o.requestAnimationFrame(t))})},e.prototype.handleResize=function(){o.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var n in e){var i=e[n],o=i.newScroll>i.oldScroll,a=o?i.forward:i.backward;for(var r in this.waypoints[n]){var s=this.waypoints[n][r],l=i.oldScroll<s.triggerPoint,c=i.newScroll>=s.triggerPoint,d=l&&c,u=!l&&!c;(d||u)&&(s.queueTrigger(a),t[s.group.id]=s.group)}}for(var p in t)t[p].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element==this.element.window?o.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element==this.element.window?o.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var n in this.waypoints[e])t.push(this.waypoints[e][n]);
for(var i=0,o=t.length;o>i;i++)t[i].destroy()},e.prototype.refresh=function(){var t,e=this.element==this.element.window,n=e?void 0:this.adapter.offset(),i={};this.handleScroll(),t={horizontal:{contextOffset:e?0:n.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:n.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var a in t){var r=t[a];for(var s in this.waypoints[a]){var l,c,d,u,p,h=this.waypoints[a][s],v=h.options.offset,m=h.triggerPoint,f=0,g=null==m;h.element!==h.element.window&&(f=h.adapter.offset()[r.offsetProp]),"function"==typeof v?v=v.apply(h):"string"==typeof v&&(v=parseFloat(v),h.options.offset.indexOf("%")>-1&&(v=Math.ceil(r.contextDimension*v/100))),l=r.contextScroll-r.contextOffset,h.triggerPoint=f+l-v,c=m<r.oldScroll,d=h.triggerPoint>=r.oldScroll,u=c&&d,p=!c&&!d,!g&&u?(h.queueTrigger(r.backward),i[h.group.id]=h.group):!g&&p?(h.queueTrigger(r.forward),i[h.group.id]=h.group):g&&r.oldScroll>=h.triggerPoint&&(h.queueTrigger(r.forward),i[h.group.id]=h.group)}}return o.requestAnimationFrame(function(){for(var t in i)i[t].flushTriggers()}),this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in i)i[t].refresh()},e.findByElement=function(t){return i[t.waypointContextKey]},window.onload=function(){a&&a(),e.refreshAll()},o.requestAnimationFrame=function(e){var n=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t;n.call(window,e)},o.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function n(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),i[this.axis][this.name]=this}var i={vertical:{},horizontal:{}},o=window.Waypoint;n.prototype.add=function(t){this.waypoints.push(t)},n.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},n.prototype.flushTriggers=function(){for(var n in this.triggerQueues){var i=this.triggerQueues[n],o="up"===n||"left"===n;i.sort(o?e:t);for(var a=0,r=i.length;r>a;a+=1){var s=i[a];(s.options.continuous||a===i.length-1)&&s.trigger([n])}}this.clearTriggerQueues()},n.prototype.next=function(e){this.waypoints.sort(t);var n=o.Adapter.inArray(e,this.waypoints),i=n===this.waypoints.length-1;return i?null:this.waypoints[n+1]},n.prototype.previous=function(e){this.waypoints.sort(t);var n=o.Adapter.inArray(e,this.waypoints);return n?this.waypoints[n-1]:null},n.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},n.prototype.remove=function(t){var e=o.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},n.prototype.first=function(){return this.waypoints[0]},n.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},n.findOrCreate=function(t){return i[t.axis][t.name]||new n(t)},o.Group=n}(),function(){"use strict";function t(t){this.$element=e(t)}var e=window.jQuery,n=window.Waypoint;e.each(["innerHeight","innerWidth","off","offset","on","outerHeight","outerWidth","scrollLeft","scrollTop"],function(e,n){t.prototype[n]=function(){var t=Array.prototype.slice.call(arguments);return this.$element[n].apply(this.$element,t)}}),e.each(["extend","inArray","isEmptyObject"],function(n,i){t[i]=e[i]}),n.adapters.push({name:"jquery",Adapter:t}),n.Adapter=t}(),function(){"use strict";function t(t){return function(){var n=[],i=arguments[0];return t.isFunction(arguments[0])&&(i=t.extend({},arguments[1]),i.handler=arguments[0]),this.each(function(){var o=t.extend({},i,{element:this});"string"==typeof o.context&&(o.context=t(this).closest(o.context)[0]),n.push(new e(o))}),n}}var e=window.Waypoint;window.jQuery&&(window.jQuery.fn.waypoint=t(window.jQuery)),window.Zepto&&(window.Zepto.fn.waypoint=t(window.Zepto))}(),function(t,e,n,i){"use strict";t(".animateIn").addClass("isHidden"),t(".headroom").length&&t("body").css("padding-top",t(".headroom").height()),t(e).load(function(){if(t(".flexslider").length&&t(".flexslider").flexslider({animation:"fade",slideshowSpeed:"5000",start:function(t){t.removeClass("loading")}}),t(".headroom").length){var e=new Headroom(n.querySelector(".headroom"),{offset:100,tolerance:5});e.init()}t(".animateIn").length&&t(".animateIn").waypoint(function(e){t(this.element).addClass("isShown")},{offset:"80%"}),t(".mobile-nav-toggle").click(function(e){t("nav.mobile").hasClass("open")?(t("nav.mobile").removeClass("open"),t(".mobile-nav-toggle").removeClass("open"),t("body").css({overflow:"auto",position:"static"})):(t("nav.mobile").addClass("open"),t(".mobile-nav-toggle").addClass("open"),t("body").css({overflow:"hidden",position:"fixed"}))}),t("nav.mobile").find("a").click(function(){t("nav.mobile").removeClass("open")})}),t(function(){t("a[href*=\\#]:not([href=\\#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")||location.hostname==this.hostname){var e=t(this.hash);if(e=e.length?e:t("[name="+this.hash.slice(1)+"]"),e.length)return t("html,body").animate({scrollTop:e.offset().top},500),!1}})})}(jQuery,window,document);
//# sourceMappingURL=../maps/mangrove-custom.js.map
