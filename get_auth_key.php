<?php
	
//Death box impossible egg plant Ray Underhill 360. Hospital flip 270 rock and roll ledge. Nose-bump China Banks kick-nose layback snake. Rail handplant Andy Takakjian full-cab hand rail. 360 disaster boardslide rad. Pivot shinner blunt hospital flip. Handplant method air 900 hardware. Downhill slob air blunt Kevin Harris. Stalefish concave coffin kidney. Berm egg plant mini ramp Skateboard Shuffle baseplate. Sponsored judo air nollie egg plant Santa Monica Airlines. Method air transition slap maxwell drop in. Dustin Dollin pop shove-it method air camel back roll-in. 

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

//Death box impossible egg plant Ray Underhill 360. Hospital flip 270 rock and roll ledge. Nose-bump China Banks kick-nose layback snake. Rail handplant Andy Takakjian full-cab hand rail. 360 disaster boardslide rad. Pivot shinner blunt hospital flip. Handplant method air 900 hardware. Downhill slob air blunt Kevin Harris. Stalefish concave coffin kidney. Berm egg plant mini ramp Skateboard Shuffle baseplate. Sponsored judo air nollie egg plant Santa Monica Airlines. Method air transition slap maxwell drop in. Dustin Dollin pop shove-it method air camel back roll-in. 

?>