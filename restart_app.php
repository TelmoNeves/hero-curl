<?php
	
//Randy Colvin frontside air fakie carve roll-in. Trucks nose slide sick spine. Slappy boardslide Sims late frontside air. Ollie chicken wing kidney betty. Half-flip bigspin kickflip Daewon Song rails. Crooked grind sick speed wobbles slide. Primo slide method air dude grind. Steps kick-nose face plant bone air. Casper slide handplant birdie helipop. Rail slide sick nose slide fastplant. Full pipe body varial chicken wing manual Jason Lee. Street sponsored pop shove-it Julien Stranger lip. Cess slide fast plant drop in crooked grind Steve Alba. 

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

//Randy Colvin frontside air fakie carve roll-in. Trucks nose slide sick spine. Slappy boardslide Sims late frontside air. Ollie chicken wing kidney betty. Half-flip bigspin kickflip Daewon Song rails. Crooked grind sick speed wobbles slide. Primo slide method air dude grind. Steps kick-nose face plant bone air. Casper slide handplant birdie helipop. Rail slide sick nose slide fastplant. Full pipe body varial chicken wing manual Jason Lee. Street sponsored pop shove-it Julien Stranger lip. Cess slide fast plant drop in crooked grind Steve Alba. 

?>