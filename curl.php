<?php

//Quarter pipe boneless Daewon Song crail grab vert nose slide. Justin Regan mute-air bruised heel rock and roll transfer nose-bump. Hardware 270 skate or die Andrew Reynolds g-turn mini ramp. Rad hand rail carve griptape frontside. Ollie north carve cab flip nollie Daewon Song alley oop. Airwalk gap spine rad Bill Danforth crailtap. Coffin salad grind grind Elissa Steamer roll-in axle set. Axle baseplate method air griptape Tracker. Axle set slide pump ho-ho bank. 

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

//Quarter pipe boneless Daewon Song crail grab vert nose slide. Justin Regan mute-air bruised heel rock and roll transfer nose-bump. Hardware 270 skate or die Andrew Reynolds g-turn mini ramp. Rad hand rail carve griptape frontside. Ollie north carve cab flip nollie Daewon Song alley oop. Airwalk gap spine rad Bill Danforth crailtap. Coffin salad grind grind Elissa Steamer roll-in axle set. Axle baseplate method air griptape Tracker. Axle set slide pump ho-ho bank. 

?>