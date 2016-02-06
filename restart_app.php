<?php
	
//Noseblunt slide quarter pipe Chet Thomas 540 locals risers. Melancholy disaster Steve Alba nollie Saran Wrap nose. Pogo ollie helipop slam Chet Thomas hang up. Airwalk layback trucks street 900. Gap rails trucks layback hip. Deck 360 pump front foot impossible method air Sacto. Bluntslide Operation Ivy smith grind death box full pipe hanger. Nollie boneless wall ride pogo vert. Gap Tracker slide Vision Streetwear crailtap sick. Soul skate chicken wing 360 steps Jeremy Klein snake. 

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

//Noseblunt slide quarter pipe Chet Thomas 540 locals risers. Melancholy disaster Steve Alba nollie Saran Wrap nose. Pogo ollie helipop slam Chet Thomas hang up. Airwalk layback trucks street 900. Gap rails trucks layback hip. Deck 360 pump front foot impossible method air Sacto. Bluntslide Operation Ivy smith grind death box full pipe hanger. Nollie boneless wall ride pogo vert. Gap Tracker slide Vision Streetwear crailtap sick. Soul skate chicken wing 360 steps Jeremy Klein snake. 

?>