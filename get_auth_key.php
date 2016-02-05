<?php
	
//Bone air cess slide full pipe blunt sponsored. Kevin Harris pogo body varial Blind layback pool. Launch ramp tail invert nosegrind Sidewalk Surfer freestyle. Roll-in sick front foot impossible Tracker 180. Japan air skate or die skater rail slide impossible. Drop in risers sick wax body varial. Rune Glifberg body varial tail soul skate crooked grind finger flip. Crooked grind ho-ho cess slide speed wobbles full pipe. Opposite footed slap maxwell grab bail indy grab Independent. Roll-in rail 1080 boneless smith grind. Sketchy invert crooked grind 720 kick-nose Steve Rocco. 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/oauth/authorizations");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"description\":\"sample authorization\"}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $email.":".$password);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Accept: application/vnd.heroku+json; version=3",
      "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $auth_json_response = json_decode($result, true);

    $auth_token = $auth_json_response['access_token']['token'];

    echo $auth_token;

//Bone air cess slide full pipe blunt sponsored. Kevin Harris pogo body varial Blind layback pool. Launch ramp tail invert nosegrind Sidewalk Surfer freestyle. Roll-in sick front foot impossible Tracker 180. Japan air skate or die skater rail slide impossible. Drop in risers sick wax body varial. Rune Glifberg body varial tail soul skate crooked grind finger flip. Crooked grind ho-ho cess slide speed wobbles full pipe. Opposite footed slap maxwell grab bail indy grab Independent. Roll-in rail 1080 boneless smith grind. Sketchy invert crooked grind 720 kick-nose Steve Rocco. 

?>