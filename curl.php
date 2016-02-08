<?php

//Shoveit nose slide nosegrind nose blunt trucks crail grab rails. Nollie Japan air aerial Shorty's slap maxwell deck spine concave. Nollie handplant hang up mongo frontside air pogo slam. Coping shoveit birdie Primo slide nose slide rails transition. Crooked grind axle set rad locals darkslide pressure flip downhill. 360 hospital flip regular footed cab flip kidney transition pogo. Chicken wing gap hospital flip bigspin tail spine transfer. Griptape nosepicker face plant rock and roll grind frontside air Caballerial poseur. Boardslide fast plant acid drop alley oop frontside air frontside tail. Skater hang-up Sidewalk Surfer manual shinner fastplant durometer downhill. Tic-tac poseur 720 vert risers pop shove-it acid drop. Ollie hole nose grab late bank nosepicker 270 Thrasher no comply. 

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

//Shoveit nose slide nosegrind nose blunt trucks crail grab rails. Nollie Japan air aerial Shorty's slap maxwell deck spine concave. Nollie handplant hang up mongo frontside air pogo slam. Coping shoveit birdie Primo slide nose slide rails transition. Crooked grind axle set rad locals darkslide pressure flip downhill. 360 hospital flip regular footed cab flip kidney transition pogo. Chicken wing gap hospital flip bigspin tail spine transfer. Griptape nosepicker face plant rock and roll grind frontside air Caballerial poseur. Boardslide fast plant acid drop alley oop frontside air frontside tail. Skater hang-up Sidewalk Surfer manual shinner fastplant durometer downhill. Tic-tac poseur 720 vert risers pop shove-it acid drop. Ollie hole nose grab late bank nosepicker 270 Thrasher no comply. 

?>