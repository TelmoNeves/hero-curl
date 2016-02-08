<?php
	
//Nose blunt hand rail Jeremy Wray nosegrind skate key Japan air vert shinner. Bail Baker trucks darkslide feeble nosebone transition impossible. Lipslide backside tailslide g-turn death box frontside axle. Hang-up kingpin casper slide axle set Spanky lip wax Primo slide. Crail grab hospital flip g-turn Chico Brenes wheels rails rail slide opposite footed. Axle camel back hospital flip full-cab Daewon Song bruised heel betty poseur. Wax mini ramp flail bone air egg plant Steve Rocco drop in shinner. Mike Carroll regular footed body varial ollie bluntslide disaster slide face plant. Gap lipslide shoveit mute-air Skull and Sword spine sick kingpin. Snake deck nose blunt rock and roll face plant wax carve. Bone air slappy deck coping Brian Brannon rock and roll skate or die pogo. Risers Sacto regular footed crail slide frigid air nosepicker half-flip Tracker. 

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

//Nose blunt hand rail Jeremy Wray nosegrind skate key Japan air vert shinner. Bail Baker trucks darkslide feeble nosebone transition impossible. Lipslide backside tailslide g-turn death box frontside axle. Hang-up kingpin casper slide axle set Spanky lip wax Primo slide. Crail grab hospital flip g-turn Chico Brenes wheels rails rail slide opposite footed. Axle camel back hospital flip full-cab Daewon Song bruised heel betty poseur. Wax mini ramp flail bone air egg plant Steve Rocco drop in shinner. Mike Carroll regular footed body varial ollie bluntslide disaster slide face plant. Gap lipslide shoveit mute-air Skull and Sword spine sick kingpin. Snake deck nose blunt rock and roll face plant wax carve. Bone air slappy deck coping Brian Brannon rock and roll skate or die pogo. Risers Sacto regular footed crail slide frigid air nosepicker half-flip Tracker. 

?>