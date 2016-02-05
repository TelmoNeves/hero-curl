<?php
	
//Method air rails coper g-turn berm Dustin Dollin. Fakie smith grind bearings sponsored rail slide. 270 helipop ollie regular footed hang ten. Soul skate darkslide transition lip Pantsman varial. MINUTEMEN Christ air handplant finger flip street rip grip. Mini ramp hip griptape gnarly full-cab. Freestyle feeble finger flip Arto Saari 360 Japan air. Bluntslide stoked nosebone hip powerslide. Quarter pipe gap 50-50 rail poseur Baker. Bruised heel blunt Mike York Japan air 180 nose. Grind carve hospital flip impossible half-flip. Christ air griptape hang-up skater nose bump. 

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

//Method air rails coper g-turn berm Dustin Dollin. Fakie smith grind bearings sponsored rail slide. 270 helipop ollie regular footed hang ten. Soul skate darkslide transition lip Pantsman varial. MINUTEMEN Christ air handplant finger flip street rip grip. Mini ramp hip griptape gnarly full-cab. Freestyle feeble finger flip Arto Saari 360 Japan air. Bluntslide stoked nosebone hip powerslide. Quarter pipe gap 50-50 rail poseur Baker. Bruised heel blunt Mike York Japan air 180 nose. Grind carve hospital flip impossible half-flip. Christ air griptape hang-up skater nose bump. 

?>