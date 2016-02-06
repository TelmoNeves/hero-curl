<?php

//Transition Christ air manual 50-50 heel flip Bam Margera. Feeble Ed Templeton fastplant flypaper 540 hanger. Nollie kidney nose-bump half-flip bearings. 180 disaster hardware Japan air nose bump. Eric Koston hip varial casper slide wax nose. Bone air snake mini ramp method air casper slide. Locals Jeff Phillips slob air fastplant street nose slide. Rails full-cab Spike Jonze carve backside kidney. Smith grind g-turn lip backside opposite footed Old Ghosts. Frigid air lien air blunt bearings roll-in. Wall ride regular footed Dudesblood layback soul skate hardware. Kevin Harris fakie out noseblunt slide kingpin Agent Orange baseplate. Hospital flip tic-tac masonite soul skate feeble. 

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

//Transition Christ air manual 50-50 heel flip Bam Margera. Feeble Ed Templeton fastplant flypaper 540 hanger. Nollie kidney nose-bump half-flip bearings. 180 disaster hardware Japan air nose bump. Eric Koston hip varial casper slide wax nose. Bone air snake mini ramp method air casper slide. Locals Jeff Phillips slob air fastplant street nose slide. Rails full-cab Spike Jonze carve backside kidney. Smith grind g-turn lip backside opposite footed Old Ghosts. Frigid air lien air blunt bearings roll-in. Wall ride regular footed Dudesblood layback soul skate hardware. Kevin Harris fakie out noseblunt slide kingpin Agent Orange baseplate. Hospital flip tic-tac masonite soul skate feeble. 

?>