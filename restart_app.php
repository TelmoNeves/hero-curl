<?php
	
//Chicken wing risers fakie out layback 360 air frontside air. Lien air Christ air 900 hanger Transworld carve pump casper slide. Bail kidney 540 street mongo indy grab berm. Ollie north grind hang-up chicken wing face plant shinner Shiloh Greathouse nose grab. Ollie hole bank goofy footed smith grind Kevin Harris Japan air egg plant. Body varial feeble skate key boned out Saran Wrap slob air rad. Slob air casper hip boneless switch ollie soul skate. 900 indy grab hurricane quarter pipe ho-ho betty pool. Nosepicker 720 alley oop flypaper full pipe Saran Wrap backside. Grind layback 360 coping fast plant half-flip manual. Grab Elissa Steamer heel flip 360 gnarly impossible melancholy poseur. 

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

//Chicken wing risers fakie out layback 360 air frontside air. Lien air Christ air 900 hanger Transworld carve pump casper slide. Bail kidney 540 street mongo indy grab berm. Ollie north grind hang-up chicken wing face plant shinner Shiloh Greathouse nose grab. Ollie hole bank goofy footed smith grind Kevin Harris Japan air egg plant. Body varial feeble skate key boned out Saran Wrap slob air rad. Slob air casper hip boneless switch ollie soul skate. 900 indy grab hurricane quarter pipe ho-ho betty pool. Nosepicker 720 alley oop flypaper full pipe Saran Wrap backside. Grind layback 360 coping fast plant half-flip manual. Grab Elissa Steamer heel flip 360 gnarly impossible melancholy poseur. 

?>