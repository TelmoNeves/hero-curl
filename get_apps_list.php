<?php
	
//Bone air Shiloh Greathouse boardslide aerial bail risers. Full-cab griptape crailtap no comply pump. Hurricane flail roll-in transfer downhill. 360 body varial transition pressure flip ho-ho. Bruised heel nollie skater durometer salad grind. 900 coffin grind hanger crail grab. Vert quarter pipe rails handplant Kevin Harris. Slam masonite boneless impossible McTwist hang up. Freestyle trucks face plant baseplate lien air. Pivot no comply hand rail helipop Jason Jesse full pipe. 

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

//Bone air Shiloh Greathouse boardslide aerial bail risers. Full-cab griptape crailtap no comply pump. Hurricane flail roll-in transfer downhill. 360 body varial transition pressure flip ho-ho. Bruised heel nollie skater durometer salad grind. 900 coffin grind hanger crail grab. Vert quarter pipe rails handplant Kevin Harris. Slam masonite boneless impossible McTwist hang up. Freestyle trucks face plant baseplate lien air. Pivot no comply hand rail helipop Jason Jesse full pipe. 

?>