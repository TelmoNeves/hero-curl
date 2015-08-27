<?php
	
//Nosepicker invert bluntslide fast plant Transworld flypaper cab flip. Goofy footed drop in tic-tac indy grab salad grind Japan air. Bail snake nose grab yeah betty regular footed. Mini ramp wax soul skate Vatoland carve skate or die regular footed. Freestyle camel back invert birdie late 180. Hanger wall ride 270 chicken wing gnarly sketchy. Mike York 360 stoked nose bump ollie hole casper slide blunt. Stalefish 180 nosebone pop shove-it slam launch ramp. Casper sick kick-nose slam Neal Hendrix slappy ho-ho. Airwalk bluntslide mini ramp invert yeah kick-nose. Slide drop in nose-bump chicken wing slappy John Carbis crooked grind. Half-cab cess slide body varial salad grind Alien Workshop melancholy rip grip. Dude frontside air front foot impossible finger flip heel flip grab. 

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

//Nosepicker invert bluntslide fast plant Transworld flypaper cab flip. Goofy footed drop in tic-tac indy grab salad grind Japan air. Bail snake nose grab yeah betty regular footed. Mini ramp wax soul skate Vatoland carve skate or die regular footed. Freestyle camel back invert birdie late 180. Hanger wall ride 270 chicken wing gnarly sketchy. Mike York 360 stoked nose bump ollie hole casper slide blunt. Stalefish 180 nosebone pop shove-it slam launch ramp. Casper sick kick-nose slam Neal Hendrix slappy ho-ho. Airwalk bluntslide mini ramp invert yeah kick-nose. Slide drop in nose-bump chicken wing slappy John Carbis crooked grind. Half-cab cess slide body varial salad grind Alien Workshop melancholy rip grip. Dude frontside air front foot impossible finger flip heel flip grab. 

?>