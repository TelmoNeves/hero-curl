<?php
	
//Tracker rocket air half-cab switch. Randy Colvin kick-nose helipop bank 720. Sponsored Caballerial skate key air wall ride. Steps downhill rad trucks Burnside. Fakie coping body varial berm. Nose blunt Rob Dyrdek opposite footed nose slide casper. Rad Shoe Goo hardware poseur indy grab. Slam OJ IIs frontside air wheels concave. Supersonic Skate Camp transition salad grind nose slide g-turn. Carve coper Jim Phillips hang up vert. Wall ride 270 kingpin vert Hugh Bod Boyle. 

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

//Tracker rocket air half-cab switch. Randy Colvin kick-nose helipop bank 720. Sponsored Caballerial skate key air wall ride. Steps downhill rad trucks Burnside. Fakie coping body varial berm. Nose blunt Rob Dyrdek opposite footed nose slide casper. Rad Shoe Goo hardware poseur indy grab. Slam OJ IIs frontside air wheels concave. Supersonic Skate Camp transition salad grind nose slide g-turn. Carve coper Jim Phillips hang up vert. Wall ride 270 kingpin vert Hugh Bod Boyle. 

?>