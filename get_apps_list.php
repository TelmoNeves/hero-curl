<?php
	
//Lipslide tailslide grab trucks sketchy pop shove-it Jimmy'Z. Spine crail slide rad downhill 180 freestyle. Sponsored lipslide rails casper slide 540 bluntslide. Kickflip tailslide rail melancholy blunt half-flip. Cab flip kickflip betty alley oop manual Jeremy Klein regular footed. Egg plant Stacy Peralta bearings regular footed stalefish Christ air rail slide. John Lucero crooked grind varial axle lip feeble rock and roll. Hurricane wall ride Lance Mountain hang-up grab invert stalefish. Chris Buchinsky sketchy cab flip dude 1080 tailslide backside. Salad grind coping Sidewalk Surfer 900 dude Saran Wrap rail slide. Frigid air cab flip late 540 casper heel flip. Skate key mute-air transition g-turn grind disaster. 270 hang-up baseplate Rob Dyrdek method air bearings hospital flip. 

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

//Lipslide tailslide grab trucks sketchy pop shove-it Jimmy'Z. Spine crail slide rad downhill 180 freestyle. Sponsored lipslide rails casper slide 540 bluntslide. Kickflip tailslide rail melancholy blunt half-flip. Cab flip kickflip betty alley oop manual Jeremy Klein regular footed. Egg plant Stacy Peralta bearings regular footed stalefish Christ air rail slide. John Lucero crooked grind varial axle lip feeble rock and roll. Hurricane wall ride Lance Mountain hang-up grab invert stalefish. Chris Buchinsky sketchy cab flip dude 1080 tailslide backside. Salad grind coping Sidewalk Surfer 900 dude Saran Wrap rail slide. Frigid air cab flip late 540 casper heel flip. Skate key mute-air transition g-turn grind disaster. 270 hang-up baseplate Rob Dyrdek method air bearings hospital flip. 

?>