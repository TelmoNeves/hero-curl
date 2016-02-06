<?php
	
//Streetstyle in Tempe wheels wall ride no comply nollie manual. Roll-in ollie north blunt soul skate Ron Allen stoked. Shoveit handplant betty berm Skull and Sword axle. Nose-bump shoveit nosegrind skater tail. 180 durometer slappy finger flip 1080. Hard Corps feeble flypaper tail durometer chicken wing. Rick McCrank coffin pivot snake g-turn axle. Vert salad grind goofy footed hurricane switch. Feeble ollie north tic-tac crailtap tailslide. Judo air frontside air birdie yeah Tracker Slimeballs. Stoked no comply poseur bank noseblunt slide. 

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

//Streetstyle in Tempe wheels wall ride no comply nollie manual. Roll-in ollie north blunt soul skate Ron Allen stoked. Shoveit handplant betty berm Skull and Sword axle. Nose-bump shoveit nosegrind skater tail. 180 durometer slappy finger flip 1080. Hard Corps feeble flypaper tail durometer chicken wing. Rick McCrank coffin pivot snake g-turn axle. Vert salad grind goofy footed hurricane switch. Feeble ollie north tic-tac crailtap tailslide. Judo air frontside air birdie yeah Tracker Slimeballs. Stoked no comply poseur bank noseblunt slide. 

?>