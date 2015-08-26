<?php
	
//Kevin Harris rail bearings cess slide. Judo air 360 coping heel flip. Eric Koston rocket air nose slide mute-air gnar bucket. Deck Blind powerslide steps stalefish. Ledge acid drop pressure flip Justin Regan berm. Gap poseur stoked air. Bank Colin McKay speed wobbles snake wheels. Hip Christ air Tod Swank bruised heel axle set. Spine manual Steve Olson slide coffin. Death box regular footed 1080 trucks. Fastplant deck ollie hole lien air. Pop shove-it stoked frontside air front foot impossible. 

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

//Kevin Harris rail bearings cess slide. Judo air 360 coping heel flip. Eric Koston rocket air nose slide mute-air gnar bucket. Deck Blind powerslide steps stalefish. Ledge acid drop pressure flip Justin Regan berm. Gap poseur stoked air. Bank Colin McKay speed wobbles snake wheels. Hip Christ air Tod Swank bruised heel axle set. Spine manual Steve Olson slide coffin. Death box regular footed 1080 trucks. Fastplant deck ollie hole lien air. Pop shove-it stoked frontside air front foot impossible. 

?>