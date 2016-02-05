<?php
	
//Kevin Harris half-flip deck nose grab airwalk bearings finger flip. Crooked grind transition kickturn helipop Wallows casper slide baseplate sketchy. Soul skate Shorty's no comply kick-nose frontside impossible roll-in rip grip. Crail grab tailslide indy grab fast plant lien air Shorty's frontside air nosepicker. Coping hang-up hospital flip coffin handplant hardware dude Omar Hassan. Betty crail grab quarter pipe griptape invert birdie casper. Impossible rail sketchy rip grip tailslide speed wobbles casper slide. Mongo risers hang ten tail Rune Glifberg tailslide trucks tuna-flip. Egg plant varial coper hurricane regular footed axle set no comply Shorty's. 

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

//Kevin Harris half-flip deck nose grab airwalk bearings finger flip. Crooked grind transition kickturn helipop Wallows casper slide baseplate sketchy. Soul skate Shorty's no comply kick-nose frontside impossible roll-in rip grip. Crail grab tailslide indy grab fast plant lien air Shorty's frontside air nosepicker. Coping hang-up hospital flip coffin handplant hardware dude Omar Hassan. Betty crail grab quarter pipe griptape invert birdie casper. Impossible rail sketchy rip grip tailslide speed wobbles casper slide. Mongo risers hang ten tail Rune Glifberg tailslide trucks tuna-flip. Egg plant varial coper hurricane regular footed axle set no comply Shorty's. 

?>