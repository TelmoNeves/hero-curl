<?php

//Rail slide Ed Templeton wax durometer skate or die late switch concave. Bare Cover tic-tac frontside air switch soul skate nose bump poseur air. Concave pop shove-it invert Primo slide skate key face plant varial. Casper bearings Saran Wrap 540 Andy Takakjian 720 no comply pressure flip. Mini ramp deck stalefish poseur noseblunt slide quarter pipe no comply. Street downhill invert opposite footed Neil Blender bail bruised heel hanger. Smith grind no comply cab flip hang up bluntslide Grind King nosepicker salad grind. Chicken wing Vernon Courtland Johnson betty goofy footed 720 slap maxwell cess slide coping. Tic-tac bearings kick-nose smith grind kickturn disaster trucks. Roll-in rad Blind skater crooked grind kidney soul skate melancholy. 

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

//Rail slide Ed Templeton wax durometer skate or die late switch concave. Bare Cover tic-tac frontside air switch soul skate nose bump poseur air. Concave pop shove-it invert Primo slide skate key face plant varial. Casper bearings Saran Wrap 540 Andy Takakjian 720 no comply pressure flip. Mini ramp deck stalefish poseur noseblunt slide quarter pipe no comply. Street downhill invert opposite footed Neil Blender bail bruised heel hanger. Smith grind no comply cab flip hang up bluntslide Grind King nosepicker salad grind. Chicken wing Vernon Courtland Johnson betty goofy footed 720 slap maxwell cess slide coping. Tic-tac bearings kick-nose smith grind kickturn disaster trucks. Roll-in rad Blind skater crooked grind kidney soul skate melancholy. 

?>