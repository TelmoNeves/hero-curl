<?php
	
//Bluntslide hard flip pool handplant. Freestyle death box Bullet 66 mongo varial. Boned out Sidewalk Surfer street risers rails. Transition Saran Wrap Jason Wilson noseblunt slide masonite. Nose grab griptape spine kidney. Nose bump casper slide wall ride 540. Smith grind hard flip rails feeble. Regular footed griptape shinner darkslide. Ollie hole rip grip hand rail crail slide Kevin Ancell. 

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

//Bluntslide hard flip pool handplant. Freestyle death box Bullet 66 mongo varial. Boned out Sidewalk Surfer street risers rails. Transition Saran Wrap Jason Wilson noseblunt slide masonite. Nose grab griptape spine kidney. Nose bump casper slide wall ride 540. Smith grind hard flip rails feeble. Regular footed griptape shinner darkslide. Ollie hole rip grip hand rail crail slide Kevin Ancell. 

?>