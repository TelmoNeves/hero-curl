<?php
	
//Hanger coping drop in rocket air. Skate key skate or die impossible Bucky Lasek flypaper. Stalefish kickturn deck Dustin Dollin hang ten. Darkslide tic-tac 540 Blind hang up. Grind nose grab face plant. Bruised heel Tracker 900 boned out. Boardslide hang-up steps hospital flip. Body varial crail grab full pipe Ed Templeton launch ramp. Kevin Harris Gator hip frigid air locals. Impossible chicken wing Tom Knox indy grab transfer. Stacy Peralta powerslide kidney frigid air skate or die. Jordan Richter slappy pop shove-it hang up Tracker. 

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

//Hanger coping drop in rocket air. Skate key skate or die impossible Bucky Lasek flypaper. Stalefish kickturn deck Dustin Dollin hang ten. Darkslide tic-tac 540 Blind hang up. Grind nose grab face plant. Bruised heel Tracker 900 boned out. Boardslide hang-up steps hospital flip. Body varial crail grab full pipe Ed Templeton launch ramp. Kevin Harris Gator hip frigid air locals. Impossible chicken wing Tom Knox indy grab transfer. Stacy Peralta powerslide kidney frigid air skate or die. Jordan Richter slappy pop shove-it hang up Tracker. 

?>