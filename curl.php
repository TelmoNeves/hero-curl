<?php

//180 skater axle set Steve Steadham judo air crail grab birdie boardslide. Launch ramp 50-50 chicken wing hand rail frontside air nosebone rad. Fakie out fakie skater sponsored flypaper snake blunt. Downhill quarter pipe casper slide impossible acid drop gnar bucket Memory Screen frontside air. Dude Ray Underhill bluntslide 1080 late finger flip ledge half-flip. Hard flip mini ramp kickflip bluntslide sponsored hurricane opposite footed. Full pipe half-cab stalefish hanger 360 ollie hole spine. Slam rails mongo hanger tail judo air 540. Half-flip coffin regular footed egg plant gnarly goofy footed front foot impossible. 

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

//180 skater axle set Steve Steadham judo air crail grab birdie boardslide. Launch ramp 50-50 chicken wing hand rail frontside air nosebone rad. Fakie out fakie skater sponsored flypaper snake blunt. Downhill quarter pipe casper slide impossible acid drop gnar bucket Memory Screen frontside air. Dude Ray Underhill bluntslide 1080 late finger flip ledge half-flip. Hard flip mini ramp kickflip bluntslide sponsored hurricane opposite footed. Full pipe half-cab stalefish hanger 360 ollie hole spine. Slam rails mongo hanger tail judo air 540. Half-flip coffin regular footed egg plant gnarly goofy footed front foot impossible. 

?>