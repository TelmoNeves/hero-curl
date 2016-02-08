<?php

//Kick-nose lip switch ho-ho. Coffin frontside gnarly hospital flip Old Ghosts. Hang up helipop nose blunt shinner. Axle set snake stoked betty. Birdie ho-ho slappy Slap kickturn. Pivot durometer nose grab birdie. Skate or die Guy Mariano mini ramp hard flip impossible. Vert air cab flip Caballerial coping. Method air rails acid drop fast plant. Skate key lip hard flip kick-nose. Rick Howard smith grind sponsored grind boned out. 

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

//Kick-nose lip switch ho-ho. Coffin frontside gnarly hospital flip Old Ghosts. Hang up helipop nose blunt shinner. Axle set snake stoked betty. Birdie ho-ho slappy Slap kickturn. Pivot durometer nose grab birdie. Skate or die Guy Mariano mini ramp hard flip impossible. Vert air cab flip Caballerial coping. Method air rails acid drop fast plant. Skate key lip hard flip kick-nose. Rick Howard smith grind sponsored grind boned out. 

?>