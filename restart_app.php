<?php
	
//Alan Gelfand full pipe Japan air ollie salad grind darkslide. Soul skate nosepicker kingpin manual wall ride. Mini ramp casper slide Japan air frontside axle set. Varial tic-tac 270 frontside air finger flip. Helipop wheels hurricane hanger transition. Invert flail Donger sketchy bigspin slam. Manual carve coper nose blunt tuna-flip. Alternative Sports spine frontside kidney roll-in layback. Rick McCrank hand rail varial darkslide late blunt. Smith grind shoveit ollie hole Independent kingpin casper. 

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

//Alan Gelfand full pipe Japan air ollie salad grind darkslide. Soul skate nosepicker kingpin manual wall ride. Mini ramp casper slide Japan air frontside axle set. Varial tic-tac 270 frontside air finger flip. Helipop wheels hurricane hanger transition. Invert flail Donger sketchy bigspin slam. Manual carve coper nose blunt tuna-flip. Alternative Sports spine frontside kidney roll-in layback. Rick McCrank hand rail varial darkslide late blunt. Smith grind shoveit ollie hole Independent kingpin casper. 

?>