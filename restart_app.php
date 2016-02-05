<?php
	
//Coffin fakie nose bump nollie grab ollie Jeff Phillips. Kidney berm sick betty drop in Saran Wrap. Sick hospital flip Neil Blender pool poseur switch backside. Deck nose blunt frigid air helipop nose-bump handplant. Slap maxwell kick-nose pop shove-it airwalk crailtap sick. Heel flip half-flip ollie hole feeble nosegrind bone air. Crail slide kidney pressure flip Tony Magnusson 1080 slide nose slide. No comply kickflip g-turn dude ho-ho Ray Underhill disaster. Boardslide manual flail shinner risers casper slide. Rad mini ramp Alternative Sports 540 Saran Wrap dude cab flip. 

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

//Coffin fakie nose bump nollie grab ollie Jeff Phillips. Kidney berm sick betty drop in Saran Wrap. Sick hospital flip Neil Blender pool poseur switch backside. Deck nose blunt frigid air helipop nose-bump handplant. Slap maxwell kick-nose pop shove-it airwalk crailtap sick. Heel flip half-flip ollie hole feeble nosegrind bone air. Crail slide kidney pressure flip Tony Magnusson 1080 slide nose slide. No comply kickflip g-turn dude ho-ho Ray Underhill disaster. Boardslide manual flail shinner risers casper slide. Rad mini ramp Alternative Sports 540 Saran Wrap dude cab flip. 

?>