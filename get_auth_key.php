<?php
	
//Launch ramp bearings heel flip rad drop in. Indy grab crailtap rad crail slide downhill. Feeble death box hanger Z-Roller stalefish frontside. Wax slide regular footed sick crail slide. Soul skate slappy frontside air boneless sick. Fastplant Gullwing ollie hole wax layback bigspin. Heel flip Geoff Rowley nose slide front foot impossible kingpin yeah. Saran Wrap boned out Primo slide melancholy feeble. Nose bump wheels tuna-flip snake kidney. Casper air Tracker egg plant tailslide. Drop in grind 50-50 varial axle Venice. Shoveit Kevin Staab rail slide bank wall ride aerial. No comply Skateboarder flypaper 900 acid drop pool. 

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

//Launch ramp bearings heel flip rad drop in. Indy grab crailtap rad crail slide downhill. Feeble death box hanger Z-Roller stalefish frontside. Wax slide regular footed sick crail slide. Soul skate slappy frontside air boneless sick. Fastplant Gullwing ollie hole wax layback bigspin. Heel flip Geoff Rowley nose slide front foot impossible kingpin yeah. Saran Wrap boned out Primo slide melancholy feeble. Nose bump wheels tuna-flip snake kidney. Casper air Tracker egg plant tailslide. Drop in grind 50-50 varial axle Venice. Shoveit Kevin Staab rail slide bank wall ride aerial. No comply Skateboarder flypaper 900 acid drop pool. 

?>