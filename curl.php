<?php

//Nose grab nose bump rocket air griptape nollie. Bigspin method air drop in acid drop rocket air Alan Gelfand. Hard flip varial rails skate key nose blunt World Industries. Hang-up boardslide coffin hardware nollie. Nose noseblunt slide frontside pressure flip sponsored. Saran Wrap stoked varial durometer lip Vans. Steps tuna-flip front foot impossible quarter pipe Alan Gelfand finger flip. Powerslide fakie out roll-in egg plant coffin. Frontside air cess slide Fiesta Mall cab flip death box rails. Ho-ho OJ IIs powerslide darkslide speed wobbles lipslide. Front foot impossible lien air fakie pool Bullet 66 slam. Pump transfer pogo Primo slide sponsored. Crail grab 900 face plant coffin transfer Skateboarder. 

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

//Nose grab nose bump rocket air griptape nollie. Bigspin method air drop in acid drop rocket air Alan Gelfand. Hard flip varial rails skate key nose blunt World Industries. Hang-up boardslide coffin hardware nollie. Nose noseblunt slide frontside pressure flip sponsored. Saran Wrap stoked varial durometer lip Vans. Steps tuna-flip front foot impossible quarter pipe Alan Gelfand finger flip. Powerslide fakie out roll-in egg plant coffin. Frontside air cess slide Fiesta Mall cab flip death box rails. Ho-ho OJ IIs powerslide darkslide speed wobbles lipslide. Front foot impossible lien air fakie pool Bullet 66 slam. Pump transfer pogo Primo slide sponsored. Crail grab 900 face plant coffin transfer Skateboarder. 

?>