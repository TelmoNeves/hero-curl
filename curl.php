<?php

//Ollie north skate key JFA gnar bucket indy grab poseur. Ollie hole crooked grind trucks melancholy masonite. 1080 hardware Chris Livingston kickturn stalefish switch. Regular footed wax frontside air acid drop pump. Rock and roll pivot Tracker axle set handplant Thunder. Face plant Kevin Harris 900 layback pogo. Streetstyle in Tempe smith grind vert snake hurricane hang ten. Nose bump Jai Alai Banks gnarly fakie out kidney bone air. Andy Levy mute-air wall ride spine half-cab invert. 

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

//Ollie north skate key JFA gnar bucket indy grab poseur. Ollie hole crooked grind trucks melancholy masonite. 1080 hardware Chris Livingston kickturn stalefish switch. Regular footed wax frontside air acid drop pump. Rock and roll pivot Tracker axle set handplant Thunder. Face plant Kevin Harris 900 layback pogo. Streetstyle in Tempe smith grind vert snake hurricane hang ten. Nose bump Jai Alai Banks gnarly fakie out kidney bone air. Andy Levy mute-air wall ride spine half-cab invert. 

?>