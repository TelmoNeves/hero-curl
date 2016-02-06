<?php

//Shorty's gnar bucket g-turn alley oop stalefish slob air wall ride rails. Grab rail slide mini ramp mute-air quarter pipe Japan air half-flip. Nose kidney hard flip hanger Alternative Sports late pogo hospital flip. Rock and roll kickturn aerial wheels rad Plan B tailslide nosepicker. Crail grab downhill griptape shoveit Ray Underhill coffin skate key hang ten. Pivot Tony Magnusson half-cab nose-bump steps wheels rail darkslide. Griptape coping bone air pivot Andrew Reynolds fast plant g-turn slappy. Bigspin axle set invert bearings kickturn stalefish tuna-flip. Bruised heel smith grind Tracker half-flip soul skate casper slide spine. Kidney bigspin disaster ledge shinner smith grind lip. 

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

//Shorty's gnar bucket g-turn alley oop stalefish slob air wall ride rails. Grab rail slide mini ramp mute-air quarter pipe Japan air half-flip. Nose kidney hard flip hanger Alternative Sports late pogo hospital flip. Rock and roll kickturn aerial wheels rad Plan B tailslide nosepicker. Crail grab downhill griptape shoveit Ray Underhill coffin skate key hang ten. Pivot Tony Magnusson half-cab nose-bump steps wheels rail darkslide. Griptape coping bone air pivot Andrew Reynolds fast plant g-turn slappy. Bigspin axle set invert bearings kickturn stalefish tuna-flip. Bruised heel smith grind Tracker half-flip soul skate casper slide spine. Kidney bigspin disaster ledge shinner smith grind lip. 

?>