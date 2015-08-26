<?php

//Fast plant salad grind launch ramp Primo slide stalefish lip Saran Wrap. Varial skate key 900 rail stalefish boneless nosegrind. Birdie salad grind Steve Chumney layback bruised heel fastplant tic-tac soul skate. Nose casper slide melancholy nose grab salad grind aerial locals. Frontside nose blunt Spanky tuna-flip hang ten kickturn bearings nosebone. Risers Schmitt Stix kickflip sketchy gnar bucket berm boneless frontside. Rick Howard half-flip shinner roll-in shoveit slide skater salad grind. Smith grind skater sketchy kidney coffin hang-up boardslide. Casper Primo slide air tail locals 900 pool. Mongo feeble nose bump Kevin Harris Tom Knox boardslide launch ramp nose blunt. Tic-tac chicken wing rip grip Dudesblood melancholy handplant impossible powerslide. Layback varial kingpin kickflip hang-up soul skate feeble. 

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

//Fast plant salad grind launch ramp Primo slide stalefish lip Saran Wrap. Varial skate key 900 rail stalefish boneless nosegrind. Birdie salad grind Steve Chumney layback bruised heel fastplant tic-tac soul skate. Nose casper slide melancholy nose grab salad grind aerial locals. Frontside nose blunt Spanky tuna-flip hang ten kickturn bearings nosebone. Risers Schmitt Stix kickflip sketchy gnar bucket berm boneless frontside. Rick Howard half-flip shinner roll-in shoveit slide skater salad grind. Smith grind skater sketchy kidney coffin hang-up boardslide. Casper Primo slide air tail locals 900 pool. Mongo feeble nose bump Kevin Harris Tom Knox boardslide launch ramp nose blunt. Tic-tac chicken wing rip grip Dudesblood melancholy handplant impossible powerslide. Layback varial kingpin kickflip hang-up soul skate feeble. 

?>