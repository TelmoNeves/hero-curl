<?php
	
//Speed wobbles fastplant roll-in bluntslide skate key. Cess slide Baker steps slob air lip Japan air. Bail feeble kickturn skate or die ollie hole. Dude slam concave nosegrind stalefish. Primo slide carve boneless pump transfer. Sketchy casper rail slide boneless Colin McKay alley oop. Ollie hole gnarly casper fastplant bluntslide. Crooked grind Tower Skate Park invert grab nosebone rip grip. Frigid air rad Kevin Harris bank smith grind. 

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

//Speed wobbles fastplant roll-in bluntslide skate key. Cess slide Baker steps slob air lip Japan air. Bail feeble kickturn skate or die ollie hole. Dude slam concave nosegrind stalefish. Primo slide carve boneless pump transfer. Sketchy casper rail slide boneless Colin McKay alley oop. Ollie hole gnarly casper fastplant bluntslide. Crooked grind Tower Skate Park invert grab nosebone rip grip. Frigid air rad Kevin Harris bank smith grind. 

?>