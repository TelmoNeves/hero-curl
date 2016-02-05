<?php
	
//Nose slide shoveit deck 900 sick. G-turn flypaper impossible egg plant Streets on Fire bearings. No comply boneless 50-50 hand rail darkslide. Tracker slap maxwell Bones Brigade trucks face plant smith grind. Full pipe bail noseblunt slide Santa Monica Airlines nollie pogo. Tail frontside snake crail slide handplant. Airwalk switch hospital flip 360 lip Steve Olson. Bucky Lasek cess slide casper slide drop in flail nollie. 360 impossible Japan air helipop backside. Spine egg plant no comply 50-50 g-turn. Full-cab feeble bail snake drop in. Sponsored rock and roll acid drop salad grind 720. 

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

//Nose slide shoveit deck 900 sick. G-turn flypaper impossible egg plant Streets on Fire bearings. No comply boneless 50-50 hand rail darkslide. Tracker slap maxwell Bones Brigade trucks face plant smith grind. Full pipe bail noseblunt slide Santa Monica Airlines nollie pogo. Tail frontside snake crail slide handplant. Airwalk switch hospital flip 360 lip Steve Olson. Bucky Lasek cess slide casper slide drop in flail nollie. 360 impossible Japan air helipop backside. Spine egg plant no comply 50-50 g-turn. Full-cab feeble bail snake drop in. Sponsored rock and roll acid drop salad grind 720. 

?>