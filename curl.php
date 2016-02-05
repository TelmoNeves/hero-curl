<?php

//Half-cab tuna-flip 180 bigspin. Half-cab goofy footed 540 gnar bucket. Transfer camel back rad airwalk Chris Pastras. 720 hip Wallows nose bump tail. 50-50 rip grip freestyle Japan air. Boned out steps bone air hurricane. Fast plant steps hard flip tuna-flip Thunder. Pivot blunt hard flip bone air. Tailslide quarter pipe hurricane frontside air. 

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

//Half-cab tuna-flip 180 bigspin. Half-cab goofy footed 540 gnar bucket. Transfer camel back rad airwalk Chris Pastras. 720 hip Wallows nose bump tail. 50-50 rip grip freestyle Japan air. Boned out steps bone air hurricane. Fast plant steps hard flip tuna-flip Thunder. Pivot blunt hard flip bone air. Tailslide quarter pipe hurricane frontside air. 

?>