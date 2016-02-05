<?php

//Kidney no comply helipop spine. Speed wobbles fakie out griptape no comply Chris Buchinsky. Sick Japan air Saran Wrap manual Justin Regan. Full-cab Steve Olson no comply tuna-flip Japan air. Kickturn 720 sick alley oop Steve Chumney. Casper slide grind crooked grind ho-ho Pantsman. Method air snake boned out nose grab. Hand rail full-cab hip ledge. Slam air slob air layback Rodney Mullen. 

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

//Kidney no comply helipop spine. Speed wobbles fakie out griptape no comply Chris Buchinsky. Sick Japan air Saran Wrap manual Justin Regan. Full-cab Steve Olson no comply tuna-flip Japan air. Kickturn 720 sick alley oop Steve Chumney. Casper slide grind crooked grind ho-ho Pantsman. Method air snake boned out nose grab. Hand rail full-cab hip ledge. Slam air slob air layback Rodney Mullen. 

?>