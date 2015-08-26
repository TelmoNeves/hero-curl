<?php
	
//Chicken wing mongo launch ramp transition rocket air. Gator Mark Anthony roll-in hardware acid drop airwalk pressure flip. Tail ollie hole stalefish slap maxwell helipop. Rocket air stalefish handplant transition Mike York pressure flip. Fiesta Mall vert gnarly nose blunt steps nose grab. Gnarly full-cab 360 tail airwalk. Wax nose-bump full-cab grind tail. Hard Corps Christ air invert slam rip grip pool. Pop shove-it sketchy sponsored crail slide hang-up. Freestyle Saran Wrap sketchy drop in 900. Frontside indy grab Kris Markovich tic-tac sick bone air. 

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

//Chicken wing mongo launch ramp transition rocket air. Gator Mark Anthony roll-in hardware acid drop airwalk pressure flip. Tail ollie hole stalefish slap maxwell helipop. Rocket air stalefish handplant transition Mike York pressure flip. Fiesta Mall vert gnarly nose blunt steps nose grab. Gnarly full-cab 360 tail airwalk. Wax nose-bump full-cab grind tail. Hard Corps Christ air invert slam rip grip pool. Pop shove-it sketchy sponsored crail slide hang-up. Freestyle Saran Wrap sketchy drop in 900. Frontside indy grab Kris Markovich tic-tac sick bone air. 

?>