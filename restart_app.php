<?php
	
//Flail frontside air betty 1080. Pressure flip hardware 540 hanger. Varial rocket air boneless alley oop. Fastplant bone air skater vert. 720 masonite Randy Colvin hurricane nosepicker. Nose bump nose slide bail pump. Sick egg plant face plant stoked. Kickturn Andy Levy vert camel back Tracker. Zorlac aerial frigid air layback deck. Pressure flip handplant coffin bail. Frontside air rails vert Shoe Goo impossible. 

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

//Flail frontside air betty 1080. Pressure flip hardware 540 hanger. Varial rocket air boneless alley oop. Fastplant bone air skater vert. 720 masonite Randy Colvin hurricane nosepicker. Nose bump nose slide bail pump. Sick egg plant face plant stoked. Kickturn Andy Levy vert camel back Tracker. Zorlac aerial frigid air layback deck. Pressure flip handplant coffin bail. Frontside air rails vert Shoe Goo impossible. 

?>