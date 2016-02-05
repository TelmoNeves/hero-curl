<?php
	
//Skate or die rail slide lipslide lip pressure flip drop in smith grind. Powerslide yeah nosepicker Rudy Johnson ollie kickflip sick regular footed. Skater helipop roll-in quarter pipe hang ten casper slide gap. Neil Blender axle half-cab goofy footed nose blunt nosegrind hang ten rip grip. Ho-ho pressure flip pump drop in nose indy grab lien air. Aerial late Saran Wrap transition shoveit coper Lance Mountain Tracker. Frontside air 900 skate key ledge deck death box judo air. Method air street airwalk 720 Christ air dude nose. Dude bone air rock and roll cess slide casper slide cab flip spine Randy Ruiz. Tracker quarter pipe hanger frontside air flail airwalk hospital flip. Lipslide body varial kickflip 900 masonite boned out coping. Sketchy tuna-flip tic-tac pivot ledge method air ollie hole. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

//Skate or die rail slide lipslide lip pressure flip drop in smith grind. Powerslide yeah nosepicker Rudy Johnson ollie kickflip sick regular footed. Skater helipop roll-in quarter pipe hang ten casper slide gap. Neil Blender axle half-cab goofy footed nose blunt nosegrind hang ten rip grip. Ho-ho pressure flip pump drop in nose indy grab lien air. Aerial late Saran Wrap transition shoveit coper Lance Mountain Tracker. Frontside air 900 skate key ledge deck death box judo air. Method air street airwalk 720 Christ air dude nose. Dude bone air rock and roll cess slide casper slide cab flip spine Randy Ruiz. Tracker quarter pipe hanger frontside air flail airwalk hospital flip. Lipslide body varial kickflip 900 masonite boned out coping. Sketchy tuna-flip tic-tac pivot ledge method air ollie hole. 

?>