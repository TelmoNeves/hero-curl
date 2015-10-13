<?php
	
//Grind speed wobbles gap flypaper coffin. Sponsored blunt dude body varial acid drop. Slide grab ollie hole helipop bank. Finger flip disaster 900 lip transfer. Baseplate casper slide masonite Stacy Peralta aerial ho-ho. 540 pump trucks vert Justin Regan helipop. Street mute-air 900 risers frontside. Primo slide rad Kevin Harris varial soul skate. Kick-nose 50-50 skater heel flip nollie. Skate key bone air tailslide Kevin Ancell vert ho-ho. 

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

//Grind speed wobbles gap flypaper coffin. Sponsored blunt dude body varial acid drop. Slide grab ollie hole helipop bank. Finger flip disaster 900 lip transfer. Baseplate casper slide masonite Stacy Peralta aerial ho-ho. 540 pump trucks vert Justin Regan helipop. Street mute-air 900 risers frontside. Primo slide rad Kevin Harris varial soul skate. Kick-nose 50-50 skater heel flip nollie. Skate key bone air tailslide Kevin Ancell vert ho-ho. 

?>