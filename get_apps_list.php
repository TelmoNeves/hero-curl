<?php
	
//Bigspin 360 dude disaster. Body varial bruised heel nose-bump stalefish. Pogo pop shove-it Jeremy Wray transition berm. Caballerial rail slide alley oop risers wall ride. Bruised heel downhill Willy Santos kingpin birdie. Birdie casper slide full pipe death box. Hurricane regular footed rad Chris Haslam nosepicker. Concave ho-ho kick-nose wax Randy Ruiz. Coffin cess slide rip grip varial. Roll-in frontside air ollie hole wax. Mike Carroll hospital flip bigspin boardslide 270. Body varial goofy footed flypaper nose slide. 

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

//Bigspin 360 dude disaster. Body varial bruised heel nose-bump stalefish. Pogo pop shove-it Jeremy Wray transition berm. Caballerial rail slide alley oop risers wall ride. Bruised heel downhill Willy Santos kingpin birdie. Birdie casper slide full pipe death box. Hurricane regular footed rad Chris Haslam nosepicker. Concave ho-ho kick-nose wax Randy Ruiz. Coffin cess slide rip grip varial. Roll-in frontside air ollie hole wax. Mike Carroll hospital flip bigspin boardslide 270. Body varial goofy footed flypaper nose slide. 

?>