<?php
	
//Bigspin JFA fakie out manual quarter pipe. Mongo flail baseplate casper slide. Flypaper ollie north spine skate or die. Primo slide no comply salad grind coper. Slappy smith grind pool axle set. Shinner birdie axle set melancholy. Casper tail 540 hardware. Roll-in hand rail spine ollie north. Japan air wax shinner nosegrind. Pivot tailslide body varial concave. Bruised heel kick-nose transition Christ air. Nose spine wheels layback Bones Brigade. Crooked grind gnarly drop in vert. 

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

//Bigspin JFA fakie out manual quarter pipe. Mongo flail baseplate casper slide. Flypaper ollie north spine skate or die. Primo slide no comply salad grind coper. Slappy smith grind pool axle set. Shinner birdie axle set melancholy. Casper tail 540 hardware. Roll-in hand rail spine ollie north. Japan air wax shinner nosegrind. Pivot tailslide body varial concave. Bruised heel kick-nose transition Christ air. Nose spine wheels layback Bones Brigade. Crooked grind gnarly drop in vert. 

?>