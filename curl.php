<?php

//Wall ride deck Christ air Z-Roller pool. Tailslide Paul Rodriguez kingpin 180 kidney. Gap boned out coper crooked grind. Kickflip powerslide finger flip coper. Sean Cliver locals lipslide goofy footed nollie. Casper nosebone hanger switch. Rail roll-in method air salad grind bean plant. Launch ramp body varial mongo grab. Blunt varial Donger crooked grind kidney. Nollie blunt cess slide concave. Lien air kickturn rails grab. Z-Roller nose grab hard flip 270 impossible. 

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

//Wall ride deck Christ air Z-Roller pool. Tailslide Paul Rodriguez kingpin 180 kidney. Gap boned out coper crooked grind. Kickflip powerslide finger flip coper. Sean Cliver locals lipslide goofy footed nollie. Casper nosebone hanger switch. Rail roll-in method air salad grind bean plant. Launch ramp body varial mongo grab. Blunt varial Donger crooked grind kidney. Nollie blunt cess slide concave. Lien air kickturn rails grab. Z-Roller nose grab hard flip 270 impossible. 

?>