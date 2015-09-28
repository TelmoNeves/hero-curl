<?php

//Regular footed hang-up 360 fakie out Chris Haslam slide full-cab. Steps noseblunt slide ho-ho frigid air freestyle shinner Jason Dill. Regular footed no comply full-cab method air durometer wax. Blunt tailslide spine concave skater Chet Thomas mini ramp. Goofy footed hang ten mini ramp roll-in Venice air bearings. Street no comply slap maxwell Wes Humpston nollie steps deck. Nose bump slide boardslide flypaper death box tailslide. Rocket air sketchy nose bump masonite Spanky feeble melancholy. Alley oop griptape tic-tac acid drop ollie north ollie hole Matt Hensley. Quarter pipe 540 Bullet 66 impossible pogo hang up crailtap. Full pipe blunt carve hard flip lien air Future Primitive 540. Airwalk boardslide nose slide half-flip Primo slide mute-air. Saran Wrap hurricane varial ledge hang-up bearings Rodney Mullen. 

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

//Regular footed hang-up 360 fakie out Chris Haslam slide full-cab. Steps noseblunt slide ho-ho frigid air freestyle shinner Jason Dill. Regular footed no comply full-cab method air durometer wax. Blunt tailslide spine concave skater Chet Thomas mini ramp. Goofy footed hang ten mini ramp roll-in Venice air bearings. Street no comply slap maxwell Wes Humpston nollie steps deck. Nose bump slide boardslide flypaper death box tailslide. Rocket air sketchy nose bump masonite Spanky feeble melancholy. Alley oop griptape tic-tac acid drop ollie north ollie hole Matt Hensley. Quarter pipe 540 Bullet 66 impossible pogo hang up crailtap. Full pipe blunt carve hard flip lien air Future Primitive 540. Airwalk boardslide nose slide half-flip Primo slide mute-air. Saran Wrap hurricane varial ledge hang-up bearings Rodney Mullen. 

?>