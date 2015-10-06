<?php
	
//Hospital flip grind rip grip smith grind crailtap birdie. Yeah fakie concave ollie frontside air pogo. Nose grab 720 transition finger flip fastplant method air. Tuna-flip hand rail crail slide Shawn Dutton indy grab boned out Saran Wrap. Acid drop handplant ledge steps Kien Lieu backside hang ten. Layback Shawn Dutton crail grab noseblunt slide fast plant nose slide nose blunt. Hard flip g-turn powerslide Randy Ruiz half-cab nose bail. Boned out poseur axle Love Bowl stoked aerial mute-air. Wax Geoff Rowley bruised heel varial deck rail hardware. Rails full pipe no comply nose slide late betty. Transfer berm lip Justin Regan face plant smith grind boardslide. 

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

//Hospital flip grind rip grip smith grind crailtap birdie. Yeah fakie concave ollie frontside air pogo. Nose grab 720 transition finger flip fastplant method air. Tuna-flip hand rail crail slide Shawn Dutton indy grab boned out Saran Wrap. Acid drop handplant ledge steps Kien Lieu backside hang ten. Layback Shawn Dutton crail grab noseblunt slide fast plant nose slide nose blunt. Hard flip g-turn powerslide Randy Ruiz half-cab nose bail. Boned out poseur axle Love Bowl stoked aerial mute-air. Wax Geoff Rowley bruised heel varial deck rail hardware. Rails full pipe no comply nose slide late betty. Transfer berm lip Justin Regan face plant smith grind boardslide. 

?>