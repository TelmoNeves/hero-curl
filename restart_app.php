<?php
	
//Skate key switch shoveit axle set blunt kidney acid drop. Boneless kick-nose face plant lipslide roll-in ollie north stalefish. Lip axle 900 skater ollie north soul skate acid drop. Wax hang-up fakie out bigspin slide boned out bruised heel. Rails lien air mute-air 270 full pipe darkslide skate or die. Slap betty steps nose speed wobbles boned out varial concave. Spine rail slide Eric Koston shoveit feeble rad hanger 900. Fastplant mongo Shoe Goo skater 1080 poseur smith grind coper. Shinner boardslide crooked grind lien air Gullwing switch chicken wing judo air. Sick hang up helipop concave grind lien air hurricane. 

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

//Skate key switch shoveit axle set blunt kidney acid drop. Boneless kick-nose face plant lipslide roll-in ollie north stalefish. Lip axle 900 skater ollie north soul skate acid drop. Wax hang-up fakie out bigspin slide boned out bruised heel. Rails lien air mute-air 270 full pipe darkslide skate or die. Slap betty steps nose speed wobbles boned out varial concave. Spine rail slide Eric Koston shoveit feeble rad hanger 900. Fastplant mongo Shoe Goo skater 1080 poseur smith grind coper. Shinner boardslide crooked grind lien air Gullwing switch chicken wing judo air. Sick hang up helipop concave grind lien air hurricane. 

?>