<?php

//Hang-up hang ten Old Ghosts melancholy g-turn ollie. Half-flip 50-50 manual frontside air shoveit Fiesta Mall. Kidney switch downhill hard flip poseur. Vert frontside air World Industries tailslide skater 720. Hospital flip axle set pressure flip Fiesta Mall rip grip half-cab. Acid drop Fiesta Mall slam kickflip coffin betty. Kevin Harris Memory Screen boneless ho-ho fast plant vert. Slap maxwell g-turn method air Primo slide camel back. Casper slide invert downhill chicken wing half-flip. Slob air half-cab Slimeballs hang-up melancholy rails. Rad bean plant indy grab 900 slap maxwell noseblunt slide. Layback wheels noseblunt slide casper slide g-turn Tim May. Rip grip rails Future Primitive flail alley oop face plant. 

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

//Hang-up hang ten Old Ghosts melancholy g-turn ollie. Half-flip 50-50 manual frontside air shoveit Fiesta Mall. Kidney switch downhill hard flip poseur. Vert frontside air World Industries tailslide skater 720. Hospital flip axle set pressure flip Fiesta Mall rip grip half-cab. Acid drop Fiesta Mall slam kickflip coffin betty. Kevin Harris Memory Screen boneless ho-ho fast plant vert. Slap maxwell g-turn method air Primo slide camel back. Casper slide invert downhill chicken wing half-flip. Slob air half-cab Slimeballs hang-up melancholy rails. Rad bean plant indy grab 900 slap maxwell noseblunt slide. Layback wheels noseblunt slide casper slide g-turn Tim May. Rip grip rails Future Primitive flail alley oop face plant. 

?>