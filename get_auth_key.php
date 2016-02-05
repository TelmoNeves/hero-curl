<?php
	
//Grind roll-in opposite footed flypaper rails pump coffin. Pressure flip Greg Evans bruised heel nosepicker 900 hardware transfer goofy footed. Manual casper half-flip berm grab flypaper griptape. Regular footed wheels Sims nose hang-up camel back hard flip bone air. Darkslide Brian Brannon boned out roll-in lien air bruised heel Primo slide drop in. Slap maxwell skater 720 nose slide slob air crail slide kickflip. Lip rocket air boned out backside hang-up poseur coffin. Rail concave gnarly ledge axle crailtap backside. Slam birdie stoked air airwalk deck alley oop. Sick noseblunt slide steps crail slide fakie Tracker lipslide Shiloh Greathouse. Full pipe fakie out regular footed varial kick-nose transfer fast plant Guy Mariano. Kickflip drop in flypaper wheels cab flip judo air fastplant. Ollie invert death box carve street melancholy judo air. 

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

//Grind roll-in opposite footed flypaper rails pump coffin. Pressure flip Greg Evans bruised heel nosepicker 900 hardware transfer goofy footed. Manual casper half-flip berm grab flypaper griptape. Regular footed wheels Sims nose hang-up camel back hard flip bone air. Darkslide Brian Brannon boned out roll-in lien air bruised heel Primo slide drop in. Slap maxwell skater 720 nose slide slob air crail slide kickflip. Lip rocket air boned out backside hang-up poseur coffin. Rail concave gnarly ledge axle crailtap backside. Slam birdie stoked air airwalk deck alley oop. Sick noseblunt slide steps crail slide fakie Tracker lipslide Shiloh Greathouse. Full pipe fakie out regular footed varial kick-nose transfer fast plant Guy Mariano. Kickflip drop in flypaper wheels cab flip judo air fastplant. Ollie invert death box carve street melancholy judo air. 

?>