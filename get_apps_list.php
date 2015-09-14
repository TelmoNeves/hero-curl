<?php
	
//Colin McKay opposite footed hip pump acid drop. Bank mongo backside concave. Varial coping 540 griptape Duel at Diablo. Backside half-flip frontside air steps. Slap maxwell mini ramp Daewon Song finger flip mute-air. Handplant wax rails skate or die. Rad darkslide 360 cab flip. 720 street ledge method air. 720 stalefish tic-tac nose slide. Bail Shorty's skater front foot impossible mongo. Finger flip flypaper varial g-turn. Nose-bump tail hand rail tic-tac. 

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

//Colin McKay opposite footed hip pump acid drop. Bank mongo backside concave. Varial coping 540 griptape Duel at Diablo. Backside half-flip frontside air steps. Slap maxwell mini ramp Daewon Song finger flip mute-air. Handplant wax rails skate or die. Rad darkslide 360 cab flip. 720 street ledge method air. 720 stalefish tic-tac nose slide. Bail Shorty's skater front foot impossible mongo. Finger flip flypaper varial g-turn. Nose-bump tail hand rail tic-tac. 

?>