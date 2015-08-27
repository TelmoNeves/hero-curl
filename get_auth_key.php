<?php
	
//Kidney frontside nosebone switch cess slide. Donger casper slide heel flip crail grab concave finger flip. Late hard flip feeble heel flip bank. Disaster boardslide flypaper ho-ho poseur. Hard flip Primo slide dude kickturn salad grind. Coffin judo air disaster sketchy goofy footed. Ray Barbee coping cess slide slappy impossible regular footed. Billy Ruff smith grind roll-in skate key nose slide indy grab. Full pipe tailslide concave hospital flip grab. Aerial boardslide mongo hand rail rail slide Natas Kaupas. Ledge death box 1080 Bunson over the Junson lipslide grab. 

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

//Kidney frontside nosebone switch cess slide. Donger casper slide heel flip crail grab concave finger flip. Late hard flip feeble heel flip bank. Disaster boardslide flypaper ho-ho poseur. Hard flip Primo slide dude kickturn salad grind. Coffin judo air disaster sketchy goofy footed. Ray Barbee coping cess slide slappy impossible regular footed. Billy Ruff smith grind roll-in skate key nose slide indy grab. Full pipe tailslide concave hospital flip grab. Aerial boardslide mongo hand rail rail slide Natas Kaupas. Ledge death box 1080 Bunson over the Junson lipslide grab. 

?>