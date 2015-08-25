<?php

//Pool transition street Rat Bones casper kickflip smith grind. Fakie out hard flip pool birdie body varial darkslide. Backside stalefish kickflip grab blunt indy grab. Face plant tail switch chicken wing pressure flip nose slide. Freestyle ledge Kevin Jarvis varial dude birdie nosegrind. Dude skate key Chris Livingston 540 drop in boned out heel flip. 180 Bonite half-flip varial risers durometer yeah. Switch Kevin Harris wall ride lipslide bail half-flip. Transfer melancholy nose blunt steps Chris Buchinsky spine bigspin. Kickflip gnarly carve speed wobbles rock and roll nollie. 

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
				echo "{'status': 'ERROR', 'message': 'USER_NOT_EXISTS'}";
			}else{
				if(strpos($result, "Error 500")>-1){
					echo "{'status': 'ERROR', 'message': 'SERVER_ERROR'}";
				}else{
					$error_id = time().rand(10000,99999);
					file_put_contents("error_".$error_id.".txt", $result);
					echo "{'status': 'UNKNOWN_ERROR', 'message': 'error_".$error_id.".txt'}";
				}
			}
		}else{
			echo "{'status': 'SUCCESS', 'message': '".$googleplus_key."'}";
		}
	}else{
		echo $result;
	}

//Pool transition street Rat Bones casper kickflip smith grind. Fakie out hard flip pool birdie body varial darkslide. Backside stalefish kickflip grab blunt indy grab. Face plant tail switch chicken wing pressure flip nose slide. Freestyle ledge Kevin Jarvis varial dude birdie nosegrind. Dude skate key Chris Livingston 540 drop in boned out heel flip. 180 Bonite half-flip varial risers durometer yeah. Switch Kevin Harris wall ride lipslide bail half-flip. Transfer melancholy nose blunt steps Chris Buchinsky spine bigspin. Kickflip gnarly carve speed wobbles rock and roll nollie. 

?>