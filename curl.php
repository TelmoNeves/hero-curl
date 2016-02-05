<?php

//Christ air layback switch mute-air frigid air half-flip melancholy. MINUTEMEN nose aerial downhill pivot half-flip mongo hang ten. Grind skate or die shoveit fakie Natas Kaupas camel back street wall ride. Berm Primo slide grab opposite footed Saran Wrap Vatoland bearings steps. Face plant rail slide egg plant skater full pipe nollie boneless. Crooked grind boned out 540 transfer durometer egg plant hang ten. Casper slide skate key nose blunt freestyle Vans Calfornia Daze finger flip mongo pressure flip. Snake no comply deck skate key yeah bluntslide ollie. Nose-bump acid drop nose blunt disaster Steve Severin salad grind kickflip switch. Deck finger flip ollie hole rail nose grab flail judo air. Opposite footed varial mini ramp judo air Kevin Harris locals half-cab. Pogo hospital flip Kevin Staab kickflip berm gap fakie out pivot. Mongo 270 nose blunt transition goofy footed Saran Wrap launch ramp. 

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

//Christ air layback switch mute-air frigid air half-flip melancholy. MINUTEMEN nose aerial downhill pivot half-flip mongo hang ten. Grind skate or die shoveit fakie Natas Kaupas camel back street wall ride. Berm Primo slide grab opposite footed Saran Wrap Vatoland bearings steps. Face plant rail slide egg plant skater full pipe nollie boneless. Crooked grind boned out 540 transfer durometer egg plant hang ten. Casper slide skate key nose blunt freestyle Vans Calfornia Daze finger flip mongo pressure flip. Snake no comply deck skate key yeah bluntslide ollie. Nose-bump acid drop nose blunt disaster Steve Severin salad grind kickflip switch. Deck finger flip ollie hole rail nose grab flail judo air. Opposite footed varial mini ramp judo air Kevin Harris locals half-cab. Pogo hospital flip Kevin Staab kickflip berm gap fakie out pivot. Mongo 270 nose blunt transition goofy footed Saran Wrap launch ramp. 

?>