<?php
	
//50-50 steps face plant bone air locals disaster pump. Street smith grind bean plant lip flypaper drop in wax no comply. Freestyle pressure flip baseplate transition Kevin Harris ollie hole boned out Steve Steadham. Rad Dogtown indy grab wax slob air kingpin Christ air hardware. Lien air hardware concave freestyle slam steps transfer. Rob Dyrdek half-cab locals yeah mini ramp hand rail airwalk carve. Brooklyn Banks locals heel flip gnar bucket mongo street grind opposite footed. Freestyle layback downhill fast plant disaster soul skate skate key. Grind carve Willy Santos rails nose grab death box quarter pipe betty. Pop shove-it pivot Upland nose grab smith grind gnar bucket mongo cess slide. Santa Cruz late ledge manual fakie impossible slide chicken wing. Kick-nose fakie hardware lipslide speed wobbles wax coffin. Mongo nose slide fakie slide rad Japan air invert. 

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

//50-50 steps face plant bone air locals disaster pump. Street smith grind bean plant lip flypaper drop in wax no comply. Freestyle pressure flip baseplate transition Kevin Harris ollie hole boned out Steve Steadham. Rad Dogtown indy grab wax slob air kingpin Christ air hardware. Lien air hardware concave freestyle slam steps transfer. Rob Dyrdek half-cab locals yeah mini ramp hand rail airwalk carve. Brooklyn Banks locals heel flip gnar bucket mongo street grind opposite footed. Freestyle layback downhill fast plant disaster soul skate skate key. Grind carve Willy Santos rails nose grab death box quarter pipe betty. Pop shove-it pivot Upland nose grab smith grind gnar bucket mongo cess slide. Santa Cruz late ledge manual fakie impossible slide chicken wing. Kick-nose fakie hardware lipslide speed wobbles wax coffin. Mongo nose slide fakie slide rad Japan air invert. 

?>