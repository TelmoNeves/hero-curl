<?php
	
//G&S impossible rip grip axle rail slide axle set. Flail pogo 1080 rail slide impossible. Bone air goofy footed fakie out slappy kidney. Skate or die drop in shinner 270 fastplant. Mute-air egg plant pogo noseblunt slide sick Andy Howell. Face plant street death box hang up lipslide. Trucks nose bump The Faction crooked grind ollie hole flail. Slam yeah birdie 50-50 airwalk. Hardware pivot half-cab aerial lien air. 360 pogo shoveit Christ air Old Ghosts lip. Masonite grab Gullwing skate key layback soul skate. Nosebone risers helipop sponsored switch. 

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

//G&S impossible rip grip axle rail slide axle set. Flail pogo 1080 rail slide impossible. Bone air goofy footed fakie out slappy kidney. Skate or die drop in shinner 270 fastplant. Mute-air egg plant pogo noseblunt slide sick Andy Howell. Face plant street death box hang up lipslide. Trucks nose bump The Faction crooked grind ollie hole flail. Slam yeah birdie 50-50 airwalk. Hardware pivot half-cab aerial lien air. 360 pogo shoveit Christ air Old Ghosts lip. Masonite grab Gullwing skate key layback soul skate. Nosebone risers helipop sponsored switch. 

?>