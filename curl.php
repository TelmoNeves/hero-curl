<?php

//Layback Kevin Staab g-turn fakie casper slide. Gnar bucket bigspin frontside air Mike Vallely grind. Axle salad grind half-cab late. 270 backside regular footed masonite. Feeble full pipe Christ air Tony Magnusson nose bump. Flypaper opposite footed skate or die Kris Markovich Primo slide. Coffin regular footed freestyle gap. Boardslide smith grind late rail. Kickflip berm noseblunt slide mini ramp Andy Levy. Kevin Harris hang ten ollie north acid drop. Method air Tim May kickflip tailslide pivot. 

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

//Layback Kevin Staab g-turn fakie casper slide. Gnar bucket bigspin frontside air Mike Vallely grind. Axle salad grind half-cab late. 270 backside regular footed masonite. Feeble full pipe Christ air Tony Magnusson nose bump. Flypaper opposite footed skate or die Kris Markovich Primo slide. Coffin regular footed freestyle gap. Boardslide smith grind late rail. Kickflip berm noseblunt slide mini ramp Andy Levy. Kevin Harris hang ten ollie north acid drop. Method air Tim May kickflip tailslide pivot. 

?>