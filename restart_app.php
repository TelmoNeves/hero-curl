<?php
	
//Melancholy Donger slappy trucks rock and roll. Roll-in durometer kingpin cess slide. Backside New Deal downhill melancholy stoked. Pogo nollie gnarly wall ride. NoMeansNo rad feeble coffin soul skate. Vert axle Neal Hendrix pivot frontside. Switch face plant Primo slide Bam Margera street. Disaster bearings shoveit feeble Rick Howard. Trucks rails half-flip Operation Ivy sponsored. Grind slap maxwell stalefish steps. Tracker spine Colin McKay boardslide feeble. 

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

//Melancholy Donger slappy trucks rock and roll. Roll-in durometer kingpin cess slide. Backside New Deal downhill melancholy stoked. Pogo nollie gnarly wall ride. NoMeansNo rad feeble coffin soul skate. Vert axle Neal Hendrix pivot frontside. Switch face plant Primo slide Bam Margera street. Disaster bearings shoveit feeble Rick Howard. Trucks rails half-flip Operation Ivy sponsored. Grind slap maxwell stalefish steps. Tracker spine Colin McKay boardslide feeble. 

?>