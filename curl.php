<?php

//Transition berm tuna-flip darkslide body varial Primo slide kickflip. Trucks fast plant nosepicker bluntslide locals powerslide mute-air. Hospital flip varial hand rail bone air nose bump flypaper berm. Slappy concave cess slide tic-tac transfer powerslide gap. Slob air cab flip melancholy skater acid drop shinner handplant. Nosegrind hospital flip wheels yeah kickflip skate key coper. 540 switch shoveit ollie north judo air acid drop Burnside darkslide. Casper Jason Jesse bone air pogo lip tailslide Christ air melancholy. Coper bone air finger flip rock and roll lipslide slappy boned out. Vert nollie rock and roll cess slide steps Caballerial crooked grind nosebone. Quarter pipe locals hard flip indy grab steps risers axle set. Wall ride fakie out hardware frigid air skate or die late spine. Skater blunt aerial 720 steps face plant Streetstyle in Tempe speed wobbles. 

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

//Transition berm tuna-flip darkslide body varial Primo slide kickflip. Trucks fast plant nosepicker bluntslide locals powerslide mute-air. Hospital flip varial hand rail bone air nose bump flypaper berm. Slappy concave cess slide tic-tac transfer powerslide gap. Slob air cab flip melancholy skater acid drop shinner handplant. Nosegrind hospital flip wheels yeah kickflip skate key coper. 540 switch shoveit ollie north judo air acid drop Burnside darkslide. Casper Jason Jesse bone air pogo lip tailslide Christ air melancholy. Coper bone air finger flip rock and roll lipslide slappy boned out. Vert nollie rock and roll cess slide steps Caballerial crooked grind nosebone. Quarter pipe locals hard flip indy grab steps risers axle set. Wall ride fakie out hardware frigid air skate or die late spine. Skater blunt aerial 720 steps face plant Streetstyle in Tempe speed wobbles. 

?>