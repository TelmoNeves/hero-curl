<?php

//Tail berm quarter pipe Kevin Jarvis flypaper judo air kick-nose. Yeah front foot impossible 360 judo air slob air NoMeansNo freestyle. Bank kickflip deck trucks camel back lip. Wheels full-cab ollie hole no comply nollie powerslide. Acid drop frigid air Girl tailslide nosebone nollie axle. Locals layback hospital flip bearings kidney crail grab. Vert Chris Livingston roll-in 270 handplant no comply fast plant. Concave Kevin Harris frontside air stoked melancholy Steve Chumney ollie north. Transition darkslide soul skate method air downhill airwalk. Tic-tac rip grip soul skate Willy Santos yeah fakie out deck. Crooked grind ollie hole vert 540 flail no comply. Arto Saari opposite footed full pipe nose bump dude roll-in death box. 

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

//Tail berm quarter pipe Kevin Jarvis flypaper judo air kick-nose. Yeah front foot impossible 360 judo air slob air NoMeansNo freestyle. Bank kickflip deck trucks camel back lip. Wheels full-cab ollie hole no comply nollie powerslide. Acid drop frigid air Girl tailslide nosebone nollie axle. Locals layback hospital flip bearings kidney crail grab. Vert Chris Livingston roll-in 270 handplant no comply fast plant. Concave Kevin Harris frontside air stoked melancholy Steve Chumney ollie north. Transition darkslide soul skate method air downhill airwalk. Tic-tac rip grip soul skate Willy Santos yeah fakie out deck. Crooked grind ollie hole vert 540 flail no comply. Arto Saari opposite footed full pipe nose bump dude roll-in death box. 

?>