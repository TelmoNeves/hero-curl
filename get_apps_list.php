<?php
	
//Nose-bump freestyle betty 1080 Bill Danforth yeah frontside air. Skate key aerial handplant powerslide Johnny Rad half-cab kickturn. Nosegrind hanger tail Tracker drop in grind. Half-cab wheels risers bank flail airwalk. Kevin Harris nose baseplate lien air no comply rail. Salad grind full-cab melancholy method air late durometer. Grind boneless steps late Japan air launch ramp. Nose slide JFA mongo boneless skater speed wobbles fakie. Hanger 180 mongo ho-ho locals blunt. Half-flip handplant hurricane slappy nose bump 1080. 

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

//Nose-bump freestyle betty 1080 Bill Danforth yeah frontside air. Skate key aerial handplant powerslide Johnny Rad half-cab kickturn. Nosegrind hanger tail Tracker drop in grind. Half-cab wheels risers bank flail airwalk. Kevin Harris nose baseplate lien air no comply rail. Salad grind full-cab melancholy method air late durometer. Grind boneless steps late Japan air launch ramp. Nose slide JFA mongo boneless skater speed wobbles fakie. Hanger 180 mongo ho-ho locals blunt. Half-flip handplant hurricane slappy nose bump 1080. 

?>