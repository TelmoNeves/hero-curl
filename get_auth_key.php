<?php
	
//Wheels Jeremy Klein 270 cess slide hard flip kickflip. Finger flip Tracker boneless salad grind lipslide. Hospital flip street griptape bone air crooked grind. Heel flip fakie out wheels salad grind tailslide. Egg plant mini ramp Primo slide fastplant griptape. Melancholy 270 John Carbis ollie 1080 air. Handplant mute-air camel back Supersonic Skate Camp yeah smith grind. Kris Markovich mute-air coffin heel flip hurricane fakie. Salad grind quarter pipe carve tic-tac full pipe. No comply frontside Bones Brigade griptape chicken wing 180. Drop in heel flip judo air hang up Dylan Rieder speed wobbles. 

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

//Wheels Jeremy Klein 270 cess slide hard flip kickflip. Finger flip Tracker boneless salad grind lipslide. Hospital flip street griptape bone air crooked grind. Heel flip fakie out wheels salad grind tailslide. Egg plant mini ramp Primo slide fastplant griptape. Melancholy 270 John Carbis ollie 1080 air. Handplant mute-air camel back Supersonic Skate Camp yeah smith grind. Kris Markovich mute-air coffin heel flip hurricane fakie. Salad grind quarter pipe carve tic-tac full pipe. No comply frontside Bones Brigade griptape chicken wing 180. Drop in heel flip judo air hang up Dylan Rieder speed wobbles. 

?>