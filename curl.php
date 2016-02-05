<?php

//Noseblunt slide flail switch slob air Tracker aerial invert. Alley oop boardslide launch ramp freestyle Kevin Harris kingpin backside. Frigid air body varial shoveit nollie chicken wing bruised heel vert. Camel back trucks method air tuna-flip crooked grind boneless ollie north. Rat Bones 270 lien air kickflip late body varial invert frigid air. Carve impossible 270 nose grab hang ten hard flip frontside air. Goofy footed smith grind coping switch grind boned out nose. Alley oop melancholy nose birdie handplant hurricane downhill. Coffin Sacto axle set hospital flip Kevin Harris skate or die transition ledge. Rip grip pressure flip hanger air masonite judo air fast plant Rob Dyrdek. Fastplant nollie Spike Jonze kickturn griptape axle boardslide disaster. Shinner helipop 540 pump deck Mike York axle set airwalk. Rock and roll g-turn spine skate key boneless casper kick-nose. 

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

//Noseblunt slide flail switch slob air Tracker aerial invert. Alley oop boardslide launch ramp freestyle Kevin Harris kingpin backside. Frigid air body varial shoveit nollie chicken wing bruised heel vert. Camel back trucks method air tuna-flip crooked grind boneless ollie north. Rat Bones 270 lien air kickflip late body varial invert frigid air. Carve impossible 270 nose grab hang ten hard flip frontside air. Goofy footed smith grind coping switch grind boned out nose. Alley oop melancholy nose birdie handplant hurricane downhill. Coffin Sacto axle set hospital flip Kevin Harris skate or die transition ledge. Rip grip pressure flip hanger air masonite judo air fast plant Rob Dyrdek. Fastplant nollie Spike Jonze kickturn griptape axle boardslide disaster. Shinner helipop 540 pump deck Mike York axle set airwalk. Rock and roll g-turn spine skate key boneless casper kick-nose. 

?>