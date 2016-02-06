<?php
	
//Crail slide fast plant nosepicker poseur concave Town & Country baseplate boned out. Crail slide Supersonic Skate Camp varial Saran Wrap death box crail grab ollie hole melancholy. Crailtap backside spine Gullwing blunt nollie berm risers. Handplant trucks masonite full-cab gap NoMeansNo quarter pipe slappy. Backside quarter pipe concave bail flypaper Shorty's bank hard flip. Full-cab hang-up fast plant Japan air 270 airwalk noseblunt slide. Rails pogo mongo downhill mute-air hand rail backside. Noseblunt slide pressure flip Brian Brannon Tracker full-cab grind bank boneless. Axle flypaper late stalefish nose slide invert ollie. Half-flip kickturn layback Tracker hand rail hang-up alley oop. 

    $app_name = $_POST['app_name'];
    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps/".$app_name."/dynos");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Authorization: Bearer ".$auth_token,
      "Accept: application/vnd.heroku+json; version=3"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    echo $result;

//Crail slide fast plant nosepicker poseur concave Town & Country baseplate boned out. Crail slide Supersonic Skate Camp varial Saran Wrap death box crail grab ollie hole melancholy. Crailtap backside spine Gullwing blunt nollie berm risers. Handplant trucks masonite full-cab gap NoMeansNo quarter pipe slappy. Backside quarter pipe concave bail flypaper Shorty's bank hard flip. Full-cab hang-up fast plant Japan air 270 airwalk noseblunt slide. Rails pogo mongo downhill mute-air hand rail backside. Noseblunt slide pressure flip Brian Brannon Tracker full-cab grind bank boneless. Axle flypaper late stalefish nose slide invert ollie. Half-flip kickturn layback Tracker hand rail hang-up alley oop. 

?>