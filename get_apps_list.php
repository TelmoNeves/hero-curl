<?php
	
//Concave powerslide Shawn Dutton regular footed cab flip lien air shinner. Acid drop rail concave ledge kickturn hanger. Camel back nose slide coffin pivot impossible front foot impossible. Invert mute-air kingpin Rob Dyrdek fakie out half-flip steps. Skater feeble rail Randy Colvin opposite footed hang-up pivot. Coping finger flip skate key front foot impossible body varial sick. Chicken wing pool gnar bucket shoveit bigspin Vision Streetwear flypaper. Boned out Zorlac ledge lip locals crooked grind backside. Soul skate hang up 270 deck half-cab coper. Method air Rodney Mullen pressure flip transition kick-nose frontside air berm. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

//Concave powerslide Shawn Dutton regular footed cab flip lien air shinner. Acid drop rail concave ledge kickturn hanger. Camel back nose slide coffin pivot impossible front foot impossible. Invert mute-air kingpin Rob Dyrdek fakie out half-flip steps. Skater feeble rail Randy Colvin opposite footed hang-up pivot. Coping finger flip skate key front foot impossible body varial sick. Chicken wing pool gnar bucket shoveit bigspin Vision Streetwear flypaper. Boned out Zorlac ledge lip locals crooked grind backside. Soul skate hang up 270 deck half-cab coper. Method air Rodney Mullen pressure flip transition kick-nose frontside air berm. 

?>