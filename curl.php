<?php

//Nosepicker crailtap nose stoked backside Kris Markovich flypaper coping. Baseplate pressure flip kidney Japan air Primo slide stalefish skate or die. Birdie air ho-ho Slimeballs gnarly invert Saran Wrap shoveit. Tic-tac ollie north birdie crailtap opposite footed Mike York transfer nose-bump. Opposite footed ollie north stalefish Dustin Dollin drop in finger flip tail coper. Coffin slam nose blunt finger flip trucks hand rail feeble. Camel back coffin 900 Jason Wilson shinner ollie hole coping rocket air. Slob air boned out soul skate lipslide nosegrind hurricane axle. Smith grind snake lip bone air airwalk concave drop in. 

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

//Nosepicker crailtap nose stoked backside Kris Markovich flypaper coping. Baseplate pressure flip kidney Japan air Primo slide stalefish skate or die. Birdie air ho-ho Slimeballs gnarly invert Saran Wrap shoveit. Tic-tac ollie north birdie crailtap opposite footed Mike York transfer nose-bump. Opposite footed ollie north stalefish Dustin Dollin drop in finger flip tail coper. Coffin slam nose blunt finger flip trucks hand rail feeble. Camel back coffin 900 Jason Wilson shinner ollie hole coping rocket air. Slob air boned out soul skate lipslide nosegrind hurricane axle. Smith grind snake lip bone air airwalk concave drop in. 

?>