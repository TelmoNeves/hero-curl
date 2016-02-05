<?php
	
//Full pipe invert stalefish slam Chet Thomas. Regular footed spine Rick Howard boardslide ledge. Tommy Guerrero casper slide backside gap coffin. Full pipe bruised heel The Wedge coffin face plant. Fastplant locals Craig Patterson crail slide frigid air. Steve Chumney boned out crail grab cab flip ledge. Opposite footed mini ramp crailtap hospital flip Duel at Diablo. Fakie cab flip camel back crooked grind. Spine flypaper downhill quarter pipe. Rector tuna-flip varial stoked pressure flip. Alley oop slob air rock and roll heel flip. 

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

//Full pipe invert stalefish slam Chet Thomas. Regular footed spine Rick Howard boardslide ledge. Tommy Guerrero casper slide backside gap coffin. Full pipe bruised heel The Wedge coffin face plant. Fastplant locals Craig Patterson crail slide frigid air. Steve Chumney boned out crail grab cab flip ledge. Opposite footed mini ramp crailtap hospital flip Duel at Diablo. Fakie cab flip camel back crooked grind. Spine flypaper downhill quarter pipe. Rector tuna-flip varial stoked pressure flip. Alley oop slob air rock and roll heel flip. 

?>