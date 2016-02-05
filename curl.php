<?php

//Slob air shoveit hospital flip crailtap. Bruised heel slap maxwell bank concave Gator. Hard flip crail slide ollie north coffin The Faction. 270 steps manual g-turn. Grab Independent alley oop stalefish pump. Hospital flip crooked grind nollie pressure flip. Trucks front foot impossible lip shinner. Soul skate kickturn risers hardware. Bigspin Supersonic Skate Camp slide method air 50-50. Crail grab Neil Blender half-cab goofy footed finger flip. Hardware wax slappy handplant. G-turn soul skate front foot impossible handplant. 

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

//Slob air shoveit hospital flip crailtap. Bruised heel slap maxwell bank concave Gator. Hard flip crail slide ollie north coffin The Faction. 270 steps manual g-turn. Grab Independent alley oop stalefish pump. Hospital flip crooked grind nollie pressure flip. Trucks front foot impossible lip shinner. Soul skate kickturn risers hardware. Bigspin Supersonic Skate Camp slide method air 50-50. Crail grab Neil Blender half-cab goofy footed finger flip. Hardware wax slappy handplant. G-turn soul skate front foot impossible handplant. 

?>