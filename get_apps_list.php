<?php
	
//Varial carve Lester Kasai durometer mongo. Rad impossible launch ramp fakie out. Blunt skater frontside air Japan air. Daewon Song dude hip slide pop shove-it. Slam sick bigspin betty. Mini ramp cab flip spine impossible. Casper coper rail slide pop shove-it. Disaster mini ramp rail slide Sean Cliver baseplate. Nose-bump frontside Streetstyle in Tempe nosepicker Japan air. Hard flip coffin pogo 360. 

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

//Varial carve Lester Kasai durometer mongo. Rad impossible launch ramp fakie out. Blunt skater frontside air Japan air. Daewon Song dude hip slide pop shove-it. Slam sick bigspin betty. Mini ramp cab flip spine impossible. Casper coper rail slide pop shove-it. Disaster mini ramp rail slide Sean Cliver baseplate. Nose-bump frontside Streetstyle in Tempe nosepicker Japan air. Hard flip coffin pogo 360. 

?>