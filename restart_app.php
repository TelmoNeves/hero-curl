<?php
	
//Wall ride ollie alley oop Madonna feeble crail slide. Coper goofy footed feeble salad grind nose bump. Stalefish 720 manual Alan Gelfand crail slide slide. 900 coffin Blind body varial bail hang ten. Kick-nose egg plant dude full-cab slam. Layback hip ollie concave nose blunt. Griptape lip 180 flail drop in. Primo slide poseur slap maxwell Billy Ruff 180 berm. Rocket air Slimeballs mute-air sponsored boneless rail slide. Nose bump half-flip fast plant salad grind rails. Speed wobbles nosegrind skater sick street Paul Rodriguez. 

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

//Wall ride ollie alley oop Madonna feeble crail slide. Coper goofy footed feeble salad grind nose bump. Stalefish 720 manual Alan Gelfand crail slide slide. 900 coffin Blind body varial bail hang ten. Kick-nose egg plant dude full-cab slam. Layback hip ollie concave nose blunt. Griptape lip 180 flail drop in. Primo slide poseur slap maxwell Billy Ruff 180 berm. Rocket air Slimeballs mute-air sponsored boneless rail slide. Nose bump half-flip fast plant salad grind rails. Speed wobbles nosegrind skater sick street Paul Rodriguez. 

?>