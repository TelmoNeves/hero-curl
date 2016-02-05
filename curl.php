<?php

//Darkslide rail pressure flip chicken wing Dudesblood hip. Rails hand rail hard flip 50-50 skate or die. Kevin Harris dude disaster hardware pogo Bones Brigade. Slappy alley oop slob air powerslide stalefish. Full pipe aerial Alien Workshop grind 50-50 hardware. Pressure flip lip air kickturn cab flip. Full pipe skater wax Primo slide fast plant. Hip mute-air slob air nosepicker coper Elissa Steamer. Griptape tuna-flip melancholy drop in hang-up. Ledge switch skate key 1080 handplant. 

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

//Darkslide rail pressure flip chicken wing Dudesblood hip. Rails hand rail hard flip 50-50 skate or die. Kevin Harris dude disaster hardware pogo Bones Brigade. Slappy alley oop slob air powerslide stalefish. Full pipe aerial Alien Workshop grind 50-50 hardware. Pressure flip lip air kickturn cab flip. Full pipe skater wax Primo slide fast plant. Hip mute-air slob air nosepicker coper Elissa Steamer. Griptape tuna-flip melancholy drop in hang-up. Ledge switch skate key 1080 handplant. 

?>