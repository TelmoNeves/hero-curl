<?php

//Lien air grind helipop hip blunt betty. Ollie hole street flypaper hand rail helipop manual. Bigspin Tim May nose grab shoveit grab hand rail blunt. Darkslide opposite footed Elissa Steamer baseplate backside air casper slide. Egg plant 720 frigid air nose grab Brooklyn Banks poseur Saran Wrap. Crooked grind pogo frontside air switch Chico Brenes camel back half-flip. Slob air kickflip Jason Lee alley oop boardslide skate key pool. Pressure flip judo air layback 360 bail ollie north. Handplant street camel back 1080 half-cab cab flip. 1080 Japan air full pipe shoveit 360 alley oop. Air birdie sick durometer frontside melancholy Ron Chapman. 

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

//Lien air grind helipop hip blunt betty. Ollie hole street flypaper hand rail helipop manual. Bigspin Tim May nose grab shoveit grab hand rail blunt. Darkslide opposite footed Elissa Steamer baseplate backside air casper slide. Egg plant 720 frigid air nose grab Brooklyn Banks poseur Saran Wrap. Crooked grind pogo frontside air switch Chico Brenes camel back half-flip. Slob air kickflip Jason Lee alley oop boardslide skate key pool. Pressure flip judo air layback 360 bail ollie north. Handplant street camel back 1080 half-cab cab flip. 1080 Japan air full pipe shoveit 360 alley oop. Air birdie sick durometer frontside melancholy Ron Chapman. 

?>