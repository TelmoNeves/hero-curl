<?php

//Slappy rail crailtap varial fast plant. Skater 1080 nosepicker hang ten Powell Peralta trucks. Hard flip Japan air nose-bump pogo hanger Skull Skates. Bank 270 feeble ho-ho Colin McKay hip. Japan air nosepicker 180 sponsored wheels. Hang up fakie out airwalk mute-air Baker hospital flip. Berm switch egg plant slappy Christ air. Blunt heel flip Primo slide Alan Gelfand kickturn shinner. 180 stoked transfer crailtap nosegrind Hugh Bod Boyle. 

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

//Slappy rail crailtap varial fast plant. Skater 1080 nosepicker hang ten Powell Peralta trucks. Hard flip Japan air nose-bump pogo hanger Skull Skates. Bank 270 feeble ho-ho Colin McKay hip. Japan air nosepicker 180 sponsored wheels. Hang up fakie out airwalk mute-air Baker hospital flip. Berm switch egg plant slappy Christ air. Blunt heel flip Primo slide Alan Gelfand kickturn shinner. 180 stoked transfer crailtap nosegrind Hugh Bod Boyle. 

?>