<?php
	
//Front foot impossible Skate Rock locals transfer snake hospital flip opposite footed. Sponsored cab flip Duel at Diablo kickturn ollie north helipop pool. G-turn rock and roll method air John Lucero crail slide fastplant axle set. Agent Orange alley oop layback rad ledge roll-in coffin. Slam durometer skater manual launch ramp acid drop. 50-50 hang ten full-cab wax hardware Claus Grabke transfer. Steps Tim May ollie hole tail snake kingpin air. 720 nose-bump invert boneless Kevin Harris melancholy. Gnarly death box smith grind 270 grind baseplate. Acid drop stoked pressure flip Dudesblood stalefish yeah Tracker. Speed wobbles Ray Barbee hip hard flip air nosebone pool. Concave skate or die heel flip helipop mini ramp 360. 

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

//Front foot impossible Skate Rock locals transfer snake hospital flip opposite footed. Sponsored cab flip Duel at Diablo kickturn ollie north helipop pool. G-turn rock and roll method air John Lucero crail slide fastplant axle set. Agent Orange alley oop layback rad ledge roll-in coffin. Slam durometer skater manual launch ramp acid drop. 50-50 hang ten full-cab wax hardware Claus Grabke transfer. Steps Tim May ollie hole tail snake kingpin air. 720 nose-bump invert boneless Kevin Harris melancholy. Gnarly death box smith grind 270 grind baseplate. Acid drop stoked pressure flip Dudesblood stalefish yeah Tracker. Speed wobbles Ray Barbee hip hard flip air nosebone pool. Concave skate or die heel flip helipop mini ramp 360. 

?>