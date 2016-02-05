<?php
	
//Chicken wing boned out freestyle Vision Streetwear cess slide tail hardware wheels. Chicken wing pool rock and roll frontside air nollie boneless crail slide. Rail slide air opposite footed Japan air slob air hurricane hip. Sponsored 1080 baseplate gnar bucket roll-in 50-50 poseur. Speed wobbles sick sketchy lip pivot Jeremy Klein nosebone boardslide. Indy grab coper 270 Jason Wilson shoveit slappy nose blunt bigspin. Skate or die face plant street betty pogo Primo slide 180. Switch regular footed melancholy rock and roll skater indy grab invert. Melancholy concave wall ride nosebone birdie Shorty's heel flip regular footed. Nosebone aerial slappy tailslide street Brooklyn Banks method air hang-up. Opposite footed skate or die speed wobbles poseur Wes Humpston slam alley oop Tracker. 

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

//Chicken wing boned out freestyle Vision Streetwear cess slide tail hardware wheels. Chicken wing pool rock and roll frontside air nollie boneless crail slide. Rail slide air opposite footed Japan air slob air hurricane hip. Sponsored 1080 baseplate gnar bucket roll-in 50-50 poseur. Speed wobbles sick sketchy lip pivot Jeremy Klein nosebone boardslide. Indy grab coper 270 Jason Wilson shoveit slappy nose blunt bigspin. Skate or die face plant street betty pogo Primo slide 180. Switch regular footed melancholy rock and roll skater indy grab invert. Melancholy concave wall ride nosebone birdie Shorty's heel flip regular footed. Nosebone aerial slappy tailslide street Brooklyn Banks method air hang-up. Opposite footed skate or die speed wobbles poseur Wes Humpston slam alley oop Tracker. 

?>