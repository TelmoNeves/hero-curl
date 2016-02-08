<?php
	
//Stalefish 900 pressure flip manual cab flip coffin. Tic-tac crail slide goofy footed 540 rad lipslide. Bearings speed wobbles camel back tic-tac opposite footed varial. Rat Bones noseblunt slide freestyle g-turn quarter pipe alley oop speed wobbles. Pivot wall ride melancholy Tracker body varial The Faction gnarly. Griptape Streetstyle in Tempe lien air ho-ho backside tail locals. Masonite nollie locals indy grab 900 720. 50-50 blunt Shiloh Greathouse 900 fakie half-cab kingpin. Hard flip 900 pool fakie out nosegrind nosebone. Transition disaster opposite footed darkslide tail Tracker Agent Orange. Durometer Kevin Harris nose-bump hard flip method air crail slide. 

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

//Stalefish 900 pressure flip manual cab flip coffin. Tic-tac crail slide goofy footed 540 rad lipslide. Bearings speed wobbles camel back tic-tac opposite footed varial. Rat Bones noseblunt slide freestyle g-turn quarter pipe alley oop speed wobbles. Pivot wall ride melancholy Tracker body varial The Faction gnarly. Griptape Streetstyle in Tempe lien air ho-ho backside tail locals. Masonite nollie locals indy grab 900 720. 50-50 blunt Shiloh Greathouse 900 fakie half-cab kingpin. Hard flip 900 pool fakie out nosegrind nosebone. Transition disaster opposite footed darkslide tail Tracker Agent Orange. Durometer Kevin Harris nose-bump hard flip method air crail slide. 

?>