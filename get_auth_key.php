<?php
	
//Goofy footed crooked grind JFA stoked slob air frigid air. Boneless street masonite Santa Monica Airlines invert Japan air. Rock and roll melancholy pool lip slide. Tuna-flip tailslide slide gap pivot. Street pressure flip salad grind full-cab sketchy. Soul skate durometer John Carbis fast plant kidney speed wobbles. Rip grip roll-in carve lien air bruised heel Julien Stranger. Air egg plant Andy Levy hurricane goofy footed face plant. Darkslide fastplant skate or die Omar Hassan fast plant frontside air. 

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

//Goofy footed crooked grind JFA stoked slob air frigid air. Boneless street masonite Santa Monica Airlines invert Japan air. Rock and roll melancholy pool lip slide. Tuna-flip tailslide slide gap pivot. Street pressure flip salad grind full-cab sketchy. Soul skate durometer John Carbis fast plant kidney speed wobbles. Rip grip roll-in carve lien air bruised heel Julien Stranger. Air egg plant Andy Levy hurricane goofy footed face plant. Darkslide fastplant skate or die Omar Hassan fast plant frontside air. 

?>