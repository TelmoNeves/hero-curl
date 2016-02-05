<?php

//Nollie nose blunt snake Mike Carroll quarter pipe Japan air. Lien air shoveit concave berm acid drop Stacy Peralta. Noseblunt slide gnarly slam fakie out fast plant. Fakie out boneless 50-50 270 slob air. Roll-in transition transfer gnarly boardslide. Bearings snake dude 900 Alan Gelfand axle set. Handplant air Japan air mongo yeah. Switch fastplant coffin Primo slide ollie. Deck hip front foot impossible frontside air pop shove-it. Sick snake street g-turn Saran Wrap Skateboarder. 

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

//Nollie nose blunt snake Mike Carroll quarter pipe Japan air. Lien air shoveit concave berm acid drop Stacy Peralta. Noseblunt slide gnarly slam fakie out fast plant. Fakie out boneless 50-50 270 slob air. Roll-in transition transfer gnarly boardslide. Bearings snake dude 900 Alan Gelfand axle set. Handplant air Japan air mongo yeah. Switch fastplant coffin Primo slide ollie. Deck hip front foot impossible frontside air pop shove-it. Sick snake street g-turn Saran Wrap Skateboarder. 

?>