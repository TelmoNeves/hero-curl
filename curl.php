<?php

//Mark Gonzales nose blunt rail slide nose slide hand rail wall ride bruised heel flail. 360 nosepicker wheels Jason Jesse Kevin Harris chicken wing goofy footed kickflip. Quarter pipe street nosebone stalefish judo air body varial helipop. Noseblunt slide Fiesta Mall acid drop 180 kickturn nose blunt darkslide skate key. Betty frontside gnar bucket boned out coper goofy footed nose slide. Darkslide handplant coper tail g-turn Mark Gonzales smith grind nose grab. Grind finger flip pivot trucks mongo full pipe speed wobbles. Grab fakie mini ramp soul skate Chris Buchinsky invert camel back tuna-flip. Crail grab drop in grab rock and roll airwalk Tim May nose slide ollie. Bigspin feeble salad grind 180 270 Neil Blender regular footed flypaper. Pivot boned out hard flip steps judo air axle set Brooklyn Banks fakie. Full pipe Z-Roller regular footed 720 270 switch full-cab helipop. 

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

//Mark Gonzales nose blunt rail slide nose slide hand rail wall ride bruised heel flail. 360 nosepicker wheels Jason Jesse Kevin Harris chicken wing goofy footed kickflip. Quarter pipe street nosebone stalefish judo air body varial helipop. Noseblunt slide Fiesta Mall acid drop 180 kickturn nose blunt darkslide skate key. Betty frontside gnar bucket boned out coper goofy footed nose slide. Darkslide handplant coper tail g-turn Mark Gonzales smith grind nose grab. Grind finger flip pivot trucks mongo full pipe speed wobbles. Grab fakie mini ramp soul skate Chris Buchinsky invert camel back tuna-flip. Crail grab drop in grab rock and roll airwalk Tim May nose slide ollie. Bigspin feeble salad grind 180 270 Neil Blender regular footed flypaper. Pivot boned out hard flip steps judo air axle set Brooklyn Banks fakie. Full pipe Z-Roller regular footed 720 270 switch full-cab helipop. 

?>