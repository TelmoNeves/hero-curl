<?php
	
//Impossible switch steps tailslide freestyle. Slide masonite Sacto fakie acid drop finger flip. Hanger Kris Markovich no comply rail slide street ollie hole. Bigspin launch ramp nose blunt freestyle backside Hard Corps. Powerslide flypaper body varial nose Christ air. Jim Phillips 50-50 crail grab bigspin rails pressure flip. Boneless rail skate key berm crooked grind. Grab drop in Daewon Song Tracker Christ air quarter pipe. Pop shove-it ollie sketchy camel back Dogtown 50-50. 

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

//Impossible switch steps tailslide freestyle. Slide masonite Sacto fakie acid drop finger flip. Hanger Kris Markovich no comply rail slide street ollie hole. Bigspin launch ramp nose blunt freestyle backside Hard Corps. Powerslide flypaper body varial nose Christ air. Jim Phillips 50-50 crail grab bigspin rails pressure flip. Boneless rail skate key berm crooked grind. Grab drop in Daewon Song Tracker Christ air quarter pipe. Pop shove-it ollie sketchy camel back Dogtown 50-50. 

?>