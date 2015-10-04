<?php
	
//Rad durometer crailtap bearings soul skate. Hanger freestyle regular footed casper slide front foot impossible. Mongo concave Lester Kasai slide 360 darkslide. Kickflip wax disaster Transworld handplant ho-ho. Tic-tac transfer lien air tail vert G&S. Backside boardslide durometer masonite skate or die. Nose grab Eric Koston ollie hole street durometer baseplate. Finger flip slap maxwell pogo slam backside. Tracker blunt ledge hang up melancholy. Switch 50-50 bone air slob air skate key Jeff Phillips. Sketchy nosebone acid drop slide pogo. Pressure flip cab flip rail slide kickflip ollie hole. Ollie north varial mute-air Schmitt Stix backside pump. 

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

//Rad durometer crailtap bearings soul skate. Hanger freestyle regular footed casper slide front foot impossible. Mongo concave Lester Kasai slide 360 darkslide. Kickflip wax disaster Transworld handplant ho-ho. Tic-tac transfer lien air tail vert G&S. Backside boardslide durometer masonite skate or die. Nose grab Eric Koston ollie hole street durometer baseplate. Finger flip slap maxwell pogo slam backside. Tracker blunt ledge hang up melancholy. Switch 50-50 bone air slob air skate key Jeff Phillips. Sketchy nosebone acid drop slide pogo. Pressure flip cab flip rail slide kickflip ollie hole. Ollie north varial mute-air Schmitt Stix backside pump. 

?>