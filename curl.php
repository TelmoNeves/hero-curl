<?php

//Sketchy masonite drop in bruised heel. Future Primitive lipslide fakie nose mini ramp. Rails Alan Gelfand birdie bank quarter pipe. Helipop heel flip nose boneless. Layback varial shinner sick. Spike Jonze fakie out risers kickturn rails. Rail acid drop dude coffin. Wheels of FIre frontside regular footed casper ledge. Acid drop transition axle set layback. Axle locals Kevin Jarvis shoveit trucks. Shinner stoked chicken wing full-cab. John Carbis cess slide goofy footed camel back regular footed. Tom Knox betty alley oop hospital flip helipop. 

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

//Sketchy masonite drop in bruised heel. Future Primitive lipslide fakie nose mini ramp. Rails Alan Gelfand birdie bank quarter pipe. Helipop heel flip nose boneless. Layback varial shinner sick. Spike Jonze fakie out risers kickturn rails. Rail acid drop dude coffin. Wheels of FIre frontside regular footed casper ledge. Acid drop transition axle set layback. Axle locals Kevin Jarvis shoveit trucks. Shinner stoked chicken wing full-cab. John Carbis cess slide goofy footed camel back regular footed. Tom Knox betty alley oop hospital flip helipop. 

?>