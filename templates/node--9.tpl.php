<?php
	//Style & JS includes
	drupal_add_css(drupal_get_path('theme', 'hapus') . '/customCSS/home-option-1.css');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/customJS/home-option-1.js');

	drupal_add_js(drupal_get_path('theme', 'hapus') . '/jqueryPlugins/jquery.qbeforeafter.js');	
	drupal_add_css(drupal_get_path('theme', 'hapus') . '/customCSS/qbeforeafter.css');
	
?>

<div id="mhBanner">
	<div id="mhbLeft">
		<h3>It's PDFfing fast!</h3>
		<p>Welcome to the Jaguar of PDF converters that allows you to convert ANY html file to PDF in a matter of seconds.</p>
		<input type="button" onclick="window.location='user/register'" value="Get started &rarr;" class="form-submit orange" />
	</div>
	<div id="mhbRight">
		<div id="convSlider">
			<img src="<?php print base_path() . drupal_get_path('theme', 'hapus') ?>/images/SliderImages/html_1.png" width="439" height="228" alt="Draaaaab HTML" />
			<img src="<?php print base_path() . drupal_get_path('theme', 'hapus') ?>/images/SliderImages/pdf_1.png" width="439" height="228" alt="Voila! A beautiful PDF." />
		</div>
	</div>
</div>

<div id="starline">
	<div id="star" class="pictos">T</div>
</div>

<ul id="features">
	<li class="left">
		<div class="featureLogo pictos">d</div>
		<div class="featureText">
			<h6>Uniquely affordable</h6>
			<p>While most services charge you per conversion, we charge you only once for a single document, no matter the number of conversions. Ever seen affordability like this? We thought not.</p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">s</div>
		<div class="featureText">
			<h6>Incredibly fast</h6>
			<p>True to its name, Sprint PDF yields PDFs at superfast speeds. Our service is cloud-based, so it can handle all your conversion needs without skipping a beat.</p>
		</div>
	</li>
	<li class="left">
		<div class="featureLogo pictos">a</div>
		<div class="featureText">
			<h6>Powerful API & libraries</h6>
			<p>Our strong API ensures that you do not lose out on any functionality when you integrate Sprint PDF with your application. Generate PDFs in <code>B0</code> sizes or set cookies post generation. <?php print l('There\'s no end to the possiblities', 'http://www.youtube.com/watch?v=B19ICwhbzZE', array('attributes' => array('TARGET' => '_BLANK'))) ?>.</p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">k</div>
		<div class="featureText">
			<h6>Well documented</h6>
			<p>Everything. That's what we've documented. And we are friendly people too. Stuck with something? Just get in touch with us and we are happy to help.</p>
		</div>
	</li>
	<li class="left">
		<div class="featureLogo pictos">l</div>
		<div class="featureText">
			<h6>Unlimited language support</h6>
			<p>Ever wanted to convert Chinese text into PDF? Right-to-left languages? No problem! Sprint PDF has unlimited language support, so you won’t be lingua-restricted. Don’t worry about character fonts, special accents, or weird symbols—<?php print l('we support them all', 'Documentation/font_list') ?>!</p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">n</div>
		<div class="featureText">
			<h6>Easy to integrate</h6>
			<p>We’ve kept our tool light and simple, so you can integrate it with any application you're developing. And we are adding to our libraries every day. Have a look.</p>
		</div>
	</li>
</ul>

<div id="featureActions">
	<div id="faButtons">
		<input type="button" class="form-submit" onclick="window.location='user/register'" value="GET STARTED &rarr;" /><em>or</em><input type="button" class="form-submit light-gray" onclick="window.location='Documentation/API'" value="LEARN MORE &rarr;" />
	</div>
</div>