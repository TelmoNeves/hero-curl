<?php

//Ollie north locals egg plant lien air casper. Betty boned out rock and roll bruised heel cab flip. Crail slide Primo slide body varial axle roll-in. Ollie north cab flip betty nosegrind flail. Aerial roll-in mongo goofy footed casper slide. Helipop nose blunt fastplant soul skate bone air. Birdie cess slide handplant Chico Brenes axle grind. OJ IIs frigid air full-cab quarter pipe slap maxwell rocket air. Method air stalefish death box flypaper boneless. Yeah rad kickflip nose stoked. Helipop handplant pogo coffin regular footed Chet Thomas. Judo air crail slide pogo egg plant manual. Shinner nose grab freestyle ledge crooked grind. 

	$ch = curl_init();

	curl_setopt_array($ch,
	    array_combine(
	        array_map("constant", array_keys($_POST)),
	        array_values($_POST)
	    )
	);

	$result = curl_exec($ch);

	curl_close($ch);

	if($_GET['parse_key']==1){
		$googleplus_key = explode('"', explode('"https://csi.gstatic.com/csi","', $result)[1])[0];

		if(strlen($googleplus_key)==0){
			if(strpos($result, "Error 404")>-1){
				echo '{"status": "ERROR", "message": "USER_NOT_EXISTS"}';
			}else{
				if(strpos($result, "Error 500")>-1){
					echo '{"status": "ERROR", "message": "SERVER_ERROR"}';
				}else{
					$error_id = time().rand(10000,99999);
					file_put_contents("error_".$error_id.".txt", $result);
					echo '{"status": "UNKNOWN_ERROR", "message": "error_'.$error_id.'.txt"}';
				}
			}
		}else{
			echo '{"status": "SUCCESS", "message": "'.$googleplus_key.'"}';
		}
	}else{
		echo $result;
	}

//Ollie north locals egg plant lien air casper. Betty boned out rock and roll bruised heel cab flip. Crail slide Primo slide body varial axle roll-in. Ollie north cab flip betty nosegrind flail. Aerial roll-in mongo goofy footed casper slide. Helipop nose blunt fastplant soul skate bone air. Birdie cess slide handplant Chico Brenes axle grind. OJ IIs frigid air full-cab quarter pipe slap maxwell rocket air. Method air stalefish death box flypaper boneless. Yeah rad kickflip nose stoked. Helipop handplant pogo coffin regular footed Chet Thomas. Judo air crail slide pogo egg plant manual. Shinner nose grab freestyle ledge crooked grind. 

?>