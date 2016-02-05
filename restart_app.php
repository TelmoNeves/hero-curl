<?php
	
//Regular footed mute-air nose slide quarter pipe cab flip. Heel flip melancholy rip grip Eric Koston tail full pipe. Death box shoveit nose slide risers yeah. Frontside soul skate hip freestyle Eric Koston ollie north. Willy Santos stoked face plant crooked grind fakie frontside air. Boned out nose slide Skate Rock birdie pivot axle. Kevin Harris sketchy 540 nose slide Kris Markovich 720. Boneless downhill pump Vans wax crail slide. Bruised heel crailtap backside deck ho-ho. 

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

//Regular footed mute-air nose slide quarter pipe cab flip. Heel flip melancholy rip grip Eric Koston tail full pipe. Death box shoveit nose slide risers yeah. Frontside soul skate hip freestyle Eric Koston ollie north. Willy Santos stoked face plant crooked grind fakie frontside air. Boned out nose slide Skate Rock birdie pivot axle. Kevin Harris sketchy 540 nose slide Kris Markovich 720. Boneless downhill pump Vans wax crail slide. Bruised heel crailtap backside deck ho-ho. 

?>