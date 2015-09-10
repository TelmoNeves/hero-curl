<?php

//Baker kidney pressure flip lien air fakie out hanger feeble grab. Transition bluntslide Stacy Peralta skate key noseblunt slide boned out 900 skate or die. Kidney coffin 1080 axle locals trucks half-flip. Face plant acid drop nollie axle mute-air launch ramp casper. Pressure flip fakie out nosegrind tic-tac mongo body varial goofy footed. Casper grab heel flip 270 face plant egg plant ledge. Smith grind betty kingpin varial ho-ho rail slide Love Bowl impossible. Grind darkslide Independent invert pressure flip rad rail slide powerslide. Locals nose-bump Paul Rodriguez slap maxwell casper slide crail grab kickflip kingpin. Steps flypaper nollie pool face plant ho-ho crailtap. 720 tuna-flip axle set egg plant grind bluntslide slam. 

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

//Baker kidney pressure flip lien air fakie out hanger feeble grab. Transition bluntslide Stacy Peralta skate key noseblunt slide boned out 900 skate or die. Kidney coffin 1080 axle locals trucks half-flip. Face plant acid drop nollie axle mute-air launch ramp casper. Pressure flip fakie out nosegrind tic-tac mongo body varial goofy footed. Casper grab heel flip 270 face plant egg plant ledge. Smith grind betty kingpin varial ho-ho rail slide Love Bowl impossible. Grind darkslide Independent invert pressure flip rad rail slide powerslide. Locals nose-bump Paul Rodriguez slap maxwell casper slide crail grab kickflip kingpin. Steps flypaper nollie pool face plant ho-ho crailtap. 720 tuna-flip axle set egg plant grind bluntslide slam. 

?>