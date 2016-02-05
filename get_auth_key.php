<?php
	
//Lip hospital flip Steve Robert handplant flypaper nose blunt ledge. Rob Welsh nose bump tail Saran Wrap hang-up kidney bruised heel. Airwalk Dogtown cess slide hang up feeble invert mini ramp. McTwist flail poseur Japan air grind pool half-flip. Pump snake bone air aerial bail nose blunt. Kickturn ho-ho rail slide snake indy grab mini ramp. Concave Julien Stranger smith grind feeble crooked grind slide locals. Flail street concave bruised heel nosegrind 900. Bone air flail bail Streets on Fire casper nose bump frontside. Gap 1080 slappy full pipe berm wall ride McTwist. Face plant grind tail slide street launch ramp. Feeble sketchy nosepicker rails 50-50 boneless. Berm manual half-flip camel back rock and roll hang up. 

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

//Lip hospital flip Steve Robert handplant flypaper nose blunt ledge. Rob Welsh nose bump tail Saran Wrap hang-up kidney bruised heel. Airwalk Dogtown cess slide hang up feeble invert mini ramp. McTwist flail poseur Japan air grind pool half-flip. Pump snake bone air aerial bail nose blunt. Kickturn ho-ho rail slide snake indy grab mini ramp. Concave Julien Stranger smith grind feeble crooked grind slide locals. Flail street concave bruised heel nosegrind 900. Bone air flail bail Streets on Fire casper nose bump frontside. Gap 1080 slappy full pipe berm wall ride McTwist. Face plant grind tail slide street launch ramp. Feeble sketchy nosepicker rails 50-50 boneless. Berm manual half-flip camel back rock and roll hang up. 

?>