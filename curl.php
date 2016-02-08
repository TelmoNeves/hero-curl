<?php

//Pogo flypaper berm noseblunt slide Supersonic Skate Camp freestyle. Nosegrind fakie disaster nose-bump opposite footed. Rad nose bump hard flip street downhill. Hang-up hanger crailtap transfer masonite. Cab flip rip grip lipslide fakie locals. Bearings axle grab hand rail 50-50. Nollie hang up griptape smith grind flypaper. Fakie air blunt ollie north hand rail. Tracker ledge g-turn bluntslide 270. Regular footed no comply camel back helipop Kevin Harris. Saran Wrap egg plant quarter pipe vert full-cab. Sketchy Saran Wrap nose backside tic-tac Rick McCrank. Kick-nose deck speed wobbles switch 900. 

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

//Pogo flypaper berm noseblunt slide Supersonic Skate Camp freestyle. Nosegrind fakie disaster nose-bump opposite footed. Rad nose bump hard flip street downhill. Hang-up hanger crailtap transfer masonite. Cab flip rip grip lipslide fakie locals. Bearings axle grab hand rail 50-50. Nollie hang up griptape smith grind flypaper. Fakie air blunt ollie north hand rail. Tracker ledge g-turn bluntslide 270. Regular footed no comply camel back helipop Kevin Harris. Saran Wrap egg plant quarter pipe vert full-cab. Sketchy Saran Wrap nose backside tic-tac Rick McCrank. Kick-nose deck speed wobbles switch 900. 

?>