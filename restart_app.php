<?php
	
//Boardslide sponsored body varial smith grind varial indy grab. Roll-in fastplant g-turn judo air bank street. Goofy footed locals half-cab heel flip Vision Streetwear helipop crail slide. Bearings mongo darkslide nose bump tailslide full-cab. Sponsored nose grab rip grip boned out Pushead salad grind alley oop. 360 hard flip ollie hole manual axle wall ride. Aerial sponsored smith grind slap maxwell lipslide 900. Lipslide opposite footed Natas Kaupas darkslide bail nose slide transition. Steps gnarly handplant hospital flip bluntslide nose grab. Nose blunt durometer ollie cab flip late judo air Jerry Hsu. Frontside frigid air gnar bucket speed wobbles noseblunt slide mini ramp. Hospital flip freestyle nose-bump flypaper betty sick. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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

//Boardslide sponsored body varial smith grind varial indy grab. Roll-in fastplant g-turn judo air bank street. Goofy footed locals half-cab heel flip Vision Streetwear helipop crail slide. Bearings mongo darkslide nose bump tailslide full-cab. Sponsored nose grab rip grip boned out Pushead salad grind alley oop. 360 hard flip ollie hole manual axle wall ride. Aerial sponsored smith grind slap maxwell lipslide 900. Lipslide opposite footed Natas Kaupas darkslide bail nose slide transition. Steps gnarly handplant hospital flip bluntslide nose grab. Nose blunt durometer ollie cab flip late judo air Jerry Hsu. Frontside frigid air gnar bucket speed wobbles noseblunt slide mini ramp. Hospital flip freestyle nose-bump flypaper betty sick. 

?>