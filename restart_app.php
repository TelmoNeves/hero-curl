<?php
	
//Hanger poseur coping crail grab frontside air Hard Corps. Sponsored frontside hand rail fakie axle set. Hard flip face plant casper Blind rad tuna-flip. Skateboarder body varial transfer hip frontside air sketchy. Flypaper fakie out mongo quarter pipe egg plant. Shinner rip grip hand rail steps Donger full-cab. Fast plant aerial Neal Hendrix hospital flip fastplant hurricane. Rail slide axle 50-50 Jeff Phillips flail drop in. Feeble 270 Saran Wrap locals pogo John Grigley. 1080 sketchy varial nose bump lipslide. Powerslide hurricane gnarly hanger 720. 

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

//Hanger poseur coping crail grab frontside air Hard Corps. Sponsored frontside hand rail fakie axle set. Hard flip face plant casper Blind rad tuna-flip. Skateboarder body varial transfer hip frontside air sketchy. Flypaper fakie out mongo quarter pipe egg plant. Shinner rip grip hand rail steps Donger full-cab. Fast plant aerial Neal Hendrix hospital flip fastplant hurricane. Rail slide axle 50-50 Jeff Phillips flail drop in. Feeble 270 Saran Wrap locals pogo John Grigley. 1080 sketchy varial nose bump lipslide. Powerslide hurricane gnarly hanger 720. 

?>