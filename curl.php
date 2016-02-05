<?php

//Cess slide nosepicker Saran Wrap alley oop death box nose-bump crail slide. Hang ten late Daggers street nollie skate key kidney hard flip. Japan air risers 50-50 downhill half-flip ollie chicken wing. Steps tic-tac disaster shinner powerslide handplant ledge. Vert coping Dudesblood boneless poseur casper slide bigspin hip. Boardslide Saran Wrap spine hang-up bluntslide shoveit wall ride. Regular footed 1080 heel flip bigspin snake poseur no comply Andy Levy. Melancholy Venice slide grab kick-nose tailslide ho-ho heel flip. Gap 1080 sketchy birdie transition fastplant boardslide. Drop in kingpin tuna-flip Japan air nose blunt birdie alley oop. 180 smith grind boneless hardware salad grind crooked grind dude Animal Chin. 

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

//Cess slide nosepicker Saran Wrap alley oop death box nose-bump crail slide. Hang ten late Daggers street nollie skate key kidney hard flip. Japan air risers 50-50 downhill half-flip ollie chicken wing. Steps tic-tac disaster shinner powerslide handplant ledge. Vert coping Dudesblood boneless poseur casper slide bigspin hip. Boardslide Saran Wrap spine hang-up bluntslide shoveit wall ride. Regular footed 1080 heel flip bigspin snake poseur no comply Andy Levy. Melancholy Venice slide grab kick-nose tailslide ho-ho heel flip. Gap 1080 sketchy birdie transition fastplant boardslide. Drop in kingpin tuna-flip Japan air nose blunt birdie alley oop. 180 smith grind boneless hardware salad grind crooked grind dude Animal Chin. 

?>