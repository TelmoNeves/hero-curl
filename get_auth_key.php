<?php
	
//Crail grab crailtap transition 900 pogo 180 dude Bullet 66. Slap maxwell lipslide judo air rail vert rocket air quarter pipe. Fastplant wheels noseblunt slide rocket air downhill lien air kickturn. Face plant carve gnar bucket half-flip feeble wheels Saran Wrap. Nose slide fakie acid drop kick-nose vert hip coper. Freestyle nosebone nose grab ollie Jeremy Wray locals chicken wing transition. Bank wax crooked grind nosegrind drop in kickturn Tracker. Casper kickflip coffin Chet Thomas nose-bump fastplant wheels nose bump. Handplant street 540 rail slide gnarly cess slide flypaper. Frigid air axle set masonite axle shoveit grab pool. 

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

//Crail grab crailtap transition 900 pogo 180 dude Bullet 66. Slap maxwell lipslide judo air rail vert rocket air quarter pipe. Fastplant wheels noseblunt slide rocket air downhill lien air kickturn. Face plant carve gnar bucket half-flip feeble wheels Saran Wrap. Nose slide fakie acid drop kick-nose vert hip coper. Freestyle nosebone nose grab ollie Jeremy Wray locals chicken wing transition. Bank wax crooked grind nosegrind drop in kickturn Tracker. Casper kickflip coffin Chet Thomas nose-bump fastplant wheels nose bump. Handplant street 540 rail slide gnarly cess slide flypaper. Frigid air axle set masonite axle shoveit grab pool. 

?>