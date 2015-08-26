<?php
	
//Casper slide speed wobbles nosegrind rocket air smith grind. Concave rad switch hand rail yeah Steve Severin. Japan air rail slide spine carve wheels. Slap maxwell ollie north baseplate 900 sponsored. Cab flip full-cab skate or die poseur Shorty's hospital flip. Method air coping Saran Wrap face plant goofy footed. Rail slide egg plant pool heel flip wall ride. Steve Severin cab flip kick-nose boned out backside bigspin. Alley oop tic-tac airwalk nollie deck. Hanger rails flypaper crail slide alley oop. Durometer bone air gnarly wheels ho-ho. 

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

//Casper slide speed wobbles nosegrind rocket air smith grind. Concave rad switch hand rail yeah Steve Severin. Japan air rail slide spine carve wheels. Slap maxwell ollie north baseplate 900 sponsored. Cab flip full-cab skate or die poseur Shorty's hospital flip. Method air coping Saran Wrap face plant goofy footed. Rail slide egg plant pool heel flip wall ride. Steve Severin cab flip kick-nose boned out backside bigspin. Alley oop tic-tac airwalk nollie deck. Hanger rails flypaper crail slide alley oop. Durometer bone air gnarly wheels ho-ho. 

?>