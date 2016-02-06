<?php
	
//Ledge Gator Saran Wrap body varial boneless layback bone air. 360 transition baseplate tic-tac trucks varial. Quarter pipe pump street tuna-flip Vision full pipe gnarly. Nosebone skate key tail shinner body varial 540. Fastplant Caballerial 540 street hand rail bluntslide varial. Nosegrind pool 180 half-flip kickflip pogo. Nosebone body varial slob air ollie fastplant nose blunt. Skateboard Shuffle judo air wall ride acid drop launch ramp slide varial. Chicken wing kidney tic-tac Kevin Harris sketchy method air. Brooklyn Banks hip carve dude tailslide boned out powerslide. Concave pop shove-it stoked bigspin snake pump. 

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

//Ledge Gator Saran Wrap body varial boneless layback bone air. 360 transition baseplate tic-tac trucks varial. Quarter pipe pump street tuna-flip Vision full pipe gnarly. Nosebone skate key tail shinner body varial 540. Fastplant Caballerial 540 street hand rail bluntslide varial. Nosegrind pool 180 half-flip kickflip pogo. Nosebone body varial slob air ollie fastplant nose blunt. Skateboard Shuffle judo air wall ride acid drop launch ramp slide varial. Chicken wing kidney tic-tac Kevin Harris sketchy method air. Brooklyn Banks hip carve dude tailslide boned out powerslide. Concave pop shove-it stoked bigspin snake pump. 

?>