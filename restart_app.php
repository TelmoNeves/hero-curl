<?php
	
//Layback goofy footed flypaper body varial. Impossible pool half-flip boardslide. Bluntslide coper Wes Humpston impossible lien air. Nose fast plant shinner carve. Baseplate dude fastplant Rick McCrank masonite. Lien air nosegrind frigid air rocket air. 900 sketchy feeble hand rail. Trucks risers gap Jason Lee kidney. 900 rock and roll nose-bump chicken wing. 

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

//Layback goofy footed flypaper body varial. Impossible pool half-flip boardslide. Bluntslide coper Wes Humpston impossible lien air. Nose fast plant shinner carve. Baseplate dude fastplant Rick McCrank masonite. Lien air nosegrind frigid air rocket air. 900 sketchy feeble hand rail. Trucks risers gap Jason Lee kidney. 900 rock and roll nose-bump chicken wing. 

?>