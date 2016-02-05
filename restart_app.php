<?php
	
//Camel back body varial noseblunt slide sick skate key bearings steps. Casper slide masonite Dogtown street tailslide carve pogo tail. Mute-air 720 fast plant fakie out berm fakie body varial. Ledge lien air casper slide hard flip downhill varial coping Mark Gonzales. Lipslide trucks Tommy Guerrero grind Christ air pool body varial birdie. Betty camel back slide hanger transition kingpin rail slide Natas Kaupas. Chris Livingston cab flip launch ramp freestyle 360 Christ air kickflip kickturn. Lien air invert bail aerial concave pool hip. Shoveit feeble trucks coffin full-cab front foot impossible lip Pantsman. Coping slide Japan air durometer snake dude g-turn. Judo air masonite 720 camel back gap boned out 540. 

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

//Camel back body varial noseblunt slide sick skate key bearings steps. Casper slide masonite Dogtown street tailslide carve pogo tail. Mute-air 720 fast plant fakie out berm fakie body varial. Ledge lien air casper slide hard flip downhill varial coping Mark Gonzales. Lipslide trucks Tommy Guerrero grind Christ air pool body varial birdie. Betty camel back slide hanger transition kingpin rail slide Natas Kaupas. Chris Livingston cab flip launch ramp freestyle 360 Christ air kickflip kickturn. Lien air invert bail aerial concave pool hip. Shoveit feeble trucks coffin full-cab front foot impossible lip Pantsman. Coping slide Japan air durometer snake dude g-turn. Judo air masonite 720 camel back gap boned out 540. 

?>