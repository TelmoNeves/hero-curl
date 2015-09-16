<?php
	
//Crail slide coffin ollie hole frontside air flail. Snake coping Rat Bones steps goofy footed hanger. Bluntslide body varial Tony Magnusson wheels nosegrind coffin. Full pipe Saran Wrap egg plant skate key Steve Chumney street. Hand rail birdie boned out slam kickflip. Cess slide skater boneless drop in slam. Indy grab frontside hanger tuna-flip Dustin Dollin tail. Rocket air darkslide finger flip Jason Lee sketchy full-cab. 720 gnar bucket pop shove-it frigid air tailslide. 

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

//Crail slide coffin ollie hole frontside air flail. Snake coping Rat Bones steps goofy footed hanger. Bluntslide body varial Tony Magnusson wheels nosegrind coffin. Full pipe Saran Wrap egg plant skate key Steve Chumney street. Hand rail birdie boned out slam kickflip. Cess slide skater boneless drop in slam. Indy grab frontside hanger tuna-flip Dustin Dollin tail. Rocket air darkslide finger flip Jason Lee sketchy full-cab. 720 gnar bucket pop shove-it frigid air tailslide. 

?>