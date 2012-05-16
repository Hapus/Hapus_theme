(function ($) {

	// Apply local scroll
	Drupal.behaviors.localSroll = {
		//Slider enablement
		attach: function (context, settings) { 
			$.localScroll({
				onAfter: function(e, anchor, target){
					$(e).stop().css("background-color", "#F5DA81").animate({ backgroundColor: "#FFFFFF"}, 1500)
				}
			});
		}
	};

}(jQuery));