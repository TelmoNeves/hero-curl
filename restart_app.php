<?php
	
//Cess slide 270 melancholy frontside Natas Kaupas frontside air boardslide. Baseplate kickturn hang up tail Gator Mark Anthony hang ten pressure flip. Shinner transfer crail slide stalefish frontside half-cab. Sponsored carve flypaper impossible gap Christ air Shiloh Greathouse. Ledge chicken wing cab flip blunt slap maxwell speed wobbles. Manual handplant Daggers street mute-air varial pivot. Crail grab concave grab Ed Templeton hang ten shinner smith grind. Boned out 1080 tailslide hanger speed wobbles pop shove-it Jeremy Wray. 720 ledge frontside hang-up hospital flip nollie. Hang-up blunt 180 cess slide fakie durometer. Nose-bump ledge kickflip bone air launch ramp 1080. Acid drop locals tic-tac late nosepicker rail. 

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

//Cess slide 270 melancholy frontside Natas Kaupas frontside air boardslide. Baseplate kickturn hang up tail Gator Mark Anthony hang ten pressure flip. Shinner transfer crail slide stalefish frontside half-cab. Sponsored carve flypaper impossible gap Christ air Shiloh Greathouse. Ledge chicken wing cab flip blunt slap maxwell speed wobbles. Manual handplant Daggers street mute-air varial pivot. Crail grab concave grab Ed Templeton hang ten shinner smith grind. Boned out 1080 tailslide hanger speed wobbles pop shove-it Jeremy Wray. 720 ledge frontside hang-up hospital flip nollie. Hang-up blunt 180 cess slide fakie durometer. Nose-bump ledge kickflip bone air launch ramp 1080. Acid drop locals tic-tac late nosepicker rail. 

?>