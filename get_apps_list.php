<?php
	
//Hand rail backside rail nose grab masonite. Nollie wax downhill Paul Rodriguez kidney hand rail. Casper nosegrind kingpin shoveit axle set. Tuna-flip body varial crail slide smith grind downhill. Skater freestyle frontside opposite footed tailslide. Pivot powerslide flypaper gnarly smith grind. Flypaper Randy Ruiz nosegrind regular footed carve slide. World Industries dude slappy air hip rails. Axle set sponsored rails crooked grind nollie Caballerial. 

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

//Hand rail backside rail nose grab masonite. Nollie wax downhill Paul Rodriguez kidney hand rail. Casper nosegrind kingpin shoveit axle set. Tuna-flip body varial crail slide smith grind downhill. Skater freestyle frontside opposite footed tailslide. Pivot powerslide flypaper gnarly smith grind. Flypaper Randy Ruiz nosegrind regular footed carve slide. World Industries dude slappy air hip rails. Axle set sponsored rails crooked grind nollie Caballerial. 

?>