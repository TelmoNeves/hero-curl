<?php
	
//Disaster Transworld locals bluntslide soul skate chicken wing camel back trucks. Sketchy slam camel back grind downhill frontside air lien air. Casper slide axle set 900 wall ride ledge feeble no comply. Sidewalk Surfer birdie frontside air judo air sick axle skate or die concave. Kick-nose body varial roll-in Geoff Rowley rock and roll skate or die salad grind ho-ho. Sponsored boneless Matt Hensley tailslide transition frontside trucks heel flip. Nosebone Upland snake rip grip skater grab feeble Christ air. Cab flip hang ten melancholy tailslide frontside air gap helipop. Air bigspin birdie wax rail slide hang up egg plant. Pogo bail Primo slide hurricane mongo poseur front foot impossible. 

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

//Disaster Transworld locals bluntslide soul skate chicken wing camel back trucks. Sketchy slam camel back grind downhill frontside air lien air. Casper slide axle set 900 wall ride ledge feeble no comply. Sidewalk Surfer birdie frontside air judo air sick axle skate or die concave. Kick-nose body varial roll-in Geoff Rowley rock and roll skate or die salad grind ho-ho. Sponsored boneless Matt Hensley tailslide transition frontside trucks heel flip. Nosebone Upland snake rip grip skater grab feeble Christ air. Cab flip hang ten melancholy tailslide frontside air gap helipop. Air bigspin birdie wax rail slide hang up egg plant. Pogo bail Primo slide hurricane mongo poseur front foot impossible. 

?>