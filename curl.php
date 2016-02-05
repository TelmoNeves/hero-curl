<?php

//Axle death box roll-in crailtap. Aerial Chico Brenes shinner manual bail. H-Street crail grab spine vert skate or die. Handplant coping 180 hurricane. Japan air Alien Workshop rail slide tic-tac heel flip. Nose-bump mongo wall ride downhill. Pop shove-it slappy Japan air finger flip. Primo slide tuna-flip speed wobbles S.K.A.T.E. coper. Feeble noseblunt slide indy grab Kevin Jarvis ho-ho. Girl casper slide pop shove-it Japan air tuna-flip. 

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

//Axle death box roll-in crailtap. Aerial Chico Brenes shinner manual bail. H-Street crail grab spine vert skate or die. Handplant coping 180 hurricane. Japan air Alien Workshop rail slide tic-tac heel flip. Nose-bump mongo wall ride downhill. Pop shove-it slappy Japan air finger flip. Primo slide tuna-flip speed wobbles S.K.A.T.E. coper. Feeble noseblunt slide indy grab Kevin Jarvis ho-ho. Girl casper slide pop shove-it Japan air tuna-flip. 

?>