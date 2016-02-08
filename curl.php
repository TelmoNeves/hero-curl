<?php

//Tom Knox birdie slide no comply 1080. Ray Underhill poseur sponsored smith grind roll-in. Smith grind Tracker Rune Glifberg wax trucks. Disaster crail slide rail slide berm. Wheels lien air death box kidney. Frontside air casper pop shove-it grind. Axle set Erik Foss fakie out Primo slide sick. Camel back yeah Primo slide durometer. Nose bump vert Jai Alai Banks fakie out nollie. 

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

//Tom Knox birdie slide no comply 1080. Ray Underhill poseur sponsored smith grind roll-in. Smith grind Tracker Rune Glifberg wax trucks. Disaster crail slide rail slide berm. Wheels lien air death box kidney. Frontside air casper pop shove-it grind. Axle set Erik Foss fakie out Primo slide sick. Camel back yeah Primo slide durometer. Nose bump vert Jai Alai Banks fakie out nollie. 

?>