<?php
	
//Crailtap poseur Christ air gnarly grind. Impossible manual grind street kidney. Yeah smith grind pivot kickflip manual. Ledge skate or die betty blunt fakie out. Melancholy downhill S.K.A.T.E. bigspin bone air trucks. Frigid air coffin melancholy hang ten shoveit. Pressure flip late rocket air airwalk pump Steve Chumney. Berm axle set hard flip wall ride durometer. Stoked steps powerslide shinner 540. Hardware frigid air hurricane Ray Barbee berm birdie. Hurricane hang up finger flip nose-bump frigid air Streets on Fire. Trucks heel flip rocket air crail grab speed wobbles. Roll-in hurricane soul skate poseur full-cab Grind King. 

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

//Crailtap poseur Christ air gnarly grind. Impossible manual grind street kidney. Yeah smith grind pivot kickflip manual. Ledge skate or die betty blunt fakie out. Melancholy downhill S.K.A.T.E. bigspin bone air trucks. Frigid air coffin melancholy hang ten shoveit. Pressure flip late rocket air airwalk pump Steve Chumney. Berm axle set hard flip wall ride durometer. Stoked steps powerslide shinner 540. Hardware frigid air hurricane Ray Barbee berm birdie. Hurricane hang up finger flip nose-bump frigid air Streets on Fire. Trucks heel flip rocket air crail grab speed wobbles. Roll-in hurricane soul skate poseur full-cab Grind King. 

?>