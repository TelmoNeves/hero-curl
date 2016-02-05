<?php
	
//Heel flip alley oop Greg Evans speed wobbles mongo yeah pump. Tracker face plant hurricane bearings regular footed skater. Primo slide ollie north Bonite frigid air locals boned out stoked. Christ air hanger hard flip indy grab carve egg plant. Switch nose grab blunt lip egg plant g-turn. Regular footed disaster slide roll-in shoveit half-cab Jordan Richter. Randy Colvin half-cab nose blunt nose grab wheels 180 risers. 720 ledge half-flip snake quarter pipe betty. Tuna-flip egg plant pivot slide speed wobbles gnar bucket. 

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

//Heel flip alley oop Greg Evans speed wobbles mongo yeah pump. Tracker face plant hurricane bearings regular footed skater. Primo slide ollie north Bonite frigid air locals boned out stoked. Christ air hanger hard flip indy grab carve egg plant. Switch nose grab blunt lip egg plant g-turn. Regular footed disaster slide roll-in shoveit half-cab Jordan Richter. Randy Colvin half-cab nose blunt nose grab wheels 180 risers. 720 ledge half-flip snake quarter pipe betty. Tuna-flip egg plant pivot slide speed wobbles gnar bucket. 

?>