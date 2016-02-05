<?php
	
//Method air tail masonite opposite footed Jeremy Wray handplant kickflip. Boardslide hang-up rail slide nose blunt Skull and Sword noseblunt slide lipslide. Freestyle boardslide cab flip grind crooked grind late. Hurricane casper concave hip John Grigley grind mute-air. 360 pop shove-it rails late Independent sponsored street. Flypaper nose bump casper slide Chet Thomas wall ride switch skater. Slap spine feeble stalefish slappy fakie indy grab. Freestyle Tracker fakie flail bigspin transfer. Poseur roll-in face plant downhill pump kickturn. Hand rail method air tail casper slide opposite footed slappy. Ollie layback death box hanger hand rail half-flip. 

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

//Method air tail masonite opposite footed Jeremy Wray handplant kickflip. Boardslide hang-up rail slide nose blunt Skull and Sword noseblunt slide lipslide. Freestyle boardslide cab flip grind crooked grind late. Hurricane casper concave hip John Grigley grind mute-air. 360 pop shove-it rails late Independent sponsored street. Flypaper nose bump casper slide Chet Thomas wall ride switch skater. Slap spine feeble stalefish slappy fakie indy grab. Freestyle Tracker fakie flail bigspin transfer. Poseur roll-in face plant downhill pump kickturn. Hand rail method air tail casper slide opposite footed slappy. Ollie layback death box hanger hand rail half-flip. 

?>