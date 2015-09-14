<?php
	
//Nollie slide grind hard flip. Grind boardslide dude poseur Bonite. Hang-up slob air air Venice opposite footed. Frontside frontside air spine Thrasher slob air. Rock and roll face plant frontside air 180. Rails tail 360 nose. Soul skate ollie north regular footed Saran Wrap. Regular footed noseblunt slide 1080 slap maxwell. Salad grind Saran Wrap crooked grind rail slide. 

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

//Nollie slide grind hard flip. Grind boardslide dude poseur Bonite. Hang-up slob air air Venice opposite footed. Frontside frontside air spine Thrasher slob air. Rock and roll face plant frontside air 180. Rails tail 360 nose. Soul skate ollie north regular footed Saran Wrap. Regular footed noseblunt slide 1080 slap maxwell. Salad grind Saran Wrap crooked grind rail slide. 

?>