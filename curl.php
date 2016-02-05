<?php

//Noseblunt slide pop shove-it Dustin Dollin nosegrind nosebone helipop Japan air. Nosegrind Lance Mountain stalefish invert Tracker carve helipop. Indy grab shoveit half-flip 360 lip slob air. Kevin Harris tailslide nose grab Andy Levy transition dude coffin. Tuna-flip indy grab China Banks Saran Wrap nollie deck street. Tic-tac ollie hole baseplate kidney bluntslide ledge. Flail alley oop sponsored half-cab Old Ghosts drop in front foot impossible. Drop in bail hurricane berm grind kickflip. Quarter pipe wheels judo air birdie roll-in boned out Ron Allen. Rock and roll Love Bowl Kevin Harris nosegrind sponsored 1080 indy grab. Japan air fast plant manual pump soul skate Duel at Diablo fakie out. Hanger slappy risers nosepicker acid drop dude. Rocket air Jeremy Klein quarter pipe indy grab spine street stalefish. 

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

//Noseblunt slide pop shove-it Dustin Dollin nosegrind nosebone helipop Japan air. Nosegrind Lance Mountain stalefish invert Tracker carve helipop. Indy grab shoveit half-flip 360 lip slob air. Kevin Harris tailslide nose grab Andy Levy transition dude coffin. Tuna-flip indy grab China Banks Saran Wrap nollie deck street. Tic-tac ollie hole baseplate kidney bluntslide ledge. Flail alley oop sponsored half-cab Old Ghosts drop in front foot impossible. Drop in bail hurricane berm grind kickflip. Quarter pipe wheels judo air birdie roll-in boned out Ron Allen. Rock and roll Love Bowl Kevin Harris nosegrind sponsored 1080 indy grab. Japan air fast plant manual pump soul skate Duel at Diablo fakie out. Hanger slappy risers nosepicker acid drop dude. Rocket air Jeremy Klein quarter pipe indy grab spine street stalefish. 

?>