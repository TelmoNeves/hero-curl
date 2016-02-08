<?php
	
//Hang-up air helipop frontside. Casper slide deck Z-Roller freestyle poseur. Griptape noseblunt slide chicken wing aerial Randy Ruiz. Kick-nose heel flip grind tuna-flip. Bonite fakie out 360 powerslide crail grab. Lien air impossible nollie tuna-flip. Snake finger flip tic-tac coffin. 360 impossible mute-air regular footed. Grind King gap nosebone lien air cab flip. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer ".$auth_token,
      "Accept: application/vnd.heroku+json; version=3"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    echo $result;

//Hang-up air helipop frontside. Casper slide deck Z-Roller freestyle poseur. Griptape noseblunt slide chicken wing aerial Randy Ruiz. Kick-nose heel flip grind tuna-flip. Bonite fakie out 360 powerslide crail grab. Lien air impossible nollie tuna-flip. Snake finger flip tic-tac coffin. 360 impossible mute-air regular footed. Grind King gap nosebone lien air cab flip. 

?>