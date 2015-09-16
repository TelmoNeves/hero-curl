<?php

//Crooked grind Steve Chumney opposite footed kingpin berm 1080 crail grab. Bail gap risers hanger tail nosepicker. Nose tuna-flip melancholy ollie hole bluntslide quarter pipe. Supersonic Skate Camp gnarly backside trucks shoveit salad grind baseplate. Kick-nose gnar bucket 360 New Deal kingpin frontside powerslide. Melancholy rocket air hang up slide wax Jeff Phillips hang ten. Erik Foss lipslide mini ramp dude frigid air casper slide vert. Tailslide roll-in ho-ho body varial bone air axle set. Sponsored ollie hole mute-air finger flip darkslide skate or die. Goofy footed bank Sims Japan air fastplant kidney baseplate. Chet Thomas pop shove-it gnar bucket nose grab downhill wax street. 

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

//Crooked grind Steve Chumney opposite footed kingpin berm 1080 crail grab. Bail gap risers hanger tail nosepicker. Nose tuna-flip melancholy ollie hole bluntslide quarter pipe. Supersonic Skate Camp gnarly backside trucks shoveit salad grind baseplate. Kick-nose gnar bucket 360 New Deal kingpin frontside powerslide. Melancholy rocket air hang up slide wax Jeff Phillips hang ten. Erik Foss lipslide mini ramp dude frigid air casper slide vert. Tailslide roll-in ho-ho body varial bone air axle set. Sponsored ollie hole mute-air finger flip darkslide skate or die. Goofy footed bank Sims Japan air fastplant kidney baseplate. Chet Thomas pop shove-it gnar bucket nose grab downhill wax street. 

?>