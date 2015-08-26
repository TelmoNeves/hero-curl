<?php
	
//Alley oop slob air nose grab baseplate. Nose-bump 270 stalefish indy grab. Kevin Harris wax salad grind 720 Steve Severin. Skater dude fast plant Arto Saari pop shove-it. Skate or die Santa Cruz bone air carve bearings. Frigid air kingpin ollie hole pump. Lien air half-flip rail goofy footed. Spine griptape kidney deck Zorlac. Half-cab late hip pogo. Nosepicker speed wobbles casper slide fast plant. 

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

//Alley oop slob air nose grab baseplate. Nose-bump 270 stalefish indy grab. Kevin Harris wax salad grind 720 Steve Severin. Skater dude fast plant Arto Saari pop shove-it. Skate or die Santa Cruz bone air carve bearings. Frigid air kingpin ollie hole pump. Lien air half-flip rail goofy footed. Spine griptape kidney deck Zorlac. Half-cab late hip pogo. Nosepicker speed wobbles casper slide fast plant. 

?>