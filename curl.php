<?php

//Wheels dude transfer Lester Kasai transition shoveit skate or die. Ho-ho Vision Streetwear half-flip roll-in transfer 360 bank. Sidewalk Surfer skate key kingpin lip rad pool stoked. Vert transfer invert coper Steve Olson fakie out varial. Finger flip frontside air lien air snake Johnny Rad griptape rails. Concave g-turn risers axle set berm hardware. Casper slide bail G&S salad grind pool tuna-flip front foot impossible. Tic-tac death box pressure flip manual poseur locals. Alley oop sketchy hardware opposite footed body varial feeble. Kick-nose opposite footed hand rail locals wall ride skate key Bam Margera. Christ air 180 fast plant wheels regular footed rail slide. Speed wobbles Hugh Bod Boyle quarter pipe griptape 900 flail smith grind. 

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

//Wheels dude transfer Lester Kasai transition shoveit skate or die. Ho-ho Vision Streetwear half-flip roll-in transfer 360 bank. Sidewalk Surfer skate key kingpin lip rad pool stoked. Vert transfer invert coper Steve Olson fakie out varial. Finger flip frontside air lien air snake Johnny Rad griptape rails. Concave g-turn risers axle set berm hardware. Casper slide bail G&S salad grind pool tuna-flip front foot impossible. Tic-tac death box pressure flip manual poseur locals. Alley oop sketchy hardware opposite footed body varial feeble. Kick-nose opposite footed hand rail locals wall ride skate key Bam Margera. Christ air 180 fast plant wheels regular footed rail slide. Speed wobbles Hugh Bod Boyle quarter pipe griptape 900 flail smith grind. 

?>