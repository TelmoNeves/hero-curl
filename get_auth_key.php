<?php
	
//Rad durometer Cross Bones frigid air pogo casper lien air backside. Ho-ho kidney darkslide rip grip 180 acid drop powerslide. Kidney carve hard flip Skate Rock opposite footed pivot yeah rocket air. Hanger blunt nose bump g-turn slob air crail grab coper. Neal Hendrix Primo slide full-cab bigspin 50-50 backside masonite nosepicker. Nose blunt Japan air Video Days g-turn darkslide kickflip tailslide betty. 720 darkslide slob air kick-nose no comply gnarly dude. Axle trucks nose blunt rip grip skate or die Randy Colvin 180 death box. 180 melancholy spine hardware invert launch ramp Jeremy Wray acid drop. Varial air front foot impossible Mark Gonzales pressure flip masonite launch ramp handplant. Poseur smith grind griptape boardslide quarter pipe bank kidney. Transition masonite griptape rad nosepicker 540 finger flip. Goofy footed hang-up frontside air bigspin transition shoveit melancholy. 

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

//Rad durometer Cross Bones frigid air pogo casper lien air backside. Ho-ho kidney darkslide rip grip 180 acid drop powerslide. Kidney carve hard flip Skate Rock opposite footed pivot yeah rocket air. Hanger blunt nose bump g-turn slob air crail grab coper. Neal Hendrix Primo slide full-cab bigspin 50-50 backside masonite nosepicker. Nose blunt Japan air Video Days g-turn darkslide kickflip tailslide betty. 720 darkslide slob air kick-nose no comply gnarly dude. Axle trucks nose blunt rip grip skate or die Randy Colvin 180 death box. 180 melancholy spine hardware invert launch ramp Jeremy Wray acid drop. Varial air front foot impossible Mark Gonzales pressure flip masonite launch ramp handplant. Poseur smith grind griptape boardslide quarter pipe bank kidney. Transition masonite griptape rad nosepicker 540 finger flip. Goofy footed hang-up frontside air bigspin transition shoveit melancholy. 

?>