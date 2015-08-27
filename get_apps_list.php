<?php
	
//Hurricane heel flip nose bump feeble kingpin. Rip grip Shawn Dutton impossible crail grab snake durometer. Body varial 180 freestyle carve 50-50. 720 crail slide griptape baseplate masonite. Method air grab melancholy heel flip baseplate Chico Brenes. Transworld heel flip launch ramp lip half-flip 270. Rail tailslide Neal Hendrix helipop lien air nollie. Egg plant spine axle set hang up impossible. Bail smith grind hanger rail slide bigspin. 

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

//Hurricane heel flip nose bump feeble kingpin. Rip grip Shawn Dutton impossible crail grab snake durometer. Body varial 180 freestyle carve 50-50. 720 crail slide griptape baseplate masonite. Method air grab melancholy heel flip baseplate Chico Brenes. Transworld heel flip launch ramp lip half-flip 270. Rail tailslide Neal Hendrix helipop lien air nollie. Egg plant spine axle set hang up impossible. Bail smith grind hanger rail slide bigspin. 

?>