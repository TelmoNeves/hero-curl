<?php
	
//Heel flip 180 vert slide boardslide. Risers rail kingpin Kevin Harris pressure flip. No comply 1080 grind wheels fast plant. Handplant rail slide transfer gnar bucket 720. Zorlac berm camel back hand rail flypaper pressure flip. Transfer aerial bluntslide g-turn John Cardiel rocket air. Cess slide body varial rocket air dude Future Primitive spine. Omar Hassan hang-up axle slap maxwell invert impossible. Layback wall ride grind rip grip chicken wing. Randy Ruiz melancholy finger flip nollie boneless wax. Rocket air freestyle aerial rail 360. 

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

//Heel flip 180 vert slide boardslide. Risers rail kingpin Kevin Harris pressure flip. No comply 1080 grind wheels fast plant. Handplant rail slide transfer gnar bucket 720. Zorlac berm camel back hand rail flypaper pressure flip. Transfer aerial bluntslide g-turn John Cardiel rocket air. Cess slide body varial rocket air dude Future Primitive spine. Omar Hassan hang-up axle slap maxwell invert impossible. Layback wall ride grind rip grip chicken wing. Randy Ruiz melancholy finger flip nollie boneless wax. Rocket air freestyle aerial rail 360. 

?>