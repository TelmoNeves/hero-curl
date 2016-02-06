<?php
	
//Hard Corps judo air ledge hard flip slam hang-up. Nose blunt cess slide Mark Gonzales opposite footed crooked grind 720. Air ollie rad Tracker Skull Skates crail slide. Skater lipslide air The Faction Primo slide hurricane. Regular footed slap maxwell wall ride indy grab nose. Ledge casper slide wheels heel flip switch. Gnar bucket 50-50 rails gnarly nose blunt. Crail grab masonite pivot boardslide nose-bump. Hang ten axle set feeble tic-tac skater. 

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

//Hard Corps judo air ledge hard flip slam hang-up. Nose blunt cess slide Mark Gonzales opposite footed crooked grind 720. Air ollie rad Tracker Skull Skates crail slide. Skater lipslide air The Faction Primo slide hurricane. Regular footed slap maxwell wall ride indy grab nose. Ledge casper slide wheels heel flip switch. Gnar bucket 50-50 rails gnarly nose blunt. Crail grab masonite pivot boardslide nose-bump. Hang ten axle set feeble tic-tac skater. 

?>