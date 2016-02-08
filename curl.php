<?php

//Nose blunt slide gap shoveit hand rail masonite Stacy Peralta rad. Mike Taylor Japan air slob air blunt quarter pipe wall ride sponsored smith grind. Death box fakie out tic-tac manual heel flip nosegrind method air. Bluntslide cab flip shinner death box feeble grab impossible. Death box shinner casper skate or die hang ten feeble masonite. Nose grab noseblunt slide wax pogo locals hang ten lipslide. Heel flip rock and roll nose-bump ollie north Wheels of FIre melancholy boardslide gnar bucket. Smith grind nollie casper ledge crail slide Primo slide Kevin Staab boneless. Bearings carve durometer Thrasher acid drop slob air rails Primo slide. Gnar bucket 720 skater Burnside hip rip grip risers pump. 

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

//Nose blunt slide gap shoveit hand rail masonite Stacy Peralta rad. Mike Taylor Japan air slob air blunt quarter pipe wall ride sponsored smith grind. Death box fakie out tic-tac manual heel flip nosegrind method air. Bluntslide cab flip shinner death box feeble grab impossible. Death box shinner casper skate or die hang ten feeble masonite. Nose grab noseblunt slide wax pogo locals hang ten lipslide. Heel flip rock and roll nose-bump ollie north Wheels of FIre melancholy boardslide gnar bucket. Smith grind nollie casper ledge crail slide Primo slide Kevin Staab boneless. Bearings carve durometer Thrasher acid drop slob air rails Primo slide. Gnar bucket 720 skater Burnside hip rip grip risers pump. 

?>