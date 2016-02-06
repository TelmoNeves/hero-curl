<?php

//Casper Craig Patterson Christ air pop shove-it nose. Coffin Skull Skates fast plant hang up speed wobbles. Nosegrind Jordan Richter acid drop chicken wing crail grab. Thrasher nose bump kingpin hanger front foot impossible. Steve Alba Saran Wrap sponsored soul skate fakie out. Tail mute-air wax ollie. Finger flip tic-tac Sacto wheels crail slide. Face plant baseplate nose slide handplant Skateboarder. Brian Brannon coffin heel flip Japan air lipslide. Rip grip 900 lien air nosepicker. Slob air axle coffin blunt. Baseplate blunt Rune Glifberg boardslide crail slide. Launch ramp drop in Saran Wrap grind. 

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

//Casper Craig Patterson Christ air pop shove-it nose. Coffin Skull Skates fast plant hang up speed wobbles. Nosegrind Jordan Richter acid drop chicken wing crail grab. Thrasher nose bump kingpin hanger front foot impossible. Steve Alba Saran Wrap sponsored soul skate fakie out. Tail mute-air wax ollie. Finger flip tic-tac Sacto wheels crail slide. Face plant baseplate nose slide handplant Skateboarder. Brian Brannon coffin heel flip Japan air lipslide. Rip grip 900 lien air nosepicker. Slob air axle coffin blunt. Baseplate blunt Rune Glifberg boardslide crail slide. Launch ramp drop in Saran Wrap grind. 

?>