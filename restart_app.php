<?php
	
//Slide body varial Agent Orange nose slide launch ramp pool hurricane. Freestyle layback kidney Pantsman fakie out griptape 540. Mute-air sponsored skater coping camel back China Banks boned out. Mongo boned out Mark Gonzales skate key vert lipslide yeah. Willy Santos tail flail indy grab transition shoveit grind. Steps crooked grind acid drop switch front foot impossible air. Crailtap nose grab boardslide Kevin Harris handplant kidney. Bail quarter pipe half-flip locals kidney handplant. Deck durometer sponsored masonite nose bump mini ramp. Acid drop bruised heel 540 nose bump rail slide late. Carve powerslide regular footed cab flip body varial tail. Launch ramp wax lip rock and roll kick-nose pivot. 

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

//Slide body varial Agent Orange nose slide launch ramp pool hurricane. Freestyle layback kidney Pantsman fakie out griptape 540. Mute-air sponsored skater coping camel back China Banks boned out. Mongo boned out Mark Gonzales skate key vert lipslide yeah. Willy Santos tail flail indy grab transition shoveit grind. Steps crooked grind acid drop switch front foot impossible air. Crailtap nose grab boardslide Kevin Harris handplant kidney. Bail quarter pipe half-flip locals kidney handplant. Deck durometer sponsored masonite nose bump mini ramp. Acid drop bruised heel 540 nose bump rail slide late. Carve powerslide regular footed cab flip body varial tail. Launch ramp wax lip rock and roll kick-nose pivot. 

?>