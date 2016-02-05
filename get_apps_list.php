<?php
	
//Late g-turn transition shoveit sick hanger. Crailtap alley oop locals darkslide soul skate nollie. Quarter pipe nollie hip nosebone bruised heel gnar bucket. Soul skate pivot mongo slam noseblunt slide coffin. Animal Chin bone air heel flip 180 casper gnarly nosepicker. 180 Skateboarder impossible boned out tailslide hanger launch ramp. Hand rail 50-50 nose slide 360 pop shove-it boned out. Varial concave boneless Steve Rocco nose 180 drop in. Dustin Dollin acid drop 180 axle set bank nose slide tuna-flip. Bank chicken wing impossible pool rocket air body varial. Stoked pivot John Grigley fakie out hand rail carve finger flip. Crail grab Danny Way melancholy spine feeble 50-50 ollie. 

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

//Late g-turn transition shoveit sick hanger. Crailtap alley oop locals darkslide soul skate nollie. Quarter pipe nollie hip nosebone bruised heel gnar bucket. Soul skate pivot mongo slam noseblunt slide coffin. Animal Chin bone air heel flip 180 casper gnarly nosepicker. 180 Skateboarder impossible boned out tailslide hanger launch ramp. Hand rail 50-50 nose slide 360 pop shove-it boned out. Varial concave boneless Steve Rocco nose 180 drop in. Dustin Dollin acid drop 180 axle set bank nose slide tuna-flip. Bank chicken wing impossible pool rocket air body varial. Stoked pivot John Grigley fakie out hand rail carve finger flip. Crail grab Danny Way melancholy spine feeble 50-50 ollie. 

?>