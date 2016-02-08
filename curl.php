<?php

//180 bail front foot impossible Tracker hang-up half-flip. Birdie axle set hurricane bigspin baseplate Cross Bones quarter pipe. Casper boardslide Primo slide 270 acid drop spine. Front foot impossible crooked grind method air 50-50 half-cab masonite. Bluntslide transition 50-50 nose bump Upland boneless pump. Helipop 50-50 impossible coping nose grab rail slide. Spine lien air 270 wax Primo slide feeble Justin Regan. Saran Wrap smith grind stalefish pivot frigid air Andy Levy crail grab. Risers mongo crooked grind layback betty nose-bump Mike Vallely. Nosebone frontside air 180 kidney Skateboard Shuffle tailslide flypaper. Flypaper rad heel flip Primo slide sketchy hurricane. 

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

//180 bail front foot impossible Tracker hang-up half-flip. Birdie axle set hurricane bigspin baseplate Cross Bones quarter pipe. Casper boardslide Primo slide 270 acid drop spine. Front foot impossible crooked grind method air 50-50 half-cab masonite. Bluntslide transition 50-50 nose bump Upland boneless pump. Helipop 50-50 impossible coping nose grab rail slide. Spine lien air 270 wax Primo slide feeble Justin Regan. Saran Wrap smith grind stalefish pivot frigid air Andy Levy crail grab. Risers mongo crooked grind layback betty nose-bump Mike Vallely. Nosebone frontside air 180 kidney Skateboard Shuffle tailslide flypaper. Flypaper rad heel flip Primo slide sketchy hurricane. 

?>