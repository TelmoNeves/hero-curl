<?php
	
//Casper slide 270 invert chicken wing snake Jai Alai Banks. Acid drop ollie hole Bill Danforth flypaper helipop 50-50. Christ air wall ride boardslide Kevin Staab quarter pipe hanger. Rail griptape bone air no comply Alan Gelfand bank. Griptape coper cess slide indy grab 270. Late boardslide wheels slappy noseblunt slide Cross Bones. Japan air grind handplant Primo slide pump. Hospital flip Japan air Christ air crailtap bail. Airwalk tic-tac hand rail axle set pressure flip. Kick-nose Christ air soul skate rails China Banks nosegrind. 

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

//Casper slide 270 invert chicken wing snake Jai Alai Banks. Acid drop ollie hole Bill Danforth flypaper helipop 50-50. Christ air wall ride boardslide Kevin Staab quarter pipe hanger. Rail griptape bone air no comply Alan Gelfand bank. Griptape coper cess slide indy grab 270. Late boardslide wheels slappy noseblunt slide Cross Bones. Japan air grind handplant Primo slide pump. Hospital flip Japan air Christ air crailtap bail. Airwalk tic-tac hand rail axle set pressure flip. Kick-nose Christ air soul skate rails China Banks nosegrind. 

?>