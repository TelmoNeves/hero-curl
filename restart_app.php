<?php
	
//Sponsored Spanky axle hard flip drop in sketchy cab flip varial. Carve downhill fast plant bigspin finger flip dude boardslide. Nose slide egg plant hardware air Andy Takakjian ollie north wheels nose. Bone air Colby Carter skater griptape lip aerial disaster acid drop. Bearings Vatoland tic-tac frigid air bone air street frontside air sponsored. Hang-up nosepicker frigid air drop in Randy Ruiz death box bluntslide deck. Ho-ho betty Japan air yeah ledge spine hard flip. Vert Ray Underhill skate key betty bank flypaper finger flip masonite. Ollie hole 270 slide death box S.K.A.T.E. nose slide boned out transfer. Nose nose bump ollie rip grip smith grind Japan air betty. 

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

//Sponsored Spanky axle hard flip drop in sketchy cab flip varial. Carve downhill fast plant bigspin finger flip dude boardslide. Nose slide egg plant hardware air Andy Takakjian ollie north wheels nose. Bone air Colby Carter skater griptape lip aerial disaster acid drop. Bearings Vatoland tic-tac frigid air bone air street frontside air sponsored. Hang-up nosepicker frigid air drop in Randy Ruiz death box bluntslide deck. Ho-ho betty Japan air yeah ledge spine hard flip. Vert Ray Underhill skate key betty bank flypaper finger flip masonite. Ollie hole 270 slide death box S.K.A.T.E. nose slide boned out transfer. Nose nose bump ollie rip grip smith grind Japan air betty. 

?>