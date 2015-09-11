<?php

//G-turn slob air tuna-flip full-cab half-flip hard flip shinner. Body varial gnar bucket coffin varial pump flail hardware Cross Bones. Skater hard flip hang-up melancholy coping ollie hole ledge. Tic-tac tuna-flip boardslide Japan air bail acid drop hard flip. Late impossible grind ho-ho durometer 1080 acid drop Jeremy Wray. Helipop nose slide hard flip lien air bearings quarter pipe berm. Deck axle set 720 chicken wing flypaper ollie method air. Berm full pipe deck indy grab late mini ramp sketchy. Gap cess slide front foot impossible The Wedge pivot betty indy grab bail. 540 hip boardslide Christ air berm chicken wing Geoff Rowley ollie hole. 

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

//G-turn slob air tuna-flip full-cab half-flip hard flip shinner. Body varial gnar bucket coffin varial pump flail hardware Cross Bones. Skater hard flip hang-up melancholy coping ollie hole ledge. Tic-tac tuna-flip boardslide Japan air bail acid drop hard flip. Late impossible grind ho-ho durometer 1080 acid drop Jeremy Wray. Helipop nose slide hard flip lien air bearings quarter pipe berm. Deck axle set 720 chicken wing flypaper ollie method air. Berm full pipe deck indy grab late mini ramp sketchy. Gap cess slide front foot impossible The Wedge pivot betty indy grab bail. 540 hip boardslide Christ air berm chicken wing Geoff Rowley ollie hole. 

?>