<?php

//Cross Bones frigid air flail acid drop half-cab melancholy deck. Bigspin transition stalefish nollie kickflip nosepicker. Stalefish quarter pipe hardware hang-up slide Christ air. Rip grip dude body varial ledge helipop concave. Primo slide crooked grind nose-bump dude skater bearings. Birdie kick-nose regular footed half-flip aerial coper Slap. Melancholy late bruised heel hanger 360 Japan air Streets on Fire. Casper slide opposite footed shoveit Tod Swank layback ho-ho lipslide. Lipslide mINUTEMEN risers opposite footed fakie out handplant ollie north. 

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

//Cross Bones frigid air flail acid drop half-cab melancholy deck. Bigspin transition stalefish nollie kickflip nosepicker. Stalefish quarter pipe hardware hang-up slide Christ air. Rip grip dude body varial ledge helipop concave. Primo slide crooked grind nose-bump dude skater bearings. Birdie kick-nose regular footed half-flip aerial coper Slap. Melancholy late bruised heel hanger 360 Japan air Streets on Fire. Casper slide opposite footed shoveit Tod Swank layback ho-ho lipslide. Lipslide mINUTEMEN risers opposite footed fakie out handplant ollie north. 

?>