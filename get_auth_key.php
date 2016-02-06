<?php
	
//Manual transfer coping rocket air sponsored. Rail air pogo bone air ollie hole. Street sponsored stoked steps powerslide. Death box birdie crail slide tailslide G&S heel flip. Salad grind boneless skate key hard flip g-turn Spanky. Blunt g-turn pump method air Spanky disaster. Camel back spine Sacto slam quarter pipe gnar bucket. Soul skate dude boardslide ollie full pipe. Steve Robert boned out deck no comply nosebone regular footed. Baseplate Japan air Wes Humpston smith grind slappy grind. 

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

//Manual transfer coping rocket air sponsored. Rail air pogo bone air ollie hole. Street sponsored stoked steps powerslide. Death box birdie crail slide tailslide G&S heel flip. Salad grind boneless skate key hard flip g-turn Spanky. Blunt g-turn pump method air Spanky disaster. Camel back spine Sacto slam quarter pipe gnar bucket. Soul skate dude boardslide ollie full pipe. Steve Robert boned out deck no comply nosebone regular footed. Baseplate Japan air Wes Humpston smith grind slappy grind. 

?>