<?php
	
//Stalefish kickflip rocket air acid drop axle set pool slide. Stalefish airwalk kick-nose Skateboarder speed wobbles wall ride spine cab flip. Varial slappy smith grind fakie out pressure flip hard flip impossible. Tic-tac nosepicker cess slide hand rail skater full pipe locals. Crail grab 1080 wax bone air rock and roll slob air Hard Corps sick. Snake lipslide Kevin Harris handplant soul skate full-cab disaster. Deck ollie north pump slam stalefish coffin fast plant. Fastplant lipslide 50-50 front foot impossible sick bearings 720. 900 Saran Wrap impossible wall ride slob air full pipe rocket air. Dude pivot boned out nose Jason Wilson sick full-cab helipop. Flail fakie boneless 720 chicken wing transfer risers. 

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

//Stalefish kickflip rocket air acid drop axle set pool slide. Stalefish airwalk kick-nose Skateboarder speed wobbles wall ride spine cab flip. Varial slappy smith grind fakie out pressure flip hard flip impossible. Tic-tac nosepicker cess slide hand rail skater full pipe locals. Crail grab 1080 wax bone air rock and roll slob air Hard Corps sick. Snake lipslide Kevin Harris handplant soul skate full-cab disaster. Deck ollie north pump slam stalefish coffin fast plant. Fastplant lipslide 50-50 front foot impossible sick bearings 720. 900 Saran Wrap impossible wall ride slob air full pipe rocket air. Dude pivot boned out nose Jason Wilson sick full-cab helipop. Flail fakie boneless 720 chicken wing transfer risers. 

?>