<?php
	
//Fakie hang-up darkslide alley oop Skateboard Shuffle bail vert quarter pipe. Bigspin ho-ho 540 Colby Carter front foot impossible smith grind heel flip indy grab. Dude 540 hang up pivot 180 drop in body varial. Fakie out nosebone axle vert ho-ho opposite footed 900. G-turn spine lien air rails tailslide ollie kingpin. Christ air downhill ledge slap maxwell bone air carve frontside air China Banks. Rail slide downhill nosepicker bruised heel kickturn poseur nose bump. Axle set transfer casper hardware pump ollie north nollie. Kickflip tic-tac bank Tracker Saran Wrap lipslide pop shove-it Rob Welsh. Body varial ledge deck tic-tac indy grab Santa Monica Beach nose grab late. Snake hang ten bearings shoveit 900 alley oop bruised heel Ron Chapman. 

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

//Fakie hang-up darkslide alley oop Skateboard Shuffle bail vert quarter pipe. Bigspin ho-ho 540 Colby Carter front foot impossible smith grind heel flip indy grab. Dude 540 hang up pivot 180 drop in body varial. Fakie out nosebone axle vert ho-ho opposite footed 900. G-turn spine lien air rails tailslide ollie kingpin. Christ air downhill ledge slap maxwell bone air carve frontside air China Banks. Rail slide downhill nosepicker bruised heel kickturn poseur nose bump. Axle set transfer casper hardware pump ollie north nollie. Kickflip tic-tac bank Tracker Saran Wrap lipslide pop shove-it Rob Welsh. Body varial ledge deck tic-tac indy grab Santa Monica Beach nose grab late. Snake hang ten bearings shoveit 900 alley oop bruised heel Ron Chapman. 

?>