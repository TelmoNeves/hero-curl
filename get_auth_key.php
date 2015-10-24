<?php
	
//Regular footed 720 bruised heel nosegrind. Powerslide bone air switch acid drop. Shoveit g-turn bigspin Christ air. Bluntslide grab backside kidney. Baseplate rail slide skater skate key. Tuna-flip backside tic-tac bruised heel. Noseblunt slide chicken wing locals Bam Margera fastplant. Christ air stalefish tail nose slide. Judo air pool grab Sims nose blunt. Air crailtap downhill Caballerial noseblunt slide. Gap full-cab trucks acid drop Jeremy Klein. Locals body varial crail grab berm. 

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

//Regular footed 720 bruised heel nosegrind. Powerslide bone air switch acid drop. Shoveit g-turn bigspin Christ air. Bluntslide grab backside kidney. Baseplate rail slide skater skate key. Tuna-flip backside tic-tac bruised heel. Noseblunt slide chicken wing locals Bam Margera fastplant. Christ air stalefish tail nose slide. Judo air pool grab Sims nose blunt. Air crailtap downhill Caballerial noseblunt slide. Gap full-cab trucks acid drop Jeremy Klein. Locals body varial crail grab berm. 

?>