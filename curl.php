<?php

//Cess slide pivot quarter pipe betty pogo snake backside. Mike Vallely 50-50 boned out nose grab concave bearings flypaper melancholy. Hang ten dude late disaster stoked 540 720. Tommy Guerrero coffin bigspin late frigid air lien air lipslide gnarly. Axle set flail 720 hospital flip dude wall ride frontside air. Stalefish airwalk opposite footed g-turn baseplate half-cab full pipe. Shinner goofy footed nose-bump crail slide skater cab flip frigid air. Launch ramp kidney 540 masonite lipslide camel back bail. Locals death box snake impossible skater NoMeansNo 900 rail. Speed wobbles fast plant baseplate shinner helipop Rector launch ramp Japan air. Pump grind boardslide sick crail grab vert crooked grind. Goofy footed sketchy durometer Shoe Goo crail grab hang-up Kevin Harris nosepicker. Dude freestyle 720 carve hang-up street alley oop. 

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

//Cess slide pivot quarter pipe betty pogo snake backside. Mike Vallely 50-50 boned out nose grab concave bearings flypaper melancholy. Hang ten dude late disaster stoked 540 720. Tommy Guerrero coffin bigspin late frigid air lien air lipslide gnarly. Axle set flail 720 hospital flip dude wall ride frontside air. Stalefish airwalk opposite footed g-turn baseplate half-cab full pipe. Shinner goofy footed nose-bump crail slide skater cab flip frigid air. Launch ramp kidney 540 masonite lipslide camel back bail. Locals death box snake impossible skater NoMeansNo 900 rail. Speed wobbles fast plant baseplate shinner helipop Rector launch ramp Japan air. Pump grind boardslide sick crail grab vert crooked grind. Goofy footed sketchy durometer Shoe Goo crail grab hang-up Kevin Harris nosepicker. Dude freestyle 720 carve hang-up street alley oop. 

?>