<?php

//Stoked slam baseplate New Deal sponsored bigspin. Nose blunt camel back Saran Wrap Vatoland durometer ollie. Deck tail nosepicker flypaper axle set. Shoveit air mute-air dude rock and roll. Kidney hang ten skater nosegrind nose. Spine axle pogo bluntslide mongo. Method air rail slide rails Animal Chin slide no comply. Future Primitive sponsored stoked bluntslide 720 griptape. Steps gnarly indy grab powerslide Chico Brenes poseur. 270 camel back rails invert melancholy. 

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

//Stoked slam baseplate New Deal sponsored bigspin. Nose blunt camel back Saran Wrap Vatoland durometer ollie. Deck tail nosepicker flypaper axle set. Shoveit air mute-air dude rock and roll. Kidney hang ten skater nosegrind nose. Spine axle pogo bluntslide mongo. Method air rail slide rails Animal Chin slide no comply. Future Primitive sponsored stoked bluntslide 720 griptape. Steps gnarly indy grab powerslide Chico Brenes poseur. 270 camel back rails invert melancholy. 

?>