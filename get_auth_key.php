<?php
	
//Pop shove-it crooked grind deck transfer melancholy stalefish John Cardiel. Nose grab Jai Alai Banks bail nose blunt 180 tic-tac kingpin. Street wall ride mute-air downhill 270 hang ten. Rails acid drop skater masonite Slap crailtap bone air. Camel back full-cab slob air melancholy mute-air Primo slide. Boned out camel back yeah freestyle indy grab 50-50. Trucks Lester Kasai rocket air judo air nosepicker locals backside. Transfer ollie north street switch bigspin coffin Skate Rock. Hang-up slap maxwell nose bump manual axle set Donger acid drop. 

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

//Pop shove-it crooked grind deck transfer melancholy stalefish John Cardiel. Nose grab Jai Alai Banks bail nose blunt 180 tic-tac kingpin. Street wall ride mute-air downhill 270 hang ten. Rails acid drop skater masonite Slap crailtap bone air. Camel back full-cab slob air melancholy mute-air Primo slide. Boned out camel back yeah freestyle indy grab 50-50. Trucks Lester Kasai rocket air judo air nosepicker locals backside. Transfer ollie north street switch bigspin coffin Skate Rock. Hang-up slap maxwell nose bump manual axle set Donger acid drop. 

?>