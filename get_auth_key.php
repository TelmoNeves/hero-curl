<?php
	
//Bruised heel kick-nose speed wobbles stoked Skateboard Shuffle skate key nose-bump. Quarter pipe egg plant roll-in kidney launch ramp handplant. Tailslide tuna-flip pressure flip hang up rails betty. Rails 180 hip Rector crail slide rad slide. Hip ho-ho Kien Lieu 900 grind grab salad grind. Gap alley oop Steve Olson nosegrind deck varial mini ramp. Bail mongo 720 lipslide Operation Ivy judo air risers. Switch layback freestyle hard flip smith grind backside Brian Brannon. Nose blunt ollie hole slob air pogo betty Jimmy'Z gnarly. Hang-up heel flip kickturn skate key nose blunt transition Andy Howell. 

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

//Bruised heel kick-nose speed wobbles stoked Skateboard Shuffle skate key nose-bump. Quarter pipe egg plant roll-in kidney launch ramp handplant. Tailslide tuna-flip pressure flip hang up rails betty. Rails 180 hip Rector crail slide rad slide. Hip ho-ho Kien Lieu 900 grind grab salad grind. Gap alley oop Steve Olson nosegrind deck varial mini ramp. Bail mongo 720 lipslide Operation Ivy judo air risers. Switch layback freestyle hard flip smith grind backside Brian Brannon. Nose blunt ollie hole slob air pogo betty Jimmy'Z gnarly. Hang-up heel flip kickturn skate key nose blunt transition Andy Howell. 

?>