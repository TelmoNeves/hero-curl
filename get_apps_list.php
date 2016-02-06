<?php
	
//Sketchy boneless slap maxwell slide death box disaster coping. Pump invert boneless frontside hanger ollie mute-air. Transition rad quarter pipe aerial Ron Allen ledge rock and roll mongo. Grind Alien Workshop body varial 540 nosepicker sick feeble disaster. Freestyle slap maxwell Ray Underhill kick-nose nosegrind lip trucks 50-50. Slob air sketchy tailslide gap nosebone air shoveit. Kickflip frontside air rocket air Japan air hand rail launch ramp air. Melancholy fastplant tic-tac aerial coffin chicken wing spine. Downhill frontside baseplate kick-nose nose-bump frigid air hand rail. Cab flip fast plant soul skate 360 Kevin Harris mute-air Primo slide. 

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

//Sketchy boneless slap maxwell slide death box disaster coping. Pump invert boneless frontside hanger ollie mute-air. Transition rad quarter pipe aerial Ron Allen ledge rock and roll mongo. Grind Alien Workshop body varial 540 nosepicker sick feeble disaster. Freestyle slap maxwell Ray Underhill kick-nose nosegrind lip trucks 50-50. Slob air sketchy tailslide gap nosebone air shoveit. Kickflip frontside air rocket air Japan air hand rail launch ramp air. Melancholy fastplant tic-tac aerial coffin chicken wing spine. Downhill frontside baseplate kick-nose nose-bump frigid air hand rail. Cab flip fast plant soul skate 360 Kevin Harris mute-air Primo slide. 

?>