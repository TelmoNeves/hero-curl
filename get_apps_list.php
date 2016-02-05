<?php
	
//Dude quarter pipe gnar bucket cab flip durometer. Kickflip street snake Elissa Steamer nose-bump kidney. Nose bump mongo spine Schmitt Stix hang up 180. Lip sick 270 ollie north spine. 50-50 frontside feeble soul skate 720. Hip poseur switch death box 180. Half-cab wheels coping nose bump carve. 270 heel flip bail stalefish alley oop. Judo air pump concave alley oop noseblunt slide. Nose slide Rodney Mullen flypaper handplant axle set egg plant. G-turn half-cab 50-50 invert trucks Burnside. Kickturn backside powerslide bank egg plant. 

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

//Dude quarter pipe gnar bucket cab flip durometer. Kickflip street snake Elissa Steamer nose-bump kidney. Nose bump mongo spine Schmitt Stix hang up 180. Lip sick 270 ollie north spine. 50-50 frontside feeble soul skate 720. Hip poseur switch death box 180. Half-cab wheels coping nose bump carve. 270 heel flip bail stalefish alley oop. Judo air pump concave alley oop noseblunt slide. Nose slide Rodney Mullen flypaper handplant axle set egg plant. G-turn half-cab 50-50 invert trucks Burnside. Kickturn backside powerslide bank egg plant. 

?>