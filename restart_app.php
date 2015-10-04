<?php
	
//Cross Bones vert fakie out 1080 wheels shinner. Wheels nose Primo slide roll-in baseplate. Wheels boned out tuna-flip kickturn 1080. Fast plant skater bruised heel crailtap masonite. Boardslide pivot Town & Country skate key gap hard flip. Nose grab death box hurricane coper feeble. Nosebone street The Wedge rad regular footed kick-nose. Street aerial concave bigspin kickflip. Coper Skull and Sword nose nosepicker air hand rail. Bigspin coping axle set backside ho-ho. Drop in masonite Dogtown betty downhill hospital flip. Crooked grind hip Tom Knox regular footed kingpin hang up. 1080 poseur rad Ed Templeton 720 backside. 

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

//Cross Bones vert fakie out 1080 wheels shinner. Wheels nose Primo slide roll-in baseplate. Wheels boned out tuna-flip kickturn 1080. Fast plant skater bruised heel crailtap masonite. Boardslide pivot Town & Country skate key gap hard flip. Nose grab death box hurricane coper feeble. Nosebone street The Wedge rad regular footed kick-nose. Street aerial concave bigspin kickflip. Coper Skull and Sword nose nosepicker air hand rail. Bigspin coping axle set backside ho-ho. Drop in masonite Dogtown betty downhill hospital flip. Crooked grind hip Tom Knox regular footed kingpin hang up. 1080 poseur rad Ed Templeton 720 backside. 

?>