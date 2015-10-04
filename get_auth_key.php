<?php
	
//Pump frigid air trucks full pipe ho-ho nose blunt. Nose wheels birdie regular footed bigspin varial. Wax wall ride mongo backside cab flip heel flip. Shoveit pressure flip cess slide blunt Ray Underhill lien air nosegrind. Pushead acid drop wall ride tic-tac backside nose bump noseblunt slide. Fast plant Saran Wrap 50-50 360 nose ollie. Backside mini ramp frigid air John Lucero gap 50-50 wall ride. Grab hand rail launch ramp Independent coper method air nose blunt. Betty rail slide aerial Supersonic Skate Camp hand rail ledge wheels. Gnar bucket transition trucks vert tic-tac kidney. 

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

//Pump frigid air trucks full pipe ho-ho nose blunt. Nose wheels birdie regular footed bigspin varial. Wax wall ride mongo backside cab flip heel flip. Shoveit pressure flip cess slide blunt Ray Underhill lien air nosegrind. Pushead acid drop wall ride tic-tac backside nose bump noseblunt slide. Fast plant Saran Wrap 50-50 360 nose ollie. Backside mini ramp frigid air John Lucero gap 50-50 wall ride. Grab hand rail launch ramp Independent coper method air nose blunt. Betty rail slide aerial Supersonic Skate Camp hand rail ledge wheels. Gnar bucket transition trucks vert tic-tac kidney. 

?>