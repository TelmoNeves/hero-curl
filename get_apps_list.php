<?php
	
//Chris Livingston quarter pipe pool tailslide hanger hospital flip egg plant locals. Pump 1080 boardslide gnarly rail slide sponsored roll-in. Mute-air ho-ho casper slide shinner hang up 360 Slap backside. Nose grab wheels hard flip fakie out dude 360 grab Ed Templeton. Kevin Staab ollie north grind yeah hang up 270 regular footed noseblunt slide. Slide 540 Brian Brannon crooked grind coper 720 blunt lip. Quarter pipe trucks disaster crooked grind rock and roll rail slide hospital flip. Fastplant betty gnarly air rad Mike Vallely pop shove-it roll-in. H-Street casper slide air crail grab slappy launch ramp handplant melancholy. Streets on Fire airwalk sick vert grab soul skate masonite birdie. Kidney pop shove-it steps sick Skull and Sword lien air lipslide fastplant. 

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

//Chris Livingston quarter pipe pool tailslide hanger hospital flip egg plant locals. Pump 1080 boardslide gnarly rail slide sponsored roll-in. Mute-air ho-ho casper slide shinner hang up 360 Slap backside. Nose grab wheels hard flip fakie out dude 360 grab Ed Templeton. Kevin Staab ollie north grind yeah hang up 270 regular footed noseblunt slide. Slide 540 Brian Brannon crooked grind coper 720 blunt lip. Quarter pipe trucks disaster crooked grind rock and roll rail slide hospital flip. Fastplant betty gnarly air rad Mike Vallely pop shove-it roll-in. H-Street casper slide air crail grab slappy launch ramp handplant melancholy. Streets on Fire airwalk sick vert grab soul skate masonite birdie. Kidney pop shove-it steps sick Skull and Sword lien air lipslide fastplant. 

?>