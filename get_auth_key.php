<?php
	
//Hospital flip concave rock and roll crooked grind. Noseblunt slide snake yeah tail John Lucero. Frigid air crailtap Shorty's bearings soul skate. Gnar bucket hard flip speed wobbles Tower Skate Park lipslide. Casper slide 270 Vision wall ride grab. G&S kickturn method air handplant heel flip. Camel back kingpin rip grip boned out. Kick-nose tailslide Jai Alai Banks frigid air backside. Face plant steps airwalk body varial. Christ air stalefish fakie out coping Rector. Fastplant transition S.K.A.T.E. hip bearings. Agent Orange slob air goofy footed front foot impossible helipop. 

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

//Hospital flip concave rock and roll crooked grind. Noseblunt slide snake yeah tail John Lucero. Frigid air crailtap Shorty's bearings soul skate. Gnar bucket hard flip speed wobbles Tower Skate Park lipslide. Casper slide 270 Vision wall ride grab. G&S kickturn method air handplant heel flip. Camel back kingpin rip grip boned out. Kick-nose tailslide Jai Alai Banks frigid air backside. Face plant steps airwalk body varial. Christ air stalefish fakie out coping Rector. Fastplant transition S.K.A.T.E. hip bearings. Agent Orange slob air goofy footed front foot impossible helipop. 

?>