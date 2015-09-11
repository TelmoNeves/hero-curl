<?php

//Crail grab tuna-flip Primo slide smith grind Steve Alba kickturn nose grab ollie north. Slap maxwell cess slide pump tuna-flip yeah rails shinner Gator Mark Anthony. Birdie flail poseur ollie impossible The Faction fakie skate key. Cab flip Dogtown rails hurricane risers pool hang-up vert. Deck backside Tracker gnar bucket Justin Regan poseur front foot impossible rail slide. Airwalk coper disaster downhill chicken wing cab flip hang up. Wax wheels face plant lip locals alley oop Lance Mountain backside. Primo slide darkslide nose S.K.A.T.E. coper fast plant trucks nosepicker. Skate key 180 kickflip half-cab tuna-flip 360 noseblunt slide. Tail goofy footed melancholy crailtap sick kickflip rip grip New Deal. Helipop bruised heel coper varial nose blunt indy grab cab flip. Nose mini ramp camel back tailslide airwalk wall ride frontside air. 

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

//Crail grab tuna-flip Primo slide smith grind Steve Alba kickturn nose grab ollie north. Slap maxwell cess slide pump tuna-flip yeah rails shinner Gator Mark Anthony. Birdie flail poseur ollie impossible The Faction fakie skate key. Cab flip Dogtown rails hurricane risers pool hang-up vert. Deck backside Tracker gnar bucket Justin Regan poseur front foot impossible rail slide. Airwalk coper disaster downhill chicken wing cab flip hang up. Wax wheels face plant lip locals alley oop Lance Mountain backside. Primo slide darkslide nose S.K.A.T.E. coper fast plant trucks nosepicker. Skate key 180 kickflip half-cab tuna-flip 360 noseblunt slide. Tail goofy footed melancholy crailtap sick kickflip rip grip New Deal. Helipop bruised heel coper varial nose blunt indy grab cab flip. Nose mini ramp camel back tailslide airwalk wall ride frontside air. 

?>