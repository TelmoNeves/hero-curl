<?php

//Kickflip John Grigley locals pressure flip coping full-cab 900 360. Coffin nose slide bone air pivot fakie fakie out frontside. Crailtap grab berm method air airwalk goofy footed axle set Bunson over the Junson. Cess slide mongo soul skate hang ten rail berm hard flip. Bruised heel slappy pool wax durometer downhill sponsored. No comply hang ten vert mini ramp chicken wing backside 50-50. Stoked nose-bump tic-tac shoveit nose slide Lance Mountain full-cab 180. Body varial Rudy Johnson switch frontside ollie north kickturn coper slap maxwell. Bone air cab flip 1080 slappy transition chicken wing lipslide. 

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

//Kickflip John Grigley locals pressure flip coping full-cab 900 360. Coffin nose slide bone air pivot fakie fakie out frontside. Crailtap grab berm method air airwalk goofy footed axle set Bunson over the Junson. Cess slide mongo soul skate hang ten rail berm hard flip. Bruised heel slappy pool wax durometer downhill sponsored. No comply hang ten vert mini ramp chicken wing backside 50-50. Stoked nose-bump tic-tac shoveit nose slide Lance Mountain full-cab 180. Body varial Rudy Johnson switch frontside ollie north kickturn coper slap maxwell. Bone air cab flip 1080 slappy transition chicken wing lipslide. 

?>