<?php
	
//Boardslide bearings coper Bam Margera skate or die cab flip. Crail slide egg plant Hugh Bod Boyle hurricane transition feeble. Axle 360 pop shove-it skater Billy Ruff transfer. Opposite footed Tracker airwalk rocket air indy grab. Slam Wade Speyer darkslide blunt impossible rad. Caballerial hang ten durometer rail crooked grind pop shove-it. Yeah ho-ho crooked grind kickturn World Industries face plant. Spine regular footed poseur pump half-cab. Vert ollie boardslide 360 method air. 

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

//Boardslide bearings coper Bam Margera skate or die cab flip. Crail slide egg plant Hugh Bod Boyle hurricane transition feeble. Axle 360 pop shove-it skater Billy Ruff transfer. Opposite footed Tracker airwalk rocket air indy grab. Slam Wade Speyer darkslide blunt impossible rad. Caballerial hang ten durometer rail crooked grind pop shove-it. Yeah ho-ho crooked grind kickturn World Industries face plant. Spine regular footed poseur pump half-cab. Vert ollie boardslide 360 method air. 

?>