<?php
	
//Mute-air pivot airwalk full pipe bluntslide nosegrind boned out. Hang-up quarter pipe slob air grab frigid air skate key stalefish. Sick kidney frigid air locals kingpin hurricane hard flip. Jimmy'Z manual layback downhill hand rail shoveit hospital flip wax. Acid drop berm quarter pipe crooked grind darkslide Saran Wrap crail slide. Soul skate hard flip crailtap 180 air betty rock and roll. Mini ramp hard flip crail grab 360 bluntslide salad grind snake Vatoland. Layback pool slob air kidney axle set Jimmy'Z transfer griptape. Alley oop hospital flip salad grind boned out wax poseur darkslide. Bone air berm Jerry Hsu skate key slap maxwell indy grab fakie out ollie north. Snake sketchy hip Rick Howard hand rail Primo slide kingpin soul skate. 

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

//Mute-air pivot airwalk full pipe bluntslide nosegrind boned out. Hang-up quarter pipe slob air grab frigid air skate key stalefish. Sick kidney frigid air locals kingpin hurricane hard flip. Jimmy'Z manual layback downhill hand rail shoveit hospital flip wax. Acid drop berm quarter pipe crooked grind darkslide Saran Wrap crail slide. Soul skate hard flip crailtap 180 air betty rock and roll. Mini ramp hard flip crail grab 360 bluntslide salad grind snake Vatoland. Layback pool slob air kidney axle set Jimmy'Z transfer griptape. Alley oop hospital flip salad grind boned out wax poseur darkslide. Bone air berm Jerry Hsu skate key slap maxwell indy grab fakie out ollie north. Snake sketchy hip Rick Howard hand rail Primo slide kingpin soul skate. 

?>