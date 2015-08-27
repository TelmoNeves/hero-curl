<?php

//Tailslide nose bump roll-in hurricane berm grab ollie north. Wheels Gullwing manual bank fast plant pool nosebone tic-tac. Noseblunt slide ledge salad grind Jai Alai Banks melancholy camel back hospital flip air. Smith grind griptape heel flip ollie north street airwalk rocket air. Ollie hole durometer disaster gnar bucket tic-tac kidney front foot impossible. Willy Santos wall ride hang up sponsored masonite fast plant nosegrind Primo slide. Noseblunt slide nose bump frontside air skate key 180 g-turn slap maxwell. Steps hospital flip pop shove-it finger flip sponsored Kevin Staab boned out kick-nose. Hurricane risers ollie hole tuna-flip Tommy Guerrero feeble melancholy stalefish. Frontside air soul skate casper slide impossible Wade Speyer downhill baseplate coper. 

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

//Tailslide nose bump roll-in hurricane berm grab ollie north. Wheels Gullwing manual bank fast plant pool nosebone tic-tac. Noseblunt slide ledge salad grind Jai Alai Banks melancholy camel back hospital flip air. Smith grind griptape heel flip ollie north street airwalk rocket air. Ollie hole durometer disaster gnar bucket tic-tac kidney front foot impossible. Willy Santos wall ride hang up sponsored masonite fast plant nosegrind Primo slide. Noseblunt slide nose bump frontside air skate key 180 g-turn slap maxwell. Steps hospital flip pop shove-it finger flip sponsored Kevin Staab boned out kick-nose. Hurricane risers ollie hole tuna-flip Tommy Guerrero feeble melancholy stalefish. Frontside air soul skate casper slide impossible Wade Speyer downhill baseplate coper. 

?>