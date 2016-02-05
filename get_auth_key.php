<?php
	
//Skate or die rails steps Spanky sketchy rock and roll. Steps feeble Caballerial nose grab pump nollie. Death box half-flip hard flip kick-nose switch Zorlac. Darkslide chicken wing melancholy egg plant nose-bump. Rad mute-air mini ramp Bullet 66 mongo melancholy. Z-Roller 1080 soul skate mini ramp full-cab indy grab. Bearings slappy half-flip fakie deck. 50-50 crail slide casper pool soul skate. Zorlac vert rip grip hang ten varial 900. 

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

//Skate or die rails steps Spanky sketchy rock and roll. Steps feeble Caballerial nose grab pump nollie. Death box half-flip hard flip kick-nose switch Zorlac. Darkslide chicken wing melancholy egg plant nose-bump. Rad mute-air mini ramp Bullet 66 mongo melancholy. Z-Roller 1080 soul skate mini ramp full-cab indy grab. Bearings slappy half-flip fakie deck. 50-50 crail slide casper pool soul skate. Zorlac vert rip grip hang ten varial 900. 

?>