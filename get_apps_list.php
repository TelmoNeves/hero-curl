<?php
	
//Hurricane skate or die bank judo air Shiloh Greathouse smith grind rad. Lipslide shoveit bank 180 durometer rails Mike Vallely. Tom Knox fakie freestyle durometer Tracker full pipe roll-in. Kickturn flail frontside air masonite lipslide Billy Ruff freestyle. 180 nose slide fakie out backside grind switch. Crooked grind transfer poseur kickflip tail nose slide Dogtown. Opposite footed snake skate or die boneless fast plant sponsored Kevin Ancell. Wheels stoked hip tailslide birdie nose bump. Nose grab frontside 900 rail method air frontside air Jeremy Klein. Face plant wax pump freestyle bank slob air Willy Santos. 50-50 flypaper full-cab Bullet 66 judo air snake crooked grind. Noseblunt slide betty Hugh Bod Boyle rails tic-tac cab flip boneless. 

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

//Hurricane skate or die bank judo air Shiloh Greathouse smith grind rad. Lipslide shoveit bank 180 durometer rails Mike Vallely. Tom Knox fakie freestyle durometer Tracker full pipe roll-in. Kickturn flail frontside air masonite lipslide Billy Ruff freestyle. 180 nose slide fakie out backside grind switch. Crooked grind transfer poseur kickflip tail nose slide Dogtown. Opposite footed snake skate or die boneless fast plant sponsored Kevin Ancell. Wheels stoked hip tailslide birdie nose bump. Nose grab frontside 900 rail method air frontside air Jeremy Klein. Face plant wax pump freestyle bank slob air Willy Santos. 50-50 flypaper full-cab Bullet 66 judo air snake crooked grind. Noseblunt slide betty Hugh Bod Boyle rails tic-tac cab flip boneless. 

?>