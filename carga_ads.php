<?php
require_once 'includes/simple_html_dom.php';

	$items = array();

	$html_todo = file_get_html('http://www.anumex.com/mobile/result.jsp?region=15');
	foreach ($html_todo->find('table[class="m10"] tr tr') as $element) {
		$item['titulo'] = $element->find('a[class="result"]', 0)->innertext;
		$item['pic'] = $element->find('img',0)->src;
		$item['precio'] = $element->find('div', 0)->innertext;
		$item['imagen'] = "http://www.anumex.com".str_replace("thumbs", "pictures", $item['pic']); //"http://www.anumex.com".$imagen;
		$item['link'] = "http://www.anumex.com" . str_replace("mobile/", "",$element->find('a[class="result"]',0)->href);
		$items[] = $item;
	}


	$totale = 0;
	//$nuevos = 0;
	
	foreach ($items as $key_name => $key_value) {
		$len = strlen($key_value['titulo']);
		if ($len === 0){
			//non fare nulla
		} else {
		
		$totale++;
		if($key_value['imagen']!="http://www.anumex.com/img/logo_gray.png"){
		$imagen=$key_value['imagen'];

		setlocale(LC_MONETARY, 'en_US');
			$pos = strpos($key_value['precio'],":");
			if ($pos===false){
			$best_price = $key_value['precio'];
			$best_price = str_replace(" ", "", $best_price);
			$best_price = str_replace("€", "", $best_price);
			$best_price = str_replace("-", "", $best_price);
			$best_price = str_replace("$", "", $best_price);
			$best_price = str_replace(",", "", $best_price);
			}else{
				$best_price = 0;
			}

			if ($best_price > 0) :
				//echo '&euro;'. substr($best_price, 0, strrpos($best_price, ' '));
				//echo money_format('%i', $best_price);
				//echo "$" . number_format($best_price,0);
			else:
				//echo '0';
				$best_price = 0;
			endif;
			$titulo=$key_value["titulo"];
			$id_anumex = str_replace("http://www.anumex.com/ad.jsp?id=", "", $key_value['link']);
	  
		//echo $titulo . "-". $id_anumex . "- ";
		require 'conexion.php';
		if ($result = mysqli_query($con, "SELECT * FROM clasificados2 WHERE referencia='$id_anumex'")) {

		    if (mysqli_num_rows($result)>0) {
		    	//echo "REPETIDO<br />";
		    	mysqli_query($con,"UPDATE clasificados2 SET fecha = now() WHERE referencia='$id_anumex'");
		    }else{
		    	//echo "AGREGADO<br />";
				mysqli_query($con,"INSERT INTO clasificados2 (titulo,precio,sitio,referencia,fecha) VALUES ('$titulo',$best_price,2,'$id_anumex', now())");
				//echo $inserta;
				//$nuevos++;
			}

		    /* cerrar el resulset */
		    mysqli_free_result($result);
		}
		mysqli_close($con);

		}
		}
	}
?>