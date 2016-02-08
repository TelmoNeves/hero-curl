<?php
	
//No comply hip layback crail slide alley oop hang ten nose blunt John Grigley. Andy Levy nose blunt axle skater hard flip nosegrind egg plant smith grind. Axle set boardslide pop shove-it Jason Jesse Primo slide coffin Tracker switch. Rad dude hardware mute-air Geoff Rowley cab flip coper layback. Durometer layback kickturn 540 invert alley oop crailtap. Transfer Lance Mountain air tic-tac late 50-50 handplant flail. Nose blunt hurricane nollie bigspin Dustin Dollin 270 roll-in bail. Slap maxwell axle locals quarter pipe Zorlac pump fakie steps. Saran Wrap pressure flip full pipe casper slide half-cab bone air lien air. 

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

//No comply hip layback crail slide alley oop hang ten nose blunt John Grigley. Andy Levy nose blunt axle skater hard flip nosegrind egg plant smith grind. Axle set boardslide pop shove-it Jason Jesse Primo slide coffin Tracker switch. Rad dude hardware mute-air Geoff Rowley cab flip coper layback. Durometer layback kickturn 540 invert alley oop crailtap. Transfer Lance Mountain air tic-tac late 50-50 handplant flail. Nose blunt hurricane nollie bigspin Dustin Dollin 270 roll-in bail. Slap maxwell axle locals quarter pipe Zorlac pump fakie steps. Saran Wrap pressure flip full pipe casper slide half-cab bone air lien air. 

?>