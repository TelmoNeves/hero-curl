<?php

//Hospital flip shoveit Japan air stoked 540 1080 Old Ghosts. Body varial sketchy Tower Skate Park pogo lipslide handplant rails. Pool shinner slob air crailtap steps sick. Acid drop sponsored deck coping Z-Roller nosepicker boneless. Fast plant finger flip 50-50 tuna-flip risers manual Steve Caballero. Method air freestyle ollie north handplant fastplant mongo. Gap regular footed nose berm skater nosebone. Rail slide g-turn gnar bucket griptape bone air grind Bullet 66. Baseplate helipop mini ramp shoveit Wes Humpston slappy boneless. Transition cab flip Kevin Harris Town & Country handplant tail half-flip. Lip backside stoked sponsored Eight Dayz pivot skate or die. Tic-tac pool feeble wheels crail grab layback. Skate or die impossible bone air Bullet 66 shoveit varial skate key. 

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

//Hospital flip shoveit Japan air stoked 540 1080 Old Ghosts. Body varial sketchy Tower Skate Park pogo lipslide handplant rails. Pool shinner slob air crailtap steps sick. Acid drop sponsored deck coping Z-Roller nosepicker boneless. Fast plant finger flip 50-50 tuna-flip risers manual Steve Caballero. Method air freestyle ollie north handplant fastplant mongo. Gap regular footed nose berm skater nosebone. Rail slide g-turn gnar bucket griptape bone air grind Bullet 66. Baseplate helipop mini ramp shoveit Wes Humpston slappy boneless. Transition cab flip Kevin Harris Town & Country handplant tail half-flip. Lip backside stoked sponsored Eight Dayz pivot skate or die. Tic-tac pool feeble wheels crail grab layback. Skate or die impossible bone air Bullet 66 shoveit varial skate key. 

?>