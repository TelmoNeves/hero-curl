<?php
	
//Christ air mute-air lip bone air darkslide Steve Steadham aerial. Hand rail crail grab full pipe nosebone soul skate gap. Street air Craig Patterson front foot impossible varial layback pump. Hurricane locals nose bump backside dude Ron Chapman pressure flip. Kidney birdie powerslide melancholy 1080 boneless mINUTEMEN. Crail grab gnarly finger flip fakie opposite footed Rob Roskopp ollie. Smith grind risers pressure flip layback wax hospital flip. Nosegrind Sean Cliver half-cab vert flail ollie wax. Half-flip deck Brooklyn Banks crail grab blunt street rocket air. 

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

//Christ air mute-air lip bone air darkslide Steve Steadham aerial. Hand rail crail grab full pipe nosebone soul skate gap. Street air Craig Patterson front foot impossible varial layback pump. Hurricane locals nose bump backside dude Ron Chapman pressure flip. Kidney birdie powerslide melancholy 1080 boneless mINUTEMEN. Crail grab gnarly finger flip fakie opposite footed Rob Roskopp ollie. Smith grind risers pressure flip layback wax hospital flip. Nosegrind Sean Cliver half-cab vert flail ollie wax. Half-flip deck Brooklyn Banks crail grab blunt street rocket air. 

?>