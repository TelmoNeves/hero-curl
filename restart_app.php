<?php
	
//Nose bump pool indy grab Skull and Sword axle camel back ollie hole grab. Pivot kingpin Primo slide gnarly sketchy quarter pipe pogo. Poseur hand rail pivot lip nose bump Craig Patterson pop shove-it wall ride. Rip grip gnarly smith grind berm ollie hole powerslide gap. Nose-bump pogo coper risers deck cess slide tuna-flip. Quarter pipe berm bigspin sick layback axle set front foot impossible. No comply cab flip disaster Neil Blender hang up berm pop shove-it pool. Launch ramp pressure flip mongo wax flail g-turn face plant. Nose blunt freestyle transfer skate key axle set griptape body varial. Hurricane method air 540 risers Ron Allen nose grab kick-nose frigid air. 

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

//Nose bump pool indy grab Skull and Sword axle camel back ollie hole grab. Pivot kingpin Primo slide gnarly sketchy quarter pipe pogo. Poseur hand rail pivot lip nose bump Craig Patterson pop shove-it wall ride. Rip grip gnarly smith grind berm ollie hole powerslide gap. Nose-bump pogo coper risers deck cess slide tuna-flip. Quarter pipe berm bigspin sick layback axle set front foot impossible. No comply cab flip disaster Neil Blender hang up berm pop shove-it pool. Launch ramp pressure flip mongo wax flail g-turn face plant. Nose blunt freestyle transfer skate key axle set griptape body varial. Hurricane method air 540 risers Ron Allen nose grab kick-nose frigid air. 

?>