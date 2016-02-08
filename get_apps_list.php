<?php
	
//Berm half-cab bearings roll-in half-flip. Helipop skate key carve backside body varial. Nose-bump 540 tuna-flip steps axle. 50-50 hang ten rock and roll lien air stoked. Speed wobbles full-cab pool pump nose-bump Rob Roskopp. Rocket air grind airwalk pogo bank Steve Caballero. Tower Skate Park death box skate key crail slide method air 270. Soul skate drop in slappy hang-up dude. 1080 air invert axle tailslide. 

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

//Berm half-cab bearings roll-in half-flip. Helipop skate key carve backside body varial. Nose-bump 540 tuna-flip steps axle. 50-50 hang ten rock and roll lien air stoked. Speed wobbles full-cab pool pump nose-bump Rob Roskopp. Rocket air grind airwalk pogo bank Steve Caballero. Tower Skate Park death box skate key crail slide method air 270. Soul skate drop in slappy hang-up dude. 1080 air invert axle tailslide. 

?>