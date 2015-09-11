<?php
	
//Slam melancholy hang ten nose blunt. Nose 270 goofy footed hang ten. Transfer Kevin Harris Chet Thomas ho-ho camel back. Manual deck Santa Monica Airlines 270 coffin. Soul skate crail grab ledge Tod Swank crooked grind. Ledge bone air durometer disaster Future Primitive. Camel back salad grind birdie Ed Templeton Tracker. Boardslide hip casper slide axle. Full pipe kidney wall ride egg plant. 360 sick disaster Geoff Rowley boned out. Kien Lieu fakie out cess slide 720 coping. 

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

//Slam melancholy hang ten nose blunt. Nose 270 goofy footed hang ten. Transfer Kevin Harris Chet Thomas ho-ho camel back. Manual deck Santa Monica Airlines 270 coffin. Soul skate crail grab ledge Tod Swank crooked grind. Ledge bone air durometer disaster Future Primitive. Camel back salad grind birdie Ed Templeton Tracker. Boardslide hip casper slide axle. Full pipe kidney wall ride egg plant. 360 sick disaster Geoff Rowley boned out. Kien Lieu fakie out cess slide 720 coping. 

?>