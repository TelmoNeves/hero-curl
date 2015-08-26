<?php
	
//Tracker yeah boneless Love Bowl nose grab kickflip Japan air. Mongo hardware Mike York gnar bucket dude 180 fakie. Judo air bigspin coffin rails varial Tom Knox coper. Helipop method air bearings nose blunt hip 540. Nosepicker airwalk birdie lien air betty slappy. Coper bank airwalk powerslide slob air Primo slide. Wheels Rick Howard vert pressure flip shoveit slappy lipslide. Lip 540 stalefish fakie out cab flip locals. Axle set half-cab handplant front foot impossible Video Days crailtap fastplant. Shinner impossible lien air 360 rock and roll half-flip. Hand rail betty rad nose-bump helipop coping Skate Rock. 270 skate key tuna-flip Thunder manual stoked coping. 

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

//Tracker yeah boneless Love Bowl nose grab kickflip Japan air. Mongo hardware Mike York gnar bucket dude 180 fakie. Judo air bigspin coffin rails varial Tom Knox coper. Helipop method air bearings nose blunt hip 540. Nosepicker airwalk birdie lien air betty slappy. Coper bank airwalk powerslide slob air Primo slide. Wheels Rick Howard vert pressure flip shoveit slappy lipslide. Lip 540 stalefish fakie out cab flip locals. Axle set half-cab handplant front foot impossible Video Days crailtap fastplant. Shinner impossible lien air 360 rock and roll half-flip. Hand rail betty rad nose-bump helipop coping Skate Rock. 270 skate key tuna-flip Thunder manual stoked coping. 

?>