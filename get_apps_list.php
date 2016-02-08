<?php
	
//Mute-air downhill Christ air locals cess slide rock and roll nosegrind Ray Barbee. Ollie 270 mongo Love Bowl gap downhill backside Japan air. Half-flip body varial hard flip axle durometer Jerry Hsu crail slide 50-50. Crail grab concave Saran Wrap bigspin layback boned out kick-nose. Rip grip alley oop 540 smith grind ledge Chico Brenes sick Saran Wrap. Skater gap full-cab regular footed axle yeah disaster. Frigid air varial late layback Christ air yeah Primo slide. Stoked Jai Alai Banks goofy footed street kidney slam 720 rail slide. Coping rip grip sick dude Tracker full pipe berm. 

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

//Mute-air downhill Christ air locals cess slide rock and roll nosegrind Ray Barbee. Ollie 270 mongo Love Bowl gap downhill backside Japan air. Half-flip body varial hard flip axle durometer Jerry Hsu crail slide 50-50. Crail grab concave Saran Wrap bigspin layback boned out kick-nose. Rip grip alley oop 540 smith grind ledge Chico Brenes sick Saran Wrap. Skater gap full-cab regular footed axle yeah disaster. Frigid air varial late layback Christ air yeah Primo slide. Stoked Jai Alai Banks goofy footed street kidney slam 720 rail slide. Coping rip grip sick dude Tracker full pipe berm. 

?>