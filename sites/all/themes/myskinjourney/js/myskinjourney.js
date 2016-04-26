(function ($, Drupal) {

  Drupal.behaviors.myskinjourney = {
    attach: function(context, settings) {
      // Get your Yeti started.
    }
  };

})(jQuery, Drupal);

(function ($, Drupal, window, document, undefined) {
  jQuery(document).foundation();
})(jQuery, Drupal, this, this.document);

//force the correct state of the rollover text
jQuery( window ).resize(function() {
    if (jQuery(window).width() <= 986) {
      jQuery('.field-name-field-expanded-body').each(function (index, value) { 
        jQuery(this).show();
      });
    } else {
      jQuery('.field-name-field-expanded-body').each(function (index, value) { 
        jQuery(this).hide();
      });
    }
});

jQuery(function() {
  jQuery(".expand-area").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      
      if (jQuery(window).width() <= 1001) {
        var article = jQuery(this).parent('article');
        var expanded_text = jQuery(this).children('.field-name-field-expanded-body');
	      var unexpanded_text = jQuery(this).children('.field-name-body');
        var slide_icon_1 = jQuery(this).children('.slide-icon-1');
        var slide_icon_2 = jQuery(this).children('.slide-icon-2');

  	    if (article.css('background-position') == '0% 50%') {
          article.animate({"background-position":"+=100%"}, "slow");
  	      unexpanded_text.animate({"left":"-=100%"}, "slow");
  	      expanded_text.animate({"left":"0%"}, "slow");
          slide_icon_1.animate({"left":"-=100%"}, "slow");
          slide_icon_2.animate({"left":"-=100%"}, "slow");

  	    } else {
          article.animate({"background-position":"-=100%"}, "slow");
  	      unexpanded_text.animate({"left":"0%"}, "slow");
  	      expanded_text.animate({"left":"+=100%"}, "slow");
          slide_icon_1.animate({"left":"+=100%"}, "slow");
          slide_icon_2.animate({"left":"+=100%"}, "slow");
  	    }
      }

    },
    //Default is 75px, set to 0 for demo so any distance triggers swipe
     threshold:0
  });
});

jQuery('#node-4 .expand-area, #node-5 .expand-area, #node-6 .expand-area, #node-7 .expand-area')
  .on('mouseenter', function(){
    if (jQuery(window).width() >= 986) {
          var item = jQuery(this).closest('article');
          var expanded_text = jQuery(this).children('.field-name-field-expanded-body');
          var icon = jQuery(this).children('.expand-icon').find('img');
          var unexpanded_text = jQuery(this).children('.field-name-body');

          icon.css({
            "-webkit-transform": "rotate(45deg)",
            "-moz-transform": "rotate(45deg)",
            "transform": "rotate(45deg)",
            "-webkit-transition-duration": "1s",
            "-moz-transition-duration": "1s",
            "-o-transition-duration": "1s",
            "transition-duration": "1s"
          });

          unexpanded_text.hide();

          item.animate({
              "margin-top": -75,
              height: "+=150"
          }, '3000');


          expanded_text.fadeIn( "500", function() {
            // Animation 
          });
    }
  })

jQuery('#node-4 .expand-area, #node-5 .expand-area, #node-6 .expand-area, #node-7 .expand-area')
  .on('mouseleave', function(){
    if (jQuery(window).width() >= 986) {   
          var item = jQuery(this).closest('article');
          var unexpanded_text = jQuery(this).children('.field-name-body');
          var icon = jQuery(this).children('.expand-icon').find('img');
          var expanded_text = jQuery(this).children('.field-name-field-expanded-body');

          icon.css({
            "-webkit-transform": "rotate(0deg)",
            "-moz-transform": "rotate(0deg)",
            "transform": "rotate(0deg)",
            "-webkit-transition-duration": "1s",
            "-moz-transition-duration": "1s",
            "-o-transition-duration": "1s",
            "transition-duration": "1s"
          });

          expanded_text.stop(true, true).hide();

          item.animate({ 
              "margin-top": 0,
              height: "-=150"
          }, '3000');

          unexpanded_text.fadeIn( "500", function() {
            // Animation complete
          });
    }
  });


jQuery(".field-name-field-up-image img").click(function() {
  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});