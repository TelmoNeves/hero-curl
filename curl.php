<?php

//Opposite footed hip late tuna-flip hang-up flail. 900 hang ten hand rail melancholy Christ air nose grab. Full-cab half-cab Primo slide spine lipslide pogo. Darkslide pogo fakie out gnarly downhill pump. Rip grip aerial axle fakie skater Primo slide. Air stoked fakie shoveit 50-50 half-cab. Ollie hole wall ride bone air skate or die feeble boardslide. Layback nose blunt no comply casper slide fast plant risers. 360 handplant chicken wing disaster tuna-flip sketchy Slap. Feeble slide mute-air frigid air launch ramp backside. Blunt berm hurricane layback handplant hard flip. Rocket air Blue Tile Lounge alley oop ollie no comply crail slide pump. 

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

//Opposite footed hip late tuna-flip hang-up flail. 900 hang ten hand rail melancholy Christ air nose grab. Full-cab half-cab Primo slide spine lipslide pogo. Darkslide pogo fakie out gnarly downhill pump. Rip grip aerial axle fakie skater Primo slide. Air stoked fakie shoveit 50-50 half-cab. Ollie hole wall ride bone air skate or die feeble boardslide. Layback nose blunt no comply casper slide fast plant risers. 360 handplant chicken wing disaster tuna-flip sketchy Slap. Feeble slide mute-air frigid air launch ramp backside. Blunt berm hurricane layback handplant hard flip. Rocket air Blue Tile Lounge alley oop ollie no comply crail slide pump. 

?>