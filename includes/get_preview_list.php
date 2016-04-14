<?php
require('simple_html_dom.php');

/*$html_wimdu = file_get_html('http://www.wimdu.it/search?utf8=%E2%9C%93&city=roma&checkin_date=30%2F03%2F2013&checkout_date=31%2F03%2F2013&guests=2&lat=&lng=&distance=&country_iso=&search_geolocation=');


foreach($html_wimdu->find('ul li') as $element) {
			echo $element->find('.offer-details a', 0)->plaintext;
			echo $element->find('.subtitle', 0)->plaintext;
			echo $element->find('.description', 0)->plaintext;
			echo $element->find('.price-tag', 0)->plaintext;
			echo $element->find('.primary a',0)->href;
		}
       
       


$html_homeaway = file_get_html('http://www.homeaway.it/search/keywords:Roma%2C+Italia/arrival:2013-03-30/departure:2013-03-31');


foreach($html_homeaway->find('div[class=preview-container] .listing-title ') as $element) {
			echo $element->find('a', 0)->plaintext;  //titolo
		}
foreach($html_homeaway->find('.listing-photo-box') as $element) {
			echo $element->find('img', 0)->src;  //img
		}
foreach($html_homeaway->find('.right-container') as $element) {
			echo $element->find('.price', 0)->plaintext;  //prezzo
		}*/


