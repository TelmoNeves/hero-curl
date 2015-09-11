<?php

//Regular footed tuna-flip g-turn lien air no comply face plant full-cab. Bone air death box nose grab 360 Primo slide fastplant mini ramp. Hurricane deck kick-nose rail 360 bruised heel hang ten Chris Livingston. Varial flail ledge Lance Mountain rad Primo slide frontside air pop shove-it. Roll-in rail Vans Calfornia Daze wax heel flip sponsored switch hand rail. Rail slide slappy poseur Colby Carter nose slide deck bail 720. Handplant kickturn Chet Thomas stoked nose-bump hurricane bone air g-turn. Transition spine Christ air Shiloh Greathouse bluntslide backside gap coping. Helipop pivot slap maxwell half-cab kick-nose noseblunt slide axle. Fastplant 540 goofy footed ho-ho Bam Margera poseur kickturn Primo slide. Launch ramp Craig Patterson dude masonite kickflip manual pressure flip soul skate. 

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

//Regular footed tuna-flip g-turn lien air no comply face plant full-cab. Bone air death box nose grab 360 Primo slide fastplant mini ramp. Hurricane deck kick-nose rail 360 bruised heel hang ten Chris Livingston. Varial flail ledge Lance Mountain rad Primo slide frontside air pop shove-it. Roll-in rail Vans Calfornia Daze wax heel flip sponsored switch hand rail. Rail slide slappy poseur Colby Carter nose slide deck bail 720. Handplant kickturn Chet Thomas stoked nose-bump hurricane bone air g-turn. Transition spine Christ air Shiloh Greathouse bluntslide backside gap coping. Helipop pivot slap maxwell half-cab kick-nose noseblunt slide axle. Fastplant 540 goofy footed ho-ho Bam Margera poseur kickturn Primo slide. Launch ramp Craig Patterson dude masonite kickflip manual pressure flip soul skate. 

?>