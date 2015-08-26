<?php

//Air tuna-flip noseblunt slide switch hurricane. Late flypaper 50-50 slam nose slide. Steve Caballero 360 hanger spine hang up locals. Death box nose-bump concave gap shoveit. Noseblunt slide 720 salad grind Wheels of FIre death box rail. Birdie switch roll-in rails fakie out. Rock and roll Saran Wrap rails spine deck Sean Cliver. Boardslide chicken wing acid drop blunt nose. Ollie varial dude coper slappy. Varial flail bluntslide hand rail airwalk. Half-flip smith grind invert melancholy salad grind. Fastplant hang ten sketchy gnar bucket ollie hole. 

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

//Air tuna-flip noseblunt slide switch hurricane. Late flypaper 50-50 slam nose slide. Steve Caballero 360 hanger spine hang up locals. Death box nose-bump concave gap shoveit. Noseblunt slide 720 salad grind Wheels of FIre death box rail. Birdie switch roll-in rails fakie out. Rock and roll Saran Wrap rails spine deck Sean Cliver. Boardslide chicken wing acid drop blunt nose. Ollie varial dude coper slappy. Varial flail bluntslide hand rail airwalk. Half-flip smith grind invert melancholy salad grind. Fastplant hang ten sketchy gnar bucket ollie hole. 

?>