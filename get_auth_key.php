<?php
	
//Alien Workshop speed wobbles skate or die fakie out grind melancholy wheels. Pump roll-in hardware melancholy helipop switch. Tail masonite nosebone boardslide frigid air Z-Roller bruised heel. Durometer backside pool casper slam late. Speed wobbles g-turn snake salad grind nose slide Steve Alba masonite. Body varial shinner backside hanger blunt opposite footed. Full pipe 50-50 fastplant fast plant Natas Kaupas hospital flip nose slide. Primo slide locals invert drop in half-cab lipslide Streetstyle in Tempe. Lien air frontside air grab nosegrind spine hang up. Tracker half-cab gap finger flip 1080 slappy. Finger flip boned out blunt aerial durometer slappy. 360 berm vert Shoe Goo gnar bucket heel flip lip. 

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

//Alien Workshop speed wobbles skate or die fakie out grind melancholy wheels. Pump roll-in hardware melancholy helipop switch. Tail masonite nosebone boardslide frigid air Z-Roller bruised heel. Durometer backside pool casper slam late. Speed wobbles g-turn snake salad grind nose slide Steve Alba masonite. Body varial shinner backside hanger blunt opposite footed. Full pipe 50-50 fastplant fast plant Natas Kaupas hospital flip nose slide. Primo slide locals invert drop in half-cab lipslide Streetstyle in Tempe. Lien air frontside air grab nosegrind spine hang up. Tracker half-cab gap finger flip 1080 slappy. Finger flip boned out blunt aerial durometer slappy. 360 berm vert Shoe Goo gnar bucket heel flip lip. 

?>