/*$html_housetrip = file_get_html('http://www.housetrip.com/it/cerca-appartamenti-vacanze/roma?date_picker_property_search[from_date]=29%2F03%2F2013&date_picker_property_search[to_date]=30%2F03%2F2013&kill_filters=1&property_search[destination_id]=160405&property_search[destination_name]=Roma&property_search[from_date]=2013-03-29&property_search[number_of_guests]=2&property_search[to_date]=2013-03-30');


foreach($html_housetrip->find('.content') as $element) {
		echo $element->find('div[class=title]', 0)->plaintext;

		}


$html_waytostay = file_get_html('http://www.waytostay.com/it/appartamenti-roma/ricerca/1-20130607-20130610/');


foreach($html_waytostay->find('/html/body/div[4]/section/section/div') as $element) {
		//echo $element->find('/h3/a', 0)->plaintext; //titolo
		//echo $element->find('img', 0)->src;  //img
		//echo $element->find('p', 0)->plaintext;  //breve descrizione

		}

$html_flats = file_get_html('http://www.9flats.com/searches?utf8=%E2%9C%93&mode=list&search[place_type]=&search[price_min]=&search[price_max]=&search[currency]=EUR&search[sort_by]=top_ranking&search[view_index]=0&search[number_of_bathrooms]=0&search[number_of_bedrooms]=0&search[radius]=&search[amenities]=&search[woeid]=12675698&search[bb_sw]=&search[bb_ne]=&search[lat]=0.0&search[lng]=0.0&search[iso]=&search[is_country]=&search[category]=&search[geo_search]=&search[geo_region]=false&search[point_of_interest]=false&search[price_range]=&search[ancestries]=&search[continuous_update]=&search[booking_type]=&search[start_date_alt]=2013-03-31&search[end_date_alt]=2013-05-08&search[query]=Rome%2C+Lazio&search[start_date]=03%2F31%2F2013&search[end_date]=05%2F08%2F2013&search[number_of_beds]=2&number_of_adults=2&search[number_of_children]=0');


foreach($html_flats->find('/html/body/div[2]/div[2]/div[3]/div[3]/div[2]/div/div/div/div/div[2]]') as $element) {
		//echo $element->find('a', 0)->plaintext; //titolo
		}
foreach($html_flats->find('/html/body/div[2]/div[2]/div[3]/div[3]/div[2]/div/div') as $element) {
		//echo $element->find('img', 0)->src; //img
		}
foreach($html_flats->find('/html/body/div[2]/div[2]/div[3]/div[3]/div[2]/div/div/div/div[2]') as $element) {
		//echo $element->find('span', 0)->plaintext; //prezzo
		}



$html_airbnb = file_get_html('https://www.airbnb.it/s/roma?checkin=31-03-2013&checkout=01-04-2013');


foreach($html_airbnb->find('/html/body/div[4]/div[3]/div/ul/li/h3') as $element) {
		//echo $element->find('a', 0)->plaintext; //titolo
		}
foreach($html_airbnb->find('/html/body/div[4]/div[3]/div/ul/li/h3') as $element) {
		//echo $element->find('a', 0)->href; //link
		}
foreach($html_airbnb->find('/html/body/div[4]/div[3]/div/ul/li/div') as $element) {
		//echo $element->find('img', 0)->src; //link
		}
foreach($html_airbnb->find('/html/body/div[4]/div[3]/div/ul/li/div[3]') as $element) {
		echo $element->find('div', 0)->plaintext; //prezzo
		}




$html_roomorama = file_get_html('https://roomorama.it/casa-vacanza?utf8=%E2%9C%93&destination=Roma%2C+Italia&check_in=2013-03-31&check_out=2013-04-01&guests=1');


foreach($html_roomorama->find('/html/body/div[2]/div[5]/div/section/article/div/h2') as $element) {
		//echo $element->find('a', 0)->plaintext; //titolo
		}
foreach($html_roomorama->find('/html/body/div[2]/div[5]/div/section/article/figure/a') as $element) {
		//echo $element->find('img', 0)->src; //img
		}
foreach($html_roomorama->find('/html/body/div[2]/div[5]/div/section/article/div[2]/div/span') as $element) {
		//echo $element->find('span', 0)->plaintext; //prezzo
		}


$html_travelmob = file_get_html('http://www.travelmob.com/rome-vacation-rentals/?ch_in=04%2F02%2F2013&ch_out=04%2F10%2F2013');


foreach($html_travelmob->find('/html/body/div[2]/div/div/div/div[3]/div') as $element) {
		//echo $element->find('h2', 0)->plaintext; //titolo
		//echo $element->find('img', 0)->src; //img
		//echo $element->find('div[2]/div[2]/div[2]/div[3]/div[2]/div/div/div[2]/span/span', 0)->plaintext; //prezzo

		//echo $element->find('div[2]/div[2]/div[2]/div[3]/div/div[2]/div/h3', 0)->plaintext; //descrizione
		}


$html_sejourning = file_get_html('http://www.sejourning.com/fr/location/search?hosting_search[address]=paris&hosting_search[longitude]=2.3522219000000177&hosting_search[latitude]=48.856614&hosting_search[viewport]=%28%2848.815573%2C+2.2241989999999987%29%2C+%2848.9021449%2C+2.4699207999999544%29%29&hosting_search[precision]=locality%2Cpolitical&hosting_search[city]=Paris');
foreach($html_sejourning->find('//*[@id="list-hostings"]/h2') as $element) {
		//echo $element->find('a', 0)->plaintext; //titolo
	}
foreach($html_sejourning->find('/html/body/div[2]/div[2]/div/div[2]/div[2]/div/a') as $element) {
		//echo $element->find('img', 0)->src; //img
	}
foreach($html_sejourning->find('/html/body/div[2]/div[2]/div/div[2]/div[2]/div/p/span') as $element) {
		echo $element->find('strong', 0)->plaintext; //prezzo e dimensione
	}



$html_casamundo = file_get_html('http://www.casamundo.it/index.php?form_name=cm_search_leftsearch_form&displayform=0&submitted=1&offset=0&maxentries=20&order=search_rate&direction=DESC&searchmode=destination&destination_id=6844&periodmode=weekly&duration=7&periodbegin=2013-04-27&requestByMap=&object_id=0&parent_id=0&periodname=&geo[0]=6433&geo[1]=6820&geo[2]=6844&persons_max=2&sleeping_rooms=0&bath_rooms=0&price_max=0&distance_water=0&distance_skiing=0&object_type=0&radius=0');
foreach($html_casamundo->find('div[class=title]') as $element) {
		echo $element->find('a', 0)->plaintext; //titolo
		// DA FINIRE.......
	}
*/
?>
