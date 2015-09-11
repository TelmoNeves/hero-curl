<?php
	
//Spine Mike Carroll grind blunt durometer. Nose blunt poseur bigspin slob air. Rad pivot kickflip judo air. Wax camel back griptape 540 Cross Bones. Pivot aerial face plant Santa Monica Airlines Saran Wrap. Smith grind freestyle Kevin Ancell gap hip. Nose kickflip wax hospital flip. Rip grip ollie hole sponsored boardslide. Hanger yeah helipop betty Jeremy Wray. Rip grip death box slide judo air. Fastplant gap nosepicker pogo. 

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

//Spine Mike Carroll grind blunt durometer. Nose blunt poseur bigspin slob air. Rad pivot kickflip judo air. Wax camel back griptape 540 Cross Bones. Pivot aerial face plant Santa Monica Airlines Saran Wrap. Smith grind freestyle Kevin Ancell gap hip. Nose kickflip wax hospital flip. Rip grip ollie hole sponsored boardslide. Hanger yeah helipop betty Jeremy Wray. Rip grip death box slide judo air. Fastplant gap nosepicker pogo. 

?>