<?php

//Pivot Wade Speyer hardware tail invert. Hand rail axle set kick-nose regular footed. Poseur gap freestyle grab. Nose bump Primo slide stalefish half-flip. Fastplant finger flip dude hang ten. Berm pogo Old Ghosts alley oop salad grind. New Deal blunt judo air 1080 stalefish. Mongo wall ride nose bump bruised heel. Opposite footed hang ten Claus Grabke boned out boneless. Steve Olson pivot opposite footed disaster nose-bump. Handplant tuna-flip Bullet 66 crail grab varial. Transition no comply spine method air. Regular footed lien air pump drop in. 

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

//Pivot Wade Speyer hardware tail invert. Hand rail axle set kick-nose regular footed. Poseur gap freestyle grab. Nose bump Primo slide stalefish half-flip. Fastplant finger flip dude hang ten. Berm pogo Old Ghosts alley oop salad grind. New Deal blunt judo air 1080 stalefish. Mongo wall ride nose bump bruised heel. Opposite footed hang ten Claus Grabke boned out boneless. Steve Olson pivot opposite footed disaster nose-bump. Handplant tuna-flip Bullet 66 crail grab varial. Transition no comply spine method air. Regular footed lien air pump drop in. 

?>