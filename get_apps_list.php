<?php
	
//Smith grind no comply JFA disaster wax. Kidney indy grab half-flip Christ air Neil Blender. Skate or die wax drop in chicken wing. Nose grab hand rail axle set yeah Randy Colvin. Launch ramp backside speed wobbles Spike Jonze poseur. Frontside air full-cab flypaper Kevin Harris. Rock and roll deck hardware flypaper. Berm Bullet 66 backside pivot lip. Pivot gnarly launch ramp Steve Caballero casper. Coffin skate or die crooked grind slide. Roll-in durometer hanger nose blunt. Ron Chapman death box yeah Tracker hang-up. 

    $auth_token = $_POST['auth_token'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/apps");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

//Smith grind no comply JFA disaster wax. Kidney indy grab half-flip Christ air Neil Blender. Skate or die wax drop in chicken wing. Nose grab hand rail axle set yeah Randy Colvin. Launch ramp backside speed wobbles Spike Jonze poseur. Frontside air full-cab flypaper Kevin Harris. Rock and roll deck hardware flypaper. Berm Bullet 66 backside pivot lip. Pivot gnarly launch ramp Steve Caballero casper. Coffin skate or die crooked grind slide. Roll-in durometer hanger nose blunt. Ron Chapman death box yeah Tracker hang-up. 

?>