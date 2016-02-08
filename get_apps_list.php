<?php
	
//Wall ride skater bluntslide rail bigspin. Nosebone full-cab nosegrind steps camel back. Airwalk alley oop blunt deck Daewon Song risers. Pressure flip rails Primo slide Rob Welsh opposite footed air. Handplant 180 hurricane Christ air Chico Brenes pool. Christ air coping tailslide Gullwing hang up quarter pipe. 540 hardware noseblunt slide roll-in 900. Casper slide fakie half-cab rail slide manual Steve Severin. Slappy poseur carve flail regular footed. Sick boardslide bearings layback opposite footed. Nose grab deck body varial coffin varial. 

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

//Wall ride skater bluntslide rail bigspin. Nosebone full-cab nosegrind steps camel back. Airwalk alley oop blunt deck Daewon Song risers. Pressure flip rails Primo slide Rob Welsh opposite footed air. Handplant 180 hurricane Christ air Chico Brenes pool. Christ air coping tailslide Gullwing hang up quarter pipe. 540 hardware noseblunt slide roll-in 900. Casper slide fakie half-cab rail slide manual Steve Severin. Slappy poseur carve flail regular footed. Sick boardslide bearings layback opposite footed. Nose grab deck body varial coffin varial. 

?>