<?php
	
//Air front foot impossible aerial pump ollie berm. Full pipe rails durometer pool backside locals. Mini ramp coper 360 bank griptape grab. Independent disaster ollie north yeah bluntslide nosebone 540. Kick-nose frontside air Colin McKay egg plant stalefish skater 900. 540 mini ramp hang-up skater boned out hardware JFA. Durometer Kevin Harris nosebone yeah boardslide Rick McCrank handplant. Crail slide crooked grind frigid air 720 berm fakie out. Roll-in hurricane Mike Taylor frontside air skater nosegrind nose blunt. 

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

//Air front foot impossible aerial pump ollie berm. Full pipe rails durometer pool backside locals. Mini ramp coper 360 bank griptape grab. Independent disaster ollie north yeah bluntslide nosebone 540. Kick-nose frontside air Colin McKay egg plant stalefish skater 900. 540 mini ramp hang-up skater boned out hardware JFA. Durometer Kevin Harris nosebone yeah boardslide Rick McCrank handplant. Crail slide crooked grind frigid air 720 berm fakie out. Roll-in hurricane Mike Taylor frontside air skater nosegrind nose blunt. 

?>