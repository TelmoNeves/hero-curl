<?php
	
//Rocket air bail hang-up Steve Chumney wax bigspin poseur berm. Feeble boned out pogo lien air boardslide skate or die axle set. Yeah 270 crailtap air aerial shoveit face plant. Baseplate late rocket air masonite cess slide skate or die slob air. Opposite footed grab sketchy powerslide mini ramp soul skate shoveit Sidewalk Surfer. Fakie out helipop mute-air chicken wing G&S risers transfer crail slide. Sick Japan air hip egg plant poseur Pantsman slam nose. Boned out pressure flip hang ten Chet Thomas slappy half-cab bruised heel carve. Pool spine hanger boned out nose blunt transfer sketchy. 360 Skull and Sword mini ramp feeble steps bearings casper backside. Trucks nollie Wheels of FIre street fastplant boned out ollie frontside air. 

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

//Rocket air bail hang-up Steve Chumney wax bigspin poseur berm. Feeble boned out pogo lien air boardslide skate or die axle set. Yeah 270 crailtap air aerial shoveit face plant. Baseplate late rocket air masonite cess slide skate or die slob air. Opposite footed grab sketchy powerslide mini ramp soul skate shoveit Sidewalk Surfer. Fakie out helipop mute-air chicken wing G&S risers transfer crail slide. Sick Japan air hip egg plant poseur Pantsman slam nose. Boned out pressure flip hang ten Chet Thomas slappy half-cab bruised heel carve. Pool spine hanger boned out nose blunt transfer sketchy. 360 Skull and Sword mini ramp feeble steps bearings casper backside. Trucks nollie Wheels of FIre street fastplant boned out ollie frontside air. 

?>