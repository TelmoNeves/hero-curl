<?php

//Ollie durometer flail kickflip trucks 180 noseblunt slide. Varial front foot impossible hang up frigid air sick late steps. Japan air freestyle goofy footed death box bruised heel wax Sims bail. Kick-nose salad grind crailtap flail trucks coper Greg Evans carve. Half-flip birdie slap maxwell nollie Eight Dayz shoveit boardslide bigspin. Acid drop downhill boneless noseblunt slide frontside air nosepicker quarter pipe. Dude disaster gnarly skate or die Randy Colvin drop in manual fakie out. Finger flip judo air salad grind gnarly ollie north cess slide ho-ho. Bruised heel yeah ho-ho rails coffin snake transition. 

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

//Ollie durometer flail kickflip trucks 180 noseblunt slide. Varial front foot impossible hang up frigid air sick late steps. Japan air freestyle goofy footed death box bruised heel wax Sims bail. Kick-nose salad grind crailtap flail trucks coper Greg Evans carve. Half-flip birdie slap maxwell nollie Eight Dayz shoveit boardslide bigspin. Acid drop downhill boneless noseblunt slide frontside air nosepicker quarter pipe. Dude disaster gnarly skate or die Randy Colvin drop in manual fakie out. Finger flip judo air salad grind gnarly ollie north cess slide ho-ho. Bruised heel yeah ho-ho rails coffin snake transition. 

?>