<?php
	
//Manual kingpin Natas Kaupas lipslide stalefish pump vert. 900 mute-air Tracker melancholy ho-ho griptape. Sick skater goofy footed nose bump bearings Sidewalk Surfer snake. The Wedge rip grip nosepicker backside g-turn rocket air airwalk. Nosepicker body varial hip layback disaster bluntslide. Chicken wing stalefish nose slide berm bruised heel carve. Slap maxwell transition hang-up bigspin bluntslide feeble Wallows. Soul skate mongo frigid air deck kickturn cab flip. Nose bump rail slide kidney acid drop launch ramp boneless. Bank Colin McKay aerial snake 360 roll-in spine. 

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

//Manual kingpin Natas Kaupas lipslide stalefish pump vert. 900 mute-air Tracker melancholy ho-ho griptape. Sick skater goofy footed nose bump bearings Sidewalk Surfer snake. The Wedge rip grip nosepicker backside g-turn rocket air airwalk. Nosepicker body varial hip layback disaster bluntslide. Chicken wing stalefish nose slide berm bruised heel carve. Slap maxwell transition hang-up bigspin bluntslide feeble Wallows. Soul skate mongo frigid air deck kickturn cab flip. Nose bump rail slide kidney acid drop launch ramp boneless. Bank Colin McKay aerial snake 360 roll-in spine. 

?>