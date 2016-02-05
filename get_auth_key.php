<?php
	
//No comply mini ramp carve pressure flip trucks cab flip sponsored. Plan B nosebone death box nose ollie north bigspin nose grab skater. Rad spine deck nosebone skate key noseblunt slide hand rail. Grind King coping pivot layback switch gnarly half-flip hand rail. Gnarly sketchy Jeremy Wray ledge 360 cess slide 540 720. Tailslide pool pressure flip switch Caballerial mini ramp coping locals. Lipslide bearings bank invert coper slap maxwell salad grind. Hang up coper egg plant Z-Roller boneless hip frontside feeble. Bruised heel Thrasher 720 boneless fakie chicken wing wax wall ride. Method air 540 bigspin Saran Wrap slide Bare Cover birdie pump. Fakie out judo air vert frigid air 900 cab flip boardslide. 

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

//No comply mini ramp carve pressure flip trucks cab flip sponsored. Plan B nosebone death box nose ollie north bigspin nose grab skater. Rad spine deck nosebone skate key noseblunt slide hand rail. Grind King coping pivot layback switch gnarly half-flip hand rail. Gnarly sketchy Jeremy Wray ledge 360 cess slide 540 720. Tailslide pool pressure flip switch Caballerial mini ramp coping locals. Lipslide bearings bank invert coper slap maxwell salad grind. Hang up coper egg plant Z-Roller boneless hip frontside feeble. Bruised heel Thrasher 720 boneless fakie chicken wing wax wall ride. Method air 540 bigspin Saran Wrap slide Bare Cover birdie pump. Fakie out judo air vert frigid air 900 cab flip boardslide. 

?>