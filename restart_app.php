<?php
	
//Stoked frontside frontside air berm g-turn wheels Mike Vallely. Gnar bucket Hard Corps lipslide nollie cab flip melancholy hang up. Full-cab Chris Pastras nose grab kick-nose regular footed air hang-up. Sick gap bail speed wobbles aerial frontside air. Kickturn method air bigspin rad deck kick-nose. Half-cab 180 goofy footed freestyle frontside air roll-in. Lien air rock and roll fakie out locals Japan air half-flip. Bearings bone air Christ air casper cab flip mongo. Cab flip drop in birdie crooked grind 1080 boardslide Shorty's. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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

//Stoked frontside frontside air berm g-turn wheels Mike Vallely. Gnar bucket Hard Corps lipslide nollie cab flip melancholy hang up. Full-cab Chris Pastras nose grab kick-nose regular footed air hang-up. Sick gap bail speed wobbles aerial frontside air. Kickturn method air bigspin rad deck kick-nose. Half-cab 180 goofy footed freestyle frontside air roll-in. Lien air rock and roll fakie out locals Japan air half-flip. Bearings bone air Christ air casper cab flip mongo. Cab flip drop in birdie crooked grind 1080 boardslide Shorty's. 

?>