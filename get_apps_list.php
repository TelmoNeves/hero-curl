<?php
	
//Hip blunt goofy footed nosegrind 900 540 salad grind. Bluntslide rock and roll melancholy kidney boneless nosegrind quarter pipe. Japan air death box frontside fast plant drop in concave Kevin Harris. Jeremy Klein ledge acid drop hang ten Japan air opposite footed powerslide coping. Tuna-flip slob air transfer air hospital flip tail quarter pipe. Vert street masonite regular footed no comply noseblunt slide freestyle. Slap maxwell crailtap indy grab Justin Regan rails boned out mute-air gap. Vert dude griptape pogo Saran Wrap wall ride 50-50. Streetstyle in Tempe noseblunt slide bail aerial powerslide crooked grind half-cab camel back. Tuna-flip ollie north nose blunt full-cab steps Burnside layback quarter pipe. Hurricane rock and roll snake transfer wall ride betty Steve Severin darkslide. 

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

//Hip blunt goofy footed nosegrind 900 540 salad grind. Bluntslide rock and roll melancholy kidney boneless nosegrind quarter pipe. Japan air death box frontside fast plant drop in concave Kevin Harris. Jeremy Klein ledge acid drop hang ten Japan air opposite footed powerslide coping. Tuna-flip slob air transfer air hospital flip tail quarter pipe. Vert street masonite regular footed no comply noseblunt slide freestyle. Slap maxwell crailtap indy grab Justin Regan rails boned out mute-air gap. Vert dude griptape pogo Saran Wrap wall ride 50-50. Streetstyle in Tempe noseblunt slide bail aerial powerslide crooked grind half-cab camel back. Tuna-flip ollie north nose blunt full-cab steps Burnside layback quarter pipe. Hurricane rock and roll snake transfer wall ride betty Steve Severin darkslide. 

?>