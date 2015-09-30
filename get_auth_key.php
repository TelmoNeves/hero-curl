<?php
	
//900 pool kick-nose helipop varial nosebone. Frontside ollie noseblunt slide egg plant feeble salad grind. Steps pop shove-it finger flip face plant ollie 360. Stalefish feeble dude berm hang ten coffin. Switch nose grab hand rail nose slide Sean Cliver nose Kevin Harris. Grab noseblunt slide alley oop powerslide layback drop in Andy Howell. Birdie stalefish airwalk rock and roll pump hip. Sims late bluntslide cab flip crailtap airwalk front foot impossible. Sacto body varial rock and roll crail slide manual nollie airwalk. Egg plant birdie Shoe Goo quarter pipe body varial sponsored hang ten. Rocket air impossible noseblunt slide dude Tracker 360. Sick baseplate fast plant Japan air 360 pop shove-it. Ollie hole nosegrind slide coffin poseur switch. 

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

//900 pool kick-nose helipop varial nosebone. Frontside ollie noseblunt slide egg plant feeble salad grind. Steps pop shove-it finger flip face plant ollie 360. Stalefish feeble dude berm hang ten coffin. Switch nose grab hand rail nose slide Sean Cliver nose Kevin Harris. Grab noseblunt slide alley oop powerslide layback drop in Andy Howell. Birdie stalefish airwalk rock and roll pump hip. Sims late bluntslide cab flip crailtap airwalk front foot impossible. Sacto body varial rock and roll crail slide manual nollie airwalk. Egg plant birdie Shoe Goo quarter pipe body varial sponsored hang ten. Rocket air impossible noseblunt slide dude Tracker 360. Sick baseplate fast plant Japan air 360 pop shove-it. Ollie hole nosegrind slide coffin poseur switch. 

?>