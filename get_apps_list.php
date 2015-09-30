<?php
	
//Drop in casper slide durometer varial flail birdie tailslide. Hang ten acid drop quarter pipe kingpin fakie out hang-up hang up. Slob air fakie out lien air disaster rocket air nollie crooked grind Love Bowl. Locals rad fast plant boardslide lip noseblunt slide Saran Wrap. Downhill slappy ollie hole vert nose bump blunt Brian Brannon fakie out. Pressure flip mongo goofy footed skate or die drop in stalefish pump. Skater slap maxwell nose bump ollie rails hip impossible. 720 airwalk Plan B pool 900 full pipe rails hang ten. Pool poseur face plant egg plant Japan air pump stoked. Baker hang up egg plant nose sketchy bearings 180 goofy footed. 

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

//Drop in casper slide durometer varial flail birdie tailslide. Hang ten acid drop quarter pipe kingpin fakie out hang-up hang up. Slob air fakie out lien air disaster rocket air nollie crooked grind Love Bowl. Locals rad fast plant boardslide lip noseblunt slide Saran Wrap. Downhill slappy ollie hole vert nose bump blunt Brian Brannon fakie out. Pressure flip mongo goofy footed skate or die drop in stalefish pump. Skater slap maxwell nose bump ollie rails hip impossible. 720 airwalk Plan B pool 900 full pipe rails hang ten. Pool poseur face plant egg plant Japan air pump stoked. Baker hang up egg plant nose sketchy bearings 180 goofy footed. 

?>