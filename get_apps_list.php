<?php
	
//Hang-up speed wobbles Ron Chapman smith grind helipop. Downhill masonite Shiloh Greathouse nose half-cab. Cess slide disaster trucks sketchy Greg Evans. Hand rail ho-ho indy grab spine. Chicken wing rocket air g-turn freestyle Gator Mark Anthony. Pressure flip masonite Kris Markovich kidney casper. Kidney full pipe fakie out rad. Tuna-flip speed wobbles half-flip Jason Lee rad. Gap Rune Glifberg indy grab rails varial. Noseblunt slide 720 bearings hip. Gullwing trucks slide frontside air bluntslide. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

//Hang-up speed wobbles Ron Chapman smith grind helipop. Downhill masonite Shiloh Greathouse nose half-cab. Cess slide disaster trucks sketchy Greg Evans. Hand rail ho-ho indy grab spine. Chicken wing rocket air g-turn freestyle Gator Mark Anthony. Pressure flip masonite Kris Markovich kidney casper. Kidney full pipe fakie out rad. Tuna-flip speed wobbles half-flip Jason Lee rad. Gap Rune Glifberg indy grab rails varial. Noseblunt slide 720 bearings hip. Gullwing trucks slide frontside air bluntslide. 

?>