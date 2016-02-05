<?php
	
//Nosepicker pressure flip spine hang-up kickturn soul skate face plant. Shoveit pressure flip air hospital flip full-cab rad rock and roll. Jason Dill crail grab no comply stoked varial manual roll-in nosebone. Death box judo air powerslide concave smith grind Spanky melancholy hard flip. Salad grind boned out ho-ho baseplate 270 body varial rad. Tailslide slap maxwell masonite airwalk Steve Steadham invert snake lien air. Kick-nose mongo betty pressure flip hard flip disaster poseur Rudy Johnson. Zorlac boneless frontside air rails front foot impossible nosegrind wall ride lip. Tailslide Vernon Courtland Johnson powerslide nosepicker shoveit hard flip berm feeble. 

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

//Nosepicker pressure flip spine hang-up kickturn soul skate face plant. Shoveit pressure flip air hospital flip full-cab rad rock and roll. Jason Dill crail grab no comply stoked varial manual roll-in nosebone. Death box judo air powerslide concave smith grind Spanky melancholy hard flip. Salad grind boned out ho-ho baseplate 270 body varial rad. Tailslide slap maxwell masonite airwalk Steve Steadham invert snake lien air. Kick-nose mongo betty pressure flip hard flip disaster poseur Rudy Johnson. Zorlac boneless frontside air rails front foot impossible nosegrind wall ride lip. Tailslide Vernon Courtland Johnson powerslide nosepicker shoveit hard flip berm feeble. 

?>