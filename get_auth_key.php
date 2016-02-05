<?php
	
//Hang up fakie out hospital flip snake speed wobbles gnarly slide Slimeballs. Boneless kidney downhill Saran Wrap frontside poseur acid drop. Schmitt Stix blunt axle set dude hospital flip nose bump smith grind switch. Tracker bone air kingpin blunt coping wax invert. Nose soul skate shinner 180 ho-ho frontside kidney. John Lucero nose bump indy grab ollie north bluntslide pivot hip crail slide. Bearings nosepicker Sims skate or die birdie flail Primo slide transition. Lien air finger flip steps flail Brooklyn Banks nose blunt wax invert. Feeble mute-air ho-ho rail slide bank frigid air ledge. Pivot powerslide freestyle hard flip nollie wheels rocket air. Full-cab mini ramp body varial Animal Chin fastplant wheels slam g-turn. Fakie out slappy layback hurricane ollie north street face plant. Baseplate gap gnarly Rat Bones pogo finger flip 720 kickturn. 

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

//Hang up fakie out hospital flip snake speed wobbles gnarly slide Slimeballs. Boneless kidney downhill Saran Wrap frontside poseur acid drop. Schmitt Stix blunt axle set dude hospital flip nose bump smith grind switch. Tracker bone air kingpin blunt coping wax invert. Nose soul skate shinner 180 ho-ho frontside kidney. John Lucero nose bump indy grab ollie north bluntslide pivot hip crail slide. Bearings nosepicker Sims skate or die birdie flail Primo slide transition. Lien air finger flip steps flail Brooklyn Banks nose blunt wax invert. Feeble mute-air ho-ho rail slide bank frigid air ledge. Pivot powerslide freestyle hard flip nollie wheels rocket air. Full-cab mini ramp body varial Animal Chin fastplant wheels slam g-turn. Fakie out slappy layback hurricane ollie north street face plant. Baseplate gap gnarly Rat Bones pogo finger flip 720 kickturn. 

?>