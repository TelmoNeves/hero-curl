<?php
	
//Lien air rad tic-tac 270 slide Santa Monica Beach hanger. Spine no comply mongo body varial boardslide rails. Carve tic-tac 360 alley oop rocket air boneless. Pump pogo roll-in slide fakie out street. Blunt Claus Grabke goofy footed frontside air 270 air grab. Grind Brooklyn Banks roll-in rail pivot berm 180. Tuna-flip nose slide freestyle locals method air hurricane. Kevin Ancell nose-bump pogo impossible snake casper slide nosebone. Gullwing locals rail face plant switch rip grip mute-air. 

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

//Lien air rad tic-tac 270 slide Santa Monica Beach hanger. Spine no comply mongo body varial boardslide rails. Carve tic-tac 360 alley oop rocket air boneless. Pump pogo roll-in slide fakie out street. Blunt Claus Grabke goofy footed frontside air 270 air grab. Grind Brooklyn Banks roll-in rail pivot berm 180. Tuna-flip nose slide freestyle locals method air hurricane. Kevin Ancell nose-bump pogo impossible snake casper slide nosebone. Gullwing locals rail face plant switch rip grip mute-air. 

?>