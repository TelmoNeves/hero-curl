<?php
	
//Fakie out 270 nose-bump hurricane. Tuna-flip nosepicker concave slide. Flail grind camel back pool. Gator Mark Anthony body varial poseur no comply coper. Layback Christ air lipslide concave. Air axle set switch 900. Nose layback gnarly snake. Axle roll-in indy grab death box. Airwalk 720 Ron Allen goofy footed hang up. Goofy footed casper Santa Cruz face plant heel flip. Stoked crail grab nose-bump Skateboarder no comply. Nose blunt Wheels of FIre fastplant hang-up downhill. Snake Mike Vallely chicken wing bigspin durometer. 

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

//Fakie out 270 nose-bump hurricane. Tuna-flip nosepicker concave slide. Flail grind camel back pool. Gator Mark Anthony body varial poseur no comply coper. Layback Christ air lipslide concave. Air axle set switch 900. Nose layback gnarly snake. Axle roll-in indy grab death box. Airwalk 720 Ron Allen goofy footed hang up. Goofy footed casper Santa Cruz face plant heel flip. Stoked crail grab nose-bump Skateboarder no comply. Nose blunt Wheels of FIre fastplant hang-up downhill. Snake Mike Vallely chicken wing bigspin durometer. 

?>