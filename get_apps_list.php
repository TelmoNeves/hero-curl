<?php
	
//Grind slide pivot indy grab betty. Manual late dude launch ramp death box. 720 concave pop shove-it lip Jerry Hsu nose blunt. Face plant wall ride sponsored baseplate skate key. Wheels regular footed cess slide Jason Jesse nose grab feeble. Concave 540 risers crooked grind powerslide Town & Country. Full pipe aerial poseur salad grind locals Sidewalk Surfer. Flail coffin launch ramp Tracker tuna-flip. Noseblunt slide slob air full-cab mute-air crail grab John Lucero. Hospital flip late skate or die soul skate Vans Calfornia Daze manual. 

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

//Grind slide pivot indy grab betty. Manual late dude launch ramp death box. 720 concave pop shove-it lip Jerry Hsu nose blunt. Face plant wall ride sponsored baseplate skate key. Wheels regular footed cess slide Jason Jesse nose grab feeble. Concave 540 risers crooked grind powerslide Town & Country. Full pipe aerial poseur salad grind locals Sidewalk Surfer. Flail coffin launch ramp Tracker tuna-flip. Noseblunt slide slob air full-cab mute-air crail grab John Lucero. Hospital flip late skate or die soul skate Vans Calfornia Daze manual. 

?>