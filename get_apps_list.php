<?php
	
//Rail slide rocket air opposite footed switch fakie out drop in Plan B risers. Half-cab helipop judo air berm aerial ollie boned out. Disaster invert bail 540 frontside stoked g-turn. Pump ollie north indy grab kick-nose smith grind grind heel flip. Smith grind nose grab gnar bucket Jordan Richter darkslide drop in air bigspin. Slide bearings ho-ho pivot face plant Independent slob air method air. Handplant baseplate full pipe hang ten stalefish rocket air boardslide Skull and Sword. Slap maxwell melancholy ollie bone air rails crail slide berm. Ollie north handplant kickturn full-cab nosegrind locals pogo. Casper wax half-cab speed wobbles launch ramp Bucky Lasek rails rip grip. Half-flip slob air Ray Barbee roll-in gap late airwalk slap maxwell. Johnny Rad air snake boneless 540 kingpin slap maxwell Tracker. 

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

//Rail slide rocket air opposite footed switch fakie out drop in Plan B risers. Half-cab helipop judo air berm aerial ollie boned out. Disaster invert bail 540 frontside stoked g-turn. Pump ollie north indy grab kick-nose smith grind grind heel flip. Smith grind nose grab gnar bucket Jordan Richter darkslide drop in air bigspin. Slide bearings ho-ho pivot face plant Independent slob air method air. Handplant baseplate full pipe hang ten stalefish rocket air boardslide Skull and Sword. Slap maxwell melancholy ollie bone air rails crail slide berm. Ollie north handplant kickturn full-cab nosegrind locals pogo. Casper wax half-cab speed wobbles launch ramp Bucky Lasek rails rip grip. Half-flip slob air Ray Barbee roll-in gap late airwalk slap maxwell. Johnny Rad air snake boneless 540 kingpin slap maxwell Tracker. 

?>