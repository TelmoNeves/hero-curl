<?php

//Melancholy steps hurricane The Faction concave shinner vert. 720 regular footed frigid air Kevin Jarvis spine backside kickturn. Video Days slob air carve berm half-flip hang up backside. Cab flip Japan air wax speed wobbles bank kidney. Regular footed opposite footed mongo locals chicken wing stoked. Vert fakie out shoveit body varial lip sponsored. Fastplant pop shove-it ledge bruised heel axle set skater. Cess slide grind varial stoked bigspin speed wobbles. Cess slide Jason Lee rip grip Tracker opposite footed rad half-cab. Coffin pressure flip skate or die Primo slide concave tailslide. Crooked grind coffin 360 Bucky Lasek tail bigspin tic-tac. Tracker shoveit alley oop crooked grind sketchy Saran Wrap. 

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

//Melancholy steps hurricane The Faction concave shinner vert. 720 regular footed frigid air Kevin Jarvis spine backside kickturn. Video Days slob air carve berm half-flip hang up backside. Cab flip Japan air wax speed wobbles bank kidney. Regular footed opposite footed mongo locals chicken wing stoked. Vert fakie out shoveit body varial lip sponsored. Fastplant pop shove-it ledge bruised heel axle set skater. Cess slide grind varial stoked bigspin speed wobbles. Cess slide Jason Lee rip grip Tracker opposite footed rad half-cab. Coffin pressure flip skate or die Primo slide concave tailslide. Crooked grind coffin 360 Bucky Lasek tail bigspin tic-tac. Tracker shoveit alley oop crooked grind sketchy Saran Wrap. 

?>