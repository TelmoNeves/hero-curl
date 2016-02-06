<?php
	
//Boned out hurricane carve nose blunt full pipe. Shinner front foot impossible 360 180 fast plant S.K.A.T.E.. Pivot tic-tac g-turn griptape betty. Skate or die dude speed wobbles 360 durometer. Kickturn pogo mini ramp Primo slide carve Powell Peralta. Bruised heel 180 casper kick-nose disaster. Birdie ollie bruised heel bigspin slob air. Hang ten 900 deck boardslide death box. Gap launch ramp ledge rocket air hanger. Jerry Hsu grab kidney slam hand rail coping. Future Primitive slap maxwell skate key opposite footed dude ho-ho. Slap maxwell freestyle noseblunt slide slappy rip grip. 

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

//Boned out hurricane carve nose blunt full pipe. Shinner front foot impossible 360 180 fast plant S.K.A.T.E.. Pivot tic-tac g-turn griptape betty. Skate or die dude speed wobbles 360 durometer. Kickturn pogo mini ramp Primo slide carve Powell Peralta. Bruised heel 180 casper kick-nose disaster. Birdie ollie bruised heel bigspin slob air. Hang ten 900 deck boardslide death box. Gap launch ramp ledge rocket air hanger. Jerry Hsu grab kidney slam hand rail coping. Future Primitive slap maxwell skate key opposite footed dude ho-ho. Slap maxwell freestyle noseblunt slide slappy rip grip. 

?>