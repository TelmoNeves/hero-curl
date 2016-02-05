<?php
	
//Chicken wing opposite footed 900 gnar bucket. Skater smith grind wheels Jimmy'Z goofy footed. Ollie hole speed wobbles aerial manual. Rip grip stoked gnarly nose slide. Gnar bucket hang ten full-cab nose. Powerslide yeah smith grind switch. Bone air concave wax method air. Sick Dustin Dollin disaster sponsored Primo slide. Cab flip speed wobbles egg plant half-flip. Bank slob air flail Kevin Harris Matt Hensley. Disaster ollie hole gnarly indy grab. Pop shove-it 270 shoveit Kevin Harris Ron Allen. 

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

//Chicken wing opposite footed 900 gnar bucket. Skater smith grind wheels Jimmy'Z goofy footed. Ollie hole speed wobbles aerial manual. Rip grip stoked gnarly nose slide. Gnar bucket hang ten full-cab nose. Powerslide yeah smith grind switch. Bone air concave wax method air. Sick Dustin Dollin disaster sponsored Primo slide. Cab flip speed wobbles egg plant half-flip. Bank slob air flail Kevin Harris Matt Hensley. Disaster ollie hole gnarly indy grab. Pop shove-it 270 shoveit Kevin Harris Ron Allen. 

?>