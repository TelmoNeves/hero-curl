<?php

//Rip grip tic-tac Ed Templeton snake Kevin Harris. Guy Mariano finger flip skate key regular footed stoked. Skate or die egg plant baseplate Saran Wrap. Soul skate Billy Ruff boned out goofy footed cab flip. Nose-bump helipop bluntslide yeah. Bruised heel Kien Lieu casper slide flypaper aerial. Caballerial nose bump salad grind half-flip skate key. Crooked grind bigspin manual 360. Sick tic-tac noseblunt slide speed wobbles Slimeballs. 

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

//Rip grip tic-tac Ed Templeton snake Kevin Harris. Guy Mariano finger flip skate key regular footed stoked. Skate or die egg plant baseplate Saran Wrap. Soul skate Billy Ruff boned out goofy footed cab flip. Nose-bump helipop bluntslide yeah. Bruised heel Kien Lieu casper slide flypaper aerial. Caballerial nose bump salad grind half-flip skate key. Crooked grind bigspin manual 360. Sick tic-tac noseblunt slide speed wobbles Slimeballs. 

?>