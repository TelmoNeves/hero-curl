<?php
	
//Blind vert feeble smith grind Saran Wrap boned out invert. Slappy bluntslide egg plant 900 betty flypaper Bam Margera. Hard Corps masonite Tracker spine feeble ollie hole kidney. Rad bearings egg plant downhill crail grab Gullwing full-cab. Griptape hardware no comply frigid air nose blunt 720. Hard flip street spine freestyle 180 hang ten Chris Livingston. Chicken wing kidney bluntslide cess slide goofy footed hanger. Kevin Harris body varial locals pivot wax kidney. Bone air steps Spike Jonze skater lien air slap maxwell stalefish. Wall ride concave hang-up pump gnar bucket transition. Frigid air boneless airwalk rail slide hospital flip flail. Pool steps transition 900 method air nosegrind. Tailslide betty body varial berm freestyle airwalk. 

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

//Blind vert feeble smith grind Saran Wrap boned out invert. Slappy bluntslide egg plant 900 betty flypaper Bam Margera. Hard Corps masonite Tracker spine feeble ollie hole kidney. Rad bearings egg plant downhill crail grab Gullwing full-cab. Griptape hardware no comply frigid air nose blunt 720. Hard flip street spine freestyle 180 hang ten Chris Livingston. Chicken wing kidney bluntslide cess slide goofy footed hanger. Kevin Harris body varial locals pivot wax kidney. Bone air steps Spike Jonze skater lien air slap maxwell stalefish. Wall ride concave hang-up pump gnar bucket transition. Frigid air boneless airwalk rail slide hospital flip flail. Pool steps transition 900 method air nosegrind. Tailslide betty body varial berm freestyle airwalk. 

?>