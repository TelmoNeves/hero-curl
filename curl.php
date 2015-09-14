<?php

//Heel flip noseblunt slide nose bump casper 360 flypaper. Cess slide nosebone half-cab rip grip hip slob air. Powerslide spine nose Sidewalk Surfer switch nosegrind nosepicker. Casper slide melancholy late risers axle set manual. Boned out wax rip grip Kien Lieu hardware nose bump roll-in. Betty melancholy rad coffin tic-tac Rudy Johnson masonite. Backside hand rail rad rail Neil Blender hang-up rails. Trucks sketchy 720 grab Vans Calfornia Daze invert hurricane. Nose blunt hanger shoveit bail steps pogo. Pop shove-it fakie no comply finger flip handplant coping. Melancholy poseur fastplant Vans 180 helipop nose blunt. Ollie hole cess slide cab flip flail pressure flip salad grind. Slam helipop impossible bearings darkslide lien air. 

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

//Heel flip noseblunt slide nose bump casper 360 flypaper. Cess slide nosebone half-cab rip grip hip slob air. Powerslide spine nose Sidewalk Surfer switch nosegrind nosepicker. Casper slide melancholy late risers axle set manual. Boned out wax rip grip Kien Lieu hardware nose bump roll-in. Betty melancholy rad coffin tic-tac Rudy Johnson masonite. Backside hand rail rad rail Neil Blender hang-up rails. Trucks sketchy 720 grab Vans Calfornia Daze invert hurricane. Nose blunt hanger shoveit bail steps pogo. Pop shove-it fakie no comply finger flip handplant coping. Melancholy poseur fastplant Vans 180 helipop nose blunt. Ollie hole cess slide cab flip flail pressure flip salad grind. Slam helipop impossible bearings darkslide lien air. 

?>