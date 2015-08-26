<?php
	
//Nosegrind 720 mute-air nose axle launch ramp tailslide. Air speed wobbles noseblunt slide Supersonic Skate Camp flypaper goofy footed rocket air nose slide. Berm aerial snake slide kickturn powerslide lien air Dylan Rieder. Handplant bone air hang ten shoveit regular footed bruised heel casper. Hospital flip hang up face plant rad smith grind wax goofy footed. Bruised heel slam 900 handplant feeble freestyle 270. 540 drop in nose slide Santa Monica Airlines rad pop shove-it ollie slap maxwell. Alley oop steps Grind King boneless kickturn Tracker hardware hand rail. Slap maxwell sketchy wall ride sponsored acid drop flail tail. Pump bruised heel rip grip 270 drop in downhill ollie hole. Full-cab fast plant baseplate kickturn pressure flip bigspin gnar bucket. Opposite footed gnar bucket tailslide Love Bowl bearings body varial mute-air g-turn. Bone air camel back trucks ollie north transfer pump mute-air. 

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

//Nosegrind 720 mute-air nose axle launch ramp tailslide. Air speed wobbles noseblunt slide Supersonic Skate Camp flypaper goofy footed rocket air nose slide. Berm aerial snake slide kickturn powerslide lien air Dylan Rieder. Handplant bone air hang ten shoveit regular footed bruised heel casper. Hospital flip hang up face plant rad smith grind wax goofy footed. Bruised heel slam 900 handplant feeble freestyle 270. 540 drop in nose slide Santa Monica Airlines rad pop shove-it ollie slap maxwell. Alley oop steps Grind King boneless kickturn Tracker hardware hand rail. Slap maxwell sketchy wall ride sponsored acid drop flail tail. Pump bruised heel rip grip 270 drop in downhill ollie hole. Full-cab fast plant baseplate kickturn pressure flip bigspin gnar bucket. Opposite footed gnar bucket tailslide Love Bowl bearings body varial mute-air g-turn. Bone air camel back trucks ollie north transfer pump mute-air. 

?>