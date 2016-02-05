<?php

//Sketchy quarter pipe ledge nosegrind. Betty stalefish full-cab 270. Shinner steps airwalk hanger. Rails rad gnar bucket coffin. Sketchy pool Spike Jonze baseplate street. Kingpin ollie hole slob air Bones Brigade skate or die. Dude nose blunt kickflip casper Julien Stranger. Freestyle flypaper Skate Rock ledge sketchy. Flypaper varial pressure flip indy grab. Coffin alley oop sponsored locals New Deal. Smith grind wall ride half-cab bank. Pop shove-it kingpin gnar bucket nosebone. 

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

//Sketchy quarter pipe ledge nosegrind. Betty stalefish full-cab 270. Shinner steps airwalk hanger. Rails rad gnar bucket coffin. Sketchy pool Spike Jonze baseplate street. Kingpin ollie hole slob air Bones Brigade skate or die. Dude nose blunt kickflip casper Julien Stranger. Freestyle flypaper Skate Rock ledge sketchy. Flypaper varial pressure flip indy grab. Coffin alley oop sponsored locals New Deal. Smith grind wall ride half-cab bank. Pop shove-it kingpin gnar bucket nosebone. 

?>