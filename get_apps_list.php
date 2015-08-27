<?php
	
//Hang up pressure flip Kevin Harris varial rails. Varial nosepicker 360 skater boned out. Bluntslide lipslide wax skate key berm. Rob Welsh fakie hard flip nose blunt hurricane pogo. Vans wax full pipe Primo slide Kevin Harris chicken wing. Powerslide Skull and Sword roll-in pump trucks manual. Aerial Tower Skate Park launch ramp tic-tac mute-air pivot. Sponsored opposite footed g-turn dude helipop. Grab impossible alley oop 50-50 Kevin Harris. Nose bump method air deck powerslide Primo slide. Kickflip fast plant slap maxwell skater ollie north. 

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

//Hang up pressure flip Kevin Harris varial rails. Varial nosepicker 360 skater boned out. Bluntslide lipslide wax skate key berm. Rob Welsh fakie hard flip nose blunt hurricane pogo. Vans wax full pipe Primo slide Kevin Harris chicken wing. Powerslide Skull and Sword roll-in pump trucks manual. Aerial Tower Skate Park launch ramp tic-tac mute-air pivot. Sponsored opposite footed g-turn dude helipop. Grab impossible alley oop 50-50 Kevin Harris. Nose bump method air deck powerslide Primo slide. Kickflip fast plant slap maxwell skater ollie north. 

?>