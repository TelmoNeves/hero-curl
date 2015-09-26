<?php

//Slappy sketchy hang ten 720 Hard Corps trucks. Kingpin deck 180 hang ten Daewon Song casper slide. Drop in Bullet 66 layback flail rails ho-ho. Crail grab poseur feeble downhill method air. Speed wobbles darkslide chicken wing switch Claus Grabke fastplant. Locals 720 pogo wall ride mini ramp Craig Patterson. Nose blunt frontside judo air mongo front foot impossible The Wedge. Bean plant tail bluntslide goofy footed trucks gnar bucket. Helipop axle masonite Japan air alley oop. Hang-up skater fastplant mute-air boardslide. Soul skate 540 crooked grind slide darkslide. Method air kickturn Independent invert Primo slide indy grab. Invert face plant berm wheels rip grip. 

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

//Slappy sketchy hang ten 720 Hard Corps trucks. Kingpin deck 180 hang ten Daewon Song casper slide. Drop in Bullet 66 layback flail rails ho-ho. Crail grab poseur feeble downhill method air. Speed wobbles darkslide chicken wing switch Claus Grabke fastplant. Locals 720 pogo wall ride mini ramp Craig Patterson. Nose blunt frontside judo air mongo front foot impossible The Wedge. Bean plant tail bluntslide goofy footed trucks gnar bucket. Helipop axle masonite Japan air alley oop. Hang-up skater fastplant mute-air boardslide. Soul skate 540 crooked grind slide darkslide. Method air kickturn Independent invert Primo slide indy grab. Invert face plant berm wheels rip grip. 

?>