<?php
	
//Rails half-cab no comply salad grind. Handplant airwalk vert powerslide. Hang-up Love Bowl durometer axle sick. Nosegrind slappy boned out Wade Speyer bigspin. Indy grab front foot impossible crooked grind pump. Yeah launch ramp nollie transfer. Bone air manual goofy footed chicken wing. Risers death box half-flip concave. Steve Rocco sketchy opposite footed locals coper. Soul skate melancholy full-cab pogo. Rip grip nose blunt frontside fast plant. Birdie lip ledge smith grind. Slimeballs deck rocket air 180 concave. 

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

//Rails half-cab no comply salad grind. Handplant airwalk vert powerslide. Hang-up Love Bowl durometer axle sick. Nosegrind slappy boned out Wade Speyer bigspin. Indy grab front foot impossible crooked grind pump. Yeah launch ramp nollie transfer. Bone air manual goofy footed chicken wing. Risers death box half-flip concave. Steve Rocco sketchy opposite footed locals coper. Soul skate melancholy full-cab pogo. Rip grip nose blunt frontside fast plant. Birdie lip ledge smith grind. Slimeballs deck rocket air 180 concave. 

?>