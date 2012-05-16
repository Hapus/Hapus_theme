(function ($) {

	// Move the slider to it's rightfull place--TOP!
	Drupal.behaviors.moveHeader = {
		//Slider enablement
		attach: function (context, settings) { 
			$('#mhBanner').appendTo('#mhWrapper');
		}
	};

	// Initialize the sliders
	Drupal.behaviors.initSliders = {
		//Slider enablement
		attach: function (context, settings) { 
			$('#convSlider').qbeforeafter({defaultgap:150, leftgap:0, rightgap:1, caption: true, reveal: 0.5});
		}
	};

}(jQuery));