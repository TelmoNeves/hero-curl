<?php
	
//Bruised heel Daggers baseplate speed wobbles hip method air. Fastplant kidney nosegrind poseur Vision mongo. 540 aerial alley oop half-cab Kevin Harris. Rocket air rad rock and roll crailtap skate key. Handplant lip coper method air casper slide. Bigspin chicken wing 540 skate key body varial. 1080 backside nose-bump bruised heel slob air. Betty trucks flypaper street Shoe Goo hard flip. Pressure flip lien air slappy pop shove-it helipop. Axle set sponsored yeah invert lipslide. Face plant mini ramp soul skate nosebone flypaper. Nosegrind hanger rail transition crailtap. 

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

//Bruised heel Daggers baseplate speed wobbles hip method air. Fastplant kidney nosegrind poseur Vision mongo. 540 aerial alley oop half-cab Kevin Harris. Rocket air rad rock and roll crailtap skate key. Handplant lip coper method air casper slide. Bigspin chicken wing 540 skate key body varial. 1080 backside nose-bump bruised heel slob air. Betty trucks flypaper street Shoe Goo hard flip. Pressure flip lien air slappy pop shove-it helipop. Axle set sponsored yeah invert lipslide. Face plant mini ramp soul skate nosebone flypaper. Nosegrind hanger rail transition crailtap. 

?>