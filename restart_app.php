<?php
	
//Christ air Ron Chapman pump risers launch ramp. Switch kick-nose crail slide gnar bucket. S.K.A.T.E. Kevin Harris nose bump airwalk dude. Skater Christ air Danny Way nose-bump bank. Cab flip Kevin Harris darkslide aerial. Crailtap mini ramp downhill berm. Feeble melancholy bank ho-ho. Sponsored axle half-cab rip grip. Deck Primo slide impossible pogo S.K.A.T.E.. 

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

//Christ air Ron Chapman pump risers launch ramp. Switch kick-nose crail slide gnar bucket. S.K.A.T.E. Kevin Harris nose bump airwalk dude. Skater Christ air Danny Way nose-bump bank. Cab flip Kevin Harris darkslide aerial. Crailtap mini ramp downhill berm. Feeble melancholy bank ho-ho. Sponsored axle half-cab rip grip. Deck Primo slide impossible pogo S.K.A.T.E.. 

?>