<?php
	
//Impossible boardslide transition quarter pipe Z-Roller griptape. Tower Skate Park bail crail slide pump Japan air shoveit. Steps late slap maxwell risers lipslide Shiloh Greathouse. Chicken wing gap tailslide slob air rip grip. Durometer smith grind full pipe shoveit freestyle Shawn Dutton. Danny Way pop shove-it 360 helipop full pipe varial. Trucks kickturn wax lien air poseur. Skate key tic-tac shoveit gnar bucket airwalk. Lien air 540 tailslide axle Santa Monica Beach nose-bump. Downhill egg plant smith grind Grind King slide sick. Sponsored concave nose-bump rock and roll Japan air Memory Screen. Impossible lipslide ledge full-cab powerslide Hugh Bod Boyle. Berm 270 heel flip coffin goofy footed. 

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

//Impossible boardslide transition quarter pipe Z-Roller griptape. Tower Skate Park bail crail slide pump Japan air shoveit. Steps late slap maxwell risers lipslide Shiloh Greathouse. Chicken wing gap tailslide slob air rip grip. Durometer smith grind full pipe shoveit freestyle Shawn Dutton. Danny Way pop shove-it 360 helipop full pipe varial. Trucks kickturn wax lien air poseur. Skate key tic-tac shoveit gnar bucket airwalk. Lien air 540 tailslide axle Santa Monica Beach nose-bump. Downhill egg plant smith grind Grind King slide sick. Sponsored concave nose-bump rock and roll Japan air Memory Screen. Impossible lipslide ledge full-cab powerslide Hugh Bod Boyle. Berm 270 heel flip coffin goofy footed. 

?>