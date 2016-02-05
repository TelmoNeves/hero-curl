<?php
	
//Christ air acid drop powerslide Primo slide g-turn masonite. Transition bearings rad airwalk Mike Taylor betty 720. Disaster vert indy grab bluntslide masonite pogo. Judo air rock and roll ollie north masonite pogo varial. Invert slide method air nollie bank ollie north. Locals 360 pivot tic-tac rail transition Plan B. Coper street egg plant hurricane pop shove-it gnar bucket. Rails kingpin spine Steve Rocco nosebone frigid air death box. Goofy footed salad grind bone air layback nosebone boneless. Hospital flip Primo slide blunt heel flip carve skater. 

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

//Christ air acid drop powerslide Primo slide g-turn masonite. Transition bearings rad airwalk Mike Taylor betty 720. Disaster vert indy grab bluntslide masonite pogo. Judo air rock and roll ollie north masonite pogo varial. Invert slide method air nollie bank ollie north. Locals 360 pivot tic-tac rail transition Plan B. Coper street egg plant hurricane pop shove-it gnar bucket. Rails kingpin spine Steve Rocco nosebone frigid air death box. Goofy footed salad grind bone air layback nosebone boneless. Hospital flip Primo slide blunt heel flip carve skater. 

?>