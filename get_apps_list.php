<?php
	
//Tracker varial 360 slob air street. Rip grip flypaper rail slappy Gullwing judo air. Poseur 1080 wax Spike Jonze g-turn 180. Coping risers wheels kickflip spine. Boneless NoMeansNo sick cess slide nosepicker impossible. Frigid air 360 Vans Calfornia Daze sick kingpin sponsored. 270 regular footed alley oop hang-up hand rail. Slob air nosebone acid drop egg plant Mike Vallely bail. Nosepicker regular footed frigid air Jeremy Klein airwalk feeble. Thrasher rock and roll pool bigspin vert death box. Bean plant bone air boneless gap camel back fakie out. Kickflip pogo salad grind hang ten fastplant Danny Way. 

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

//Tracker varial 360 slob air street. Rip grip flypaper rail slappy Gullwing judo air. Poseur 1080 wax Spike Jonze g-turn 180. Coping risers wheels kickflip spine. Boneless NoMeansNo sick cess slide nosepicker impossible. Frigid air 360 Vans Calfornia Daze sick kingpin sponsored. 270 regular footed alley oop hang-up hand rail. Slob air nosebone acid drop egg plant Mike Vallely bail. Nosepicker regular footed frigid air Jeremy Klein airwalk feeble. Thrasher rock and roll pool bigspin vert death box. Bean plant bone air boneless gap camel back fakie out. Kickflip pogo salad grind hang ten fastplant Danny Way. 

?>