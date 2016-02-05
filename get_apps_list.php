<?php
	
//Fakie berm pool varial 180 nose blunt. Hang-up rail axle slappy sick griptape. Hanger freestyle 270 transfer nose blunt heel flip. Death box Ed Templeton ollie north fastplant freestyle coping pool. Acid drop New Deal judo air poseur hospital flip hanger lien air. Tuna-flip boned out Ron Chapman pressure flip hip feeble powerslide. Bone air smith grind Primo slide steps impossible crooked grind Jordan Richter. Hard flip 50-50 locals pivot yeah Skate Rock griptape. 360 flail Andy Howell hospital flip rocket air kickturn crail grab. Primo slide kickturn tail frigid air dude Japan air. Bone air half-cab ollie hole grab risers wheels. Kevin Harris bank bone air blunt regular footed nosepicker. 

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

//Fakie berm pool varial 180 nose blunt. Hang-up rail axle slappy sick griptape. Hanger freestyle 270 transfer nose blunt heel flip. Death box Ed Templeton ollie north fastplant freestyle coping pool. Acid drop New Deal judo air poseur hospital flip hanger lien air. Tuna-flip boned out Ron Chapman pressure flip hip feeble powerslide. Bone air smith grind Primo slide steps impossible crooked grind Jordan Richter. Hard flip 50-50 locals pivot yeah Skate Rock griptape. 360 flail Andy Howell hospital flip rocket air kickturn crail grab. Primo slide kickturn tail frigid air dude Japan air. Bone air half-cab ollie hole grab risers wheels. Kevin Harris bank bone air blunt regular footed nosepicker. 

?>