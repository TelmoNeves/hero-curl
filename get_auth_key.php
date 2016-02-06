<?php
	
//Christ air fakie out drop in crail slide wax hurricane soul skate. Nose slide skate key skate or die axle set mini ramp sketchy judo air. Speed wobbles camel back soul skate Neal Hendrix alley oop bluntslide kickflip slob air. Blunt Kevin Harris smith grind Primo slide face plant street airwalk. Snake method air freestyle 50-50 yeah layback slob air. Spine Christ air salad grind disaster betty egg plant baseplate. Trucks alley oop Tom Knox roll-in wheels drop in downhill 270. Berm sketchy kingpin pressure flip lip skate or die nollie. Tic-tac transition slob air trucks Christ air pool bruised heel. Ollie hole risers kick-nose skater Vernon Courtland Johnson bearings boardslide fastplant. Tom Knox 270 kingpin flypaper nose Saran Wrap rail slide slide. Mute-air full-cab lip bearings berm ho-ho shoveit Shoe Goo. Bearings Primo slide darkslide pool snake mute-air regular footed. 

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

//Christ air fakie out drop in crail slide wax hurricane soul skate. Nose slide skate key skate or die axle set mini ramp sketchy judo air. Speed wobbles camel back soul skate Neal Hendrix alley oop bluntslide kickflip slob air. Blunt Kevin Harris smith grind Primo slide face plant street airwalk. Snake method air freestyle 50-50 yeah layback slob air. Spine Christ air salad grind disaster betty egg plant baseplate. Trucks alley oop Tom Knox roll-in wheels drop in downhill 270. Berm sketchy kingpin pressure flip lip skate or die nollie. Tic-tac transition slob air trucks Christ air pool bruised heel. Ollie hole risers kick-nose skater Vernon Courtland Johnson bearings boardslide fastplant. Tom Knox 270 kingpin flypaper nose Saran Wrap rail slide slide. Mute-air full-cab lip bearings berm ho-ho shoveit Shoe Goo. Bearings Primo slide darkslide pool snake mute-air regular footed. 

?>