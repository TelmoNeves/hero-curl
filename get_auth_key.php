<?php
	
//Griptape mongo ollie judo air tic-tac. Nosepicker mini ramp nose Thunder ollie casper slide. Kidney ollie yeah Chris Livingston bail lipslide. Betty snake skate key Mark Gonzales half-cab frigid air. Axle hardware Bones Brigade kickturn quarter pipe risers. Finger flip drop in manual boardslide fast plant. Betty Ed Templeton axle full pipe slam handplant. Tailslide Rob Welsh varial nose grab fakie out switch. Impossible air hanger disaster acid drop. Airwalk grind camel back hurricane pogo. 

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

//Griptape mongo ollie judo air tic-tac. Nosepicker mini ramp nose Thunder ollie casper slide. Kidney ollie yeah Chris Livingston bail lipslide. Betty snake skate key Mark Gonzales half-cab frigid air. Axle hardware Bones Brigade kickturn quarter pipe risers. Finger flip drop in manual boardslide fast plant. Betty Ed Templeton axle full pipe slam handplant. Tailslide Rob Welsh varial nose grab fakie out switch. Impossible air hanger disaster acid drop. Airwalk grind camel back hurricane pogo. 

?>