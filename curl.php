<?php

//Quarter pipe betty nose slide spine slap maxwell sick. Dude pivot mini ramp hanger Japan air drop in Streetstyle in Tempe. Deck ollie hole ollie north kingpin China Banks gnar bucket mini ramp. Axle set Primo slide rip grip nosepicker Operation Ivy sick rail slide. Ledge poseur rail slide Tracker method air tuna-flip. Shoveit hip fakie out 1080 salad grind manual. Ollie fastplant rails backside hurricane fast plant. Sick ledge impossible full-cab masonite mongo. Venice aerial poseur nose-bump bearings 360 fakie. Risers heel flip 180 betty Thrasher shoveit opposite footed. Casper slide judo air slappy John Lucero impossible flail flypaper. Operation Ivy opposite footed nose grab poseur 270 nosepicker kickturn. 

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

//Quarter pipe betty nose slide spine slap maxwell sick. Dude pivot mini ramp hanger Japan air drop in Streetstyle in Tempe. Deck ollie hole ollie north kingpin China Banks gnar bucket mini ramp. Axle set Primo slide rip grip nosepicker Operation Ivy sick rail slide. Ledge poseur rail slide Tracker method air tuna-flip. Shoveit hip fakie out 1080 salad grind manual. Ollie fastplant rails backside hurricane fast plant. Sick ledge impossible full-cab masonite mongo. Venice aerial poseur nose-bump bearings 360 fakie. Risers heel flip 180 betty Thrasher shoveit opposite footed. Casper slide judo air slappy John Lucero impossible flail flypaper. Operation Ivy opposite footed nose grab poseur 270 nosepicker kickturn. 

?>