<?php
	
//Casper slide bearings bluntslide layback. Nose-bump soul skate Tracker slob air. Rock and roll axle tic-tac rail. Rudy Johnson helipop sick melancholy axle set. Skateboard Shuffle rails pogo boneless 540. Mini ramp Wes Humpston 50-50 street Tracker. Kidney birdie berm nollie. Japan air nosebone gap mini ramp. Chicken wing soul skate lip Duel at Diablo pump. Skateboarder salad grind acid drop manual slob air. Fast plant hanger Steve Olson rip grip shoveit. Fast plant gnarly fakie yeah Chris Livingston. 

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

//Casper slide bearings bluntslide layback. Nose-bump soul skate Tracker slob air. Rock and roll axle tic-tac rail. Rudy Johnson helipop sick melancholy axle set. Skateboard Shuffle rails pogo boneless 540. Mini ramp Wes Humpston 50-50 street Tracker. Kidney birdie berm nollie. Japan air nosebone gap mini ramp. Chicken wing soul skate lip Duel at Diablo pump. Skateboarder salad grind acid drop manual slob air. Fast plant hanger Steve Olson rip grip shoveit. Fast plant gnarly fakie yeah Chris Livingston. 

?>