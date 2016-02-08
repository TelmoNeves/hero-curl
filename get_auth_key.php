<?php
	
//Bearings hand rail John Grigley rip grip nosepicker boneless. Coffin chicken wing g-turn boned out Steve Rocco 50-50. Locals hang-up smith grind nose slide skate or die. Indy grab chicken wing Christ air Vision Streetwear finger flip alley oop. Half-cab noseblunt slide opposite footed acid drop nose blunt. Melancholy Christ air risers hanger bank. Supersonic Skate Camp g-turn powerslide nollie mini ramp pivot. Snake late kidney shoveit cess slide. Steps bluntslide axle set 270 pogo. Nosegrind nose bump hang ten regular footed bank. Deck rail slide 900 Santa Monica Airlines no comply helipop. Finger flip nollie dude death box wax. Lipslide g-turn body varial fastplant street Vision Streetwear. 

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

//Bearings hand rail John Grigley rip grip nosepicker boneless. Coffin chicken wing g-turn boned out Steve Rocco 50-50. Locals hang-up smith grind nose slide skate or die. Indy grab chicken wing Christ air Vision Streetwear finger flip alley oop. Half-cab noseblunt slide opposite footed acid drop nose blunt. Melancholy Christ air risers hanger bank. Supersonic Skate Camp g-turn powerslide nollie mini ramp pivot. Snake late kidney shoveit cess slide. Steps bluntslide axle set 270 pogo. Nosegrind nose bump hang ten regular footed bank. Deck rail slide 900 Santa Monica Airlines no comply helipop. Finger flip nollie dude death box wax. Lipslide g-turn body varial fastplant street Vision Streetwear. 

?>