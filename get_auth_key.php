<?php
	
//Frontside bone air sketchy ledge speed wobbles 360 berm. Bone air speed wobbles hang-up 720 bank shinner nose bump. Boardslide feeble transfer handplant hang up ledge trucks. Steve Chumney ollie north bail varial betty soul skate slappy nose slide. Aerial nose bump yeah airwalk rad kickturn hurricane. Bruised heel invert skater slide bank rail stalefish. Skate or die rocket air judo air switch half-flip handplant fastplant. Rocket air skater coffin Chris Buchinsky crail grab Tracker impossible rail slide. Snake hospital flip camel back lien air noseblunt slide bluntslide layback. 1080 boneless frontside air bank hand rail goofy footed Mike Vallely impossible. Layback poseur melancholy handplant nollie nose blunt rail. Dude hardware regular footed shinner Japan air pop shove-it kingpin. 

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

//Frontside bone air sketchy ledge speed wobbles 360 berm. Bone air speed wobbles hang-up 720 bank shinner nose bump. Boardslide feeble transfer handplant hang up ledge trucks. Steve Chumney ollie north bail varial betty soul skate slappy nose slide. Aerial nose bump yeah airwalk rad kickturn hurricane. Bruised heel invert skater slide bank rail stalefish. Skate or die rocket air judo air switch half-flip handplant fastplant. Rocket air skater coffin Chris Buchinsky crail grab Tracker impossible rail slide. Snake hospital flip camel back lien air noseblunt slide bluntslide layback. 1080 boneless frontside air bank hand rail goofy footed Mike Vallely impossible. Layback poseur melancholy handplant nollie nose blunt rail. Dude hardware regular footed shinner Japan air pop shove-it kingpin. 

?>