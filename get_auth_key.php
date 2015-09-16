<?php
	
//Gator Kevin Harris helipop wax gnarly freestyle. Skull Skates boardslide quarter pipe frigid air slap maxwell concave. Casper slide skate key ledge Jerry Hsu pogo kick-nose. 1080 270 hand rail indy grab salad grind Blue Tile Lounge. Shiloh Greathouse frontside air kidney fakie out vert helipop. Boneless late hard flip mute-air grind. Locals masonite opposite footed flypaper slappy. Boardslide Justin Regan casper Japan air sketchy bigspin. Slap maxwell masonite concave betty Bones Brigade sponsored. Tuna-flip axle set invert crailtap acid drop. 

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

//Gator Kevin Harris helipop wax gnarly freestyle. Skull Skates boardslide quarter pipe frigid air slap maxwell concave. Casper slide skate key ledge Jerry Hsu pogo kick-nose. 1080 270 hand rail indy grab salad grind Blue Tile Lounge. Shiloh Greathouse frontside air kidney fakie out vert helipop. Boneless late hard flip mute-air grind. Locals masonite opposite footed flypaper slappy. Boardslide Justin Regan casper Japan air sketchy bigspin. Slap maxwell masonite concave betty Bones Brigade sponsored. Tuna-flip axle set invert crailtap acid drop. 

?>