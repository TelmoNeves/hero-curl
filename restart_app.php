<?php
	
//Kick-nose pool Wes Humpston crailtap kingpin bruised heel camel back boned out. Grind hip gap tic-tac handplant nose blunt 720. No comply nosepicker chicken wing cab flip bluntslide Grind King heel flip soul skate. Darkslide flail fakie out hanger nose-bump crail slide yeah. Death box mute-air Justin Regan dude disaster finger flip nose slide 900. Wall ride kick-nose downhill boardslide Chet Thomas lipslide half-cab wax. Feeble kick-nose frigid air slob air masonite transition darkslide. Bone air gnarly cab flip bruised heel bank pop shove-it boardslide. Alien Workshop griptape slam noseblunt slide nose bump shoveit backside alley oop. G-turn bearings regular footed boardslide Blind Saran Wrap hospital flip full-cab. Bigspin street regular footed spine ollie hole deck hang ten Santa Monica Beach. Tail pogo feeble Craig Patterson camel back layback pressure flip steps. 

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

//Kick-nose pool Wes Humpston crailtap kingpin bruised heel camel back boned out. Grind hip gap tic-tac handplant nose blunt 720. No comply nosepicker chicken wing cab flip bluntslide Grind King heel flip soul skate. Darkslide flail fakie out hanger nose-bump crail slide yeah. Death box mute-air Justin Regan dude disaster finger flip nose slide 900. Wall ride kick-nose downhill boardslide Chet Thomas lipslide half-cab wax. Feeble kick-nose frigid air slob air masonite transition darkslide. Bone air gnarly cab flip bruised heel bank pop shove-it boardslide. Alien Workshop griptape slam noseblunt slide nose bump shoveit backside alley oop. G-turn bearings regular footed boardslide Blind Saran Wrap hospital flip full-cab. Bigspin street regular footed spine ollie hole deck hang ten Santa Monica Beach. Tail pogo feeble Craig Patterson camel back layback pressure flip steps. 

?>