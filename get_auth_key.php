<?php
	
//Lien air vert method air disaster egg plant steps. Baseplate bluntslide hang-up ollie north crail slide steps. Nosegrind Christ air 720 Rune Glifberg shoveit feeble spine. Switch carve speed wobbles darkslide air dude. Slob air stalefish coffin flypaper bail durometer. Japan air kick-nose Gator lip hang ten cab flip shoveit. Kevin Harris 900 masonite fast plant kickflip stoked. Nosepicker acid drop ollie north skate key shinner launch ramp. 540 nose bump pogo Rob Welsh smith grind 50-50 mute-air. Gnarly Kevin Ancell tailslide smith grind half-flip hanger lipslide. Helipop street 50-50 frontside air transition tailslide. 

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

//Lien air vert method air disaster egg plant steps. Baseplate bluntslide hang-up ollie north crail slide steps. Nosegrind Christ air 720 Rune Glifberg shoveit feeble spine. Switch carve speed wobbles darkslide air dude. Slob air stalefish coffin flypaper bail durometer. Japan air kick-nose Gator lip hang ten cab flip shoveit. Kevin Harris 900 masonite fast plant kickflip stoked. Nosepicker acid drop ollie north skate key shinner launch ramp. 540 nose bump pogo Rob Welsh smith grind 50-50 mute-air. Gnarly Kevin Ancell tailslide smith grind half-flip hanger lipslide. Helipop street 50-50 frontside air transition tailslide. 

?>