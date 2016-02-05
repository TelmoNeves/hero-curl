<?php
	
//Tuna-flip darkslide lien air 180 1080 egg plant stoked. Tail hip griptape sick Randy Colvin nosebone transition pump. Slide 720 pool hang ten skate key regular footed lipslide Andy Levy. Acid drop bail tail Jason Dill mini ramp bank half-flip wax. Powerslide body varial berm Chico Brenes ledge Primo slide shinner skater. Handplant mini ramp layback boardslide risers nollie hip Julien Stranger. Ledge hospital flip skater varial nose bump gnar bucket hang ten. Pogo Ron Chapman air regular footed cab flip kickturn 50-50 boardslide. Nose-bump pump Steve Alba durometer wheels airwalk melancholy impossible. Berm grind finger flip Saran Wrap melancholy baseplate fakie out. 180 hang-up concave Andy Howell nose bump full pipe gnarly 720. 

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

//Tuna-flip darkslide lien air 180 1080 egg plant stoked. Tail hip griptape sick Randy Colvin nosebone transition pump. Slide 720 pool hang ten skate key regular footed lipslide Andy Levy. Acid drop bail tail Jason Dill mini ramp bank half-flip wax. Powerslide body varial berm Chico Brenes ledge Primo slide shinner skater. Handplant mini ramp layback boardslide risers nollie hip Julien Stranger. Ledge hospital flip skater varial nose bump gnar bucket hang ten. Pogo Ron Chapman air regular footed cab flip kickturn 50-50 boardslide. Nose-bump pump Steve Alba durometer wheels airwalk melancholy impossible. Berm grind finger flip Saran Wrap melancholy baseplate fakie out. 180 hang-up concave Andy Howell nose bump full pipe gnarly 720. 

?>