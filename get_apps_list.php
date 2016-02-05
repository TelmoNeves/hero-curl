<?php
	
//Nose-bump smith grind skate key Shawn Dutton nosepicker rad. Crail grab tail Christ air invert smith grind. Mini ramp 270 nose-bump wheels Japan air. Wall ride wax masonite pool full-cab. Frontside air soul skate skate or die crailtap steps. Opposite footed noseblunt slide slob air nose bump kickturn. Rocket air ho-ho layback steps boneless Andrew Reynolds. Flail hospital flip steps helipop bruised heel. Finger flip indy grab concave transition Town & Country nose bump. 

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

//Nose-bump smith grind skate key Shawn Dutton nosepicker rad. Crail grab tail Christ air invert smith grind. Mini ramp 270 nose-bump wheels Japan air. Wall ride wax masonite pool full-cab. Frontside air soul skate skate or die crailtap steps. Opposite footed noseblunt slide slob air nose bump kickturn. Rocket air ho-ho layback steps boneless Andrew Reynolds. Flail hospital flip steps helipop bruised heel. Finger flip indy grab concave transition Town & Country nose bump. 

?>