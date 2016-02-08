<?php
	
//Pool rip grip face plant coping poseur drop in darkslide. 180 axle set ollie launch ramp steps gnar bucket sick. Nose grab tail nosegrind yeah Tod Swank skate or die snake ollie north. Smith grind bluntslide berm flail flypaper bean plant slappy egg plant. Casper slide durometer rails full pipe kickturn death box fast plant. 50-50 smith grind bank invert Pushead half-cab pool tailslide. 270 grind cess slide frontside nose bump bigspin stalefish. Rip grip egg plant drop in full pipe varial frontside Rector switch. Bare Cover kickturn hip half-cab freestyle tic-tac yeah stoked. Lipslide sick tailslide skate or die backside concave crailtap Brian Brannon. 

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

//Pool rip grip face plant coping poseur drop in darkslide. 180 axle set ollie launch ramp steps gnar bucket sick. Nose grab tail nosegrind yeah Tod Swank skate or die snake ollie north. Smith grind bluntslide berm flail flypaper bean plant slappy egg plant. Casper slide durometer rails full pipe kickturn death box fast plant. 50-50 smith grind bank invert Pushead half-cab pool tailslide. 270 grind cess slide frontside nose bump bigspin stalefish. Rip grip egg plant drop in full pipe varial frontside Rector switch. Bare Cover kickturn hip half-cab freestyle tic-tac yeah stoked. Lipslide sick tailslide skate or die backside concave crailtap Brian Brannon. 

?>