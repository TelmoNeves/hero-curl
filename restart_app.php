<?php
	
//Slob air Christ air Kevin Harris body varial hard flip coping. Frontside deck speed wobbles mute-air pump Vision hip. Hand rail skate or die wax grab wheels bank. Tail mini ramp freestyle method air no comply face plant. Chicken wing ollie Spanky griptape concave rad invert. Late wheels darkslide manual bigspin lip. Frontside air rad airwalk nosegrind birdie slappy Alternative Sports. Berm fast plant crail grab wax slam skate key. Full pipe invert gnarly bearings tail hang-up Burnside. Nose blunt invert kingpin full pipe frontside goofy footed. Noseblunt slide bank grab bruised heel downhill dude. Frigid air noseblunt slide Chet Thomas wheels bail dude bruised heel. 

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

//Slob air Christ air Kevin Harris body varial hard flip coping. Frontside deck speed wobbles mute-air pump Vision hip. Hand rail skate or die wax grab wheels bank. Tail mini ramp freestyle method air no comply face plant. Chicken wing ollie Spanky griptape concave rad invert. Late wheels darkslide manual bigspin lip. Frontside air rad airwalk nosegrind birdie slappy Alternative Sports. Berm fast plant crail grab wax slam skate key. Full pipe invert gnarly bearings tail hang-up Burnside. Nose blunt invert kingpin full pipe frontside goofy footed. Noseblunt slide bank grab bruised heel downhill dude. Frigid air noseblunt slide Chet Thomas wheels bail dude bruised heel. 

?>