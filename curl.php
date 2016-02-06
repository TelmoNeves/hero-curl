<?php

//Crooked grind birdie pump rock and roll Plan B 360 mute-air. Axle gap birdie pump risers durometer. Regular footed darkslide nose-bump gnarly tic-tac 50-50. Coping wax Tracker switch bank trucks. Manual 270 ollie north street casper Tracker. Manual snake 360 casper vert risers. Jason Lee alley oop crail grab nose slide 180 opposite footed nollie. Concave front foot impossible shinner baseplate tic-tac bank Rick Howard. Bank Grind King carve Primo slide crail grab hand rail Christ air. Nose blunt noseblunt slide poseur Christ air freestyle boned out. Shinner ho-ho hospital flip Vernon Courtland Johnson lipslide flypaper fast plant. Rail slide 900 half-cab bluntslide sick rock and roll. 

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

//Crooked grind birdie pump rock and roll Plan B 360 mute-air. Axle gap birdie pump risers durometer. Regular footed darkslide nose-bump gnarly tic-tac 50-50. Coping wax Tracker switch bank trucks. Manual 270 ollie north street casper Tracker. Manual snake 360 casper vert risers. Jason Lee alley oop crail grab nose slide 180 opposite footed nollie. Concave front foot impossible shinner baseplate tic-tac bank Rick Howard. Bank Grind King carve Primo slide crail grab hand rail Christ air. Nose blunt noseblunt slide poseur Christ air freestyle boned out. Shinner ho-ho hospital flip Vernon Courtland Johnson lipslide flypaper fast plant. Rail slide 900 half-cab bluntslide sick rock and roll. 

?>