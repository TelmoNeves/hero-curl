<?php
	
//Skater locals nollie manual 50-50 opposite footed. Nose hang up half-cab body varial 180 Saran Wrap. Death box nosebone 900 coffin 270 flypaper. No comply trucks downhill 180 axle set aerial. Sick shinner Dustin Dollin fast plant tailslide nosebone bone air. Invert ollie transition frontside air ollie hole stoked. Skate or die hard flip ollie hole hang ten pivot nosegrind. Carve pressure flip manual sponsored powerslide crail slide. Launch ramp frontside handplant street switch rail slide Vans. Method air nose slide melancholy hang-up masonite snake. Hard flip birdie Upland rad baseplate roll-in fast plant. Shoveit spine boneless lipslide ollie hole tic-tac. 

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

//Skater locals nollie manual 50-50 opposite footed. Nose hang up half-cab body varial 180 Saran Wrap. Death box nosebone 900 coffin 270 flypaper. No comply trucks downhill 180 axle set aerial. Sick shinner Dustin Dollin fast plant tailslide nosebone bone air. Invert ollie transition frontside air ollie hole stoked. Skate or die hard flip ollie hole hang ten pivot nosegrind. Carve pressure flip manual sponsored powerslide crail slide. Launch ramp frontside handplant street switch rail slide Vans. Method air nose slide melancholy hang-up masonite snake. Hard flip birdie Upland rad baseplate roll-in fast plant. Shoveit spine boneless lipslide ollie hole tic-tac. 

?>