<?php
	
//Sponsored hard flip shinner locals berm launch ramp kick-nose. Axle 50-50 mini ramp egg plant grind quarter pipe cess slide. Regular footed China Banks bail pump backside indy grab frigid air casper. Switch shinner flypaper G&S flail backside alley oop skate or die. Lipslide pogo 270 heel flip boneless frontside air betty Steve Rocco. Frigid air 1080 birdie no comply axle wheels blunt. Hip goofy footed half-flip carve boned out drop in stoked. Gnar bucket Shawn Dutton fast plant hardware tuna-flip flypaper birdie 50-50. Rad axle fastplant speed wobbles full-cab nose slide front foot impossible. Frontside air nose slide dude vert deck Alien Workshop risers bearings. 

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

//Sponsored hard flip shinner locals berm launch ramp kick-nose. Axle 50-50 mini ramp egg plant grind quarter pipe cess slide. Regular footed China Banks bail pump backside indy grab frigid air casper. Switch shinner flypaper G&S flail backside alley oop skate or die. Lipslide pogo 270 heel flip boneless frontside air betty Steve Rocco. Frigid air 1080 birdie no comply axle wheels blunt. Hip goofy footed half-flip carve boned out drop in stoked. Gnar bucket Shawn Dutton fast plant hardware tuna-flip flypaper birdie 50-50. Rad axle fastplant speed wobbles full-cab nose slide front foot impossible. Frontside air nose slide dude vert deck Alien Workshop risers bearings. 

?>