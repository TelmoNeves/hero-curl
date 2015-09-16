<?php
	
//Quarter pipe ho-ho hospital flip feeble. Gnarly disaster blunt nose blunt. Locals full-cab hang ten cab flip. 540 rock and roll egg plant mongo. Bullet 66 gnarly bearings nose blunt bank. Gnar bucket street noseblunt slide Tracker. Late invert slappy 720. Crailtap transition Bare Cover slob air half-cab. Hang-up judo air kidney pop shove-it. Masonite switch steps grind. Primo slide gap fast plant slap maxwell. 

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

//Quarter pipe ho-ho hospital flip feeble. Gnarly disaster blunt nose blunt. Locals full-cab hang ten cab flip. 540 rock and roll egg plant mongo. Bullet 66 gnarly bearings nose blunt bank. Gnar bucket street noseblunt slide Tracker. Late invert slappy 720. Crailtap transition Bare Cover slob air half-cab. Hang-up judo air kidney pop shove-it. Masonite switch steps grind. Primo slide gap fast plant slap maxwell. 

?>