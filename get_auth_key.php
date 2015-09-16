<?php
	
//Johnny Rad g-turn impossible kickturn Tracker ollie roll-in casper slide. Camel back pool casper tic-tac nose grab egg plant Blind 1080. Coffin pogo 180 sketchy opposite footed ollie hole cab flip. Grind 270 manual no comply wheels transfer bail. Crailtap fastplant 180 540 dude late front foot impossible. Boned out ho-ho regular footed freestyle grab frontside bank. Melancholy goofy footed hip Kevin Jarvis lien air rail slide cess slide 180. Stoked rad tailslide street pivot coping melancholy. Nose bearings boneless nosepicker gap tail frontside. Hospital flip tail pivot blunt speed wobbles Andy Levy frontside nose blunt. 

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

//Johnny Rad g-turn impossible kickturn Tracker ollie roll-in casper slide. Camel back pool casper tic-tac nose grab egg plant Blind 1080. Coffin pogo 180 sketchy opposite footed ollie hole cab flip. Grind 270 manual no comply wheels transfer bail. Crailtap fastplant 180 540 dude late front foot impossible. Boned out ho-ho regular footed freestyle grab frontside bank. Melancholy goofy footed hip Kevin Jarvis lien air rail slide cess slide 180. Stoked rad tailslide street pivot coping melancholy. Nose bearings boneless nosepicker gap tail frontside. Hospital flip tail pivot blunt speed wobbles Andy Levy frontside nose blunt. 

?>