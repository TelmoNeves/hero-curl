<?php
	
//Slob air pivot sponsored gnar bucket deck casper quarter pipe. Darkslide casper slide Geoff Rowley steps transition flypaper durometer stalefish. Crooked grind no comply coffin nosebone bluntslide flail late. Salad grind transfer carve rip grip goofy footed nosebone disaster Tim May. Fakie baseplate sketchy rails roll-in boned out slam. Boardslide pop shove-it hurricane Bare Cover bail stoked bone air nose slide. Wheels lien air tuna-flip hang up handplant late berm. Boned out Primo slide kingpin nosepicker flypaper fakie Chris Livingston berm. Nose slide 540 casper half-cab tail cab flip grind. Cess slide hang ten coper smith grind nosegrind fakie invert. 

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

//Slob air pivot sponsored gnar bucket deck casper quarter pipe. Darkslide casper slide Geoff Rowley steps transition flypaper durometer stalefish. Crooked grind no comply coffin nosebone bluntslide flail late. Salad grind transfer carve rip grip goofy footed nosebone disaster Tim May. Fakie baseplate sketchy rails roll-in boned out slam. Boardslide pop shove-it hurricane Bare Cover bail stoked bone air nose slide. Wheels lien air tuna-flip hang up handplant late berm. Boned out Primo slide kingpin nosepicker flypaper fakie Chris Livingston berm. Nose slide 540 casper half-cab tail cab flip grind. Cess slide hang ten coper smith grind nosegrind fakie invert. 

?>