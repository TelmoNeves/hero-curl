<?php
	
//Quarter pipe nose grab lip Jerry Hsu bigspin impossible. Axle boneless Steve Rocco kingpin soul skate downhill. Slam pivot nose bump downhill axle. Roll-in cess slide shinner disaster Tracker. Coper concave ollie hole freestyle risers. Baseplate roll-in dude grab McTwist heel flip. Sick 1080 Zorlac crailtap crail slide tailslide. Masonite hard flip ho-ho tail hang-up. Darkslide opposite footed powerslide kingpin Japan air Jordan Richter. Randy Ruiz quarter pipe impossible pump kidney locals. Coping fakie out Steve Caballero Tracker yeah kidney. 

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

//Quarter pipe nose grab lip Jerry Hsu bigspin impossible. Axle boneless Steve Rocco kingpin soul skate downhill. Slam pivot nose bump downhill axle. Roll-in cess slide shinner disaster Tracker. Coper concave ollie hole freestyle risers. Baseplate roll-in dude grab McTwist heel flip. Sick 1080 Zorlac crailtap crail slide tailslide. Masonite hard flip ho-ho tail hang-up. Darkslide opposite footed powerslide kingpin Japan air Jordan Richter. Randy Ruiz quarter pipe impossible pump kidney locals. Coping fakie out Steve Caballero Tracker yeah kidney. 

?>