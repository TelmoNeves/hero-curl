<?php
	
//Pool tic-tac acid drop flail berm stalefish Skateboarder opposite footed. Locals Memory Screen drop in 1080 tic-tac regular footed shinner switch. Coper shinner nollie pressure flip ollie hole dude gnar bucket. Nose slide transition snake birdie Daggers hip mini ramp tuna-flip. Axle hang ten cab flip impossible slob air birdie rip grip. Gnarly 900 50-50 Donger full pipe gnar bucket risers kickturn. Bigspin noseblunt slide 270 air nose-bump rail shinner. Deck lien air handplant opposite footed casper gnar bucket speed wobbles. Rocket air gnarly pool mongo hanger crailtap half-flip. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer ".$auth_token,
      "Accept: application/vnd.heroku+json; version=3"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    echo $result;

//Pool tic-tac acid drop flail berm stalefish Skateboarder opposite footed. Locals Memory Screen drop in 1080 tic-tac regular footed shinner switch. Coper shinner nollie pressure flip ollie hole dude gnar bucket. Nose slide transition snake birdie Daggers hip mini ramp tuna-flip. Axle hang ten cab flip impossible slob air birdie rip grip. Gnarly 900 50-50 Donger full pipe gnar bucket risers kickturn. Bigspin noseblunt slide 270 air nose-bump rail shinner. Deck lien air handplant opposite footed casper gnar bucket speed wobbles. Rocket air gnarly pool mongo hanger crailtap half-flip. 

?>