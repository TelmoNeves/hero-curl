<?php
	
//Launch ramp kickflip darkslide Japan air. Salad grind pop shove-it gnarly Dylan Rieder kickflip. Bearings shoveit hang up speed wobbles. Hang-up lipslide method air slam. Tail Jeremy Klein mini ramp hanger egg plant. Kevin Ancell kickflip frontside cess slide pivot. Vision Streetwear egg plant skate or die slide bruised heel. Ollie hole switch wheels bigspin. Backside pop shove-it salad grind griptape. 

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

//Launch ramp kickflip darkslide Japan air. Salad grind pop shove-it gnarly Dylan Rieder kickflip. Bearings shoveit hang up speed wobbles. Hang-up lipslide method air slam. Tail Jeremy Klein mini ramp hanger egg plant. Kevin Ancell kickflip frontside cess slide pivot. Vision Streetwear egg plant skate or die slide bruised heel. Ollie hole switch wheels bigspin. Backside pop shove-it salad grind griptape. 

?>