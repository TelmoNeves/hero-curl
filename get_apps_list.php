<?php
	
//Boneless kidney Steve Olson vert stoked bail nosebone. Rail slide downhill shoveit impossible Duel at Diablo handplant ollie hole. Kickflip hand rail kickturn finger flip airwalk coping. Full-cab crooked grind JFA frigid air bone air varial wheels. Rad slappy sponsored locals bearings skate key Sidewalk Surfer. No comply axle Primo slide roll-in feeble stoked. Berm Japan air skate or die boned out Greg Evans coffin death box. Hospital flip full pipe yeah bean plant pump transition gnarly. Smith grind Saran Wrap rail slide hang-up spine no comply. Alley oop Tommy Guerrero egg plant front foot impossible slappy nose-bump nosepicker. Slide pool birdie aerial masonite Tracker. Late roll-in concave grind impossible locals. 

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

//Boneless kidney Steve Olson vert stoked bail nosebone. Rail slide downhill shoveit impossible Duel at Diablo handplant ollie hole. Kickflip hand rail kickturn finger flip airwalk coping. Full-cab crooked grind JFA frigid air bone air varial wheels. Rad slappy sponsored locals bearings skate key Sidewalk Surfer. No comply axle Primo slide roll-in feeble stoked. Berm Japan air skate or die boned out Greg Evans coffin death box. Hospital flip full pipe yeah bean plant pump transition gnarly. Smith grind Saran Wrap rail slide hang-up spine no comply. Alley oop Tommy Guerrero egg plant front foot impossible slappy nose-bump nosepicker. Slide pool birdie aerial masonite Tracker. Late roll-in concave grind impossible locals. 

?>