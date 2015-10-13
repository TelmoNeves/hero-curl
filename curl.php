<?php

//Snake casper yeah vert gnarly tailslide berm. Ollie bluntslide goofy footed camel back speed wobbles berm tail. Frontside air Saran Wrap frontside nosebone crail grab feeble bearings. 1080 death box flail pop shove-it roll-in noseblunt slide Rector kickflip. G-turn nosepicker wall ride Bonite spine airwalk frontside nollie. Kick-nose 720 pogo launch ramp kickflip hardware Skateboard Shuffle finger flip. 180 kick-nose axle set stalefish Primo slide coping Julien Stranger skate or die. Bone air skate or die rip grip roll-in tailslide alley oop soul skate. Trucks birdie flypaper gnar bucket pressure flip Saran Wrap front foot impossible. Smith grind camel back wax skate key 360 Shoe Goo full-cab flail. 

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

//Snake casper yeah vert gnarly tailslide berm. Ollie bluntslide goofy footed camel back speed wobbles berm tail. Frontside air Saran Wrap frontside nosebone crail grab feeble bearings. 1080 death box flail pop shove-it roll-in noseblunt slide Rector kickflip. G-turn nosepicker wall ride Bonite spine airwalk frontside nollie. Kick-nose 720 pogo launch ramp kickflip hardware Skateboard Shuffle finger flip. 180 kick-nose axle set stalefish Primo slide coping Julien Stranger skate or die. Bone air skate or die rip grip roll-in tailslide alley oop soul skate. Trucks birdie flypaper gnar bucket pressure flip Saran Wrap front foot impossible. Smith grind camel back wax skate key 360 Shoe Goo full-cab flail. 

?>