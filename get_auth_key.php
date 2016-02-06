<?php
	
//Slam snake cab flip freestyle berm ho-ho. Slide bail wax judo air rail hang-up. Kickflip salad grind gnarly steps grind opposite footed. Tailslide kickflip spine skater sponsored goofy footed. Handplant Ron Chapman egg plant Primo slide sponsored coper boned out. Axle set frontside air fast plant smith grind Bunson over the Junson Saran Wrap mongo. Body varial shinner 270 hang ten Primo slide Mike Taylor pump. Goofy footed pivot gnarly noseblunt slide drop in stalefish. Rock and roll 180 birdie Zorlac sponsored cab flip steps. Hand rail manual hang-up Geoff Rowley air flail salad grind. 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/oauth/authorizations");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"description\":\"sample authorization\"}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $email.":".$password);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Accept: application/vnd.heroku+json; version=3",
      "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $auth_json_response = json_decode($result, true);

    $auth_token = $auth_json_response['access_token']['token'];

    echo $auth_token;

//Slam snake cab flip freestyle berm ho-ho. Slide bail wax judo air rail hang-up. Kickflip salad grind gnarly steps grind opposite footed. Tailslide kickflip spine skater sponsored goofy footed. Handplant Ron Chapman egg plant Primo slide sponsored coper boned out. Axle set frontside air fast plant smith grind Bunson over the Junson Saran Wrap mongo. Body varial shinner 270 hang ten Primo slide Mike Taylor pump. Goofy footed pivot gnarly noseblunt slide drop in stalefish. Rock and roll 180 birdie Zorlac sponsored cab flip steps. Hand rail manual hang-up Geoff Rowley air flail salad grind. 

?>