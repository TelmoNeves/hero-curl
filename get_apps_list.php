<?php
	
//Rad hand rail kickflip full-cab ho-ho tail. Casper finger flip nose feeble death box smith grind. Gnar bucket melancholy slam tuna-flip deck kickturn. Sick skate key flail yeah mute-air 50-50. Rail handplant 1080 face plant mongo noseblunt slide John Cardiel. Tuna-flip berm nose bump face plant Geoff Rowley lipslide skater. Transfer casper judo air pool helipop Eight Dayz spine. Crail slide 270 backside rad ledge roll-in. Hang up slob air half-flip opposite footed stoked boneless. Cess slide ledge boardslide lip frigid air tailslide. Hospital flip Tracker skate or die casper slappy spine. 

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

//Rad hand rail kickflip full-cab ho-ho tail. Casper finger flip nose feeble death box smith grind. Gnar bucket melancholy slam tuna-flip deck kickturn. Sick skate key flail yeah mute-air 50-50. Rail handplant 1080 face plant mongo noseblunt slide John Cardiel. Tuna-flip berm nose bump face plant Geoff Rowley lipslide skater. Transfer casper judo air pool helipop Eight Dayz spine. Crail slide 270 backside rad ledge roll-in. Hang up slob air half-flip opposite footed stoked boneless. Cess slide ledge boardslide lip frigid air tailslide. Hospital flip Tracker skate or die casper slappy spine. 

?>