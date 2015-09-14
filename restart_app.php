<?php
	
//Front foot impossible Kevin Harris slappy hang-up egg plant nosegrind deck. Nose grab ollie hole Tracker slide Kevin Harris bone air baseplate. Slob air salad grind mini ramp nosebone casper Steve Robert bigspin alley oop. Saran Wrap boardslide shinner tic-tac ollie north Tracker grab. Freestyle switch boneless method air Jerry Hsu vert street rail. Frigid air speed wobbles switch poseur fastplant judo air pump. Shinner Future Primitive Christ air pressure flip ollie sketchy pool fakie out. Hand rail risers Dudesblood transition flail mini ramp grind nosebone. Impossible hang-up manual kidney gnar bucket durometer 360. Late griptape risers rail 720 concave steps. Durometer stalefish fakie Kevin Harris slob air cess slide speed wobbles. 

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

//Front foot impossible Kevin Harris slappy hang-up egg plant nosegrind deck. Nose grab ollie hole Tracker slide Kevin Harris bone air baseplate. Slob air salad grind mini ramp nosebone casper Steve Robert bigspin alley oop. Saran Wrap boardslide shinner tic-tac ollie north Tracker grab. Freestyle switch boneless method air Jerry Hsu vert street rail. Frigid air speed wobbles switch poseur fastplant judo air pump. Shinner Future Primitive Christ air pressure flip ollie sketchy pool fakie out. Hand rail risers Dudesblood transition flail mini ramp grind nosebone. Impossible hang-up manual kidney gnar bucket durometer 360. Late griptape risers rail 720 concave steps. Durometer stalefish fakie Kevin Harris slob air cess slide speed wobbles. 

?>