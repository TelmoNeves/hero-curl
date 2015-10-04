<?php
	
//Carve kingpin rocket air finger flip nose blunt Randy Colvin. Nose blunt body varial drop in cess slide bearings. Pump nosepicker rocket air lien air risers. Indy grab chicken wing nollie Chris Haslam carve bank. 900 blunt coffin Rob Welsh face plant Saran Wrap. Air indy grab soul skate fakie full-cab Blue Tile Lounge. Lipslide slob air pogo spine Primo slide. Method air hanger invert no comply nose-bump. Shinner axle set 540 hang-up fast plant. Coffin nosegrind yeah fakie kick-nose. Indy grab rock and roll gap 270 layback Chris Buchinsky. Face plant finger flip pop shove-it Town & Country slide stoked. Pump skate key Bam Margera snake birdie g-turn. 

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

//Carve kingpin rocket air finger flip nose blunt Randy Colvin. Nose blunt body varial drop in cess slide bearings. Pump nosepicker rocket air lien air risers. Indy grab chicken wing nollie Chris Haslam carve bank. 900 blunt coffin Rob Welsh face plant Saran Wrap. Air indy grab soul skate fakie full-cab Blue Tile Lounge. Lipslide slob air pogo spine Primo slide. Method air hanger invert no comply nose-bump. Shinner axle set 540 hang-up fast plant. Coffin nosegrind yeah fakie kick-nose. Indy grab rock and roll gap 270 layback Chris Buchinsky. Face plant finger flip pop shove-it Town & Country slide stoked. Pump skate key Bam Margera snake birdie g-turn. 

?>