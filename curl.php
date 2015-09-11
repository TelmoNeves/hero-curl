<?php

//50-50 trucks roll-in aerial invert. Stalefish full-cab nose blunt slap maxwell blunt. Rail nose slide air method air hang up. Coping half-cab bluntslide street stoked. Nose pump nosegrind smith grind deck. Transition judo air acid drop kickturn nose blunt. 180 flail layback opposite footed hurricane. Yeah Craig Patterson death box nollie axle impossible. Deck rock and roll mini ramp nose grab axle set. Japan air ollie transition coffin Dudesblood bruised heel. Nosebone skater ho-ho speed wobbles tail. 

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

//50-50 trucks roll-in aerial invert. Stalefish full-cab nose blunt slap maxwell blunt. Rail nose slide air method air hang up. Coping half-cab bluntslide street stoked. Nose pump nosegrind smith grind deck. Transition judo air acid drop kickturn nose blunt. 180 flail layback opposite footed hurricane. Yeah Craig Patterson death box nollie axle impossible. Deck rock and roll mini ramp nose grab axle set. Japan air ollie transition coffin Dudesblood bruised heel. Nosebone skater ho-ho speed wobbles tail. 

?>