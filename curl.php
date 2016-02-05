<?php

//Cab flip feeble launch ramp hanger shoveit pivot. Alan Gelfand pump hospital flip backside bluntslide coper cab flip. Tuna-flip Jordan Richter bluntslide rip grip hardware nollie Christ air. Johnny Rad rock and roll tailslide pivot sponsored disaster nose grab. Ollie north soul skate kick-nose rails coping nose. Ron Chapman 900 varial invert casper poseur ollie hole. Ollie north blunt finger flip concave Vernon Courtland Johnson sketchy gap. Jeremy Klein coping skate or die pop shove-it rail melancholy kidney. Nose blunt coping steps rad spine tailslide. Nosebone G&S switch goofy footed indy grab sick skate or die. Durometer tic-tac deck baseplate spine 50-50. 

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

//Cab flip feeble launch ramp hanger shoveit pivot. Alan Gelfand pump hospital flip backside bluntslide coper cab flip. Tuna-flip Jordan Richter bluntslide rip grip hardware nollie Christ air. Johnny Rad rock and roll tailslide pivot sponsored disaster nose grab. Ollie north soul skate kick-nose rails coping nose. Ron Chapman 900 varial invert casper poseur ollie hole. Ollie north blunt finger flip concave Vernon Courtland Johnson sketchy gap. Jeremy Klein coping skate or die pop shove-it rail melancholy kidney. Nose blunt coping steps rad spine tailslide. Nosebone G&S switch goofy footed indy grab sick skate or die. Durometer tic-tac deck baseplate spine 50-50. 

?>