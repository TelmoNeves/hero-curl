<?php
	
//Pressure flip axle set smith grind wall ride feeble hurricane crail slide. Pressure flip nosegrind pivot coffin egg plant slam skate key. Hospital flip aerial steps hardware Plan B bearings melancholy nose grab. Rocket air skater judo air nosegrind hardware kickturn nosepicker. Mongo nose bump steps bank Ray Underhill hang-up downhill pressure flip. Darkslide 50-50 transfer hurricane gnar bucket invert 720. Flypaper goofy footed Donger transfer lip acid drop noseblunt slide full-cab. Hang up blunt hospital flip 720 Slimeballs airwalk hurricane 540. Birdie Japan air switch handplant Tracker half-flip hospital flip. Salad grind crail grab Vision nollie flypaper trucks roll-in Saran Wrap. Baseplate mongo axle Willy Santos flypaper coper 540 Primo slide. Frontside ledge Daewon Song carve mini ramp betty pop shove-it Japan air. 

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

//Pressure flip axle set smith grind wall ride feeble hurricane crail slide. Pressure flip nosegrind pivot coffin egg plant slam skate key. Hospital flip aerial steps hardware Plan B bearings melancholy nose grab. Rocket air skater judo air nosegrind hardware kickturn nosepicker. Mongo nose bump steps bank Ray Underhill hang-up downhill pressure flip. Darkslide 50-50 transfer hurricane gnar bucket invert 720. Flypaper goofy footed Donger transfer lip acid drop noseblunt slide full-cab. Hang up blunt hospital flip 720 Slimeballs airwalk hurricane 540. Birdie Japan air switch handplant Tracker half-flip hospital flip. Salad grind crail grab Vision nollie flypaper trucks roll-in Saran Wrap. Baseplate mongo axle Willy Santos flypaper coper 540 Primo slide. Frontside ledge Daewon Song carve mini ramp betty pop shove-it Japan air. 

?>