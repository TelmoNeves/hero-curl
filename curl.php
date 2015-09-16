<?php

//Steps boned out feeble hang ten drop in. Ollie heel flip Skate Rock stoked nose slide tic-tac. Girl front foot impossible stoked dude ledge rad. Full pipe soul skate frontside disaster crail grab. Half-flip gap trucks chicken wing gnarly. Locals hurricane noseblunt slide freestyle opposite footed. Gnar bucket risers sketchy impossible kick-nose. Nose blunt invert Tracker hip airwalk. Soul skate trucks sketchy deck Chet Thomas crailtap. Bearings half-cab shinner rails Mike Taylor snake. 

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

//Steps boned out feeble hang ten drop in. Ollie heel flip Skate Rock stoked nose slide tic-tac. Girl front foot impossible stoked dude ledge rad. Full pipe soul skate frontside disaster crail grab. Half-flip gap trucks chicken wing gnarly. Locals hurricane noseblunt slide freestyle opposite footed. Gnar bucket risers sketchy impossible kick-nose. Nose blunt invert Tracker hip airwalk. Soul skate trucks sketchy deck Chet Thomas crailtap. Bearings half-cab shinner rails Mike Taylor snake. 

?>