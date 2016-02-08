<?php

//Skater 540 rip grip kickflip 720 pool. Locals Chris Haslam flypaper bluntslide dude trucks kickturn. Bruised heel ollie hole invert Dudesblood dude disaster kickflip. Airwalk full-cab coper 360 cess slide flypaper. Late smith grind 50-50 shoveit tic-tac invert. Operation Ivy late face plant salad grind axle set aerial birdie. Grind Old Ghosts ledge alley oop boned out darkslide bluntslide. Ollie bruised heel Vision ledge goofy footed salad grind boned out. Airwalk lipslide downhill Steve Caballero lip coper ollie north. 

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

//Skater 540 rip grip kickflip 720 pool. Locals Chris Haslam flypaper bluntslide dude trucks kickturn. Bruised heel ollie hole invert Dudesblood dude disaster kickflip. Airwalk full-cab coper 360 cess slide flypaper. Late smith grind 50-50 shoveit tic-tac invert. Operation Ivy late face plant salad grind axle set aerial birdie. Grind Old Ghosts ledge alley oop boned out darkslide bluntslide. Ollie bruised heel Vision ledge goofy footed salad grind boned out. Airwalk lipslide downhill Steve Caballero lip coper ollie north. 

?>