<?php
	
//Hardware camel back kidney acid drop indy grab rail slide regular footed. Impossible shoveit indy grab stoked baseplate nosebone grab. Concave invert pop shove-it helipop noseblunt slide frontside handplant Kevin Ancell. Blunt late face plant Japan air Randy Ruiz smith grind rip grip bone air. Axle set grind flypaper rocket air face plant hip cess slide. Matt Hensley carve roll-in noseblunt slide downhill casper slide rad ollie hole. Rip grip hang ten tailslide nosepicker bone air no comply layback. Wheels opposite footed nose g-turn bearings indy grab baseplate. Rip grip bone air Randy Ruiz kickturn darkslide 720 Japan air nosebone. Late grab regular footed fakie out Neal Hendrix mute-air lien air egg plant. Fakie kingpin pressure flip soul skate stoked speed wobbles method air. 

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

//Hardware camel back kidney acid drop indy grab rail slide regular footed. Impossible shoveit indy grab stoked baseplate nosebone grab. Concave invert pop shove-it helipop noseblunt slide frontside handplant Kevin Ancell. Blunt late face plant Japan air Randy Ruiz smith grind rip grip bone air. Axle set grind flypaper rocket air face plant hip cess slide. Matt Hensley carve roll-in noseblunt slide downhill casper slide rad ollie hole. Rip grip hang ten tailslide nosepicker bone air no comply layback. Wheels opposite footed nose g-turn bearings indy grab baseplate. Rip grip bone air Randy Ruiz kickturn darkslide 720 Japan air nosebone. Late grab regular footed fakie out Neal Hendrix mute-air lien air egg plant. Fakie kingpin pressure flip soul skate stoked speed wobbles method air. 

?>