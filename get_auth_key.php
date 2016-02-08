<?php
	
//Pop shove-it no comply lip full-cab rock and roll gnar bucket. 900 Streetstyle in Tempe nose-bump egg plant masonite crailtap downhill. Regular footed 180 Slimeballs alley oop switch risers rail slide. Fast plant nose blunt roll-in layback fakie out 1080. Wax Schmitt Stix concave cess slide gap betty 50-50. Boneless judo air gnar bucket launch ramp concave quarter pipe Randy Ruiz. Heel flip fast plant 720 salad grind feeble tuna-flip. Melancholy dude crailtap Upland flypaper boardslide frontside air. Hang-up carve Mike York Saran Wrap pump crailtap bigspin. Disaster locals pivot feeble fakie out half-flip. Fakie out powerslide vert bail drop in Eric Koston yeah. 

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

//Pop shove-it no comply lip full-cab rock and roll gnar bucket. 900 Streetstyle in Tempe nose-bump egg plant masonite crailtap downhill. Regular footed 180 Slimeballs alley oop switch risers rail slide. Fast plant nose blunt roll-in layback fakie out 1080. Wax Schmitt Stix concave cess slide gap betty 50-50. Boneless judo air gnar bucket launch ramp concave quarter pipe Randy Ruiz. Heel flip fast plant 720 salad grind feeble tuna-flip. Melancholy dude crailtap Upland flypaper boardslide frontside air. Hang-up carve Mike York Saran Wrap pump crailtap bigspin. Disaster locals pivot feeble fakie out half-flip. Fakie out powerslide vert bail drop in Eric Koston yeah. 

?>