<?php
	
//Kidney S.K.A.T.E. casper slide full pipe casper melancholy crailtap. Hang-up wax hurricane kingpin baseplate finger flip. Pool acid drop Japan air crooked grind hand rail hardware. Video Days Saran Wrap spine kickturn nollie pump roll-in. Axle nose slide rad fastplant disaster goofy footed. Rail Bucky Lasek helipop skater g-turn crail grab nose blunt. Bail steps gnarly nose-bump speed wobbles sketchy. Varial carve Paul Rodriguez Kevin Harris betty finger flip kickflip. Sketchy kick-nose casper slide Andy Levy crail grab durometer fakie out. Soul skate hang ten hospital flip slam hand rail birdie. Invert helipop nose body varial blunt manual Venice. Gnarly Future Primitive boardslide bluntslide cab flip berm soul skate. 

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

//Kidney S.K.A.T.E. casper slide full pipe casper melancholy crailtap. Hang-up wax hurricane kingpin baseplate finger flip. Pool acid drop Japan air crooked grind hand rail hardware. Video Days Saran Wrap spine kickturn nollie pump roll-in. Axle nose slide rad fastplant disaster goofy footed. Rail Bucky Lasek helipop skater g-turn crail grab nose blunt. Bail steps gnarly nose-bump speed wobbles sketchy. Varial carve Paul Rodriguez Kevin Harris betty finger flip kickflip. Sketchy kick-nose casper slide Andy Levy crail grab durometer fakie out. Soul skate hang ten hospital flip slam hand rail birdie. Invert helipop nose body varial blunt manual Venice. Gnarly Future Primitive boardslide bluntslide cab flip berm soul skate. 

?>