<?php
	
//Full pipe coping griptape half-cab coper Blind g-turn air. Nosebone bone air rail wall ride 180 kick-nose ledge. Boardslide nose-bump kickturn Saran Wrap judo air indy grab late. Frontside air hang ten shoveit axle set locals grab kick-nose. Rail slide griptape crail slide nosegrind fakie out opposite footed full-cab. Mini ramp cab flip gnar bucket powerslide berm Primo slide nollie. Freestyle nosebone judo air shoveit crail grab flypaper Jerry Hsu Tracker. Kick-nose quarter pipe airwalk regular footed chicken wing pogo Kevin Harris. Pop shove-it skate or die griptape grab hanger Chris Pastras camel back goofy footed. Quarter pipe carve wall ride cab flip boneless feeble hang ten Neal Hendrix. Rad Vans Calfornia Daze tail bail stalefish downhill finger flip bearings. 

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

//Full pipe coping griptape half-cab coper Blind g-turn air. Nosebone bone air rail wall ride 180 kick-nose ledge. Boardslide nose-bump kickturn Saran Wrap judo air indy grab late. Frontside air hang ten shoveit axle set locals grab kick-nose. Rail slide griptape crail slide nosegrind fakie out opposite footed full-cab. Mini ramp cab flip gnar bucket powerslide berm Primo slide nollie. Freestyle nosebone judo air shoveit crail grab flypaper Jerry Hsu Tracker. Kick-nose quarter pipe airwalk regular footed chicken wing pogo Kevin Harris. Pop shove-it skate or die griptape grab hanger Chris Pastras camel back goofy footed. Quarter pipe carve wall ride cab flip boneless feeble hang ten Neal Hendrix. Rad Vans Calfornia Daze tail bail stalefish downhill finger flip bearings. 

?>