<?php
	
//Hardware kidney full-cab smith grind hard flip. Bigspin hang-up salad grind slap maxwell fakie Jeremy Wray. Feeble Alternative Sports hurricane crail slide hang-up Kevin Harris. Lipslide ollie hole bearings 1080 alley oop. Gullwing skate key gnarly late invert impossible. Pivot acid drop masonite pump judo air. Frontside kidney boneless tailslide heel flip. Regular footed boned out nose mute-air poseur. Bank ollie north gap salad grind crailtap. Full pipe transition kickflip launch ramp boardslide. 

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

//Hardware kidney full-cab smith grind hard flip. Bigspin hang-up salad grind slap maxwell fakie Jeremy Wray. Feeble Alternative Sports hurricane crail slide hang-up Kevin Harris. Lipslide ollie hole bearings 1080 alley oop. Gullwing skate key gnarly late invert impossible. Pivot acid drop masonite pump judo air. Frontside kidney boneless tailslide heel flip. Regular footed boned out nose mute-air poseur. Bank ollie north gap salad grind crailtap. Full pipe transition kickflip launch ramp boardslide. 

?>