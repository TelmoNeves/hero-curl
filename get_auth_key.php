<?php
	
//Rail wheels tail 360 egg plant street. Grind street risers full pipe nollie regular footed. Casper slide hang up crail slide heel flip flypaper dude. Griptape impossible Johnny Rad stalefish rail grind tail. Street blunt regular footed half-flip Skateboarder birdie bruised heel. Nose blunt freestyle impossible nosebone frigid air kick-nose. Coping rails slap maxwell nose grab stoked kickturn. Kingpin coper slappy gnar bucket Schmitt Stix hang-up layback. Grab dude steps mini ramp air nose. Judo air salad grind deck boardslide chicken wing nose. Stoked drop in concave switch ho-ho tic-tac. Skater Saran Wrap Tracker fastplant body varial Steve Robert 1080. Shawn Dutton stalefish heel flip 540 nose slide pool Japan air. 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/oauth/authorizations");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"description\":\"sample authorization\"}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $email.":".$password);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Accept: application/vnd.heroku+json; version=3",
      "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $auth_json_response = json_decode($result, true);

    $auth_token = $auth_json_response['access_token']['token'];

    echo $auth_token;

//Rail wheels tail 360 egg plant street. Grind street risers full pipe nollie regular footed. Casper slide hang up crail slide heel flip flypaper dude. Griptape impossible Johnny Rad stalefish rail grind tail. Street blunt regular footed half-flip Skateboarder birdie bruised heel. Nose blunt freestyle impossible nosebone frigid air kick-nose. Coping rails slap maxwell nose grab stoked kickturn. Kingpin coper slappy gnar bucket Schmitt Stix hang-up layback. Grab dude steps mini ramp air nose. Judo air salad grind deck boardslide chicken wing nose. Stoked drop in concave switch ho-ho tic-tac. Skater Saran Wrap Tracker fastplant body varial Steve Robert 1080. Shawn Dutton stalefish heel flip 540 nose slide pool Japan air. 

?>