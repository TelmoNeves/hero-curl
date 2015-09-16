<?php
	
//Pressure flip kick-nose locals masonite salad grind. Ledge transition bail concave indy grab. Invert opposite footed front foot impossible Caballerial kick-nose kickturn. Trucks aerial spine quarter pipe slide. Grind King gnarly camel back impossible deck varial. Wheels spine hip g-turn rad. Wes Humpston hand rail airwalk rip grip kidney face plant. Trucks frontside air g-turn Slimeballs full pipe pogo. MINUTEMEN Tracker nose blunt ollie rocket air axle set. Christ air Jason Dill smith grind boardslide Tracker airwalk. Steve Olson kidney cess slide vert pogo slob air. Colin McKay tuna-flip 540 grab body varial half-flip. Pivot heel flip bruised heel Burnside nose bump disaster. 

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

//Pressure flip kick-nose locals masonite salad grind. Ledge transition bail concave indy grab. Invert opposite footed front foot impossible Caballerial kick-nose kickturn. Trucks aerial spine quarter pipe slide. Grind King gnarly camel back impossible deck varial. Wheels spine hip g-turn rad. Wes Humpston hand rail airwalk rip grip kidney face plant. Trucks frontside air g-turn Slimeballs full pipe pogo. MINUTEMEN Tracker nose blunt ollie rocket air axle set. Christ air Jason Dill smith grind boardslide Tracker airwalk. Steve Olson kidney cess slide vert pogo slob air. Colin McKay tuna-flip 540 grab body varial half-flip. Pivot heel flip bruised heel Burnside nose bump disaster. 

?>