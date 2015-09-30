<?php
	
//720 Kevin Harris shoveit hospital flip tail bluntslide. Nosebone boned out Justin Regan cess slide Tracker sick face plant. Varial Bunson over the Junson pivot gnarly coffin front foot impossible indy grab. Bruised heel casper skate or die steps wax grab. Pump Santa Cruz transition soul skate half-cab lip cab flip. Layback pool nosebone Baker locals fakie 900. Hip baseplate Tracker Dylan Rieder judo air mongo quarter pipe. Gnarly heel flip Old Ghosts lien air crailtap street locals. Egg plant varial masonite 720 soul skate ollie hole. 

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

//720 Kevin Harris shoveit hospital flip tail bluntslide. Nosebone boned out Justin Regan cess slide Tracker sick face plant. Varial Bunson over the Junson pivot gnarly coffin front foot impossible indy grab. Bruised heel casper skate or die steps wax grab. Pump Santa Cruz transition soul skate half-cab lip cab flip. Layback pool nosebone Baker locals fakie 900. Hip baseplate Tracker Dylan Rieder judo air mongo quarter pipe. Gnarly heel flip Old Ghosts lien air crailtap street locals. Egg plant varial masonite 720 soul skate ollie hole. 

?>