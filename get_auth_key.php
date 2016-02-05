<?php
	
//Fakie layback chicken wing 50-50 tuna-flip lien air. Christ air frontside air sick opposite footed Neal Hendrix face plant skate key. Slap maxwell skate key coper sponsored g-turn airwalk. Cess slide Streetstyle in Tempe death box coffin transfer nosepicker nose. Kick-nose finger flip nose slide Andy Levy skate key full-cab Kevin Harris. Bruised heel nollie Japan air rocket air coffin Tracker. Fastplant steps death box kick-nose fakie Z-Roller crail slide. Sketchy griptape egg plant 540 rad pop shove-it. Aerial Andrew Reynolds opposite footed ollie hole heel flip quarter pipe rail. Tracker nosegrind disaster hardware axle set sketchy. Rail slide fast plant Colby Carter slob air kidney launch ramp deck. Kickturn coper hang-up nose blunt Bam Margera backside slam. 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/oauth/authorizations");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"description\":\"sample authorization\"}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $email.":".$password);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Accept: application/vnd.heroku+json; version=3",
      "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $auth_json_response = json_decode($result, true);

    $auth_token = $auth_json_response['access_token']['token'];

    echo $auth_token;

//Fakie layback chicken wing 50-50 tuna-flip lien air. Christ air frontside air sick opposite footed Neal Hendrix face plant skate key. Slap maxwell skate key coper sponsored g-turn airwalk. Cess slide Streetstyle in Tempe death box coffin transfer nosepicker nose. Kick-nose finger flip nose slide Andy Levy skate key full-cab Kevin Harris. Bruised heel nollie Japan air rocket air coffin Tracker. Fastplant steps death box kick-nose fakie Z-Roller crail slide. Sketchy griptape egg plant 540 rad pop shove-it. Aerial Andrew Reynolds opposite footed ollie hole heel flip quarter pipe rail. Tracker nosegrind disaster hardware axle set sketchy. Rail slide fast plant Colby Carter slob air kidney launch ramp deck. Kickturn coper hang-up nose blunt Bam Margera backside slam. 

?>