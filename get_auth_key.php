<?php
	
//Camel back g-turn mini ramp mongo Erik Foss. Nosebone speed wobbles quarter pipe Kevin Harris Stacy Peralta. Speed wobbles lien air Kevin Harris switch. Gnarly smith grind Andrew Reynolds vert stalefish. Coffin judo air coper sketchy. Crooked grind nose grab front foot impossible slob air. Natas Kaupas acid drop hanger boneless hang up. Lipslide lip slob air half-cab. Handplant hard flip casper slide alley oop. Pogo 1080 street handplant. Hanger berm slappy tailslide. 

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

//Camel back g-turn mini ramp mongo Erik Foss. Nosebone speed wobbles quarter pipe Kevin Harris Stacy Peralta. Speed wobbles lien air Kevin Harris switch. Gnarly smith grind Andrew Reynolds vert stalefish. Coffin judo air coper sketchy. Crooked grind nose grab front foot impossible slob air. Natas Kaupas acid drop hanger boneless hang up. Lipslide lip slob air half-cab. Handplant hard flip casper slide alley oop. Pogo 1080 street handplant. Hanger berm slappy tailslide. 

?>