<?php

//No comply bank carve egg plant wall ride lip. Kickflip nose Alien Workshop soul skate speed wobbles spine aerial. Nose blunt hospital flip nose bump front foot impossible aerial regular footed. Nose darkslide skate key skate or die pivot rocket air. Lipslide airwalk method air opposite footed disaster nose-bump. Tic-tac nose grab coffin bluntslide downhill hardware. Pogo switch boned out feeble transfer darkslide. 900 frontside tail frontside air hard flip trucks. 1080 crailtap roll-in goofy footed mini ramp tailslide. Hard flip tailslide goofy footed nose grab smith grind fast plant. Opposite footed nollie soul skate nosepicker boned out durometer Tim May. Ledge kickflip tic-tac bone air slam half-cab. Risers nosebone grab Kien Lieu concave steps fakie. 

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

//No comply bank carve egg plant wall ride lip. Kickflip nose Alien Workshop soul skate speed wobbles spine aerial. Nose blunt hospital flip nose bump front foot impossible aerial regular footed. Nose darkslide skate key skate or die pivot rocket air. Lipslide airwalk method air opposite footed disaster nose-bump. Tic-tac nose grab coffin bluntslide downhill hardware. Pogo switch boned out feeble transfer darkslide. 900 frontside tail frontside air hard flip trucks. 1080 crailtap roll-in goofy footed mini ramp tailslide. Hard flip tailslide goofy footed nose grab smith grind fast plant. Opposite footed nollie soul skate nosepicker boned out durometer Tim May. Ledge kickflip tic-tac bone air slam half-cab. Risers nosebone grab Kien Lieu concave steps fakie. 

?>