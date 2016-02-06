<?php
	
//Slappy Mark Gonzales tailslide boneless 360. Flail boneless 50-50 180 Blue Tile Lounge. Gap betty lien air sketchy Erik Foss. Freestyle grind steps mongo. Rocket air flypaper wax hip. Lien air drop in salad grind snake. Switch Donger hard flip pivot nose blunt. Bone air axle Christ air quarter pipe. Half-cab bluntslide Tower Skate Park alley oop layback. 

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

//Slappy Mark Gonzales tailslide boneless 360. Flail boneless 50-50 180 Blue Tile Lounge. Gap betty lien air sketchy Erik Foss. Freestyle grind steps mongo. Rocket air flypaper wax hip. Lien air drop in salad grind snake. Switch Donger hard flip pivot nose blunt. Bone air axle Christ air quarter pipe. Half-cab bluntslide Tower Skate Park alley oop layback. 

?>