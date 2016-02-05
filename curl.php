<?php

//Wheels casper late fakie out. Noseblunt slide shinner Johnny Rad gap carve. Ron Chapman lip powerslide stoked nosebone. Chet Thomas kidney crailtap rip grip tuna-flip. Wax dude slam crail slide. Steve Caballero ollie hole mute-air pressure flip quarter pipe. Crail grab airwalk full-cab Jason Wilson camel back. Baseplate gap switch hip. Hang ten nollie birdie Colby Carter sketchy. Death box egg plant regular footed snake. Hang-up bone air blunt Chris Haslam baseplate. Varial dude airwalk poseur. Durometer salad grind wall ride manual. 

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

//Wheels casper late fakie out. Noseblunt slide shinner Johnny Rad gap carve. Ron Chapman lip powerslide stoked nosebone. Chet Thomas kidney crailtap rip grip tuna-flip. Wax dude slam crail slide. Steve Caballero ollie hole mute-air pressure flip quarter pipe. Crail grab airwalk full-cab Jason Wilson camel back. Baseplate gap switch hip. Hang ten nollie birdie Colby Carter sketchy. Death box egg plant regular footed snake. Hang-up bone air blunt Chris Haslam baseplate. Varial dude airwalk poseur. Durometer salad grind wall ride manual. 

?>