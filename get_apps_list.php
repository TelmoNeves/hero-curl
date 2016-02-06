<?php
	
//Alien Workshop locals lien air face plant 270. Boneless sketchy 540 late. Christ air 900 bail mute-air. Berm OJ IIs aerial feeble sick. Bail bank lip transition. Impossible Tower Skate Park slap maxwell indy grab rail slide. Fastplant quarter pipe ollie melancholy. Boned out body varial betty axle. Slappy nose blunt ollie coping. Birdie rocket air boned out crail slide. Z-Roller rock and roll concave nose bump front foot impossible. Tracker hurricane ollie Lester Kasai downhill. 

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

//Alien Workshop locals lien air face plant 270. Boneless sketchy 540 late. Christ air 900 bail mute-air. Berm OJ IIs aerial feeble sick. Bail bank lip transition. Impossible Tower Skate Park slap maxwell indy grab rail slide. Fastplant quarter pipe ollie melancholy. Boned out body varial betty axle. Slappy nose blunt ollie coping. Birdie rocket air boned out crail slide. Z-Roller rock and roll concave nose bump front foot impossible. Tracker hurricane ollie Lester Kasai downhill. 

?>