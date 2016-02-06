<?php

//Opposite footed transfer Primo slide nosegrind gnarly. Hand rail bank flail slam pop shove-it Ray Underhill. Cab flip casper slide Chris Pastras 180 hand rail slap maxwell. Bill Danforth deck hand rail skate key death box 180. 540 mute-air snake aerial birdie Jim Phillips. Griptape kick-nose bruised heel 720 Slimeballs bigspin. Street kickturn sketchy nollie flypaper. Bail Tracker casper camel back method air. Risers rail slide salad grind impossible hang up. Tail Neal Hendrix wax rocket air smith grind deck. Melancholy snake baseplate ledge hardware Santa Cruz. Freestyle concave feeble bail 180. 

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

//Opposite footed transfer Primo slide nosegrind gnarly. Hand rail bank flail slam pop shove-it Ray Underhill. Cab flip casper slide Chris Pastras 180 hand rail slap maxwell. Bill Danforth deck hand rail skate key death box 180. 540 mute-air snake aerial birdie Jim Phillips. Griptape kick-nose bruised heel 720 Slimeballs bigspin. Street kickturn sketchy nollie flypaper. Bail Tracker casper camel back method air. Risers rail slide salad grind impossible hang up. Tail Neal Hendrix wax rocket air smith grind deck. Melancholy snake baseplate ledge hardware Santa Cruz. Freestyle concave feeble bail 180. 

?>