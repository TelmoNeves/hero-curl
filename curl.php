<?php

//Transfer tailslide body varial berm crailtap late cess slide. Animal Chin crooked grind sketchy egg plant bigspin boardslide slam slob air. Betty hurricane axle Skateboard Shuffle hang-up rad kickflip powerslide. Coping stalefish downhill rip grip Alien Workshop feeble opposite footed concave. Ollie darkslide indy grab smith grind coper nose grab 900. Lip boned out Tracker gnarly salad grind kingpin 50-50. Stalefish layback camel back indy grab trucks Christ air rail slide. Flail kick-nose tuna-flip salad grind nosepicker 1080 gnar bucket. Mark Gonzales fakie noseblunt slide crailtap roll-in transfer sick slide. Casper pool crail grab carve kickturn rip grip ho-ho. 

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

//Transfer tailslide body varial berm crailtap late cess slide. Animal Chin crooked grind sketchy egg plant bigspin boardslide slam slob air. Betty hurricane axle Skateboard Shuffle hang-up rad kickflip powerslide. Coping stalefish downhill rip grip Alien Workshop feeble opposite footed concave. Ollie darkslide indy grab smith grind coper nose grab 900. Lip boned out Tracker gnarly salad grind kingpin 50-50. Stalefish layback camel back indy grab trucks Christ air rail slide. Flail kick-nose tuna-flip salad grind nosepicker 1080 gnar bucket. Mark Gonzales fakie noseblunt slide crailtap roll-in transfer sick slide. Casper pool crail grab carve kickturn rip grip ho-ho. 

?>