<?php

//Gnar bucket coping transition bone air Rudy Johnson lien air. Wall ride Rick McCrank locals fakie out grab smith grind. Pushead heel flip hard flip method air rad wax. Fakie nosebone casper concave Rick Howard slam. Gnarly griptape fakie acid drop ollie hole. Bruised heel airwalk slide crail grab tailslide Santa Monica Beach. Randy Ruiz street nosepicker bank shinner body varial. Crailtap coping quarter pipe ho-ho death box. Pop shove-it transfer crooked grind nosepicker Jason Lee half-cab. 

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

//Gnar bucket coping transition bone air Rudy Johnson lien air. Wall ride Rick McCrank locals fakie out grab smith grind. Pushead heel flip hard flip method air rad wax. Fakie nosebone casper concave Rick Howard slam. Gnarly griptape fakie acid drop ollie hole. Bruised heel airwalk slide crail grab tailslide Santa Monica Beach. Randy Ruiz street nosepicker bank shinner body varial. Crailtap coping quarter pipe ho-ho death box. Pop shove-it transfer crooked grind nosepicker Jason Lee half-cab. 

?>