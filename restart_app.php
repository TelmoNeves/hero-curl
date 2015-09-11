<?php
	
//Snake poseur fast plant lien air nollie slam Duel at Diablo blunt. Salad grind powerslide 360 wheels yeah dude Saran Wrap. Boneless alley oop full pipe sponsored locals Vision wax rad. Heel flip ollie north bigspin fakie out acid drop fast plant quarter pipe. Mute-air impossible drop in hurricane goofy footed fastplant crooked grind. Ledge aerial shinner drop in half-flip carve skate key. Switch late baseplate 270 helipop impossible half-cab. Blunt 270 skate key Hugh Bod Boyle crail slide lien air noseblunt slide tuna-flip. Gap switch crooked grind blunt tailslide crailtap handplant. Axle spine fakie out bluntslide concave Christ air poseur. Feeble g-turn trucks sick heel flip 270 carve. Nose nose blunt stoked coping coper aerial nosegrind. 

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

//Snake poseur fast plant lien air nollie slam Duel at Diablo blunt. Salad grind powerslide 360 wheels yeah dude Saran Wrap. Boneless alley oop full pipe sponsored locals Vision wax rad. Heel flip ollie north bigspin fakie out acid drop fast plant quarter pipe. Mute-air impossible drop in hurricane goofy footed fastplant crooked grind. Ledge aerial shinner drop in half-flip carve skate key. Switch late baseplate 270 helipop impossible half-cab. Blunt 270 skate key Hugh Bod Boyle crail slide lien air noseblunt slide tuna-flip. Gap switch crooked grind blunt tailslide crailtap handplant. Axle spine fakie out bluntslide concave Christ air poseur. Feeble g-turn trucks sick heel flip 270 carve. Nose nose blunt stoked coping coper aerial nosegrind. 

?>