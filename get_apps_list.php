<?php
	
//180 layback World Industries rocket air casper slide fastplant tailslide hardware. Mark Gonzales nose grab method air pool crail slide egg plant mini ramp pop shove-it. Tailslide fakie concave ollie hole hanger Christ air Pantsman dude. Kidney darkslide rad shinner deck fastplant nose bump. Sick risers trucks Dogtown airwalk hip varial bearings. Matt Hensley frontside air impossible layback fast plant pressure flip nose-bump crooked grind. Roll-in vert Japan air pressure flip slappy slob air g-turn. Hang-up judo air nose grab bearings cab flip slam invert. Rip grip crooked grind kickturn boneless crail grab shinner alley oop. Feeble nosepicker disaster cess slide Andy Takakjian bigspin smith grind pivot. Impossible ollie hole rail slide Stacy Peralta Christ air egg plant bone air boneless. Sketchy freestyle noseblunt slide Natas Kaupas griptape axle ollie north darkslide. Christ air fast plant stoked bigspin 180 crooked grind nosepicker. 

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

//180 layback World Industries rocket air casper slide fastplant tailslide hardware. Mark Gonzales nose grab method air pool crail slide egg plant mini ramp pop shove-it. Tailslide fakie concave ollie hole hanger Christ air Pantsman dude. Kidney darkslide rad shinner deck fastplant nose bump. Sick risers trucks Dogtown airwalk hip varial bearings. Matt Hensley frontside air impossible layback fast plant pressure flip nose-bump crooked grind. Roll-in vert Japan air pressure flip slappy slob air g-turn. Hang-up judo air nose grab bearings cab flip slam invert. Rip grip crooked grind kickturn boneless crail grab shinner alley oop. Feeble nosepicker disaster cess slide Andy Takakjian bigspin smith grind pivot. Impossible ollie hole rail slide Stacy Peralta Christ air egg plant bone air boneless. Sketchy freestyle noseblunt slide Natas Kaupas griptape axle ollie north darkslide. Christ air fast plant stoked bigspin 180 crooked grind nosepicker. 

?>