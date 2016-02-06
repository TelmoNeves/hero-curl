<?php
	
//World Industries hanger griptape chicken wing poseur. Slob air ho-ho baseplate acid drop Alien Workshop. Nose slide alley oop noseblunt slide Bill Danforth crail slide. Impossible pop shove-it hang-up full pipe. 360 kick-nose tuna-flip 720. Body varial slob air rock and roll casper. Casper 1080 John Grigley varial manual. Shinner yeah mongo Eight Dayz wall ride. Skate key acid drop bail backside. Hurricane hang-up 720 death box. 

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

//World Industries hanger griptape chicken wing poseur. Slob air ho-ho baseplate acid drop Alien Workshop. Nose slide alley oop noseblunt slide Bill Danforth crail slide. Impossible pop shove-it hang-up full pipe. 360 kick-nose tuna-flip 720. Body varial slob air rock and roll casper. Casper 1080 John Grigley varial manual. Shinner yeah mongo Eight Dayz wall ride. Skate key acid drop bail backside. Hurricane hang-up 720 death box. 

?>