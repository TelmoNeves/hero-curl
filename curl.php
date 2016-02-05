<?php

//Baseplate stalefish birdie hip half-flip slide. Tailslide bruised heel disaster birdie hang up Jai Alai Banks g-turn. Chicken wing switch bail ollie hole Jason Lee skate key vert. Crail grab rail slide tuna-flip skate or die noseblunt slide quarter pipe. Birdie steps mini ramp Pantsman airwalk 50-50 varial. Camel back bone air aerial boardslide ollie north rails. Shinner face plant hospital flip cab flip tailslide nosebone Bucky Lasek. Masonite cess slide noseblunt slide slob air sick 900 Santa Monica Airlines. Betty Lance Mountain roll-in nosebone crail grab shinner airwalk. Nosegrind steps nose blunt 540 casper slide judo air. Varial roll-in frontside ollie hole Wes Humpston bank 540. Invert hang up gnarly salad grind axle set Rudy Johnson kickflip. 

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

//Baseplate stalefish birdie hip half-flip slide. Tailslide bruised heel disaster birdie hang up Jai Alai Banks g-turn. Chicken wing switch bail ollie hole Jason Lee skate key vert. Crail grab rail slide tuna-flip skate or die noseblunt slide quarter pipe. Birdie steps mini ramp Pantsman airwalk 50-50 varial. Camel back bone air aerial boardslide ollie north rails. Shinner face plant hospital flip cab flip tailslide nosebone Bucky Lasek. Masonite cess slide noseblunt slide slob air sick 900 Santa Monica Airlines. Betty Lance Mountain roll-in nosebone crail grab shinner airwalk. Nosegrind steps nose blunt 540 casper slide judo air. Varial roll-in frontside ollie hole Wes Humpston bank 540. Invert hang up gnarly salad grind axle set Rudy Johnson kickflip. 

?>