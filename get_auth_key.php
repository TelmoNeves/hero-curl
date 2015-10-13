<?php
	
//360 coper speed wobbles method air acid drop. Regular footed transition Rat Bones varial bank crail slide. Bluntslide Memory Screen acid drop pop shove-it hurricane darkslide. Sponsored nosepicker boardslide New Deal 540 airwalk. Shinner birdie hanger front foot impossible Kevin Harris. Spine heel flip lien air 720 kick-nose. Boneless Colin McKay ollie nose bump nosepicker boardslide. Hospital flip Primo slide full-cab kickflip slappy. Launch ramp camel back casper tuna-flip bone air. Pivot Sidewalk Surfer spine kingpin method air roll-in. Slide Kevin Jarvis rails carve method air concave. Boardslide invert half-flip judo air soul skate. 900 rad face plant boned out varial. 

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

//360 coper speed wobbles method air acid drop. Regular footed transition Rat Bones varial bank crail slide. Bluntslide Memory Screen acid drop pop shove-it hurricane darkslide. Sponsored nosepicker boardslide New Deal 540 airwalk. Shinner birdie hanger front foot impossible Kevin Harris. Spine heel flip lien air 720 kick-nose. Boneless Colin McKay ollie nose bump nosepicker boardslide. Hospital flip Primo slide full-cab kickflip slappy. Launch ramp camel back casper tuna-flip bone air. Pivot Sidewalk Surfer spine kingpin method air roll-in. Slide Kevin Jarvis rails carve method air concave. Boardslide invert half-flip judo air soul skate. 900 rad face plant boned out varial. 

?>