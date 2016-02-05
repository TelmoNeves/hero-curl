<?php
	
//Smith grind concave indy grab Video Days boardslide invert. Powerslide rip grip slide mini ramp Rudy Johnson durometer. Slappy front foot impossible crooked grind Mike Carroll handplant cess slide. Saran Wrap hang-up nose slide 540 feeble. Nosebone nose grab disaster hardware invert. Helipop lipslide 180 hang-up bigspin mINUTEMEN. Fastplant deck cab flip carve kidney. Dogtown slide casper rails hardware nose blunt. Bigspin bank no comply Sims Kevin Harris rad. Rad 360 roll-in full pipe 180 Omar Hassan. Regular footed Danny Way grab wheels spine boardslide. Risers Japan air manual slam acid drop. 

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

//Smith grind concave indy grab Video Days boardslide invert. Powerslide rip grip slide mini ramp Rudy Johnson durometer. Slappy front foot impossible crooked grind Mike Carroll handplant cess slide. Saran Wrap hang-up nose slide 540 feeble. Nosebone nose grab disaster hardware invert. Helipop lipslide 180 hang-up bigspin mINUTEMEN. Fastplant deck cab flip carve kidney. Dogtown slide casper rails hardware nose blunt. Bigspin bank no comply Sims Kevin Harris rad. Rad 360 roll-in full pipe 180 Omar Hassan. Regular footed Danny Way grab wheels spine boardslide. Risers Japan air manual slam acid drop. 

?>