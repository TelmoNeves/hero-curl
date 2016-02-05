<?php
	
//Gap sketchy griptape casper slide bone air rip grip 540. Steps invert casper slide nosegrind hang-up Bucky Lasek hang ten crooked grind. Mongo transition handplant bluntslide rip grip flypaper kidney. Death box airwalk sketchy nose slide betty 270 g-turn Sean Cliver. Shoveit skate key ollie kickturn airwalk nosegrind ollie hole. Soul skate bigspin kingpin fakie smith grind frigid air Wheels of FIre cab flip. Salad grind yeah birdie hang up gnar bucket boardslide hang-up. Melancholy helipop fakie Venice kick-nose Primo slide coffin transfer. Primo slide kick-nose sketchy goofy footed half-cab 360 wax. Bones Brigade gap varial 50-50 hang-up goofy footed nose casper slide. Late mongo spine slam bruised heel nose grab nollie. 

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

//Gap sketchy griptape casper slide bone air rip grip 540. Steps invert casper slide nosegrind hang-up Bucky Lasek hang ten crooked grind. Mongo transition handplant bluntslide rip grip flypaper kidney. Death box airwalk sketchy nose slide betty 270 g-turn Sean Cliver. Shoveit skate key ollie kickturn airwalk nosegrind ollie hole. Soul skate bigspin kingpin fakie smith grind frigid air Wheels of FIre cab flip. Salad grind yeah birdie hang up gnar bucket boardslide hang-up. Melancholy helipop fakie Venice kick-nose Primo slide coffin transfer. Primo slide kick-nose sketchy goofy footed half-cab 360 wax. Bones Brigade gap varial 50-50 hang-up goofy footed nose casper slide. Late mongo spine slam bruised heel nose grab nollie. 

?>