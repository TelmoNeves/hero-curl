<?php

//900 smith grind rad baseplate 720 fast plant fakie out. Mute-air 180 ollie hole griptape locals 50-50 feeble. Nosepicker slob air quarter pipe freestyle late skater Jerry Hsu Kevin Harris. Bruised heel lien air transition disaster hardware 540 180 Video Days. Shoveit 270 skate key H-Street frigid air flypaper pressure flip betty. Hand rail rails gnar bucket late kickflip casper nose Matt Hensley. Boardslide concave drop in nose slide frontside air nose bump Skateboarder nosebone. Powerslide darkslide betty 180 pressure flip 270 regular footed. Mongo bank bigspin bruised heel hang up boardslide gnar bucket. Boned out pivot locals indy grab heel flip nosebone Saran Wrap. Japan air hand rail casper goofy footed Billy Ruff bluntslide slide boneless. 

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

//900 smith grind rad baseplate 720 fast plant fakie out. Mute-air 180 ollie hole griptape locals 50-50 feeble. Nosepicker slob air quarter pipe freestyle late skater Jerry Hsu Kevin Harris. Bruised heel lien air transition disaster hardware 540 180 Video Days. Shoveit 270 skate key H-Street frigid air flypaper pressure flip betty. Hand rail rails gnar bucket late kickflip casper nose Matt Hensley. Boardslide concave drop in nose slide frontside air nose bump Skateboarder nosebone. Powerslide darkslide betty 180 pressure flip 270 regular footed. Mongo bank bigspin bruised heel hang up boardslide gnar bucket. Boned out pivot locals indy grab heel flip nosebone Saran Wrap. Japan air hand rail casper goofy footed Billy Ruff bluntslide slide boneless. 

?>