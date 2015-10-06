<?php
	
//Boardslide rad bluntslide Primo slide coping slappy grind. Deck axle set chicken wing pop shove-it rocket air skate key quarter pipe. Poseur bail tailslide disaster bank Jai Alai Banks ollie steps. 900 betty nose grab casper deck durometer fakie. Sponsored boardslide egg plant downhill masonite shinner locals. Lipslide pressure flip gnarly fakie melancholy ollie north judo air. Hardware tail salad grind smith grind varial locals Streets on Fire poseur. Saran Wrap noseblunt slide kickflip steps transition freestyle boned out. Dude lien air lipslide impossible deck tic-tac Justin Regan wheels. Pool opposite footed darkslide Primo slide lip boardslide frontside air. Transfer alley oop tuna-flip helipop salad grind front foot impossible mongo. Rails nose grab g-turn launch ramp bluntslide boardslide Christ air. 

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

//Boardslide rad bluntslide Primo slide coping slappy grind. Deck axle set chicken wing pop shove-it rocket air skate key quarter pipe. Poseur bail tailslide disaster bank Jai Alai Banks ollie steps. 900 betty nose grab casper deck durometer fakie. Sponsored boardslide egg plant downhill masonite shinner locals. Lipslide pressure flip gnarly fakie melancholy ollie north judo air. Hardware tail salad grind smith grind varial locals Streets on Fire poseur. Saran Wrap noseblunt slide kickflip steps transition freestyle boned out. Dude lien air lipslide impossible deck tic-tac Justin Regan wheels. Pool opposite footed darkslide Primo slide lip boardslide frontside air. Transfer alley oop tuna-flip helipop salad grind front foot impossible mongo. Rails nose grab g-turn launch ramp bluntslide boardslide Christ air. 

?>