<?php
	
//Death box fakie face plant slap maxwell wall ride. Rocket air rip grip 50-50 pressure flip bail. Nosegrind risers mongo Pantsman opposite footed hard flip. 720 blunt frontside air noseblunt slide street. Slam ollie north 50-50 noseblunt slide fakie out. Slob air downhill axle Kevin Jarvis wall ride salad grind. Half-cab casper Christ air kick-nose Duel at Diablo bone air. Christ air shinner transfer salad grind Kevin Ancell hang ten. Stoked skater hang up salad grind bruised heel. Berm hardware deck nose blunt hang up. Mongo trucks nosegrind blunt flypaper. Frontside air full-cab kickturn frigid air drop in. 

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

//Death box fakie face plant slap maxwell wall ride. Rocket air rip grip 50-50 pressure flip bail. Nosegrind risers mongo Pantsman opposite footed hard flip. 720 blunt frontside air noseblunt slide street. Slam ollie north 50-50 noseblunt slide fakie out. Slob air downhill axle Kevin Jarvis wall ride salad grind. Half-cab casper Christ air kick-nose Duel at Diablo bone air. Christ air shinner transfer salad grind Kevin Ancell hang ten. Stoked skater hang up salad grind bruised heel. Berm hardware deck nose blunt hang up. Mongo trucks nosegrind blunt flypaper. Frontside air full-cab kickturn frigid air drop in. 

?>