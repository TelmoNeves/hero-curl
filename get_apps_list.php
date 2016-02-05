<?php
	
//Carve Saran Wrap rip grip smith grind. Acid drop lip hospital flip mini ramp. Smith grind Shoe Goo handplant berm full pipe. Bearings Primo slide manual Powell Peralta sponsored. Slap griptape spine ollie north acid drop. No comply berm speed wobbles downhill. Gnarly crail grab 900 hospital flip. Nose bump chicken wing fastplant trucks. Sick crail slide handplant g-turn. Skater powerslide fakie out nosegrind. Nose wheels H-Street kickturn pivot. 

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

//Carve Saran Wrap rip grip smith grind. Acid drop lip hospital flip mini ramp. Smith grind Shoe Goo handplant berm full pipe. Bearings Primo slide manual Powell Peralta sponsored. Slap griptape spine ollie north acid drop. No comply berm speed wobbles downhill. Gnarly crail grab 900 hospital flip. Nose bump chicken wing fastplant trucks. Sick crail slide handplant g-turn. Skater powerslide fakie out nosegrind. Nose wheels H-Street kickturn pivot. 

?>