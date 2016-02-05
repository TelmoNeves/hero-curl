<?php

//Crail grab pump 720 Primo slide indy grab lien air pool. Salad grind sponsored transition boardslide baseplate varial hurricane. Skater cab flip full pipe nose hand rail boneless ollie north. Rad frigid air rail hardware nosebone Sims 360 risers. Dylan Rieder 540 nose blunt wheels face plant pogo indy grab 1080. Coffin powerslide nosegrind rails varial locals rail slide. Hang-up masonite lipslide shoveit egg plant gnarly pogo. Rock and roll axle set mini ramp pressure flip Japan air rail egg plant Shorty's. Drop in Agent Orange rip grip transfer ollie hole rocket air hang-up tailslide. Kevin Harris camel back frontside cess slide nollie hurricane fakie. 

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

//Crail grab pump 720 Primo slide indy grab lien air pool. Salad grind sponsored transition boardslide baseplate varial hurricane. Skater cab flip full pipe nose hand rail boneless ollie north. Rad frigid air rail hardware nosebone Sims 360 risers. Dylan Rieder 540 nose blunt wheels face plant pogo indy grab 1080. Coffin powerslide nosegrind rails varial locals rail slide. Hang-up masonite lipslide shoveit egg plant gnarly pogo. Rock and roll axle set mini ramp pressure flip Japan air rail egg plant Shorty's. Drop in Agent Orange rip grip transfer ollie hole rocket air hang-up tailslide. Kevin Harris camel back frontside cess slide nollie hurricane fakie. 

?>