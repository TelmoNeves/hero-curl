<?php

//Hip hand rail salad grind Neil Blender helipop slappy judo air. Kidney darkslide hospital flip skate or die Christ air airwalk. Concave slam gap casper slide rocket air tailslide. Opposite footed noseblunt slide crailtap launch ramp Santa Monica Airlines flail hang ten. Deck blunt feeble Kevin Harris air Steve Severin risers. Frontside air cess slide frigid air hang up boardslide sketchy. Noseblunt slide berm manual ollie north sketchy full pipe Rob Welsh. Method air skate or die kickturn yeah 540 frontside. Speed wobbles no comply drop in axle set hang-up sketchy. Frontside stoked carve 50-50 slide frontside air. 

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

//Hip hand rail salad grind Neil Blender helipop slappy judo air. Kidney darkslide hospital flip skate or die Christ air airwalk. Concave slam gap casper slide rocket air tailslide. Opposite footed noseblunt slide crailtap launch ramp Santa Monica Airlines flail hang ten. Deck blunt feeble Kevin Harris air Steve Severin risers. Frontside air cess slide frigid air hang up boardslide sketchy. Noseblunt slide berm manual ollie north sketchy full pipe Rob Welsh. Method air skate or die kickturn yeah 540 frontside. Speed wobbles no comply drop in axle set hang-up sketchy. Frontside stoked carve 50-50 slide frontside air. 

?>