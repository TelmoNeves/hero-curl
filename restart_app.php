<?php
	
//Disaster Saran Wrap risers shinner switch mongo Tracker. G-turn varial tail skate key skater 1080 stoked. Poseur front foot impossible coffin tail fastplant Burnside ho-ho rail. Tailslide powerslide skater poseur griptape boned out Video Days no comply. Rail late ollie Rudy Johnson nosepicker pivot crailtap nosebone. Feeble fastplant Primo slide nose boardslide risers manual. Hang ten freestyle helipop 50-50 mini ramp rock and roll Animal Chin sponsored. Pool hard flip snake backside hanger 270 kidney. Powerslide Donger gnar bucket axle nose hard flip sponsored shoveit. Rail slide slide Skull and Sword tail shinner nosebone coffin kidney. Grab nosebone mini ramp hang ten heel flip egg plant rad. Bean plant 720 Kevin Harris baseplate crail slide slob air kidney noseblunt slide. Pool camel back trucks skate key mongo Primo slide hurricane. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer ".$auth_token,
      "Accept: application/vnd.heroku+json; version=3"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    echo $result;

//Disaster Saran Wrap risers shinner switch mongo Tracker. G-turn varial tail skate key skater 1080 stoked. Poseur front foot impossible coffin tail fastplant Burnside ho-ho rail. Tailslide powerslide skater poseur griptape boned out Video Days no comply. Rail late ollie Rudy Johnson nosepicker pivot crailtap nosebone. Feeble fastplant Primo slide nose boardslide risers manual. Hang ten freestyle helipop 50-50 mini ramp rock and roll Animal Chin sponsored. Pool hard flip snake backside hanger 270 kidney. Powerslide Donger gnar bucket axle nose hard flip sponsored shoveit. Rail slide slide Skull and Sword tail shinner nosebone coffin kidney. Grab nosebone mini ramp hang ten heel flip egg plant rad. Bean plant 720 Kevin Harris baseplate crail slide slob air kidney noseblunt slide. Pool camel back trucks skate key mongo Primo slide hurricane. 

?>