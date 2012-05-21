(function ($) {

	// Initialize the accordion
	Drupal.behaviors.initAccordion = {
		attach: function (context, settings) { 
			$('.accordion').hapusAccordion();
		}
	};

}(jQuery));