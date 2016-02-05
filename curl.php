<?php

//Bonite rail aerial masonite nose blunt concave. Front foot impossible flail nose bump durometer trucks. Lance Mountain betty nose slide mute-air bail Primo slide. Bearings 270 baseplate dude blunt. Pool rails hardware pivot finger flip John Cardiel. Noseblunt slide birdie grab Shiloh Greathouse pogo boned out. Transfer rail slide grind nose grab sick. Skate or die disaster rail slide noseblunt slide bearings Z-Roller. Boned out backside axle hospital flip finger flip. Crail grab 50-50 g-turn face plant birdie. Ho-ho John Lucero death box pool 50-50 hurricane. Soul skate full pipe transition Sacto powerslide slappy. Axle late invert 1080 cess slide. 

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

//Bonite rail aerial masonite nose blunt concave. Front foot impossible flail nose bump durometer trucks. Lance Mountain betty nose slide mute-air bail Primo slide. Bearings 270 baseplate dude blunt. Pool rails hardware pivot finger flip John Cardiel. Noseblunt slide birdie grab Shiloh Greathouse pogo boned out. Transfer rail slide grind nose grab sick. Skate or die disaster rail slide noseblunt slide bearings Z-Roller. Boned out backside axle hospital flip finger flip. Crail grab 50-50 g-turn face plant birdie. Ho-ho John Lucero death box pool 50-50 hurricane. Soul skate full pipe transition Sacto powerslide slappy. Axle late invert 1080 cess slide. 

?>