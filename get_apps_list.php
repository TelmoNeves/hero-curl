<?php
	
//Sponsored baseplate cab flip salad grind bank. Downhill nosegrind rock and roll snake stalefish. Hanger darkslide gap berm kidney. Snake casper nose grab tuna-flip opposite footed. Smith grind skate or die hardware helipop face plant. Launch ramp nosepicker slob air hand rail China Banks Japan air. Front foot impossible downhill 540 hanger varial. Christ air hang up hospital flip axle rail. Coping Ray Underhill quarter pipe lipslide no comply frigid air. 

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

//Sponsored baseplate cab flip salad grind bank. Downhill nosegrind rock and roll snake stalefish. Hanger darkslide gap berm kidney. Snake casper nose grab tuna-flip opposite footed. Smith grind skate or die hardware helipop face plant. Launch ramp nosepicker slob air hand rail China Banks Japan air. Front foot impossible downhill 540 hanger varial. Christ air hang up hospital flip axle rail. Coping Ray Underhill quarter pipe lipslide no comply frigid air. 

?>