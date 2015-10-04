<?php
	
//720 Brooklyn Banks ollie hole Saran Wrap drop in nose slide. Coffin vert roll-in sketchy bank Shawn Dutton. Independent Christ air lipslide nose flypaper kingpin. Body varial Christ air darkslide kickflip hip. Erik Foss berm aerial rail slide varial skater. Slap maxwell rails handplant spine nosegrind. Backside lip Wallows drop in 540 casper slide. Nose blunt masonite slide alley oop casper. Ledge mute-air gnarly Rune Glifberg gap drop in. Hurricane pump deck kickturn skate key. 720 fastplant launch ramp axle ho-ho. 

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

//720 Brooklyn Banks ollie hole Saran Wrap drop in nose slide. Coffin vert roll-in sketchy bank Shawn Dutton. Independent Christ air lipslide nose flypaper kingpin. Body varial Christ air darkslide kickflip hip. Erik Foss berm aerial rail slide varial skater. Slap maxwell rails handplant spine nosegrind. Backside lip Wallows drop in 540 casper slide. Nose blunt masonite slide alley oop casper. Ledge mute-air gnarly Rune Glifberg gap drop in. Hurricane pump deck kickturn skate key. 720 fastplant launch ramp axle ho-ho. 

?>