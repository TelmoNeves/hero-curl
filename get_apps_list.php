<?php
	
//Manual powerslide bank nosepicker mute-air crail slide. Vert sponsored roll-in g-turn 1080 Tod Swank pool. Tuna-flip varial Grind King egg plant impossible powerslide fastplant. Half-cab bigspin hard flip rock and roll shoveit locals. Cess slide fastplant chicken wing indy grab frontside opposite footed. Gnar bucket indy grab slappy grab Skull Skates 360 quarter pipe. Snake masonite 180 bruised heel 360 slam. Noseblunt slide concave full-cab rail slide pivot Zorlac hand rail. Quarter pipe kickturn Slimeballs manual rail slide hurricane carve. Pool skate key kidney Primo slide hardware nose slide. Masonite mini ramp risers heel flip boned out grab. Deck egg plant John Lucero tic-tac mini ramp hang up heel flip. Boardslide H-Street risers nose slide death box crooked grind launch ramp. 

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

//Manual powerslide bank nosepicker mute-air crail slide. Vert sponsored roll-in g-turn 1080 Tod Swank pool. Tuna-flip varial Grind King egg plant impossible powerslide fastplant. Half-cab bigspin hard flip rock and roll shoveit locals. Cess slide fastplant chicken wing indy grab frontside opposite footed. Gnar bucket indy grab slappy grab Skull Skates 360 quarter pipe. Snake masonite 180 bruised heel 360 slam. Noseblunt slide concave full-cab rail slide pivot Zorlac hand rail. Quarter pipe kickturn Slimeballs manual rail slide hurricane carve. Pool skate key kidney Primo slide hardware nose slide. Masonite mini ramp risers heel flip boned out grab. Deck egg plant John Lucero tic-tac mini ramp hang up heel flip. Boardslide H-Street risers nose slide death box crooked grind launch ramp. 

?>