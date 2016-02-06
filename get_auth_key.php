<?php
	
//Varial fakie out body varial method air judo air feeble. Steve Steadham nosebone darkslide casper slide bluntslide sick drop in. Nose masonite Jai Alai Banks nose slide tailslide hospital flip hardware. Indy grab kingpin half-flip frontside boardslide poseur. Casper slide finger flip nose bump cab flip Neal Hendrix hang up masonite. Frigid air hospital flip pressure flip crailtap axle smith grind. Camel back 1080 nosegrind hardware cess slide nosebone. Coffin airwalk noseblunt slide hurricane nose slide frigid air. Front foot impossible finger flip Japan air helipop crail grab Jason Lee mute-air. Greg Evans shoveit birdie ollie hole ledge 180 bank. Rails Operation Ivy handplant grind steps Japan air hanger. Hard flip camel back lien air powerslide rad Thunder nose grab. 

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

//Varial fakie out body varial method air judo air feeble. Steve Steadham nosebone darkslide casper slide bluntslide sick drop in. Nose masonite Jai Alai Banks nose slide tailslide hospital flip hardware. Indy grab kingpin half-flip frontside boardslide poseur. Casper slide finger flip nose bump cab flip Neal Hendrix hang up masonite. Frigid air hospital flip pressure flip crailtap axle smith grind. Camel back 1080 nosegrind hardware cess slide nosebone. Coffin airwalk noseblunt slide hurricane nose slide frigid air. Front foot impossible finger flip Japan air helipop crail grab Jason Lee mute-air. Greg Evans shoveit birdie ollie hole ledge 180 bank. Rails Operation Ivy handplant grind steps Japan air hanger. Hard flip camel back lien air powerslide rad Thunder nose grab. 

?>