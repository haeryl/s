;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }




})(jQuery, this);

jQuery(document).ready(function() { 

	/* Mobile Devices Navigation Script */
	(function ($) { 
		$('a.top-menu-button').bind('click', function () { 
			if ($(this).hasClass('active')) {
				$('#top-menu').slideUp('fast');
				
				$(this).removeClass('active');
			} else {
				$('#top-menu').slideDown('fast');
				
				$(this).addClass('active');
			}
			
			return false;
		} );
	} )(jQuery);
	
	/* Social Icons Toggle */
	(function ($) { 
		$('#open-top-panel').bind('click', function () { 
			if ($(this).hasClass('active')) {
				$('.top-panel-inner').slideUp('slow');
				
				$(this).removeClass('active');
			} else {
				$('.top-panel-inner').slideDown('slow');
				
				$(this).addClass('active');
			}
			
			return false;
		} );
	} )(jQuery);



    /*---------------------------------
     Scroll To Top
     -----------------------------------*/

    jQuery(".backtotop").addClass("hidden");
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() === 0) {
            jQuery(".backtotop").addClass("hidden")
        } else {
            jQuery(".backtotop").removeClass("hidden")
        }
    });

    jQuery('.backtotop').click(function () {
        jQuery('body,html').animate({
            scrollTop:0
        }, 1200);
        return false;
    });



} );

/////////////////////////////////////////////
// HEADER
/////////////////////////////////////////////

jQuery("a.more-link, .folio-item .hover, #flickr a").hover(function(){

        jQuery(this).prepend("<span class='whitehover'><span class='imghover'><span></span></span></span>");
        jQuery(this).find("span.whitehover").stop().animate({backgroundColor: "rgba(255,255,255,0.5)"}, 300)
        jQuery(this).find("span.imghover").stop().animate({opacity:1},0)
        var sh = jQuery(this).find("img").innerHeight()+2;
        var sw = jQuery(this).find("img").innerWidth()+2;
        if (sh > sw) {
            var hw = sw/2;
        } else {
            var hw = sh/2;
        }

        jQuery(this).find("span.imghover").height('0').width('0').css({'top':sh/2,'left':sw/2,'borderRadius':'100%'}).stop().animate({opacity:1,height:hw,width:hw,top:(sh/2 - hw/2),left:(sw/2 - hw/2)},300,

            function(){

                jQuery(this).find("span").css({opacity:1,height:hw,width:hw});

            }
        );



    }, function(){
        jQuery(this).find("span.imghover span").css({opacity:0});
        jQuery(this).find("span.imghover, span.whitehover").stop().animate({opacity:0},300,

            function() { jQuery(this).remove();}

        );

    });

jQuery("#loginform a.submit").click( function(){
    jQuery(this).parents("#loginform").submit();
    return false;
});
jQuery(document).ready(function() {
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});