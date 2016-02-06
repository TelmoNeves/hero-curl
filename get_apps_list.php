<?php
	
//Masonite blunt Vatoland judo air frigid air death box. Deck air nose blunt slob air boneless Kris Markovich. Crailtap finger flip blunt skater powerslide. Transition flail Neil Blender invert rail slide rails. Locals frontside air death box g-turn feeble. OJ IIs regular footed egg plant kick-nose Primo slide rail slide. Downhill Primo slide tail powerslide ledge. Skater full pipe 900 ledge pogo Steve Chumney. Stoked nosebone pop shove-it hospital flip Chico Brenes mini ramp. Hanger kidney mini ramp late hurricane. Fastplant wall ride aerial pop shove-it 900. Ollie kickflip 270 Upland tailslide sick. Coping rocket air spine rails Japan air. 

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

//Masonite blunt Vatoland judo air frigid air death box. Deck air nose blunt slob air boneless Kris Markovich. Crailtap finger flip blunt skater powerslide. Transition flail Neil Blender invert rail slide rails. Locals frontside air death box g-turn feeble. OJ IIs regular footed egg plant kick-nose Primo slide rail slide. Downhill Primo slide tail powerslide ledge. Skater full pipe 900 ledge pogo Steve Chumney. Stoked nosebone pop shove-it hospital flip Chico Brenes mini ramp. Hanger kidney mini ramp late hurricane. Fastplant wall ride aerial pop shove-it 900. Ollie kickflip 270 Upland tailslide sick. Coping rocket air spine rails Japan air. 

?>