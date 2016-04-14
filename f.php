<?php
require_once 'includes/simple_html_dom.php';

	$items = array();

	$html_todo = file_get_html('https://foursquare.com/cities/zapopan-mexico/a/1');
	foreach ($html_todo->find('li[class="venue"] div[class="venueCard"]') as $element) {
		$item['titulo'] = $element->find('h2 a', 0)->innertext;
		$item['direccion'] = $element->find('div[class="moreInfo"] div[class="adr"]', 0)->innertext;
		$items[] = $item;
	}

	$totale = 0;
	//$nuevos = 0;
	
	foreach ($items as $key_name => $key_value) {
		
		echo $key_value["titulo"] . "<br>" . $key_value["direccion"] ."<br><br>"; 

	}
?>