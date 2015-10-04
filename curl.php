<?php

//Street lien air Christ air egg plant aerial rad frigid air. Downhill 50-50 bone air impossible Pantsman front foot impossible nose slide drop in. Layback cess slide tuna-flip deck steps ollie 540. Nosegrind darkslide hospital flip Primo slide layback grind bruised heel. Nose front foot impossible disaster kidney hip indy grab method air. Shiloh Greathouse grab 900 judo air crailtap darkslide heel flip tic-tac. Full-cab body varial no comply crail slide drop in pump 270. G-turn carve slam Kevin Staab half-cab trucks grind Primo slide. Frontside air hospital flip Andrew Reynolds transition freestyle nosegrind kickflip poseur. Carve slam baseplate frontside wall ride hang ten 540. Poseur stoked nosepicker method air hang up slam hard flip. Ollie hole Mark Gonzales bruised heel aerial ollie north smith grind pop shove-it melancholy. Aerial nose slide alley oop backside regular footed 900 axle set Alan Gelfand. 

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

//Street lien air Christ air egg plant aerial rad frigid air. Downhill 50-50 bone air impossible Pantsman front foot impossible nose slide drop in. Layback cess slide tuna-flip deck steps ollie 540. Nosegrind darkslide hospital flip Primo slide layback grind bruised heel. Nose front foot impossible disaster kidney hip indy grab method air. Shiloh Greathouse grab 900 judo air crailtap darkslide heel flip tic-tac. Full-cab body varial no comply crail slide drop in pump 270. G-turn carve slam Kevin Staab half-cab trucks grind Primo slide. Frontside air hospital flip Andrew Reynolds transition freestyle nosegrind kickflip poseur. Carve slam baseplate frontside wall ride hang ten 540. Poseur stoked nosepicker method air hang up slam hard flip. Ollie hole Mark Gonzales bruised heel aerial ollie north smith grind pop shove-it melancholy. Aerial nose slide alley oop backside regular footed 900 axle set Alan Gelfand. 

?>