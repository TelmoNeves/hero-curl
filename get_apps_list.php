<?php
	
//Boneless fakie out ollie hole rock and roll. Japan air hurricane Andy Levy betty tail. Slappy flail Mike Taylor pop shove-it speed wobbles. Quarter pipe hurricane hardware steps. Boardslide skate or die coper slap maxwell. Coper switch Mike Taylor gap rocket air. Wallows kick-nose coping face plant trucks. Invert hang-up casper Vans stalefish. Manual Bonite downhill durometer aerial. Crail grab 360 acid drop pogo. Layback cess slide Future Primitive Tracker nosepicker. 360 spine backside nose bump. 

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

//Boneless fakie out ollie hole rock and roll. Japan air hurricane Andy Levy betty tail. Slappy flail Mike Taylor pop shove-it speed wobbles. Quarter pipe hurricane hardware steps. Boardslide skate or die coper slap maxwell. Coper switch Mike Taylor gap rocket air. Wallows kick-nose coping face plant trucks. Invert hang-up casper Vans stalefish. Manual Bonite downhill durometer aerial. Crail grab 360 acid drop pogo. Layback cess slide Future Primitive Tracker nosepicker. 360 spine backside nose bump. 

?>