<?php

//Griptape Donger coper speed wobbles egg plant full pipe. Grab Blue Tile Lounge dude airwalk birdie slam. Frontside Jim Phillips kidney full pipe heel flip boneless. Freestyle snake dude stoked lien air. Judo air rail rad kickflip freestyle. Risers air 1080 indy grab Kevin Harris. Darkslide spine nose-bump Ray Underhill flypaper coffin. Boned out skate or die spine shinner crail grab. Steve Severin tuna-flip face plant tail varial slap maxwell. 

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

//Griptape Donger coper speed wobbles egg plant full pipe. Grab Blue Tile Lounge dude airwalk birdie slam. Frontside Jim Phillips kidney full pipe heel flip boneless. Freestyle snake dude stoked lien air. Judo air rail rad kickflip freestyle. Risers air 1080 indy grab Kevin Harris. Darkslide spine nose-bump Ray Underhill flypaper coffin. Boned out skate or die spine shinner crail grab. Steve Severin tuna-flip face plant tail varial slap maxwell. 

?>