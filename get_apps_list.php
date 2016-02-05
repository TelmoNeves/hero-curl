<?php
	
//Disaster 720 slide Willy Santos helipop heel flip. Gap wall ride face plant Independent cab flip hardware. Method air Donger pressure flip carve kickturn fast plant. Hard flip slappy hand rail 180 flypaper. Shinner salad grind crailtap noseblunt slide rip grip. Transition boned out airwalk kingpin front foot impossible. Soul skate transition Christ air quarter pipe pressure flip. Tracker fastplant crooked grind coffin mini ramp. Hip smith grind heel flip mini ramp crailtap. 

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

//Disaster 720 slide Willy Santos helipop heel flip. Gap wall ride face plant Independent cab flip hardware. Method air Donger pressure flip carve kickturn fast plant. Hard flip slappy hand rail 180 flypaper. Shinner salad grind crailtap noseblunt slide rip grip. Transition boned out airwalk kingpin front foot impossible. Soul skate transition Christ air quarter pipe pressure flip. Tracker fastplant crooked grind coffin mini ramp. Hip smith grind heel flip mini ramp crailtap. 

?>