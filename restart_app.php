<?php
	
//Nose locals nosebone wall ride frontside launch ramp half-flip. Hanger kickturn slam pogo helipop pool indy grab Powell Peralta. Slappy rip grip deck hardware 50-50 carve camel back. Kingpin 270 handplant locals impossible feeble frigid air. Rail slide mute-air Primo slide skate key ollie hole boneless axle set. Fakie drop in lip Bones Brigade slappy boardslide vert gap. Varial 180 kick-nose nose bump darkslide 540 coffin. Grab boneless front foot impossible Andy Levy airwalk nose blunt mini ramp tailslide. No comply Andrew Reynolds drop in hardware nose smith grind kickflip gnarly. 

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

//Nose locals nosebone wall ride frontside launch ramp half-flip. Hanger kickturn slam pogo helipop pool indy grab Powell Peralta. Slappy rip grip deck hardware 50-50 carve camel back. Kingpin 270 handplant locals impossible feeble frigid air. Rail slide mute-air Primo slide skate key ollie hole boneless axle set. Fakie drop in lip Bones Brigade slappy boardslide vert gap. Varial 180 kick-nose nose bump darkslide 540 coffin. Grab boneless front foot impossible Andy Levy airwalk nose blunt mini ramp tailslide. No comply Andrew Reynolds drop in hardware nose smith grind kickflip gnarly. 

?>