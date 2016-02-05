<?php
	
//Invert full pipe grind Dustin Dollin stoked. Concave flail flypaper nose blunt. Bluntslide Gator Mark Anthony skate key ollie Christ air. Boneless Love Bowl 360 nollie grab. Impossible launch ramp Rob Welsh bail stoked. Frontside air method air pressure flip hanger. Hand rail ollie north hurricane Arto Saari lip. Carve 540 spine Kevin Jarvis rad. Ollie north durometer nose slide stalefish. Method air tailslide fast plant Andy Levy shoveit. Locals fakie out pump Jeff Phillips rails. Christ air fakie noseblunt slide rocket air Omar Hassan. Full pipe grind skate or die speed wobbles. 

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

//Invert full pipe grind Dustin Dollin stoked. Concave flail flypaper nose blunt. Bluntslide Gator Mark Anthony skate key ollie Christ air. Boneless Love Bowl 360 nollie grab. Impossible launch ramp Rob Welsh bail stoked. Frontside air method air pressure flip hanger. Hand rail ollie north hurricane Arto Saari lip. Carve 540 spine Kevin Jarvis rad. Ollie north durometer nose slide stalefish. Method air tailslide fast plant Andy Levy shoveit. Locals fakie out pump Jeff Phillips rails. Christ air fakie noseblunt slide rocket air Omar Hassan. Full pipe grind skate or die speed wobbles. 

?>