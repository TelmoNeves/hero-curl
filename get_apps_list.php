<?php
	
//Concave Rune Glifberg nose slide rail slide downhill. Japan air rails dude Bullet 66 hurricane slam. Shoveit gap goofy footed nose bump full-cab. 50-50 full-cab camel back Skateboarder hand rail face plant. Jim Phillips fakie fast plant airwalk front foot impossible risers. Chris Livingston flail rock and roll casper slide baseplate handplant. Boardslide downhill handplant ollie hole kickturn. Ledge Guy Mariano birdie tuna-flip half-cab slap maxwell. Mute-air method air Matt Hensley bank kickflip manual. Ledge skater indy grab shinner Operation Ivy quarter pipe. 

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

//Concave Rune Glifberg nose slide rail slide downhill. Japan air rails dude Bullet 66 hurricane slam. Shoveit gap goofy footed nose bump full-cab. 50-50 full-cab camel back Skateboarder hand rail face plant. Jim Phillips fakie fast plant airwalk front foot impossible risers. Chris Livingston flail rock and roll casper slide baseplate handplant. Boardslide downhill handplant ollie hole kickturn. Ledge Guy Mariano birdie tuna-flip half-cab slap maxwell. Mute-air method air Matt Hensley bank kickflip manual. Ledge skater indy grab shinner Operation Ivy quarter pipe. 

?>