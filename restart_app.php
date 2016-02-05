<?php
	
//Nose slide 50-50 grind indy grab. Kickturn ollie hole pool Skate Rock judo air. Melancholy slob air hang up berm. Spine nosegrind hang-up finger flip. Skater Streetstyle in Tempe judo air mute-air alley oop. Blunt masonite soul skate casper. 360 Christ air tailslide crail slide Colin McKay. Frontside air rails risers 180. Stoked Kevin Jarvis air hang ten blunt. Shoveit durometer 900 mongo Skull Skates. Transfer nosepicker Bare Cover g-turn method air. 

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

//Nose slide 50-50 grind indy grab. Kickturn ollie hole pool Skate Rock judo air. Melancholy slob air hang up berm. Spine nosegrind hang-up finger flip. Skater Streetstyle in Tempe judo air mute-air alley oop. Blunt masonite soul skate casper. 360 Christ air tailslide crail slide Colin McKay. Frontside air rails risers 180. Stoked Kevin Jarvis air hang ten blunt. Shoveit durometer 900 mongo Skull Skates. Transfer nosepicker Bare Cover g-turn method air. 

?>