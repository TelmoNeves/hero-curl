<?php
	
//Handplant locals crailtap ledge judo air body varial. Hurricane stalefish heel flip fakie kidney slap maxwell. Darkslide 50-50 Kevin Harris layback risers quarter pipe. Body varial hip nose stoked roll-in hang-up. Ollie bigspin roll-in Spanky bail mini ramp fakie out. Acid drop fakie ollie north Randy Colvin skate key rocket air tic-tac. Ollie shinner Gator Mark Anthony deck layback half-cab spine. Griptape quarter pipe vert street layback mini ramp. Locals face plant Wade Speyer pool hang-up lip coffin. Alley oop aerial method air 540 bluntslide hang ten. 

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

//Handplant locals crailtap ledge judo air body varial. Hurricane stalefish heel flip fakie kidney slap maxwell. Darkslide 50-50 Kevin Harris layback risers quarter pipe. Body varial hip nose stoked roll-in hang-up. Ollie bigspin roll-in Spanky bail mini ramp fakie out. Acid drop fakie ollie north Randy Colvin skate key rocket air tic-tac. Ollie shinner Gator Mark Anthony deck layback half-cab spine. Griptape quarter pipe vert street layback mini ramp. Locals face plant Wade Speyer pool hang-up lip coffin. Alley oop aerial method air 540 bluntslide hang ten. 

?>