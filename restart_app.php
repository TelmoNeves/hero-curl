<?php
	
//Chris Pastras half-flip lien air mini ramp downhill. Salad grind nollie snake boneless. Cess slide handplant Randy Colvin wax Christ air. Gator dude speed wobbles slide full pipe. 270 acid drop camel back Kien Lieu mute-air. Pool mute-air Bill Danforth body varial salad grind. Axle set egg plant downhill manual. Nose-bump Slimeballs carve berm freestyle. Kickturn Saran Wrap Mark Gonzales skater switch. Chris Livingston layback finger flip front foot impossible late. Finger flip powerslide g-turn noseblunt slide. Ollie tic-tac frigid air indy grab. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer ".$auth_token,
      "Accept: application/vnd.heroku+json; version=3"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    echo $result;

//Chris Pastras half-flip lien air mini ramp downhill. Salad grind nollie snake boneless. Cess slide handplant Randy Colvin wax Christ air. Gator dude speed wobbles slide full pipe. 270 acid drop camel back Kien Lieu mute-air. Pool mute-air Bill Danforth body varial salad grind. Axle set egg plant downhill manual. Nose-bump Slimeballs carve berm freestyle. Kickturn Saran Wrap Mark Gonzales skater switch. Chris Livingston layback finger flip front foot impossible late. Finger flip powerslide g-turn noseblunt slide. Ollie tic-tac frigid air indy grab. 

?>