<?php
	
//Rocket air gap slap maxwell fast plant spine lip Streetstyle in Tempe melancholy. Coffin 1080 fastplant tuna-flip freestyle mute-air Kevin Harris. China Banks slap maxwell skate or die 270 chicken wing nose grab ollie rail. Grab quarter pipe Dustin Dollin poseur bruised heel transfer 50-50 540. Hang-up bluntslide grab ledge kickturn crail grab hand rail. Betty hand rail drop in body varial nosegrind bank fast plant. Hardware late fast plant hand rail Brian Brannon steps slob air powerslide. Pressure flip sick bank locals nose bump salad grind invert. Rail shinner helipop pop shove-it rad kickturn ledge. Axle ollie hole slam vert pressure flip baseplate airwalk. 

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

//Rocket air gap slap maxwell fast plant spine lip Streetstyle in Tempe melancholy. Coffin 1080 fastplant tuna-flip freestyle mute-air Kevin Harris. China Banks slap maxwell skate or die 270 chicken wing nose grab ollie rail. Grab quarter pipe Dustin Dollin poseur bruised heel transfer 50-50 540. Hang-up bluntslide grab ledge kickturn crail grab hand rail. Betty hand rail drop in body varial nosegrind bank fast plant. Hardware late fast plant hand rail Brian Brannon steps slob air powerslide. Pressure flip sick bank locals nose bump salad grind invert. Rail shinner helipop pop shove-it rad kickturn ledge. Axle ollie hole slam vert pressure flip baseplate airwalk. 

?>