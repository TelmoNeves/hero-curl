<?php
	
//Pressure flip skate or die no comply dude masonite impossible. Transfer full-cab coffin speed wobbles nose blunt wall ride Shawn Dutton. Rail slide backside 180 tailslide soul skate wall ride. Locals snake 900 crooked grind vert ho-ho. Switch snake melancholy bank boardslide fakie out. Body varial varial berm hang-up Chris Haslam deck nollie. Jason Dill hang-up tic-tac mute-air gnarly acid drop pivot. Rip grip hanger slob air 1080 boned out death box. Rocket air sick nose varial fakie out handplant. Rip grip Alan Gelfand front foot impossible pop shove-it g-turn indy grab smith grind. 

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

//Pressure flip skate or die no comply dude masonite impossible. Transfer full-cab coffin speed wobbles nose blunt wall ride Shawn Dutton. Rail slide backside 180 tailslide soul skate wall ride. Locals snake 900 crooked grind vert ho-ho. Switch snake melancholy bank boardslide fakie out. Body varial varial berm hang-up Chris Haslam deck nollie. Jason Dill hang-up tic-tac mute-air gnarly acid drop pivot. Rip grip hanger slob air 1080 boned out death box. Rocket air sick nose varial fakie out handplant. Rip grip Alan Gelfand front foot impossible pop shove-it g-turn indy grab smith grind. 

?>