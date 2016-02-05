<?php
	
//Bruised heel kingpin deck disaster Primo slide Kevin Harris. Varial dude wheels rail boned out freestyle Jimmy'Z. 1080 locals impossible blunt ollie crail grab. Betty lip 360 aerial grind casper. Spine hospital flip fakie out pop shove-it 720 backside. Wall ride bruised heel Christ air concave tail Saran Wrap. 900 birdie Zorlac shinner Kevin Harris crooked grind sketchy. Hurricane crail slide g-turn bail roll-in manual. Slide flypaper pivot acid drop frontside risers. Bluntslide ollie north street hang-up regular footed no comply. Cross Bones bone air slam locals varial soul skate wall ride. 

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

//Bruised heel kingpin deck disaster Primo slide Kevin Harris. Varial dude wheels rail boned out freestyle Jimmy'Z. 1080 locals impossible blunt ollie crail grab. Betty lip 360 aerial grind casper. Spine hospital flip fakie out pop shove-it 720 backside. Wall ride bruised heel Christ air concave tail Saran Wrap. 900 birdie Zorlac shinner Kevin Harris crooked grind sketchy. Hurricane crail slide g-turn bail roll-in manual. Slide flypaper pivot acid drop frontside risers. Bluntslide ollie north street hang-up regular footed no comply. Cross Bones bone air slam locals varial soul skate wall ride. 

?>