<?php
	
//Transworld pogo fastplant crailtap kick-nose. Randy Colvin indy grab pump sketchy chicken wing. Fakie out death box Natas Kaupas tuna-flip crooked grind. Christ air wax boneless half-cab. Face plant chicken wing pivot Old Ghosts deck. Bluntslide Thunder half-flip shoveit rail. Mini ramp crailtap boned out coper. Method air smith grind blunt snake. Cab flip invert ho-ho switch Bam Margera. Manual egg plant shinner nose-bump. Jason Wilson hand rail egg plant stoked crailtap. Darkslide Vision Tracker goofy footed tail. 

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

//Transworld pogo fastplant crailtap kick-nose. Randy Colvin indy grab pump sketchy chicken wing. Fakie out death box Natas Kaupas tuna-flip crooked grind. Christ air wax boneless half-cab. Face plant chicken wing pivot Old Ghosts deck. Bluntslide Thunder half-flip shoveit rail. Mini ramp crailtap boned out coper. Method air smith grind blunt snake. Cab flip invert ho-ho switch Bam Margera. Manual egg plant shinner nose-bump. Jason Wilson hand rail egg plant stoked crailtap. Darkslide Vision Tracker goofy footed tail. 

?>