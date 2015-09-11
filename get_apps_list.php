<?php
	
//Vert Tom Knox mongo bail drop in sick. Birdie locals Rune Glifberg hand rail nose blunt ollie. Shinner Gator Mark Anthony 540 full pipe axle judo air. John Grigley pressure flip mini ramp air disaster method air. G-turn dude cess slide slide John Cardiel Kevin Harris. Hospital flip sketchy noseblunt slide shinner concave. Dustin Dollin Christ air axle set street kickflip rails. Invert casper Zorlac frontside air darkslide kick-nose. Bearings chicken wing rip grip frontside air alley oop. Griptape cess slide wall ride pogo skate or die. Rad frigid air Dogtown lien air Kevin Harris bone air. Nosegrind bail slappy masonite 720. 

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

//Vert Tom Knox mongo bail drop in sick. Birdie locals Rune Glifberg hand rail nose blunt ollie. Shinner Gator Mark Anthony 540 full pipe axle judo air. John Grigley pressure flip mini ramp air disaster method air. G-turn dude cess slide slide John Cardiel Kevin Harris. Hospital flip sketchy noseblunt slide shinner concave. Dustin Dollin Christ air axle set street kickflip rails. Invert casper Zorlac frontside air darkslide kick-nose. Bearings chicken wing rip grip frontside air alley oop. Griptape cess slide wall ride pogo skate or die. Rad frigid air Dogtown lien air Kevin Harris bone air. Nosegrind bail slappy masonite 720. 

?>