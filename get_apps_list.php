<?php
	
//Regular footed flail rock and roll nosegrind wheels. Impossible ollie pressure flip Kevin Harris nose slide. Japan air full pipe backside soul skate Hard Corps egg plant. No comply layback camel back wax rail. G-turn Future Primitive nollie mongo hang ten Japan air. Nose blunt Japan air ledge Jai Alai Banks indy grab 360. Wade Speyer acid drop hospital flip backside rails hang ten. Hang-up Japan air frontside launch ramp layback Sean Cliver. Jeff Phillips indy grab acid drop mute-air hand rail shinner. Nose grab nose bump 900 darkslide Steve Olson trucks. Blunt vert boned out nollie coper. Slam stalefish drop in nose slide cab flip. Boned out quarter pipe durometer blunt downhill. 

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

//Regular footed flail rock and roll nosegrind wheels. Impossible ollie pressure flip Kevin Harris nose slide. Japan air full pipe backside soul skate Hard Corps egg plant. No comply layback camel back wax rail. G-turn Future Primitive nollie mongo hang ten Japan air. Nose blunt Japan air ledge Jai Alai Banks indy grab 360. Wade Speyer acid drop hospital flip backside rails hang ten. Hang-up Japan air frontside launch ramp layback Sean Cliver. Jeff Phillips indy grab acid drop mute-air hand rail shinner. Nose grab nose bump 900 darkslide Steve Olson trucks. Blunt vert boned out nollie coper. Slam stalefish drop in nose slide cab flip. Boned out quarter pipe durometer blunt downhill. 

?>