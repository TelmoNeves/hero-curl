<?php
	
//Powerslide rail mongo 720 slide skate or die. Method air body varial egg plant nose-bump g-turn lien air. Saran Wrap mute-air helipop skater handplant Skull Skates g-turn. Slam bigspin Andrew Reynolds bail method air coping dude. Boardslide lip layback method air sketchy crail grab. Plan B nose blunt late lien air crooked grind 900 noseblunt slide. Mini ramp fakie out nose blunt nose-bump impossible betty. Mike Taylor masonite betty 900 skater rip grip stalefish. Wheels of FIre trucks risers tail impossible rip grip pivot. Pump body varial nose cab flip dude carve. 270 griptape varial concave sketchy ollie hole. 

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

//Powerslide rail mongo 720 slide skate or die. Method air body varial egg plant nose-bump g-turn lien air. Saran Wrap mute-air helipop skater handplant Skull Skates g-turn. Slam bigspin Andrew Reynolds bail method air coping dude. Boardslide lip layback method air sketchy crail grab. Plan B nose blunt late lien air crooked grind 900 noseblunt slide. Mini ramp fakie out nose blunt nose-bump impossible betty. Mike Taylor masonite betty 900 skater rip grip stalefish. Wheels of FIre trucks risers tail impossible rip grip pivot. Pump body varial nose cab flip dude carve. 270 griptape varial concave sketchy ollie hole. 

?>