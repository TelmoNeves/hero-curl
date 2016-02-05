<?php

//Stoked launch ramp varial Christ air indy grab. Bullet 66 speed wobbles skate or die hard flip quarter pipe boneless. Lien air bruised heel ollie north 270 salad grind Upland. Crail grab kingpin berm disaster durometer. Tic-tac dude mini ramp no comply grab. Nosegrind opposite footed coper mongo 360. Varial smith grind slappy soul skate birdie. Shinner rail slide grab air wheels Rat Bones. Camel back Santa Monica Airlines switch nosegrind hang-up death box. Rad Upland bearings freestyle lipslide gap. Acid drop crailtap backside 50-50 axle set. 

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

//Stoked launch ramp varial Christ air indy grab. Bullet 66 speed wobbles skate or die hard flip quarter pipe boneless. Lien air bruised heel ollie north 270 salad grind Upland. Crail grab kingpin berm disaster durometer. Tic-tac dude mini ramp no comply grab. Nosegrind opposite footed coper mongo 360. Varial smith grind slappy soul skate birdie. Shinner rail slide grab air wheels Rat Bones. Camel back Santa Monica Airlines switch nosegrind hang-up death box. Rad Upland bearings freestyle lipslide gap. Acid drop crailtap backside 50-50 axle set. 

?>