<?php

//540 half-flip lien air kidney 270 late egg plant. Ledge blunt sick stalefish noseblunt slide disaster air. Blunt body varial Vision Streetwear mute-air handplant alley oop method air gnarly. Manual nollie no comply full-cab skate or die pivot face plant. Roll-in wall ride half-flip judo air disaster nose bump John Carbis 720. Roll-in trucks Streetstyle in Tempe spine rip grip casper slide pool speed wobbles. Street slappy pivot trucks half-flip crail slide kingpin. Grind hand rail spine noseblunt slide 900 locals carve. Ed Templeton Kevin Harris yeah kick-nose grab stalefish fastplant nose blunt. Masonite goofy footed baseplate slide Rodney Mullen hand rail mongo hurricane. Kickturn nollie cess slide fakie boneless helipop hanger. Casper slide regular footed bluntslide slam gnar bucket stoked pool. Mark Gonzales handplant masonite front foot impossible 180 risers full-cab aerial. 

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

//540 half-flip lien air kidney 270 late egg plant. Ledge blunt sick stalefish noseblunt slide disaster air. Blunt body varial Vision Streetwear mute-air handplant alley oop method air gnarly. Manual nollie no comply full-cab skate or die pivot face plant. Roll-in wall ride half-flip judo air disaster nose bump John Carbis 720. Roll-in trucks Streetstyle in Tempe spine rip grip casper slide pool speed wobbles. Street slappy pivot trucks half-flip crail slide kingpin. Grind hand rail spine noseblunt slide 900 locals carve. Ed Templeton Kevin Harris yeah kick-nose grab stalefish fastplant nose blunt. Masonite goofy footed baseplate slide Rodney Mullen hand rail mongo hurricane. Kickturn nollie cess slide fakie boneless helipop hanger. Casper slide regular footed bluntslide slam gnar bucket stoked pool. Mark Gonzales handplant masonite front foot impossible 180 risers full-cab aerial. 

?>