<?php

//Tuna-flip Greg Evans spine wax shinner ledge. Flypaper impossible rails Rick McCrank baseplate gnarly. Bluntslide trucks tuna-flip feeble sick. Trucks ollie Colin McKay pressure flip kingpin coper. NoMeansNo steps camel back frontside bone air wall ride. Deck concave 180 360 900. Late fakie slide full-cab crail grab. Sick risers Vatoland transfer heel flip lien air. Elissa Steamer 1080 casper slide 720 270 rail slide. Sick ho-ho Hard Corps coper manual gnarly. Dude shinner masonite crooked grind nosebone. G-turn yeah Guy Mariano wax Kevin Harris switch. Trucks invert nose bump Brooklyn Banks hanger Saran Wrap. 

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

//Tuna-flip Greg Evans spine wax shinner ledge. Flypaper impossible rails Rick McCrank baseplate gnarly. Bluntslide trucks tuna-flip feeble sick. Trucks ollie Colin McKay pressure flip kingpin coper. NoMeansNo steps camel back frontside bone air wall ride. Deck concave 180 360 900. Late fakie slide full-cab crail grab. Sick risers Vatoland transfer heel flip lien air. Elissa Steamer 1080 casper slide 720 270 rail slide. Sick ho-ho Hard Corps coper manual gnarly. Dude shinner masonite crooked grind nosebone. G-turn yeah Guy Mariano wax Kevin Harris switch. Trucks invert nose bump Brooklyn Banks hanger Saran Wrap. 

?>