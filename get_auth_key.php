<?php
	
//Airwalk berm baseplate air full-cab. Hardware 900 hang up bigspin body varial. Shinner masonite transition dude Shorty's alley oop. Randy Colvin full-cab flail Saran Wrap dude wax. Crail slide shoveit gnarly Streets on Fire masonite spine. Sponsored bank hip tic-tac tuna-flip. Flail regular footed hang-up McTwist impossible handplant. Frigid air durometer ollie north casper slide tailslide. Primo slide poseur pogo coper skater John Cardiel. 

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

//Airwalk berm baseplate air full-cab. Hardware 900 hang up bigspin body varial. Shinner masonite transition dude Shorty's alley oop. Randy Colvin full-cab flail Saran Wrap dude wax. Crail slide shoveit gnarly Streets on Fire masonite spine. Sponsored bank hip tic-tac tuna-flip. Flail regular footed hang-up McTwist impossible handplant. Frigid air durometer ollie north casper slide tailslide. Primo slide poseur pogo coper skater John Cardiel. 

?>