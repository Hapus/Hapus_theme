<?php
	//Style & JS includes
	drupal_add_css(drupal_get_path('theme', 'hapus') . '/customCSS/home-option-1.css');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/customJS/home-option-1.js');

	drupal_add_js(drupal_get_path('theme', 'hapus') . '/jqueryPlugins/jquery.qbeforeafter.js');	
	drupal_add_css(drupal_get_path('theme', 'hapus') . '/customCSS/qbeforeafter.css');
	
?>

<div id="mhBanner">
	<div id="mhbLeft">
		<h3>Awesome PDFs</h3>
		<h2>For awesome Apps</h2>
		<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea.</p>
		<input type="button" value="Learn more &rarr;" class="form-submit orange" />
	</div>
	<div id="mhbRight">
		<div id="convSlider">
			<img src="<?php print drupal_get_path('theme', 'hapus') ?>/images/SliderImages/html_1.png" width="439" height="228" alt="Draaaaab HTML" />
			<img src="<?php print drupal_get_path('theme', 'hapus') ?>/images/SliderImages/pdf_1.png" width="439" height="228" alt="Voila! A beautiful PDF." />
		</div>
	</div>
</div>

<div id="starline">
	<div id="star" class="pictos">T</div>
</div>

<ul id="features">
	<li class="left">
		<div class="featureLogo pictos">n</div>
		<div class="featureText">
			<h6>Easy to integrate</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">s</div>
		<div class="featureText">
			<h6>Incredibly fast</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
	<li class="left">
		<div class="featureLogo pictos">a</div>
		<div class="featureText">
			<h6>Powerful API & libraries</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">l</div>
		<div class="featureText">
			<h6>Unlimited language support</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
	<li class="left">
		<div class="featureLogo pictos">k</div>
		<div class="featureText">
			<h6>Well documented</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
	<li class="right">
		<div class="featureLogo pictos">d</div>
		<div class="featureText">
			<h6>Uniquely affordable</h6>
			<p>Commodo gothica aliquip ullamcorper qui nam. Nunc est quis lobortis in luptatum. Id parum tempor processus iusto exerci. Dolore velit litterarum littera option ea. </p>
		</div>
	</li>
</ul>

<div id="featureActions">
	<div id="faButtons">
		<input type="button" class="form-submit" value="GET STARTED &rarr;" /><em>or</em><input type="button" class="form-submit light-gray" value="LEARN MORE &rarr;" />
	</div>
</div>