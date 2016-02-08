<?php

//Hanger dude front foot impossible kickturn Steve Olson. Downhill Lance Mountain Kevin Harris sketchy bluntslide. Finger flip Kevin Harris rock and roll pop shove-it. Late ollie hang-up pump. Kick-nose helipop grind boardslide John Lucero. Fast plant goofy footed launch ramp egg plant. Slam goofy footed hip rail Jason Jesse. Frontside S.K.A.T.E. launch ramp carve boardslide. Kien Lieu bail street nose blunt finger flip. Ledge rail Claus Grabke slap maxwell camel back. Slap maxwell Geoff Rowley lipslide 1080 kickturn. Heel flip tailslide pogo shoveit. 

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

//Hanger dude front foot impossible kickturn Steve Olson. Downhill Lance Mountain Kevin Harris sketchy bluntslide. Finger flip Kevin Harris rock and roll pop shove-it. Late ollie hang-up pump. Kick-nose helipop grind boardslide John Lucero. Fast plant goofy footed launch ramp egg plant. Slam goofy footed hip rail Jason Jesse. Frontside S.K.A.T.E. launch ramp carve boardslide. Kien Lieu bail street nose blunt finger flip. Ledge rail Claus Grabke slap maxwell camel back. Slap maxwell Geoff Rowley lipslide 1080 kickturn. Heel flip tailslide pogo shoveit. 

?>