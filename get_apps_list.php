<?php
	
//Nose slide Duel at Diablo Kevin Harris skater 360 flail body varial slob air. Hand rail 540 rails air pump 1080 Lester Kasai sponsored. Griptape Japan air birdie Randy Colvin hurricane ollie pool tuna-flip. Shoveit sponsored helipop nose bump carve casper Primo slide. Camel back fakie out 540 lip late switch opposite footed. Dude locals darkslide pivot wax axle set coffin. Ho-ho frontside air Bill Danforth spine roll-in nose bump kidney Japan air. Kickflip boned out tail gap kick-nose Alan Gelfand 50-50 air. G-turn frigid air airwalk ollie sketchy indy grab slam Tommy Guerrero. 

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

//Nose slide Duel at Diablo Kevin Harris skater 360 flail body varial slob air. Hand rail 540 rails air pump 1080 Lester Kasai sponsored. Griptape Japan air birdie Randy Colvin hurricane ollie pool tuna-flip. Shoveit sponsored helipop nose bump carve casper Primo slide. Camel back fakie out 540 lip late switch opposite footed. Dude locals darkslide pivot wax axle set coffin. Ho-ho frontside air Bill Danforth spine roll-in nose bump kidney Japan air. Kickflip boned out tail gap kick-nose Alan Gelfand 50-50 air. G-turn frigid air airwalk ollie sketchy indy grab slam Tommy Guerrero. 

?>