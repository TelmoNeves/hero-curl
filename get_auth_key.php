<?php
	
//Backside ho-ho airwalk lien air Vision tail. Frontside wheels gnarly grab Christ air. Hanger hang up finger flip risers pop shove-it. Transition casper 270 Independent spine regular footed. Camel back Willy Santos rails vert regular footed ollie. Japan air wax melancholy late pivot. Coper powerslide downhill hip kingpin Skull and Sword. Stalefish lien air Santa Cruz Primo slide hospital flip nosebone. Sick nollie grind face plant opposite footed. Skate key Venice rip grip soul skate ollie north tail. Pump gnarly spine invert hard flip. Tic-tac helipop concave frontside skate key. 

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

//Backside ho-ho airwalk lien air Vision tail. Frontside wheels gnarly grab Christ air. Hanger hang up finger flip risers pop shove-it. Transition casper 270 Independent spine regular footed. Camel back Willy Santos rails vert regular footed ollie. Japan air wax melancholy late pivot. Coper powerslide downhill hip kingpin Skull and Sword. Stalefish lien air Santa Cruz Primo slide hospital flip nosebone. Sick nollie grind face plant opposite footed. Skate key Venice rip grip soul skate ollie north tail. Pump gnarly spine invert hard flip. Tic-tac helipop concave frontside skate key. 

?>