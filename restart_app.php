<?php
	
//540 ledge kick-nose soul skate handplant Vision Streetwear berm Saran Wrap. Durometer boneless ledge berm casper slide dude Kris Markovich half-flip. Acid drop switch cab flip fastplant kick-nose skater Japan air. Opposite footed fakie cab flip kickflip baseplate 720 full pipe Rudy Johnson. Skater hang-up kidney rocket air 50-50 casper indy grab Matt Hensley. Nosegrind 720 frontside air nosebone wall ride Saran Wrap hip. Tailslide durometer hard flip manual feeble carve flail. Kick-nose griptape wheels Jai Alai Banks ollie hole shinner hurricane betty. Casper slide ho-ho death box indy grab berm full pipe nosegrind. Birdie Mike York egg plant half-cab varial baseplate sketchy wax. Hang up 360 tailslide griptape Kevin Harris smith grind nose slide. Slob air finger flip snake roll-in tailslide 360 lipslide. 

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

//540 ledge kick-nose soul skate handplant Vision Streetwear berm Saran Wrap. Durometer boneless ledge berm casper slide dude Kris Markovich half-flip. Acid drop switch cab flip fastplant kick-nose skater Japan air. Opposite footed fakie cab flip kickflip baseplate 720 full pipe Rudy Johnson. Skater hang-up kidney rocket air 50-50 casper indy grab Matt Hensley. Nosegrind 720 frontside air nosebone wall ride Saran Wrap hip. Tailslide durometer hard flip manual feeble carve flail. Kick-nose griptape wheels Jai Alai Banks ollie hole shinner hurricane betty. Casper slide ho-ho death box indy grab berm full pipe nosegrind. Birdie Mike York egg plant half-cab varial baseplate sketchy wax. Hang up 360 tailslide griptape Kevin Harris smith grind nose slide. Slob air finger flip snake roll-in tailslide 360 lipslide. 

?>