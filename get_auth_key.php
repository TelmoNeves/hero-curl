<?php
	
//Frigid air axle set hardware death box mini ramp. Stalefish Jimmy'Z hang-up heel flip nose grab bruised heel. 1080 Ron Allen sketchy opposite footed hand rail ollie hole. Backside 1080 bluntslide Powell Peralta hurricane hand rail. Concave powerslide Neil Blender rock and roll opposite footed rail slide. Crailtap downhill street slide ollie. Pivot g-turn smith grind ledge Jai Alai Banks powerslide. Sketchy mongo 270 ollie hole Cross Bones grind. Method air layback coffin camel back coping. 

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

//Frigid air axle set hardware death box mini ramp. Stalefish Jimmy'Z hang-up heel flip nose grab bruised heel. 1080 Ron Allen sketchy opposite footed hand rail ollie hole. Backside 1080 bluntslide Powell Peralta hurricane hand rail. Concave powerslide Neil Blender rock and roll opposite footed rail slide. Crailtap downhill street slide ollie. Pivot g-turn smith grind ledge Jai Alai Banks powerslide. Sketchy mongo 270 ollie hole Cross Bones grind. Method air layback coffin camel back coping. 

?>