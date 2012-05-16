<?php
	//Style & JS includes
	drupal_add_css(drupal_get_path('theme', 'hapus') . '/customCSS/pricing-table.css');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/jqueryPlugins/jquery.scrollTo.js');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/jqueryPlugins/jquery.localscroll.js');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/jqueryPlugins/jquery.color.js');
	drupal_add_js(drupal_get_path('theme', 'hapus') . '/customJS/pricing-page.js');

	//Get the path and keep
	$path = isset($_GET['q']) ? $_GET['q'] : '<front>';

	//Create the content for later rendering
	$pt['freemium']['type'] = 'ul';
	$pt['freemium']['attributes'] = array('id' => 'freemium', 'class' => 'ptList');
	$pt['freemium']['items'][] = '<h6>Freemium</h6><div class="ptPrice"><strong>0$</strong>/month</div><div class="ptByLine">Best bet for any freelancer</div>';
	$pt['freemium']['items'][] = '500 PDFs<sup>' . l('1', '', array('fragment' => '1_help', 'external' => true)) . '</sup>';
	$pt['freemium']['items'][] = 'Full font support';
	$pt['freemium']['items'][] = 'Unlimited apps<sup>' . l('2', '', array('fragment' => '2_help', 'external' => true)) . '</sup>';
	$pt['freemium']['items'][] = 'Commodo gothica aliquip';
	$pt['freemium']['items'][] = 'Commodo gothica aliquip';
	$pt['freemium']['items'][] = 'Commodo gothica aliquip';
	$pt['freemium']['items'][] = 'Commodo gothica aliquip';
	$pt['freemium']['items'][] = 'Commodo gothica aliquip';
	$pt['freemium']['items'][] = '<input class="form-submit light-gray" type="submit" value="Sign up" />';

	$pt['pro']['type'] = 'ul';
	$pt['pro']['attributes'] = array('id' => 'pro', 'class' => 'ptList');
	$pt['pro']['items'][] = '<div id="proTriangle"></div><h6>Pro</h6><div class="ptPrice"><strong>35$</strong>/month</div><div class="ptByLine">Most popular plan</div>';
	$pt['pro']['items'][] = '5,000 PDFs<sup>' . l('1', '', array('fragment' => '1_help', 'external' => true)) . '</sup>';
	$pt['pro']['items'][] = 'Full font support';
	$pt['pro']['items'][] = 'Unlimited apps<sup>' . l('2', '', array('fragment' => '2_help', 'external' => true)) . '</sup>';
	$pt['pro']['items'][] = 'Commodo gothica aliquip';
	$pt['pro']['items'][] = 'Commodo gothica aliquip';
	$pt['pro']['items'][] = 'Commodo gothica aliquip';
	$pt['pro']['items'][] = 'Commodo gothica aliquip';
	$pt['pro']['items'][] = 'Commodo gothica aliquip';
	$pt['pro']['items'][] = '<input class="form-submit" type="submit" value="Sign up" />';

	$pt['epic']['type'] = 'ul';
	$pt['epic']['attributes'] = array('id' => 'epic', 'class' => 'ptList');
	$pt['epic']['items'][] = '<h6>Epic</h6><div class="ptPrice"><strong>90$</strong>/month</div><div class="ptByLine">For large applications</div>';
	$pt['epic']['items'][] = '30,000 PDFs<sup>' . l('1', '', array('fragment' => '1_help', 'external' => true)) . '</sup>';
	$pt['epic']['items'][] = 'Full font support';
	$pt['epic']['items'][] = 'Unlimited apps<sup>' . l('2', '', array('fragment' => '2_help', 'external' => true)) . '</sup>';
	$pt['epic']['items'][] = 'Commodo gothica aliquip';
	$pt['epic']['items'][] = 'Commodo gothica aliquip';
	$pt['epic']['items'][] = 'Commodo gothica aliquip';
	$pt['epic']['items'][] = 'Commodo gothica aliquip';
	$pt['epic']['items'][] = 'Commodo gothica aliquip';
	$pt['epic']['items'][] = '<input class="form-submit light-gray" type="submit" value="Sign up" />';

	//Help text
	$help = array(
		'type' => 'ol',
		'attributes' => array('id' => 'ptHelp'),
		'items' => array(
			array(
				'id' => '1_help',
				'data' => 'You will only be charged for unique PDFs; 50 Kb HTML will be treated as one 1 PDF.'
			),
			array(
				'id' => '2_help',
				'data' => 'The single API key can be used with multiple applications.'
			)
		)
	);
?>

<h3 class="pageTitle">Pricing table</h3>

<div id="ptContainer">
	<div id="ptParent">
		<div id="ptLeft"><?php print theme_item_list($pt['freemium']) ?></div>
		<div id="ptCentre"><?php print theme_item_list($pt['pro']) ?></div>
		<div id="ptRight"><?php print theme_item_list($pt['epic']) ?></div>
	</div>
</div>

<div id="ptDesc">
	<?php print theme_item_list($help) ?>
</div>