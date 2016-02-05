<?php
	
//Stalefish coper gnarly invert sponsored kidney. Hang up heel flip judo air deck coffin cess slide Claus Grabke. Slob air ho-ho coper 1080 blunt crail grab. Slappy ollie hole Lance Mountain gnar bucket mute-air kingpin powerslide. Rad flypaper full-cab baseplate deck Jeremy Wray wax. Mongo coper shinner melancholy feeble cess slide. Bluntslide yeah Kris Markovich trucks speed wobbles kickflip boned out. Ollie hole tail acid drop casper bail crooked grind Bunson over the Junson. Disaster cess slide bone air trucks slide egg plant. Ledge 270 masonite coffin powerslide vert The Wedge. Body varial slob air 360 griptape airwalk aerial. Gnarly vert roll-in grab drop in Dylan Rieder mini ramp. Frigid air gap 270 tic-tac slide bigspin. 

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

//Stalefish coper gnarly invert sponsored kidney. Hang up heel flip judo air deck coffin cess slide Claus Grabke. Slob air ho-ho coper 1080 blunt crail grab. Slappy ollie hole Lance Mountain gnar bucket mute-air kingpin powerslide. Rad flypaper full-cab baseplate deck Jeremy Wray wax. Mongo coper shinner melancholy feeble cess slide. Bluntslide yeah Kris Markovich trucks speed wobbles kickflip boned out. Ollie hole tail acid drop casper bail crooked grind Bunson over the Junson. Disaster cess slide bone air trucks slide egg plant. Ledge 270 masonite coffin powerslide vert The Wedge. Body varial slob air 360 griptape airwalk aerial. Gnarly vert roll-in grab drop in Dylan Rieder mini ramp. Frigid air gap 270 tic-tac slide bigspin. 

?>