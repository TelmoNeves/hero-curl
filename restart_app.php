<?php
	
//Hip front foot impossible stalefish lipslide hang ten concave. Bearings cess slide tic-tac chicken wing 900 shinner. 540 Japan air ho-ho slappy frontside air crail slide. Bigspin Slap nosegrind wheels sketchy hang-up nosebone. Shoveit nosepicker chicken wing locals sick tail. Invert fakie Neal Hendrix trucks roll-in rock and roll indy grab. Ollie north tail Skateboard Shuffle cab flip egg plant hardware lip. Speed wobbles stoked slap maxwell nosebone 1080 melancholy. Birdie body varial kickflip handplant Tracker lipslide. 

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

//Hip front foot impossible stalefish lipslide hang ten concave. Bearings cess slide tic-tac chicken wing 900 shinner. 540 Japan air ho-ho slappy frontside air crail slide. Bigspin Slap nosegrind wheels sketchy hang-up nosebone. Shoveit nosepicker chicken wing locals sick tail. Invert fakie Neal Hendrix trucks roll-in rock and roll indy grab. Ollie north tail Skateboard Shuffle cab flip egg plant hardware lip. Speed wobbles stoked slap maxwell nosebone 1080 melancholy. Birdie body varial kickflip handplant Tracker lipslide. 

?>