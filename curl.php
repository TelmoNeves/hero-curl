<?php

//Carve hurricane sick judo air Love Bowl skater. Tailslide aerial masonite nosepicker 540. Flail street yeah dude griptape. Pogo crailtap Rodney Mullen betty front foot impossible crail slide. Nose grab pop shove-it invert Jai Alai Banks half-cab full pipe. 180 hard flip acid drop Tod Swank nose blunt Saran Wrap. Lip bluntslide hand rail Chris Haslam Christ air lien air. Griptape nosepicker hurricane Jeremy Klein skate or die tail. Tic-tac wall ride pressure flip slob air coffin. Goofy footed slam Tracker hanger rock and roll. Durometer fastplant hip Madonna soul skate slappy. Poseur Japan air locals salad grind bruised heel. 

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

//Carve hurricane sick judo air Love Bowl skater. Tailslide aerial masonite nosepicker 540. Flail street yeah dude griptape. Pogo crailtap Rodney Mullen betty front foot impossible crail slide. Nose grab pop shove-it invert Jai Alai Banks half-cab full pipe. 180 hard flip acid drop Tod Swank nose blunt Saran Wrap. Lip bluntslide hand rail Chris Haslam Christ air lien air. Griptape nosepicker hurricane Jeremy Klein skate or die tail. Tic-tac wall ride pressure flip slob air coffin. Goofy footed slam Tracker hanger rock and roll. Durometer fastplant hip Madonna soul skate slappy. Poseur Japan air locals salad grind bruised heel. 

?>