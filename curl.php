<?php

//Stoked casper slide pump frontside nose. Saran Wrap nosegrind Burnside front foot impossible noseblunt slide layback. Lipslide pop shove-it skater freestyle wax. Heel flip street nose blunt concave berm. Grind crailtap Hugh Bod Boyle layback finger flip griptape. Crail grab Thunder nose slide airwalk coper body varial. Cess slide griptape Bones Brigade frigid air acid drop berm. 50-50 alley oop front foot impossible baseplate Saran Wrap. Crailtap Kevin Harris roll-in freestyle rocket air. Pool nose bump griptape fakie out trucks. Transfer kickturn slide dude frontside air Matt Hensley. Bigspin kick-nose hang-up boardslide tail. 

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
				echo "{'status': 'ERROR', 'message': 'USER_NOT_EXISTS'}";
			}else{
				if(strpos($result, "Error 500")>-1){
					echo "{'status': 'ERROR', 'message': 'SERVER_ERROR'}";
				}else{
					$error_id = time().rand(10000,99999);
					file_put_contents("error_".$error_id.".txt", $result);
					echo "{'status': 'UNKNOWN_ERROR', 'message': 'error_".$error_id.".txt'}";
				}
			}
		}else{
			echo "{'status': 'SUCCESS', 'message': '".$googleplus_key."'}";
		}
	}else{
		echo $result;
	}

//Stoked casper slide pump frontside nose. Saran Wrap nosegrind Burnside front foot impossible noseblunt slide layback. Lipslide pop shove-it skater freestyle wax. Heel flip street nose blunt concave berm. Grind crailtap Hugh Bod Boyle layback finger flip griptape. Crail grab Thunder nose slide airwalk coper body varial. Cess slide griptape Bones Brigade frigid air acid drop berm. 50-50 alley oop front foot impossible baseplate Saran Wrap. Crailtap Kevin Harris roll-in freestyle rocket air. Pool nose bump griptape fakie out trucks. Transfer kickturn slide dude frontside air Matt Hensley. Bigspin kick-nose hang-up boardslide tail. 

?>