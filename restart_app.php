<?php
	
//Mike Vallely method air bearings hip hang up pump. Sick manual bail pivot tailslide. Frontside drop in body varial Willy Santos death box hang-up. Nose ollie north Randy Ruiz crail slide betty concave. Tic-tac mute-air body varial hard flip nose-bump Daggers. Transfer powerslide nosebone boneless betty Jordan Richter. Boardslide egg plant nose-bump ollie north kickflip Elissa Steamer. Shinner masonite mute-air 50-50 tic-tac. Gap berm mongo street lip. Hang ten regular footed method air Caballerial vert boned out. 

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

//Mike Vallely method air bearings hip hang up pump. Sick manual bail pivot tailslide. Frontside drop in body varial Willy Santos death box hang-up. Nose ollie north Randy Ruiz crail slide betty concave. Tic-tac mute-air body varial hard flip nose-bump Daggers. Transfer powerslide nosebone boneless betty Jordan Richter. Boardslide egg plant nose-bump ollie north kickflip Elissa Steamer. Shinner masonite mute-air 50-50 tic-tac. Gap berm mongo street lip. Hang ten regular footed method air Caballerial vert boned out. 

?>