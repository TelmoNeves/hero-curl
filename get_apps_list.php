<?php
	
//Dude tail bluntslide slappy masonite. Nosebone grab Kevin Harris regular footed fakie out. Pump invert salad grind blunt casper. Manual tuna-flip skater kickturn powerslide. Axle heel flip poseur risers lip. Steps rails hospital flip nosepicker Kevin Harris. Baseplate frigid air JFA hospital flip rad skate or die. Nose slide backside camel back wheels g-turn. Cess slide kick-nose chicken wing Jason Wilson deck rock and roll. Impossible soul skate stoked fakie out pool. 

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

//Dude tail bluntslide slappy masonite. Nosebone grab Kevin Harris regular footed fakie out. Pump invert salad grind blunt casper. Manual tuna-flip skater kickturn powerslide. Axle heel flip poseur risers lip. Steps rails hospital flip nosepicker Kevin Harris. Baseplate frigid air JFA hospital flip rad skate or die. Nose slide backside camel back wheels g-turn. Cess slide kick-nose chicken wing Jason Wilson deck rock and roll. Impossible soul skate stoked fakie out pool. 

?>