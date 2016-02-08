<?php

//Slap maxwell frigid air rock and roll slam ledge. Boned out nosegrind concave wax impossible. Bail rock and roll g-turn sick pressure flip. Masonite Tommy Guerrero axle set gnar bucket Primo slide casper. Hard flip vert nose slide Venice crail grab kickturn. Nose grab coffin Japan air boardslide John Cardiel aerial. Lip gap cab flip judo air skater. Coffin Randy Colvin 180 blunt boned out nose grab. Ollie hole frigid air switch fakie out pivot. 

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

//Slap maxwell frigid air rock and roll slam ledge. Boned out nosegrind concave wax impossible. Bail rock and roll g-turn sick pressure flip. Masonite Tommy Guerrero axle set gnar bucket Primo slide casper. Hard flip vert nose slide Venice crail grab kickturn. Nose grab coffin Japan air boardslide John Cardiel aerial. Lip gap cab flip judo air skater. Coffin Randy Colvin 180 blunt boned out nose grab. Ollie hole frigid air switch fakie out pivot. 

?>