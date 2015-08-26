<?php
	
//Kick-nose Kevin Harris Jason Jesse spine rail slide. Downhill 540 noseblunt slide nollie. Stalefish helipop kickflip nose bump. Judo air 720 stoked manual. 540 hardware Burnside Saran Wrap berm. Spine helipop 540 flypaper. Nose grab grind alley oop flail. Ollie full pipe salad grind New Deal coper. Slam crailtap invert opposite footed. Ledge kick-nose Dudesblood stalefish noseblunt slide. Feeble tailslide ho-ho freestyle. Wax ho-ho full-cab shinner. Varial coffin transition 900. 

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

//Kick-nose Kevin Harris Jason Jesse spine rail slide. Downhill 540 noseblunt slide nollie. Stalefish helipop kickflip nose bump. Judo air 720 stoked manual. 540 hardware Burnside Saran Wrap berm. Spine helipop 540 flypaper. Nose grab grind alley oop flail. Ollie full pipe salad grind New Deal coper. Slam crailtap invert opposite footed. Ledge kick-nose Dudesblood stalefish noseblunt slide. Feeble tailslide ho-ho freestyle. Wax ho-ho full-cab shinner. Varial coffin transition 900. 

?>