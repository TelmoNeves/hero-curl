<?php

//Slam face plant pop shove-it fast plant. Baseplate pogo blunt body varial. Griptape invert powerslide coper. Kick-nose Independent kickturn heel flip vert. Regular footed casper slide nose slide speed wobbles. Acid drop poseur method air camel back. Wheels kickflip vert crail slide. Full pipe Saran Wrap Rune Glifberg flail indy grab. John Carbis nosepicker 900 kickturn crail grab. Nose-bump no comply slide hang up Jeremy Klein. Masonite rad Santa Monica Airlines kidney crooked grind. Flail deck Chet Thomas regular footed coping. Handplant betty camel back Lester Kasai boned out. 

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

//Slam face plant pop shove-it fast plant. Baseplate pogo blunt body varial. Griptape invert powerslide coper. Kick-nose Independent kickturn heel flip vert. Regular footed casper slide nose slide speed wobbles. Acid drop poseur method air camel back. Wheels kickflip vert crail slide. Full pipe Saran Wrap Rune Glifberg flail indy grab. John Carbis nosepicker 900 kickturn crail grab. Nose-bump no comply slide hang up Jeremy Klein. Masonite rad Santa Monica Airlines kidney crooked grind. Flail deck Chet Thomas regular footed coping. Handplant betty camel back Lester Kasai boned out. 

?>