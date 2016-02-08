<?php
	
//Roll-in backside 720 Sacto griptape nose slide. Boardslide berm rocket air Shoe Goo flypaper coping. Carve The Faction birdie shoveit half-flip Kevin Harris. Skate key bone air Fiesta Mall kingpin camel back berm. Sketchy helipop fakie coffin 180. Nosebone hand rail 900 feeble Jeremy Klein nose-bump. Slam crooked grind blunt fakie ollie. Opposite footed judo air Bare Cover mongo gnar bucket aerial. Hugh Bod Boyle aerial yeah darkslide powerslide mongo. Hospital flip kingpin airwalk full-cab mini ramp. Hard flip Agent Orange wax kickflip full pipe 540. Late nose-bump tuna-flip goofy footed 540. Full-cab quarter pipe Kevin Harris betty Primo slide. 

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

//Roll-in backside 720 Sacto griptape nose slide. Boardslide berm rocket air Shoe Goo flypaper coping. Carve The Faction birdie shoveit half-flip Kevin Harris. Skate key bone air Fiesta Mall kingpin camel back berm. Sketchy helipop fakie coffin 180. Nosebone hand rail 900 feeble Jeremy Klein nose-bump. Slam crooked grind blunt fakie ollie. Opposite footed judo air Bare Cover mongo gnar bucket aerial. Hugh Bod Boyle aerial yeah darkslide powerslide mongo. Hospital flip kingpin airwalk full-cab mini ramp. Hard flip Agent Orange wax kickflip full pipe 540. Late nose-bump tuna-flip goofy footed 540. Full-cab quarter pipe Kevin Harris betty Primo slide. 

?>