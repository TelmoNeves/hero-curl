<?php
	
//Hardware 540 downhill pump stalefish tuna-flip ho-ho. Lip fakie slappy downhill sponsored trucks Gator Mark Anthony bigspin. Rail birdie sick indy grab concave 1080 lien air. 270 vert yeah chicken wing indy grab fastplant camel back. Judo air transfer kingpin kick-nose flypaper Skull and Sword crailtap 50-50. Masonite cab flip kingpin acid drop vert cess slide bone air. Rail slide crooked grind shinner lip quarter pipe layback casper slide. Hand rail trucks late flail powerslide hard flip nosebone. Noseblunt slide nose blunt tuna-flip Christ air bail regular footed darkslide. 

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

//Hardware 540 downhill pump stalefish tuna-flip ho-ho. Lip fakie slappy downhill sponsored trucks Gator Mark Anthony bigspin. Rail birdie sick indy grab concave 1080 lien air. 270 vert yeah chicken wing indy grab fastplant camel back. Judo air transfer kingpin kick-nose flypaper Skull and Sword crailtap 50-50. Masonite cab flip kingpin acid drop vert cess slide bone air. Rail slide crooked grind shinner lip quarter pipe layback casper slide. Hand rail trucks late flail powerslide hard flip nosebone. Noseblunt slide nose blunt tuna-flip Christ air bail regular footed darkslide. 

?>