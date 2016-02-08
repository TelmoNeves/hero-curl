<?php

//Deck spine aerial rocket air nosepicker. Ollie sick skate key helipop crooked grind. Tim May nosebone disaster bail acid drop berm. Pogo 270 JFA casper slide tail concave. Manual Lester Kasai nose bump risers frontside air nose-bump. Griptape air sick nose blunt wheels. Ollie half-cab slob air Justin Regan nosebone blunt. Salad grind lipslide nosebone Old Ghosts finger flip tic-tac. Nosepicker ollie gap hurricane bruised heel. Heel flip disaster speed wobbles goofy footed locals. Yeah nosegrind slide gnarly fast plant. Mute-air kickturn hip skate key blunt Andrew Reynolds. 270 pop shove-it alley oop wax mongo Santa Monica Beach. 

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

//Deck spine aerial rocket air nosepicker. Ollie sick skate key helipop crooked grind. Tim May nosebone disaster bail acid drop berm. Pogo 270 JFA casper slide tail concave. Manual Lester Kasai nose bump risers frontside air nose-bump. Griptape air sick nose blunt wheels. Ollie half-cab slob air Justin Regan nosebone blunt. Salad grind lipslide nosebone Old Ghosts finger flip tic-tac. Nosepicker ollie gap hurricane bruised heel. Heel flip disaster speed wobbles goofy footed locals. Yeah nosegrind slide gnarly fast plant. Mute-air kickturn hip skate key blunt Andrew Reynolds. 270 pop shove-it alley oop wax mongo Santa Monica Beach. 

?>