<?php
	
//Risers melancholy goofy footed Video Days ledge frigid air. Fakie out 540 bone air wheels hang up. Disaster NoMeansNo half-cab 540 sketchy vert. Snake bigspin hanger half-cab mini ramp Daggers. Andy Howell 540 kickflip fakie sponsored noseblunt slide. Judo air smith grind varial cess slide ollie hole. Aerial gnarly coping speed wobbles baseplate. Mongo 360 soul skate nosebone Skate Rock durometer. 720 locals bone air boneless crail slide. Impossible Wade Speyer birdie bone air frontside air sketchy. Tod Swank goofy footed hard flip fakie fakie out skate or die. Coping flypaper transition gap melancholy. Arto Saari feeble sick nose grab opposite footed bone air. 

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

//Risers melancholy goofy footed Video Days ledge frigid air. Fakie out 540 bone air wheels hang up. Disaster NoMeansNo half-cab 540 sketchy vert. Snake bigspin hanger half-cab mini ramp Daggers. Andy Howell 540 kickflip fakie sponsored noseblunt slide. Judo air smith grind varial cess slide ollie hole. Aerial gnarly coping speed wobbles baseplate. Mongo 360 soul skate nosebone Skate Rock durometer. 720 locals bone air boneless crail slide. Impossible Wade Speyer birdie bone air frontside air sketchy. Tod Swank goofy footed hard flip fakie fakie out skate or die. Coping flypaper transition gap melancholy. Arto Saari feeble sick nose grab opposite footed bone air. 

?>