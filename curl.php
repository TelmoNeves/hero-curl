<?php

//Cess slide bail kingpin goofy footed. Slap maxwell bail Rodney Mullen goofy footed concave. Slide hardware 360 egg plant. Upland Christ air 540 fast plant carve. Slimeballs bearings crooked grind axle set death box. Steps rails bank rail slide. Switch crooked grind frontside Claus Grabke casper slide. 360 half-cab cess slide bearings. Bare Cover rip grip hang up bluntslide rock and roll. 

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

//Cess slide bail kingpin goofy footed. Slap maxwell bail Rodney Mullen goofy footed concave. Slide hardware 360 egg plant. Upland Christ air 540 fast plant carve. Slimeballs bearings crooked grind axle set death box. Steps rails bank rail slide. Switch crooked grind frontside Claus Grabke casper slide. 360 half-cab cess slide bearings. Bare Cover rip grip hang up bluntslide rock and roll. 

?>