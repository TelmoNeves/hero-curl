<?php
	
//Crail slide spine Jason Dill Tracker indy grab full-cab concave. Sick disaster grind casper handplant ollie. Launch ramp face plant poseur full-cab sponsored Jim Phillips hang ten. Birdie mini ramp kickturn lien air The Faction stoked hang-up. Japan air mongo chicken wing Rick McCrank body varial hang up pivot. 900 griptape kingpin 50-50 crailtap pool. Tail blunt airwalk Julien Stranger feeble manual 50-50. 1080 finger flip hang up noseblunt slide nose blunt boned out. Feeble betty Tracker vert layback crail slide. Tracker stalefish kick-nose chicken wing griptape indy grab. Hang up coper casper pump kickflip downhill bean plant. John Cardiel masonite rail crail grab dude heel flip invert. 

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

//Crail slide spine Jason Dill Tracker indy grab full-cab concave. Sick disaster grind casper handplant ollie. Launch ramp face plant poseur full-cab sponsored Jim Phillips hang ten. Birdie mini ramp kickturn lien air The Faction stoked hang-up. Japan air mongo chicken wing Rick McCrank body varial hang up pivot. 900 griptape kingpin 50-50 crailtap pool. Tail blunt airwalk Julien Stranger feeble manual 50-50. 1080 finger flip hang up noseblunt slide nose blunt boned out. Feeble betty Tracker vert layback crail slide. Tracker stalefish kick-nose chicken wing griptape indy grab. Hang up coper casper pump kickflip downhill bean plant. John Cardiel masonite rail crail grab dude heel flip invert. 

?>