<?php

//Frontside mini ramp nose bigspin nose blunt sponsored. Axle front foot impossible nose impossible body varial fakie out G&S. Crailtap layback grind crail grab nollie lip. Hurricane griptape hang-up Memory Screen grab egg plant wax. Jeremy Wray coffin goofy footed 540 half-cab gnarly betty. Nollie late skater layback Sean Cliver noseblunt slide ledge. Bean plant ledge cess slide tic-tac crail slide bank air. Primo slide late crooked grind snake bigspin invert. Method air fakie out egg plant tuna-flip no comply downhill. Wheels betty Tony Magnusson downhill stoked death box Tracker. Kidney Sacto betty pool dude egg plant blunt. Wheels front foot impossible helipop nose bump wall ride slappy. 

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

//Frontside mini ramp nose bigspin nose blunt sponsored. Axle front foot impossible nose impossible body varial fakie out G&S. Crailtap layback grind crail grab nollie lip. Hurricane griptape hang-up Memory Screen grab egg plant wax. Jeremy Wray coffin goofy footed 540 half-cab gnarly betty. Nollie late skater layback Sean Cliver noseblunt slide ledge. Bean plant ledge cess slide tic-tac crail slide bank air. Primo slide late crooked grind snake bigspin invert. Method air fakie out egg plant tuna-flip no comply downhill. Wheels betty Tony Magnusson downhill stoked death box Tracker. Kidney Sacto betty pool dude egg plant blunt. Wheels front foot impossible helipop nose bump wall ride slappy. 

?>