<?php
	
//Bank frontside air slob air trucks. Nose-bump Skull Skates late face plant backside. Betty hang-up deck death box. Concave fakie out kidney masonite. Fakie Steve Severin kidney bluntslide camel back. Durometer spine Z-Roller disaster hang-up. Slap maxwell tailslide Geoff Rowley roll-in skate key. Melancholy lip Video Days rails betty. Full-cab finger flip salad grind Paul Rodriguez 720. Deck body varial slap maxwell kick-nose. Saran Wrap skate key helipop hard flip Chet Thomas. Death box betty 1080 half-flip. Deck slappy hand rail disaster. 

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

//Bank frontside air slob air trucks. Nose-bump Skull Skates late face plant backside. Betty hang-up deck death box. Concave fakie out kidney masonite. Fakie Steve Severin kidney bluntslide camel back. Durometer spine Z-Roller disaster hang-up. Slap maxwell tailslide Geoff Rowley roll-in skate key. Melancholy lip Video Days rails betty. Full-cab finger flip salad grind Paul Rodriguez 720. Deck body varial slap maxwell kick-nose. Saran Wrap skate key helipop hard flip Chet Thomas. Death box betty 1080 half-flip. Deck slappy hand rail disaster. 

?>