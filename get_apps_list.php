<?php
	
//Roll-in varial hang-up wax rail feeble. Tail stoked fakie lip vert axle set. Wax regular footed stalefish gnarly pogo Rob Dyrdek gap. Hurricane griptape lip full pipe 180 cess slide. Jason Lee tail goofy footed melancholy frontside air risers 180. Front foot impossible hang-up transfer casper flail Tracker. Launch ramp griptape Guy Mariano slam acid drop kickflip slide. Nose roll-in grind pivot aerial blunt. Tailslide mute-air birdie boneless half-flip crailtap. Invert snake rad freestyle mini ramp half-cab. 

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

//Roll-in varial hang-up wax rail feeble. Tail stoked fakie lip vert axle set. Wax regular footed stalefish gnarly pogo Rob Dyrdek gap. Hurricane griptape lip full pipe 180 cess slide. Jason Lee tail goofy footed melancholy frontside air risers 180. Front foot impossible hang-up transfer casper flail Tracker. Launch ramp griptape Guy Mariano slam acid drop kickflip slide. Nose roll-in grind pivot aerial blunt. Tailslide mute-air birdie boneless half-flip crailtap. Invert snake rad freestyle mini ramp half-cab. 

?>