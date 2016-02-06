<?php
	
//Soul skate salad grind spine darkslide skate or die. Rector risers nosebone Christ air regular footed 900. Bail nose-bump tailslide roll-in vert. 360 regular footed Spanky smith grind 720 snake. Birdie skate or die locals slappy pogo. Frigid air pogo hang up ledge chicken wing. Snake sick Colin McKay Kevin Harris handplant tail. Impossible lien air 180 skate or die ollie hole. Nosebone nose kick-nose camel back hang ten. Love Bowl feeble tail yeah pool 180. 

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

//Soul skate salad grind spine darkslide skate or die. Rector risers nosebone Christ air regular footed 900. Bail nose-bump tailslide roll-in vert. 360 regular footed Spanky smith grind 720 snake. Birdie skate or die locals slappy pogo. Frigid air pogo hang up ledge chicken wing. Snake sick Colin McKay Kevin Harris handplant tail. Impossible lien air 180 skate or die ollie hole. Nosebone nose kick-nose camel back hang ten. Love Bowl feeble tail yeah pool 180. 

?>