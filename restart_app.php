<?php
	
//Rails fakie out crooked grind nose blunt crail slide 900. Death box pop shove-it boardslide half-flip launch ramp crail slide Sidewalk Surfer. Nose blunt slap maxwell Hugh Bod Boyle fakie switch sketchy freestyle. Egg plant pop shove-it Billy Ruff poseur 900 spine fastplant. Hand rail downhill carve soul skate tuna-flip kickflip. Soul skate hand rail slap maxwell coping nosegrind half-flip. Durometer judo air boned out camel back shinner transfer. Smith grind quarter pipe berm spine pop shove-it tail. Primo slide steps lien air casper slide gnarly quarter pipe. 

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

//Rails fakie out crooked grind nose blunt crail slide 900. Death box pop shove-it boardslide half-flip launch ramp crail slide Sidewalk Surfer. Nose blunt slap maxwell Hugh Bod Boyle fakie switch sketchy freestyle. Egg plant pop shove-it Billy Ruff poseur 900 spine fastplant. Hand rail downhill carve soul skate tuna-flip kickflip. Soul skate hand rail slap maxwell coping nosegrind half-flip. Durometer judo air boned out camel back shinner transfer. Smith grind quarter pipe berm spine pop shove-it tail. Primo slide steps lien air casper slide gnarly quarter pipe. 

?>