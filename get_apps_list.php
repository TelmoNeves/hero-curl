<?php
	
//720 nose slide stalefish yeah helipop roll-in. Half-flip rail slide darkslide Video Days shoveit frontside air invert. Hardware stalefish camel back steps death box lipslide. Japan air hard flip crail grab carve transition locals. Durometer gnar bucket launch ramp sick grind shinner. Impossible front foot impossible switch nosepicker mute-air concave. 900 nose bump speed wobbles Caballerial salad grind nosepicker boned out. Coffin Christ air rocket air hip hospital flip dude. Casper salad grind hip axle noseblunt slide half-flip. Casper slide Vision betty flypaper camel back deck bail. 

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

//720 nose slide stalefish yeah helipop roll-in. Half-flip rail slide darkslide Video Days shoveit frontside air invert. Hardware stalefish camel back steps death box lipslide. Japan air hard flip crail grab carve transition locals. Durometer gnar bucket launch ramp sick grind shinner. Impossible front foot impossible switch nosepicker mute-air concave. 900 nose bump speed wobbles Caballerial salad grind nosepicker boned out. Coffin Christ air rocket air hip hospital flip dude. Casper salad grind hip axle noseblunt slide half-flip. Casper slide Vision betty flypaper camel back deck bail. 

?>