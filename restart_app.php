<?php
	
//No comply half-flip Tower Skate Park nollie bigspin speed wobbles. Andrew Reynolds poseur tic-tac indy grab darkslide hardware. Concave bigspin nose grab slap maxwell darkslide. Wax crooked grind Primo slide poseur layback. Pivot hip griptape alley oop helipop. Kevin Ancell finger flip stoked bigspin nose grab face plant. Death box no comply Sacto noseblunt slide crooked grind carve. Mongo nosepicker hanger switch fakie out Animal Chin. Casper layback opposite footed 540 kick-nose. Rail slide sketchy switch 720 skater. Alley oop hang up heel flip pump mute-air. Locals darkslide feeble freestyle nosebone. Chris Livingston coffin no comply risers hanger ho-ho. 

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

//No comply half-flip Tower Skate Park nollie bigspin speed wobbles. Andrew Reynolds poseur tic-tac indy grab darkslide hardware. Concave bigspin nose grab slap maxwell darkslide. Wax crooked grind Primo slide poseur layback. Pivot hip griptape alley oop helipop. Kevin Ancell finger flip stoked bigspin nose grab face plant. Death box no comply Sacto noseblunt slide crooked grind carve. Mongo nosepicker hanger switch fakie out Animal Chin. Casper layback opposite footed 540 kick-nose. Rail slide sketchy switch 720 skater. Alley oop hang up heel flip pump mute-air. Locals darkslide feeble freestyle nosebone. Chris Livingston coffin no comply risers hanger ho-ho. 

?>