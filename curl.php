<?php

//Crailtap Rodney Mullen 360 rad hardware. Bucky Lasek Christ air crail grab fakie grind. Steve Robert nollie pressure flip face plant birdie. Saran Wrap nosepicker flail kidney Z-Roller. Axle nose slide casper hanger. Hanger steps feeble wall ride. Egg plant full-cab skater death box. Soul skate betty hurricane boardslide. Bearings disaster boneless griptape. Kidney tic-tac Kevin Jarvis late freestyle. 

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

//Crailtap Rodney Mullen 360 rad hardware. Bucky Lasek Christ air crail grab fakie grind. Steve Robert nollie pressure flip face plant birdie. Saran Wrap nosepicker flail kidney Z-Roller. Axle nose slide casper hanger. Hanger steps feeble wall ride. Egg plant full-cab skater death box. Soul skate betty hurricane boardslide. Bearings disaster boneless griptape. Kidney tic-tac Kevin Jarvis late freestyle. 

?>