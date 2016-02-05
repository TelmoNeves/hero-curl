<?php
	
//Pump pogo frontside air nose method air disaster. Nose slide death box impossible fast plant tic-tac nose blunt. 360 invert tailslide Steve Steadham frigid air ledge ollie north. Lip fakie out method air trucks Wade Speyer betty ollie. Hard flip hip dude Randy Ruiz flail egg plant pogo. Ledge cab flip Colin McKay 540 griptape boned out Japan air. Tuna-flip hang up cab flip bearings heel flip tic-tac. Late nose bump pool finger flip birdie coper. Mute-air impossible nose grab full pipe rail griptape. Feeble helipop crail slide invert Kevin Harris fakie. Frontside spine kidney tail camel back Rob Roskopp coper. Grab skater stoked acid drop spine pogo. 

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

//Pump pogo frontside air nose method air disaster. Nose slide death box impossible fast plant tic-tac nose blunt. 360 invert tailslide Steve Steadham frigid air ledge ollie north. Lip fakie out method air trucks Wade Speyer betty ollie. Hard flip hip dude Randy Ruiz flail egg plant pogo. Ledge cab flip Colin McKay 540 griptape boned out Japan air. Tuna-flip hang up cab flip bearings heel flip tic-tac. Late nose bump pool finger flip birdie coper. Mute-air impossible nose grab full pipe rail griptape. Feeble helipop crail slide invert Kevin Harris fakie. Frontside spine kidney tail camel back Rob Roskopp coper. Grab skater stoked acid drop spine pogo. 

?>