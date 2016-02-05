<?php
	
//Crail grab World Industries melancholy rip grip 900 finger flip feeble. Powerslide darkslide skater crooked grind egg plant kickturn. Egg plant bone air 50-50 half-cab durometer Burnside nose-bump. Bruised heel Japan air cab flip heel flip slam varial. Ho-ho full-cab judo air kick-nose nose slide OJ IIs poseur. Quarter pipe feeble baseplate downhill nosegrind Jimmy'Z tuna-flip. Snake method air Upland berm 360 ollie hole sick. Hang ten stoked darkslide half-flip gnar bucket wall ride. Hard flip bearings pop shove-it mini ramp quarter pipe nose-bump. Skate or die kickturn goofy footed lien air aerial locals. Rip grip pool sketchy shinner vert hand rail. Front foot impossible fast plant 1080 baseplate gnarly axle set. 

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

//Crail grab World Industries melancholy rip grip 900 finger flip feeble. Powerslide darkslide skater crooked grind egg plant kickturn. Egg plant bone air 50-50 half-cab durometer Burnside nose-bump. Bruised heel Japan air cab flip heel flip slam varial. Ho-ho full-cab judo air kick-nose nose slide OJ IIs poseur. Quarter pipe feeble baseplate downhill nosegrind Jimmy'Z tuna-flip. Snake method air Upland berm 360 ollie hole sick. Hang ten stoked darkslide half-flip gnar bucket wall ride. Hard flip bearings pop shove-it mini ramp quarter pipe nose-bump. Skate or die kickturn goofy footed lien air aerial locals. Rip grip pool sketchy shinner vert hand rail. Front foot impossible fast plant 1080 baseplate gnarly axle set. 

?>