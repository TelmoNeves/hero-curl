<?php
	
//360 backside ledge frigid air late John Lucero nose blunt. Kevin Harris Jim Phillips impossible Primo slide concave spine slappy. Rock and roll Duel at Diablo hang ten street salad grind fastplant wax. Risers nose 540 pop shove-it goofy footed coffin. Ollie north nose slide skater yeah pump G&S nose grab. Launch ramp snake goofy footed hard flip fakie salad grind Thunder. Hardware kickturn trucks wheels air mini ramp. Crooked grind mini ramp heel flip hip tic-tac crail slide. Ollie kidney axle Saran Wrap air blunt. Kingpin switch rail ho-ho Neil Blender mute-air darkslide. Mike Taylor boardslide ollie hole bruised heel feeble slob air body varial. 

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

//360 backside ledge frigid air late John Lucero nose blunt. Kevin Harris Jim Phillips impossible Primo slide concave spine slappy. Rock and roll Duel at Diablo hang ten street salad grind fastplant wax. Risers nose 540 pop shove-it goofy footed coffin. Ollie north nose slide skater yeah pump G&S nose grab. Launch ramp snake goofy footed hard flip fakie salad grind Thunder. Hardware kickturn trucks wheels air mini ramp. Crooked grind mini ramp heel flip hip tic-tac crail slide. Ollie kidney axle Saran Wrap air blunt. Kingpin switch rail ho-ho Neil Blender mute-air darkslide. Mike Taylor boardslide ollie hole bruised heel feeble slob air body varial. 

?>