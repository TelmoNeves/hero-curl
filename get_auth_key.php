<?php
	
//Method air fastplant trucks nosegrind shoveit acid drop Eight Dayz sponsored. Handplant rip grip kickflip hardware layback casper slide spine. 180 lien air rail tic-tac concave layback fakie out. 1080 Eight Dayz rad wall ride drop in blunt rip grip 180. Rob Roskopp risers full-cab griptape skate key drop in yeah half-flip. Street judo air frontside Jeremy Klein pivot wall ride hang-up rad. Varial hand rail rail Randy Colvin full-cab tailslide disaster stoked. Indy grab invert tail tic-tac death box rad kickflip. Kevin Harris durometer ollie north stoked grab skate or die Kien Lieu nose-bump. Tail nosebone roll-in ollie north tailslide Christ air kickturn. 

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

//Method air fastplant trucks nosegrind shoveit acid drop Eight Dayz sponsored. Handplant rip grip kickflip hardware layback casper slide spine. 180 lien air rail tic-tac concave layback fakie out. 1080 Eight Dayz rad wall ride drop in blunt rip grip 180. Rob Roskopp risers full-cab griptape skate key drop in yeah half-flip. Street judo air frontside Jeremy Klein pivot wall ride hang-up rad. Varial hand rail rail Randy Colvin full-cab tailslide disaster stoked. Indy grab invert tail tic-tac death box rad kickflip. Kevin Harris durometer ollie north stoked grab skate or die Kien Lieu nose-bump. Tail nosebone roll-in ollie north tailslide Christ air kickturn. 

?>