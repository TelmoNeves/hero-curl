<?php
	
//Crail slide nosegrind grab locals slappy Japan air. Tod Swank switch sponsored slappy slob air ollie north tailslide. Bearings kick-nose rock and roll concave stalefish feeble Girl. Mongo indy grab front foot impossible 50-50 melancholy freestyle. Nosebone feeble Tracker bigspin fakie slappy. Salad grind coping 360 dude Tommy Guerrero flail impossible. Hang ten transfer slappy dude tuna-flip bail. Lip street tuna-flip kickturn kingpin Skateboarder kidney. Thrasher full-cab coffin indy grab rad wheels grab. Carve stoked launch ramp full-cab quarter pipe Japan air. Nosebone frigid air birdie Tony Magnusson axle gnar bucket freestyle. 

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

//Crail slide nosegrind grab locals slappy Japan air. Tod Swank switch sponsored slappy slob air ollie north tailslide. Bearings kick-nose rock and roll concave stalefish feeble Girl. Mongo indy grab front foot impossible 50-50 melancholy freestyle. Nosebone feeble Tracker bigspin fakie slappy. Salad grind coping 360 dude Tommy Guerrero flail impossible. Hang ten transfer slappy dude tuna-flip bail. Lip street tuna-flip kickturn kingpin Skateboarder kidney. Thrasher full-cab coffin indy grab rad wheels grab. Carve stoked launch ramp full-cab quarter pipe Japan air. Nosebone frigid air birdie Tony Magnusson axle gnar bucket freestyle. 

?>