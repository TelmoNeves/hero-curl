<?php

//Durometer handplant invert rip grip nosepicker. Shoveit Sacto frontside air half-flip hanger durometer. Boned out front foot impossible kickflip 1080 crail grab. Layback nosepicker transition rail slide durometer Jeremy Wray. Dude slide wall ride Kevin Harris bank. Casper slide nose blunt powerslide mute-air camel back. Hand rail flypaper vert bone air risers. Rocket air nose gnar bucket fakie hardware. Rails shoveit hip manual lipslide. Slam Andrew Reynolds downhill Christ air full pipe deck. Invert opposite footed backside nose blunt alley oop. Primo slide nosepicker bank coper fast plant. Tail sponsored fakie out axle tic-tac G&S. 

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

//Durometer handplant invert rip grip nosepicker. Shoveit Sacto frontside air half-flip hanger durometer. Boned out front foot impossible kickflip 1080 crail grab. Layback nosepicker transition rail slide durometer Jeremy Wray. Dude slide wall ride Kevin Harris bank. Casper slide nose blunt powerslide mute-air camel back. Hand rail flypaper vert bone air risers. Rocket air nose gnar bucket fakie hardware. Rails shoveit hip manual lipslide. Slam Andrew Reynolds downhill Christ air full pipe deck. Invert opposite footed backside nose blunt alley oop. Primo slide nosepicker bank coper fast plant. Tail sponsored fakie out axle tic-tac G&S. 

?>