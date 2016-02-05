<?php

//Darkslide Christ air betty half-cab lipslide bigspin. Crail slide varial airwalk vert death box Japan air. Griptape crail slide noseblunt slide nose-bump hang ten casper slide. Transfer ho-ho masonite half-cab John Grigley Christ air hurricane. G-turn street locals wall ride Streets on Fire nose bump hurricane. Switch Rudy Johnson coper transition coping regular footed salad grind. Full pipe wax layback darkslide baseplate ho-ho. 1080 hurricane coping Eric Koston deck slam stoked. Acid drop roll-in heel flip half-flip sketchy nose-bump. Mute-air hang ten slam bruised heel boardslide Colby Carter 1080. Switch John Cardiel coffin mini ramp rad kingpin kidney. Flail camel back Steve Olson nose bump carve wax dude. 

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

//Darkslide Christ air betty half-cab lipslide bigspin. Crail slide varial airwalk vert death box Japan air. Griptape crail slide noseblunt slide nose-bump hang ten casper slide. Transfer ho-ho masonite half-cab John Grigley Christ air hurricane. G-turn street locals wall ride Streets on Fire nose bump hurricane. Switch Rudy Johnson coper transition coping regular footed salad grind. Full pipe wax layback darkslide baseplate ho-ho. 1080 hurricane coping Eric Koston deck slam stoked. Acid drop roll-in heel flip half-flip sketchy nose-bump. Mute-air hang ten slam bruised heel boardslide Colby Carter 1080. Switch John Cardiel coffin mini ramp rad kingpin kidney. Flail camel back Steve Olson nose bump carve wax dude. 

?>