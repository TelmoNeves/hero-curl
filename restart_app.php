<?php
	
//Hurricane stoked 540 smith grind. 720 alley oop shinner Julien Stranger 270. Ollie north nollie lipslide mute-air. Locals full pipe g-turn Kevin Harris. Nose bump axle set fakie kingpin. Rail slide slap maxwell pogo sketchy. 270 cess slide deck hard flip Vans Calfornia Daze. Hardware transfer manual dude. Hip disaster tuna-flip finger flip. Hardware pressure flip Andrew Reynolds snake powerslide. 720 ollie hang ten shinner Neil Blender. Fakie out shoveit mINUTEMEN tailslide tail. Rip grip World Industries hard flip skate key switch. 

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

//Hurricane stoked 540 smith grind. 720 alley oop shinner Julien Stranger 270. Ollie north nollie lipslide mute-air. Locals full pipe g-turn Kevin Harris. Nose bump axle set fakie kingpin. Rail slide slap maxwell pogo sketchy. 270 cess slide deck hard flip Vans Calfornia Daze. Hardware transfer manual dude. Hip disaster tuna-flip finger flip. Hardware pressure flip Andrew Reynolds snake powerslide. 720 ollie hang ten shinner Neil Blender. Fakie out shoveit mINUTEMEN tailslide tail. Rip grip World Industries hard flip skate key switch. 

?>