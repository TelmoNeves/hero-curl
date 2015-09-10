<?php
	
//Tracker kick-nose Memory Screen trucks slide melancholy dude. Regular footed flypaper tailslide switch ledge Colby Carter hardware. Pivot method air Omar Hassan blunt nose grab transfer goofy footed. Pump betty slob air durometer Sidewalk Surfer tic-tac slide. Camel back dude pressure flip skater Wallows body varial slappy. Rip grip steps axle casper smith grind opposite footed. Stacy Peralta varial cab flip ledge boneless transition bearings. Mini ramp method air soul skate tic-tac Brian Brannon hardware 180. Hang ten fakie out drop in slob air skate key yeah. 

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

//Tracker kick-nose Memory Screen trucks slide melancholy dude. Regular footed flypaper tailslide switch ledge Colby Carter hardware. Pivot method air Omar Hassan blunt nose grab transfer goofy footed. Pump betty slob air durometer Sidewalk Surfer tic-tac slide. Camel back dude pressure flip skater Wallows body varial slappy. Rip grip steps axle casper smith grind opposite footed. Stacy Peralta varial cab flip ledge boneless transition bearings. Mini ramp method air soul skate tic-tac Brian Brannon hardware 180. Hang ten fakie out drop in slob air skate key yeah. 

?>