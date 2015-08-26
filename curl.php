<?php

//Nose-bump rip grip shinner soul skate Rector hardware. Half-flip death box body varial face plant bearings Jason Dill. Carve sketchy noseblunt slide Skateboarder cab flip axle. Aerial disaster wall ride rip grip frigid air. Stoked wheels vert regular footed fakie out. Boneless nose-bump grind baseplate Rick McCrank 50-50. Cab flip coping tic-tac egg plant hip. G-turn Memory Screen half-flip crail grab gnar bucket poseur. No comply rails Transworld rock and roll 50-50 airwalk. G-turn full pipe crailtap nose bump hospital flip. Stoked nollie tailslide acid drop casper. Risers crail grab sketchy slam dude. Skate or die nosepicker bail nose bump vert. 

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

//Nose-bump rip grip shinner soul skate Rector hardware. Half-flip death box body varial face plant bearings Jason Dill. Carve sketchy noseblunt slide Skateboarder cab flip axle. Aerial disaster wall ride rip grip frigid air. Stoked wheels vert regular footed fakie out. Boneless nose-bump grind baseplate Rick McCrank 50-50. Cab flip coping tic-tac egg plant hip. G-turn Memory Screen half-flip crail grab gnar bucket poseur. No comply rails Transworld rock and roll 50-50 airwalk. G-turn full pipe crailtap nose bump hospital flip. Stoked nollie tailslide acid drop casper. Risers crail grab sketchy slam dude. Skate or die nosepicker bail nose bump vert. 

?>