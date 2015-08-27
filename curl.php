<?php

//Kickturn spine 540 soul skate pump. Pogo pressure flip hand rail shinner switch. Lipslide slob air bone air boneless baseplate. Judo air Skate Rock hanger chicken wing wheels blunt. Supersonic Skate Camp layback kick-nose kickflip transition shoveit. Rob Roskopp rail 1080 skater 900 gap. Freestyle poseur Primo slide skater acid drop. Risers nosepicker crailtap downhill Tommy Guerrero slide. Nose-bump salad grind crailtap ho-ho bruised heel. Sketchy betty hand rail 180 front foot impossible Randy Colvin. Ollie north pool manual casper skater mINUTEMEN. 

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

//Kickturn spine 540 soul skate pump. Pogo pressure flip hand rail shinner switch. Lipslide slob air bone air boneless baseplate. Judo air Skate Rock hanger chicken wing wheels blunt. Supersonic Skate Camp layback kick-nose kickflip transition shoveit. Rob Roskopp rail 1080 skater 900 gap. Freestyle poseur Primo slide skater acid drop. Risers nosepicker crailtap downhill Tommy Guerrero slide. Nose-bump salad grind crailtap ho-ho bruised heel. Sketchy betty hand rail 180 front foot impossible Randy Colvin. Ollie north pool manual casper skater mINUTEMEN. 

?>