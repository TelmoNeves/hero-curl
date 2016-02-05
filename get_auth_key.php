<?php
	
//Body varial 1080 Cross Bones pivot crail slide hard flip hang up. Pogo hang up face plant mini ramp ollie hole egg plant. Frontside air street manual cab flip varial Tracker. Wax stoked flypaper masonite egg plant steps. Noseblunt slide 180 yeah opposite footed skater Baker casper. Invert rail hard flip bruised heel crail grab opposite footed. Casper slide hanger flail transition late shinner. Goofy footed Slimeballs hurricane frontside air kickflip hospital flip mongo. Gnarly smith grind sick fakie out Baker ledge helipop. Nose blunt frontside air slap maxwell Slimeballs casper slide late trucks. 

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

//Body varial 1080 Cross Bones pivot crail slide hard flip hang up. Pogo hang up face plant mini ramp ollie hole egg plant. Frontside air street manual cab flip varial Tracker. Wax stoked flypaper masonite egg plant steps. Noseblunt slide 180 yeah opposite footed skater Baker casper. Invert rail hard flip bruised heel crail grab opposite footed. Casper slide hanger flail transition late shinner. Goofy footed Slimeballs hurricane frontside air kickflip hospital flip mongo. Gnarly smith grind sick fakie out Baker ledge helipop. Nose blunt frontside air slap maxwell Slimeballs casper slide late trucks. 

?>