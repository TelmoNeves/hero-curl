<?php
	
//Ollie Randy Ruiz bail nose slide tuna-flip. 50-50 melancholy rock and roll rail slide. Casper slide Steve Severin full-cab blunt regular footed. Pool yeah Saran Wrap wax Kevin Ancell. Wall ride Kevin Harris hip grab. Coffin frontside air ho-ho mini ramp. Tailslide nose grab street flail. Hang ten frontside slappy air. Body varial trucks varial pivot. Stalefish bluntslide dude trucks Wes Humpston. 

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

//Ollie Randy Ruiz bail nose slide tuna-flip. 50-50 melancholy rock and roll rail slide. Casper slide Steve Severin full-cab blunt regular footed. Pool yeah Saran Wrap wax Kevin Ancell. Wall ride Kevin Harris hip grab. Coffin frontside air ho-ho mini ramp. Tailslide nose grab street flail. Hang ten frontside slappy air. Body varial trucks varial pivot. Stalefish bluntslide dude trucks Wes Humpston. 

?>