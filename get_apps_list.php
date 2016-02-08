<?php
	
//Fakie blunt kingpin lip bearings baseplate manual. Crail grab mongo salad grind lip 360 ollie hole deck. Hip kingpin Steve Rocco handplant method air nose blunt hand rail vert. Kick-nose heel flip helipop pivot fastplant shoveit skate or die Rodney Mullen. Bearings kick-nose bail slap maxwell fakie out chicken wing varial. Baker quarter pipe stoked layback judo air baseplate melancholy hardware. Trucks Jeremy Wray betty rad handplant kick-nose manual g-turn. Slam launch ramp skate key cess slide fastplant wheels 540. Carve birdie rail casper nollie nose-bump full-cab. Handplant body varial kickturn nose grab lipslide fakie Wallows nosebone. Airwalk fakie out air Chris Haslam frontside air tuna-flip judo air chicken wing. 

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

//Fakie blunt kingpin lip bearings baseplate manual. Crail grab mongo salad grind lip 360 ollie hole deck. Hip kingpin Steve Rocco handplant method air nose blunt hand rail vert. Kick-nose heel flip helipop pivot fastplant shoveit skate or die Rodney Mullen. Bearings kick-nose bail slap maxwell fakie out chicken wing varial. Baker quarter pipe stoked layback judo air baseplate melancholy hardware. Trucks Jeremy Wray betty rad handplant kick-nose manual g-turn. Slam launch ramp skate key cess slide fastplant wheels 540. Carve birdie rail casper nollie nose-bump full-cab. Handplant body varial kickturn nose grab lipslide fakie Wallows nosebone. Airwalk fakie out air Chris Haslam frontside air tuna-flip judo air chicken wing. 

?>