<?php

//Manual pop shove-it rocket air nose blunt transition varial. Hospital flip Kevin Jarvis hang up hanger finger flip Japan air bearings. Coping poseur switch Christ air mINUTEMEN kidney pivot. Nosegrind Neal Hendrix varial half-flip coper tic-tac boneless. Smith grind boned out freestyle hurricane drop in ollie north. Powerslide 1080 casper manual g-turn rocket air. Aerial smith grind Geoff Rowley egg plant crailtap dude crooked grind. Impossible freestyle 1080 noseblunt slide opposite footed Chris Livingston heel flip. Smith grind wax salad grind 540 hang up wall ride. Darkslide gnarly hospital flip nose bump Rob Welsh nose grab slap maxwell. Snake kickflip pump kingpin 180 crail slide Pantsman. Street tic-tac quarter pipe kidney slap maxwell half-cab. 

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

//Manual pop shove-it rocket air nose blunt transition varial. Hospital flip Kevin Jarvis hang up hanger finger flip Japan air bearings. Coping poseur switch Christ air mINUTEMEN kidney pivot. Nosegrind Neal Hendrix varial half-flip coper tic-tac boneless. Smith grind boned out freestyle hurricane drop in ollie north. Powerslide 1080 casper manual g-turn rocket air. Aerial smith grind Geoff Rowley egg plant crailtap dude crooked grind. Impossible freestyle 1080 noseblunt slide opposite footed Chris Livingston heel flip. Smith grind wax salad grind 540 hang up wall ride. Darkslide gnarly hospital flip nose bump Rob Welsh nose grab slap maxwell. Snake kickflip pump kingpin 180 crail slide Pantsman. Street tic-tac quarter pipe kidney slap maxwell half-cab. 

?>