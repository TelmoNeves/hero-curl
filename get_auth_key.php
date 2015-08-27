<?php
	
//Half-cab griptape body varial Chris Pastras sponsored nollie hurricane. Baker handplant birdie cess slide bearings rails drop in. Yeah half-cab powerslide lipslide baseplate masonite. Kevin Staab crailtap pump concave mute-air slide aerial. Locals bigspin boardslide hanger mini ramp body varial. Shoveit deck rail slide boneless fast plant berm Bunson over the Junson. Nose-bump Japan air fakie no comply powerslide finger flip. Axle set gnarly Craig Patterson boardslide rail slide finger flip rail. Frigid air wall ride 1080 bigspin hard flip blunt. Trucks no comply casper Kevin Harris melancholy stalefish. Kickflip 360 pogo deck cab flip hardware. Japan air Saran Wrap hanger kick-nose nose bump lip. Ron Allen salad grind shinner melancholy fakie Kevin Harris lip. 

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

//Half-cab griptape body varial Chris Pastras sponsored nollie hurricane. Baker handplant birdie cess slide bearings rails drop in. Yeah half-cab powerslide lipslide baseplate masonite. Kevin Staab crailtap pump concave mute-air slide aerial. Locals bigspin boardslide hanger mini ramp body varial. Shoveit deck rail slide boneless fast plant berm Bunson over the Junson. Nose-bump Japan air fakie no comply powerslide finger flip. Axle set gnarly Craig Patterson boardslide rail slide finger flip rail. Frigid air wall ride 1080 bigspin hard flip blunt. Trucks no comply casper Kevin Harris melancholy stalefish. Kickflip 360 pogo deck cab flip hardware. Japan air Saran Wrap hanger kick-nose nose bump lip. Ron Allen salad grind shinner melancholy fakie Kevin Harris lip. 

?>