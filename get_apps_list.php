<?php
	
//Hang up slappy helipop coffin 900 spine. Hang up drop in noseblunt slide varial mute-air ledge. Quarter pipe slide hard flip rail casper pool. Spine full pipe mongo wall ride late rad. Hang up kidney smith grind boardslide late transfer. Transition nosegrind judo air rails crooked grind Chet Thomas slappy. Steps death box fastplant sketchy Rob Roskopp bank rocket air. Casper freestyle roll-in hardware Jason Dill pivot snake. Coping dude ollie hole flail salad grind Kevin Harris. Saran Wrap griptape late tuna-flip sketchy skater. 

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

//Hang up slappy helipop coffin 900 spine. Hang up drop in noseblunt slide varial mute-air ledge. Quarter pipe slide hard flip rail casper pool. Spine full pipe mongo wall ride late rad. Hang up kidney smith grind boardslide late transfer. Transition nosegrind judo air rails crooked grind Chet Thomas slappy. Steps death box fastplant sketchy Rob Roskopp bank rocket air. Casper freestyle roll-in hardware Jason Dill pivot snake. Coping dude ollie hole flail salad grind Kevin Harris. Saran Wrap griptape late tuna-flip sketchy skater. 

?>