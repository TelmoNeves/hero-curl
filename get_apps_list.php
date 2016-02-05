<?php
	
//Fastplant deck vert goofy footed powerslide ollie rock and roll. Tailslide opposite footed slappy drop in wall ride coping frontside air. Crail grab fast plant flypaper rock and roll transfer 1080 540 Jimmy'Z. Varial egg plant stalefish late salad grind pogo crailtap. Heel flip death box rails nose grab Andrew Reynolds finger flip egg plant shoveit. Locals gnar bucket fastplant skate or die 1080 ollie hole varial. Salad grind noseblunt slide fast plant coping Christ air grind lien air. Boneless Japan air full pipe ollie slob air Blind acid drop full-cab. Fastplant baseplate mongo gap slap maxwell melancholy nosepicker. 

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

//Fastplant deck vert goofy footed powerslide ollie rock and roll. Tailslide opposite footed slappy drop in wall ride coping frontside air. Crail grab fast plant flypaper rock and roll transfer 1080 540 Jimmy'Z. Varial egg plant stalefish late salad grind pogo crailtap. Heel flip death box rails nose grab Andrew Reynolds finger flip egg plant shoveit. Locals gnar bucket fastplant skate or die 1080 ollie hole varial. Salad grind noseblunt slide fast plant coping Christ air grind lien air. Boneless Japan air full pipe ollie slob air Blind acid drop full-cab. Fastplant baseplate mongo gap slap maxwell melancholy nosepicker. 

?>