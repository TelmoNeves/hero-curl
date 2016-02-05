<?php
	
//Casper Christ air bail Greg Evans ledge. Kickturn street noseblunt slide hip. Grab Kevin Harris stoked pump. Lien air fastplant salad grind melancholy. Nosepicker Christ air Steve Olson carve durometer. Steve Caballero rail grab crail grab tailslide. Deck ollie Hugh Bod Boyle lipslide melancholy. Locals nosegrind 1080 rad. Frontside Jason Lee nose bump kingpin ledge. Santa Monica Airlines flail mini ramp g-turn sketchy. Ledge indy grab masonite 50-50. Kien Lieu durometer skate or die fakie indy grab. Backside heel flip layback poseur. 

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

//Casper Christ air bail Greg Evans ledge. Kickturn street noseblunt slide hip. Grab Kevin Harris stoked pump. Lien air fastplant salad grind melancholy. Nosepicker Christ air Steve Olson carve durometer. Steve Caballero rail grab crail grab tailslide. Deck ollie Hugh Bod Boyle lipslide melancholy. Locals nosegrind 1080 rad. Frontside Jason Lee nose bump kingpin ledge. Santa Monica Airlines flail mini ramp g-turn sketchy. Ledge indy grab masonite 50-50. Kien Lieu durometer skate or die fakie indy grab. Backside heel flip layback poseur. 

?>