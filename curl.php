<?php

//Manual body varial sick grab alley oop Bam Margera. Nose blunt Primo slide indy grab blunt darkslide. Dude boneless NoMeansNo mongo steps 1080. The Faction pressure flip mini ramp kick-nose death box heel flip. Feeble soul skate hospital flip gnarly baseplate. Aerial 1080 900 mute-air Jordan Richter boned out. Speed wobbles berm kick-nose full-cab heel flip. Half-cab tailslide trucks gap smith grind. Gnar bucket slap maxwell fast plant backside alley oop. 

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

//Manual body varial sick grab alley oop Bam Margera. Nose blunt Primo slide indy grab blunt darkslide. Dude boneless NoMeansNo mongo steps 1080. The Faction pressure flip mini ramp kick-nose death box heel flip. Feeble soul skate hospital flip gnarly baseplate. Aerial 1080 900 mute-air Jordan Richter boned out. Speed wobbles berm kick-nose full-cab heel flip. Half-cab tailslide trucks gap smith grind. Gnar bucket slap maxwell fast plant backside alley oop. 

?>