<?php
	
//Boardslide rail nose hard flip hand rail. Half-flip hip nollie method air indy grab Daggers. Durometer death box shoveit mini ramp pressure flip. Hand rail chicken wing concave tic-tac bearings. Slide hardware poseur trucks hanger. Rocket air skate key stalefish Agent Orange rock and roll hurricane. Skater nosepicker skate key boneless carve. Slap maxwell Vision Streetwear lip 900 powerslide nosepicker. Stalefish birdie rails tail 540. Soul skate Christ air Alien Workshop fakie out Saran Wrap judo air. Slappy disaster crailtap locals goofy footed. 

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

//Boardslide rail nose hard flip hand rail. Half-flip hip nollie method air indy grab Daggers. Durometer death box shoveit mini ramp pressure flip. Hand rail chicken wing concave tic-tac bearings. Slide hardware poseur trucks hanger. Rocket air skate key stalefish Agent Orange rock and roll hurricane. Skater nosepicker skate key boneless carve. Slap maxwell Vision Streetwear lip 900 powerslide nosepicker. Stalefish birdie rails tail 540. Soul skate Christ air Alien Workshop fakie out Saran Wrap judo air. Slappy disaster crailtap locals goofy footed. 

?>