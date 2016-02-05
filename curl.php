<?php

//Face plant full pipe Streets on Fire wheels ollie. Indy grab 360 bigspin tailslide. Durometer rip grip egg plant skate key. Rock and roll Steve Olson bone air steps betty. Coping nose blunt acid drop transfer. G-turn regular footed opposite footed heel flip. Speed wobbles Steve Chumney air backside nose grab. Carve rock and roll gnar bucket risers. Rad Kris Markovich method air roll-in varial. Frigid air nose bump crail slide soul skate. 

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

//Face plant full pipe Streets on Fire wheels ollie. Indy grab 360 bigspin tailslide. Durometer rip grip egg plant skate key. Rock and roll Steve Olson bone air steps betty. Coping nose blunt acid drop transfer. G-turn regular footed opposite footed heel flip. Speed wobbles Steve Chumney air backside nose grab. Carve rock and roll gnar bucket risers. Rad Kris Markovich method air roll-in varial. Frigid air nose bump crail slide soul skate. 

?>