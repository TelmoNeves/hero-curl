<?php

//Fast plant rocket air wall ride nose bump flypaper hang up. Downhill pop shove-it goofy footed wall ride switch 360. Skate or die bank no comply g-turn stalefish ledge. Varial slob air griptape bank tuna-flip hurricane. Berm hip tail launch ramp heel flip deck. Air ho-ho nose grab melancholy Streets on Fire sponsored spine. Face plant kickflip fast plant rad camel back Primo slide. Fastplant flypaper downhill lip Saran Wrap casper slide. Wall ride coping hang-up birdie nosepicker ollie. Ledge indy grab 50-50 casper slide hang up impossible. Tic-tac sketchy grind 540 axle set kickflip. 

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

//Fast plant rocket air wall ride nose bump flypaper hang up. Downhill pop shove-it goofy footed wall ride switch 360. Skate or die bank no comply g-turn stalefish ledge. Varial slob air griptape bank tuna-flip hurricane. Berm hip tail launch ramp heel flip deck. Air ho-ho nose grab melancholy Streets on Fire sponsored spine. Face plant kickflip fast plant rad camel back Primo slide. Fastplant flypaper downhill lip Saran Wrap casper slide. Wall ride coping hang-up birdie nosepicker ollie. Ledge indy grab 50-50 casper slide hang up impossible. Tic-tac sketchy grind 540 axle set kickflip. 

?>