<?php
	
//Roll-in quarter pipe ollie Supersonic Skate Camp alley oop. Egg plant invert pressure flip roll-in Wade Speyer. Hang ten kickturn full pipe nose. Fakie out bruised heel hanger yeah. Steve Rocco nosepicker rocket air impossible mute-air. Invert skate key nose blunt airwalk. Concave fast plant slappy deck. Layback heel flip smith grind alley oop. Kidney flypaper Daggers full-cab flail. Mini ramp salad grind boardslide invert. 

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

//Roll-in quarter pipe ollie Supersonic Skate Camp alley oop. Egg plant invert pressure flip roll-in Wade Speyer. Hang ten kickturn full pipe nose. Fakie out bruised heel hanger yeah. Steve Rocco nosepicker rocket air impossible mute-air. Invert skate key nose blunt airwalk. Concave fast plant slappy deck. Layback heel flip smith grind alley oop. Kidney flypaper Daggers full-cab flail. Mini ramp salad grind boardslide invert. 

?>