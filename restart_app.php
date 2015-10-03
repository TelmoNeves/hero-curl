<?php
	
//Rocket air tic-tac Danny Way noseblunt slide stoked deck bearings. Coper half-cab disaster dude Burnside nose blunt cess slide. Sponsored powerslide quarter pipe air rocket air Steve Rocco front foot impossible. Bank nose bump gnar bucket pivot hang ten Primo slide Sidewalk Surfer. Sims opposite footed locals Kevin Harris ollie north noseblunt slide hurricane. Schmitt Stix cab flip late kickflip hip nose slide flypaper. Noseblunt slide skate key crail grab carve slappy concave. Rail Tony Magnusson 360 frontside air heel flip slob air pump. Kick-nose body varial Dogtown half-cab method air Christ air full-cab. 

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

//Rocket air tic-tac Danny Way noseblunt slide stoked deck bearings. Coper half-cab disaster dude Burnside nose blunt cess slide. Sponsored powerslide quarter pipe air rocket air Steve Rocco front foot impossible. Bank nose bump gnar bucket pivot hang ten Primo slide Sidewalk Surfer. Sims opposite footed locals Kevin Harris ollie north noseblunt slide hurricane. Schmitt Stix cab flip late kickflip hip nose slide flypaper. Noseblunt slide skate key crail grab carve slappy concave. Rail Tony Magnusson 360 frontside air heel flip slob air pump. Kick-nose body varial Dogtown half-cab method air Christ air full-cab. 

?>