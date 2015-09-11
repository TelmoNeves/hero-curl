<?php
	
//Neil Blender rocket air disaster tuna-flip tail. Hip Steve Chumney boneless bone air stoked. Airwalk darkslide downhill feeble. Finger flip shinner goofy footed transfer. Noseblunt slide crooked grind concave yeah. Axle slam shinner quarter pipe Rodney Mullen. Slam regular footed Randy Ruiz boardslide concave. Thrasher crailtap ollie tailslide kingpin. Kevin Harris gap Mark Gonzales fakie out crail slide. Alternative Sports pump tailslide nose-bump bruised heel. Full-cab nose bump helipop Santa Monica Airlines Saran Wrap. Fast plant manual finger flip nose bump Vans. Speed wobbles Bones Brigade slob air dude chicken wing. 

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

//Neil Blender rocket air disaster tuna-flip tail. Hip Steve Chumney boneless bone air stoked. Airwalk darkslide downhill feeble. Finger flip shinner goofy footed transfer. Noseblunt slide crooked grind concave yeah. Axle slam shinner quarter pipe Rodney Mullen. Slam regular footed Randy Ruiz boardslide concave. Thrasher crailtap ollie tailslide kingpin. Kevin Harris gap Mark Gonzales fakie out crail slide. Alternative Sports pump tailslide nose-bump bruised heel. Full-cab nose bump helipop Santa Monica Airlines Saran Wrap. Fast plant manual finger flip nose bump Vans. Speed wobbles Bones Brigade slob air dude chicken wing. 

?>