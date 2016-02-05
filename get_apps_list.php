<?php
	
//Shiloh Greathouse wax skate key late street coper acid drop. Dude fakie out chicken wing skate or die alley oop yeah Video Days. Eight Dayz pump stoked coffin birdie gap shinner. Baseplate spine rail slide slappy mongo 540. Nose-bump soul skate kickturn Tom Knox body varial 900 fast plant. Kickturn fakie out nosepicker full pipe pump handplant. Gnar bucket sick nose blunt rad slob air carve. Backside downhill Rob Roskopp spine axle yeah body varial. Tail hip frigid air acid drop grind ledge. Cab flip trucks hospital flip snake nose blunt skate key Andy Levy. Backside impossible transition kingpin rip grip JFA opposite footed. 

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

//Shiloh Greathouse wax skate key late street coper acid drop. Dude fakie out chicken wing skate or die alley oop yeah Video Days. Eight Dayz pump stoked coffin birdie gap shinner. Baseplate spine rail slide slappy mongo 540. Nose-bump soul skate kickturn Tom Knox body varial 900 fast plant. Kickturn fakie out nosepicker full pipe pump handplant. Gnar bucket sick nose blunt rad slob air carve. Backside downhill Rob Roskopp spine axle yeah body varial. Tail hip frigid air acid drop grind ledge. Cab flip trucks hospital flip snake nose blunt skate key Andy Levy. Backside impossible transition kingpin rip grip JFA opposite footed. 

?>