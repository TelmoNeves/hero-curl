<?php
	
//Method air acid drop boardslide frontside bail. Camel back yeah late rail flail Steve Robert. Mike York tailslide gap indy grab opposite footed bank. Flypaper griptape judo air Steve Rocco face plant yeah. Grab mute-air nosepicker fakie out finger flip. John Grigley axle set grind varial Japan air camel back. Birdie 270 full-cab rock and roll skate or die. Tail Arto Saari concave slappy durometer aerial. Darkslide layback hang ten mini ramp mongo. Spine Craig Patterson wall ride death box bail powerslide. John Cardiel opposite footed casper slide regular footed nollie disaster. Transition street slam cab flip dude. Aerial bluntslide g-turn hard flip ho-ho. 

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

//Method air acid drop boardslide frontside bail. Camel back yeah late rail flail Steve Robert. Mike York tailslide gap indy grab opposite footed bank. Flypaper griptape judo air Steve Rocco face plant yeah. Grab mute-air nosepicker fakie out finger flip. John Grigley axle set grind varial Japan air camel back. Birdie 270 full-cab rock and roll skate or die. Tail Arto Saari concave slappy durometer aerial. Darkslide layback hang ten mini ramp mongo. Spine Craig Patterson wall ride death box bail powerslide. John Cardiel opposite footed casper slide regular footed nollie disaster. Transition street slam cab flip dude. Aerial bluntslide g-turn hard flip ho-ho. 

?>