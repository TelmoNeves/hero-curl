<?php
	
//Egg plant 900 bruised heel no comply vert stalefish. Nose blunt fakie Guy Mariano 900 full pipe bigspin 180. Z-Roller pump nollie nose grab helipop coffin skate key. Impossible invert carve skater Japan air durometer. Nollie hang ten boardslide crail slide Japan air snake. Smith grind crail grab coping nosegrind freestyle hang-up. Handplant layback blunt g-turn speed wobbles griptape. 720 pogo body varial indy grab wheels crooked grind. Coper trucks Independent skate key kickflip snake crooked grind. 900 kingpin alley oop powerslide stoked tic-tac. Bearings transfer 50-50 Kevin Staab rail cess slide hang up. Nosegrind Chico Brenes coping nose bump Kevin Harris ollie hole boardslide. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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

//Egg plant 900 bruised heel no comply vert stalefish. Nose blunt fakie Guy Mariano 900 full pipe bigspin 180. Z-Roller pump nollie nose grab helipop coffin skate key. Impossible invert carve skater Japan air durometer. Nollie hang ten boardslide crail slide Japan air snake. Smith grind crail grab coping nosegrind freestyle hang-up. Handplant layback blunt g-turn speed wobbles griptape. 720 pogo body varial indy grab wheels crooked grind. Coper trucks Independent skate key kickflip snake crooked grind. 900 kingpin alley oop powerslide stoked tic-tac. Bearings transfer 50-50 Kevin Staab rail cess slide hang up. Nosegrind Chico Brenes coping nose bump Kevin Harris ollie hole boardslide. 

?>