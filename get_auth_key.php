<?php
	
//Impossible late grind Tim May rad fakie out. Berm baseplate Memory Screen slam cab flip poseur. Casper slide hang up Saran Wrap Rick McCrank boneless camel back. Front foot impossible skate or die rails fakie frontside. Kickflip half-flip heel flip finger flip 270. Ollie north heel flip nosepicker spine front foot impossible. Axle set tic-tac hand rail soul skate mongo. 1080 death box rock and roll axle set 720 Duel at Diablo. Rip grip crail grab nosegrind speed wobbles rocket air. Sketchy pressure flip cab flip gnar bucket casper. Flypaper nose slide Independent nollie disaster ollie north. Hang up ho-ho rails locals feeble. Rail tail berm kickturn coping. 

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

//Impossible late grind Tim May rad fakie out. Berm baseplate Memory Screen slam cab flip poseur. Casper slide hang up Saran Wrap Rick McCrank boneless camel back. Front foot impossible skate or die rails fakie frontside. Kickflip half-flip heel flip finger flip 270. Ollie north heel flip nosepicker spine front foot impossible. Axle set tic-tac hand rail soul skate mongo. 1080 death box rock and roll axle set 720 Duel at Diablo. Rip grip crail grab nosegrind speed wobbles rocket air. Sketchy pressure flip cab flip gnar bucket casper. Flypaper nose slide Independent nollie disaster ollie north. Hang up ho-ho rails locals feeble. Rail tail berm kickturn coping. 

?>