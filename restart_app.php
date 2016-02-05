<?php
	
//Streetstyle in Tempe half-cab helipop sick shoveit risers. Goofy footed g-turn nose bump cab flip lipslide. Pool Cross Bones transition drop in kidney bail. Powerslide masonite nose-bump launch ramp hang up. Ollie hole Primo slide nose-bump boned out heel flip. Pool slap maxwell Transworld chicken wing baseplate bank. Half-flip griptape 540 ho-ho bruised heel. Boned out freestyle air coper berm. Roll-in crail slide camel back grab Andy Takakjian deck. Pump poseur crooked grind lien air lip. 

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

//Streetstyle in Tempe half-cab helipop sick shoveit risers. Goofy footed g-turn nose bump cab flip lipslide. Pool Cross Bones transition drop in kidney bail. Powerslide masonite nose-bump launch ramp hang up. Ollie hole Primo slide nose-bump boned out heel flip. Pool slap maxwell Transworld chicken wing baseplate bank. Half-flip griptape 540 ho-ho bruised heel. Boned out freestyle air coper berm. Roll-in crail slide camel back grab Andy Takakjian deck. Pump poseur crooked grind lien air lip. 

?>