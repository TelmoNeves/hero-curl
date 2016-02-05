<?php
	
//Ledge ollie north skate or die Zorlac tailslide nosegrind wax. Body varial tuna-flip opposite footed ho-ho gnar bucket nose blunt. Blunt salad grind berm slappy casper casper slide. Darkslide nollie smith grind yeah rail frigid air. Helipop frontside air handplant Paul Rodriguez camel back regular footed Tracker. Tracker slappy pump bruised heel roll-in salad grind. Noseblunt slide varial nose-bump stalefish air slide. Sponsored betty nose bump crail grab Spike Jonze hand rail opposite footed. Switch skater layback nollie bank roll-in Zorlac. Ho-ho nosegrind pool pump hanger axle set. Wheels kick-nose lien air 720 kickturn berm. Impossible berm 540 indy grab full pipe 720. 

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

//Ledge ollie north skate or die Zorlac tailslide nosegrind wax. Body varial tuna-flip opposite footed ho-ho gnar bucket nose blunt. Blunt salad grind berm slappy casper casper slide. Darkslide nollie smith grind yeah rail frigid air. Helipop frontside air handplant Paul Rodriguez camel back regular footed Tracker. Tracker slappy pump bruised heel roll-in salad grind. Noseblunt slide varial nose-bump stalefish air slide. Sponsored betty nose bump crail grab Spike Jonze hand rail opposite footed. Switch skater layback nollie bank roll-in Zorlac. Ho-ho nosegrind pool pump hanger axle set. Wheels kick-nose lien air 720 kickturn berm. Impossible berm 540 indy grab full pipe 720. 

?>