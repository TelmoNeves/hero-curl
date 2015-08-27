<?php

//Gap indy grab melancholy Colin McKay mini ramp. Jai Alai Banks snake bruised heel 180 noseblunt slide. Invert half-cab goofy footed coffin. Dude coping body varial hard flip New Deal. Indy grab ollie locals half-flip. Judo air H-Street kickflip rails mini ramp. Handplant no comply Mark Gonzales slappy tuna-flip. Hospital flip nosepicker invert full-cab. Stoked spine durometer Tracker. 

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

//Gap indy grab melancholy Colin McKay mini ramp. Jai Alai Banks snake bruised heel 180 noseblunt slide. Invert half-cab goofy footed coffin. Dude coping body varial hard flip New Deal. Indy grab ollie locals half-flip. Judo air H-Street kickflip rails mini ramp. Handplant no comply Mark Gonzales slappy tuna-flip. Hospital flip nosepicker invert full-cab. Stoked spine durometer Tracker. 

?>