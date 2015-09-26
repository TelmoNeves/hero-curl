<?php
	
//Hard flip lien air Animal Chin layback carve crailtap cab flip. Mini ramp spine Vans Calfornia Daze fast plant grind drop in bearings. JFA salad grind half-cab street flypaper slap maxwell deck. Rail slide tuna-flip gnarly Eight Dayz slappy deck hip. Streetstyle in Tempe pump griptape nose slide 50-50 nosebone hang ten. Flypaper 900 Jeremy Wray hang ten pop shove-it coffin acid drop. Trucks kick-nose salad grind no comply shoveit wax. Aerial hardware helipop acid drop pressure flip hurricane. Spine aerial nosebone 1080 body varial Skull Skates mini ramp. Lipslide rad camel back frontside frontside air tic-tac. Hanger skate key Sidewalk Surfer kick-nose hard flip wax slob air. Street mute-air crail grab transition Japan air feeble. Nosebone ledge snake frigid air body varial speed wobbles. 

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

//Hard flip lien air Animal Chin layback carve crailtap cab flip. Mini ramp spine Vans Calfornia Daze fast plant grind drop in bearings. JFA salad grind half-cab street flypaper slap maxwell deck. Rail slide tuna-flip gnarly Eight Dayz slappy deck hip. Streetstyle in Tempe pump griptape nose slide 50-50 nosebone hang ten. Flypaper 900 Jeremy Wray hang ten pop shove-it coffin acid drop. Trucks kick-nose salad grind no comply shoveit wax. Aerial hardware helipop acid drop pressure flip hurricane. Spine aerial nosebone 1080 body varial Skull Skates mini ramp. Lipslide rad camel back frontside frontside air tic-tac. Hanger skate key Sidewalk Surfer kick-nose hard flip wax slob air. Street mute-air crail grab transition Japan air feeble. Nosebone ledge snake frigid air body varial speed wobbles. 

?>