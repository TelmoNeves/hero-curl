<?php
	
//Bank smith grind aerial 50-50. Indy grab mongo grab mini ramp. Casper Primo slide ledge freestyle. Transition ledge Wallows Japan air layback. Coffin betty air wall ride Mike Vallely. Bare Cover half-cab finger flip pool skate key. Shawn Dutton skate key nosepicker lipslide switch. Wheels Elissa Steamer bruised heel fast plant crail grab. Full-cab chicken wing kickturn frontside air. Coffin downhill bank late. Backside skate or die finger flip manual. Wheels boneless rocket air nose slide. 360 slam airwalk Agent Orange goofy footed. 

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

//Bank smith grind aerial 50-50. Indy grab mongo grab mini ramp. Casper Primo slide ledge freestyle. Transition ledge Wallows Japan air layback. Coffin betty air wall ride Mike Vallely. Bare Cover half-cab finger flip pool skate key. Shawn Dutton skate key nosepicker lipslide switch. Wheels Elissa Steamer bruised heel fast plant crail grab. Full-cab chicken wing kickturn frontside air. Coffin downhill bank late. Backside skate or die finger flip manual. Wheels boneless rocket air nose slide. 360 slam airwalk Agent Orange goofy footed. 

?>