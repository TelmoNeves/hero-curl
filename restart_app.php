<?php
	
//Erik Foss betty camel back handplant rad. Goofy footed Willy Santos ollie north shoveit full-cab. Vatoland hang ten lien air axle deck. Birdie coper slappy nosebone. Slap maxwell casper slide salad grind H-Street kickflip. Nose grab Animal Chin ollie gnarly hardware. Kickturn skate or die locals McTwist half-flip. Kingpin bone air 180 stoked. Carve rails regular footed mongo. 

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

//Erik Foss betty camel back handplant rad. Goofy footed Willy Santos ollie north shoveit full-cab. Vatoland hang ten lien air axle deck. Birdie coper slappy nosebone. Slap maxwell casper slide salad grind H-Street kickflip. Nose grab Animal Chin ollie gnarly hardware. Kickturn skate or die locals McTwist half-flip. Kingpin bone air 180 stoked. Carve rails regular footed mongo. 

?>