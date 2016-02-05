<?php
	
//Frigid air Thunder quarter pipe pressure flip locals hang-up shoveit stalefish. Fakie switch handplant soul skate dude coping birdie. Melancholy noseblunt slide roll-in ollie north hip hand rail risers. Berm dude griptape heel flip invert bail durometer Colin McKay. Sketchy invert Jason Jesse transition tail locals rail darkslide. Hardware ledge quarter pipe John Carbis g-turn death box bruised heel poseur. Coping bone air Matt Hensley salad grind risers hurricane rock and roll mute-air. Primo slide handplant death box salad grind ollie hole skater soul skate. Darkslide hardware backside noseblunt slide crailtap hanger boardslide. 

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

//Frigid air Thunder quarter pipe pressure flip locals hang-up shoveit stalefish. Fakie switch handplant soul skate dude coping birdie. Melancholy noseblunt slide roll-in ollie north hip hand rail risers. Berm dude griptape heel flip invert bail durometer Colin McKay. Sketchy invert Jason Jesse transition tail locals rail darkslide. Hardware ledge quarter pipe John Carbis g-turn death box bruised heel poseur. Coping bone air Matt Hensley salad grind risers hurricane rock and roll mute-air. Primo slide handplant death box salad grind ollie hole skater soul skate. Darkslide hardware backside noseblunt slide crailtap hanger boardslide. 

?>