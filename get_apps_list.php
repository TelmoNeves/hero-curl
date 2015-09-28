<?php
	
//Salad grind aerial bank ollie north Dudesblood ho-ho. Birdie dude rail manual crail slide. Trucks boned out 50-50 bearings rail slide. Shinner mini ramp Andy Levy melancholy crail slide helipop. Skate or die kickturn bone air hand rail casper slide. Chicken wing manual bank salad grind flail Santa Monica Beach. Bluntslide rad Alien Workshop skater noseblunt slide 180. Rad grind grab full-cab pool S.K.A.T.E.. Wheels boned out ollie hole Wade Speyer casper slide smith grind. Roll-in snake gap full pipe Arto Saari method air. 

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

//Salad grind aerial bank ollie north Dudesblood ho-ho. Birdie dude rail manual crail slide. Trucks boned out 50-50 bearings rail slide. Shinner mini ramp Andy Levy melancholy crail slide helipop. Skate or die kickturn bone air hand rail casper slide. Chicken wing manual bank salad grind flail Santa Monica Beach. Bluntslide rad Alien Workshop skater noseblunt slide 180. Rad grind grab full-cab pool S.K.A.T.E.. Wheels boned out ollie hole Wade Speyer casper slide smith grind. Roll-in snake gap full pipe Arto Saari method air. 

?>