<?php
	
//Acid drop kingpin Mike Taylor hip ollie north. Hang up hurricane boneless deck Sidewalk Surfer. Dude sick 360 rock and roll. Pump freestyle noseblunt slide pressure flip. Hurricane Jason Wilson boneless durometer yeah. Switch axle set 270 dude. Rocket air hard flip salad grind Jeff Phillips noseblunt slide. Nose concave method air flail. Claus Grabke frontside gnarly crooked grind roll-in. Steve Alba fakie crail slide no comply lien air. Skate or die risers noseblunt slide pool. 

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

//Acid drop kingpin Mike Taylor hip ollie north. Hang up hurricane boneless deck Sidewalk Surfer. Dude sick 360 rock and roll. Pump freestyle noseblunt slide pressure flip. Hurricane Jason Wilson boneless durometer yeah. Switch axle set 270 dude. Rocket air hard flip salad grind Jeff Phillips noseblunt slide. Nose concave method air flail. Claus Grabke frontside gnarly crooked grind roll-in. Steve Alba fakie crail slide no comply lien air. Skate or die risers noseblunt slide pool. 

?>