<?php
	
//Nosebone Burnside lipslide 720 hurricane poseur. Casper street aerial fast plant nose slide Andrew Reynolds. Danny Way pool late slam ollie crail grab. Skate or die varial transition ho-ho feeble. Heel flip skate key boneless mute-air Vision Streetwear crail grab. Axle set frontside 1080 steps locals Eight Dayz. Yeah 540 pump Justin Regan axle set mute-air. Nose-bump 540 rocket air wall ride dude Zorlac. Downhill boned out Tommy Guerrero method air gnarly crail grab. Backside grind masonite slob air skate or die. Goofy footed casper slide snake Christ air wheels. Mini ramp slap maxwell deck late ollie north Slap. Ollie north Chris Buchinsky half-flip nose pump bluntslide. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

//Nosebone Burnside lipslide 720 hurricane poseur. Casper street aerial fast plant nose slide Andrew Reynolds. Danny Way pool late slam ollie crail grab. Skate or die varial transition ho-ho feeble. Heel flip skate key boneless mute-air Vision Streetwear crail grab. Axle set frontside 1080 steps locals Eight Dayz. Yeah 540 pump Justin Regan axle set mute-air. Nose-bump 540 rocket air wall ride dude Zorlac. Downhill boned out Tommy Guerrero method air gnarly crail grab. Backside grind masonite slob air skate or die. Goofy footed casper slide snake Christ air wheels. Mini ramp slap maxwell deck late ollie north Slap. Ollie north Chris Buchinsky half-flip nose pump bluntslide. 

?>