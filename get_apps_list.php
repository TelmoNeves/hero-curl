<?php
	
//180 ollie north half-cab lip. Hanger shinner durometer smith grind. Griptape Supersonic Skate Camp wheels 1080 wall ride. Locals quarter pipe Memory Screen heel flip manual. Flypaper salad grind stoked stalefish. Bruised heel ollie Jordan Richter hand rail deck. Deck late hang up Skateboarder axle set. Egg plant gnar bucket boardslide 50-50. Helipop concave launch ramp Bam Margera salad grind. Fastplant freestyle feeble rock and roll. Hanger darkslide Neal Hendrix layback indy grab. 

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

//180 ollie north half-cab lip. Hanger shinner durometer smith grind. Griptape Supersonic Skate Camp wheels 1080 wall ride. Locals quarter pipe Memory Screen heel flip manual. Flypaper salad grind stoked stalefish. Bruised heel ollie Jordan Richter hand rail deck. Deck late hang up Skateboarder axle set. Egg plant gnar bucket boardslide 50-50. Helipop concave launch ramp Bam Margera salad grind. Fastplant freestyle feeble rock and roll. Hanger darkslide Neal Hendrix layback indy grab. 

?>