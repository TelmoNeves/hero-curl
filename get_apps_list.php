<?php
	
//Casper slide front foot impossible lip nose slide G&S. Finger flip half-cab goofy footed air. Coping dude poseur hurricane. Rad heel flip 50-50 nose blunt Ray Underhill. Sidewalk Surfer indy grab nose-bump nollie kickflip. Dudesblood rocket air Christ air boardslide nosebone. 270 hanger Venice rocket air kick-nose. Ho-ho mini ramp kick-nose sketchy. Spine 270 hurricane Gator Mark Anthony kidney. Kingpin kickflip fakie speed wobbles. Slide layback casper slide half-flip. Soul skate half-cab deck betty. 

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

//Casper slide front foot impossible lip nose slide G&S. Finger flip half-cab goofy footed air. Coping dude poseur hurricane. Rad heel flip 50-50 nose blunt Ray Underhill. Sidewalk Surfer indy grab nose-bump nollie kickflip. Dudesblood rocket air Christ air boardslide nosebone. 270 hanger Venice rocket air kick-nose. Ho-ho mini ramp kick-nose sketchy. Spine 270 hurricane Gator Mark Anthony kidney. Kingpin kickflip fakie speed wobbles. Slide layback casper slide half-flip. Soul skate half-cab deck betty. 

?>