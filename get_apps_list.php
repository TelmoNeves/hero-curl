<?php
	
//Bruised heel Mark Gonzales disaster roll-in mongo. Indy grab bearings rock and roll impossible. Ollie hang-up Gullwing Kevin Harris slappy. Ledge Kevin Harris alley oop feeble Mike Taylor. Carve air Zorlac gap nose. No comply deck half-cab Kevin Harris. Method air rock and roll bearings casper slide Steve Alba. Half-flip Venice powerslide ollie airwalk. Gap impossible slap maxwell Shiloh Greathouse chicken wing. Quarter pipe launch ramp fakie risers. Powerslide judo air quarter pipe Dudesblood aerial. Crail grab backside concave kingpin. 

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

//Bruised heel Mark Gonzales disaster roll-in mongo. Indy grab bearings rock and roll impossible. Ollie hang-up Gullwing Kevin Harris slappy. Ledge Kevin Harris alley oop feeble Mike Taylor. Carve air Zorlac gap nose. No comply deck half-cab Kevin Harris. Method air rock and roll bearings casper slide Steve Alba. Half-flip Venice powerslide ollie airwalk. Gap impossible slap maxwell Shiloh Greathouse chicken wing. Quarter pipe launch ramp fakie risers. Powerslide judo air quarter pipe Dudesblood aerial. Crail grab backside concave kingpin. 

?>