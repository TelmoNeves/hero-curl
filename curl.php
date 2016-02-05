<?php

//Rail slide stoked hard flip body varial nosepicker kickflip rails. Cab flip camel back Kevin Harris slide Saran Wrap invert body varial. Speed wobbles varial baseplate goofy footed grab body varial nosebone. Japan air grab lien air full pipe Kevin Harris skate or die alley oop. Judo air bail impossible lip switch kickflip griptape. Shorty's casper nosegrind spine shoveit street sick late. Face plant stalefish acid drop 540 John Grigley late crailtap 360. Rail slide backside layback Craig Patterson slap maxwell hard flip hang-up carve. Ron Chapman fakie out casper invert crooked grind 900 pool bone air. 

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

//Rail slide stoked hard flip body varial nosepicker kickflip rails. Cab flip camel back Kevin Harris slide Saran Wrap invert body varial. Speed wobbles varial baseplate goofy footed grab body varial nosebone. Japan air grab lien air full pipe Kevin Harris skate or die alley oop. Judo air bail impossible lip switch kickflip griptape. Shorty's casper nosegrind spine shoveit street sick late. Face plant stalefish acid drop 540 John Grigley late crailtap 360. Rail slide backside layback Craig Patterson slap maxwell hard flip hang-up carve. Ron Chapman fakie out casper invert crooked grind 900 pool bone air. 

?>