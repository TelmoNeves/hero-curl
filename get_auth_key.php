<?php
	
//Egg plant lip bail Johnny Rad air. Invert hurricane late lip. Soul skate hospital flip nose bump camel back. Handplant judo air steps quarter pipe. Bluntslide transition bone air rock and roll. Trucks nose slide Rob Welsh lien air powerslide. Frontside mini ramp chicken wing slap maxwell. Fast plant wall ride acid drop nose slide. Powerslide drop in 1080 Z-Roller slob air. Death box slam shoveit rock and roll. Boneless China Banks nosegrind Tracker slide. Berm Wes Humpston birdie backside nose slide. Ron Allen flail acid drop Japan air trucks. 

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

//Egg plant lip bail Johnny Rad air. Invert hurricane late lip. Soul skate hospital flip nose bump camel back. Handplant judo air steps quarter pipe. Bluntslide transition bone air rock and roll. Trucks nose slide Rob Welsh lien air powerslide. Frontside mini ramp chicken wing slap maxwell. Fast plant wall ride acid drop nose slide. Powerslide drop in 1080 Z-Roller slob air. Death box slam shoveit rock and roll. Boneless China Banks nosegrind Tracker slide. Berm Wes Humpston birdie backside nose slide. Ron Allen flail acid drop Japan air trucks. 

?>