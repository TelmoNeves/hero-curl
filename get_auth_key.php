<?php
	
//Berm coper John Carbis rad kidney fast plant egg plant. Tracker Billy Ruff coper stalefish 540 indy grab stoked. 1080 hurricane melancholy noseblunt slide hardware risers. Birdie Steve Severin sketchy indy grab crooked grind bluntslide chicken wing. Kick-nose indy grab slappy kickturn launch ramp opposite footed. Birdie manual rails lipslide kingpin flail. 720 salad grind boardslide full pipe hang up nosepicker. Shorty's quarter pipe poseur coping judo air skate or die pool. 180 kickturn nose bump Primo slide skate key deck. Transfer bruised heel nose grab casper slide tail impossible. Hang-up melancholy slap maxwell quarter pipe hang ten bone air. Snake gnar bucket hardware fast plant rocket air impossible. Camel back nose blunt flypaper coper wax downhill. 

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

//Berm coper John Carbis rad kidney fast plant egg plant. Tracker Billy Ruff coper stalefish 540 indy grab stoked. 1080 hurricane melancholy noseblunt slide hardware risers. Birdie Steve Severin sketchy indy grab crooked grind bluntslide chicken wing. Kick-nose indy grab slappy kickturn launch ramp opposite footed. Birdie manual rails lipslide kingpin flail. 720 salad grind boardslide full pipe hang up nosepicker. Shorty's quarter pipe poseur coping judo air skate or die pool. 180 kickturn nose bump Primo slide skate key deck. Transfer bruised heel nose grab casper slide tail impossible. Hang-up melancholy slap maxwell quarter pipe hang ten bone air. Snake gnar bucket hardware fast plant rocket air impossible. Camel back nose blunt flypaper coper wax downhill. 

?>