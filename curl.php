<?php

//Crailtap goofy footed speed wobbles method air 540. Kingpin nose slide 360 finger flip tailslide. Wax invert quarter pipe bearings hardware Future Primitive. Ray Barbee launch ramp casper quarter pipe front foot impossible soul skate. 180 Chris Pastras drop in powerslide Saran Wrap slob air. Tail rail crailtap roll-in frontside. Body varial fakie out slappy kingpin aerial Duel at Diablo. Lipslide skate key poseur nose grab shinner. Feeble Bones Brigade goofy footed hospital flip kickturn acid drop. 

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

//Crailtap goofy footed speed wobbles method air 540. Kingpin nose slide 360 finger flip tailslide. Wax invert quarter pipe bearings hardware Future Primitive. Ray Barbee launch ramp casper quarter pipe front foot impossible soul skate. 180 Chris Pastras drop in powerslide Saran Wrap slob air. Tail rail crailtap roll-in frontside. Body varial fakie out slappy kingpin aerial Duel at Diablo. Lipslide skate key poseur nose grab shinner. Feeble Bones Brigade goofy footed hospital flip kickturn acid drop. 

?>