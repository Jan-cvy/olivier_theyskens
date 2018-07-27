/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        $header = $('.header')
        $burger = $('.header__burger') 
        $burger.on('click', function(e){
          if( $header.hasClass( 'active' ) ){
            $header.removeClass( 'active' )
          } else {
            $header.addClass('active')
          }
        })

        $contains = $('.contain')
        $(window).resize(function(){
          resize()
        })

        resize()

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
        
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);


  function resize(){

    var innerHeight = window.innerHeight - 180
    var innerWidth = window.innerWidth
    var ratioScreen = innerWidth / innerHeight
    console.log('resize')
    var width, height, x, y
    $contains.each(function($i){
      var ratioVideo = 1280 / 720
      if( ratioVideo > ratioScreen ){
        width = innerWidth
        height = width / ratioVideo
      }else{  
        height = innerHeight
        width = height * ratioVideo
      }

      x = ( innerWidth - width ) / 2
      y = ( innerHeight - height ) / 2 + 100

      $(this).css({
        width: width,
        height: height,
        top: y,
        left: x
      })

    })

  }

})(jQuery); // Fully reference jQuery after this point.
