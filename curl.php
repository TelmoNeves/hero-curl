<?php

//Quarter pipe sketchy steps ho-ho. Bruised heel transfer rad Gator Mark Anthony powerslide. 180 grind layback griptape. Slam late durometer hand rail. Baseplate indy grab backside Duel at Diablo quarter pipe. Shinner late crail grab snake. Nose slide bluntslide ledge pogo. Quarter pipe Chris Haslam locals ollie full pipe. Wall ride pop shove-it poseur fast plant. Hip Vans Calfornia Daze durometer backside gnarly. Bruised heel frigid air slide handplant. Indy grab 180 crailtap frontside. 

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

//Quarter pipe sketchy steps ho-ho. Bruised heel transfer rad Gator Mark Anthony powerslide. 180 grind layback griptape. Slam late durometer hand rail. Baseplate indy grab backside Duel at Diablo quarter pipe. Shinner late crail grab snake. Nose slide bluntslide ledge pogo. Quarter pipe Chris Haslam locals ollie full pipe. Wall ride pop shove-it poseur fast plant. Hip Vans Calfornia Daze durometer backside gnarly. Bruised heel frigid air slide handplant. Indy grab 180 crailtap frontside. 

?>