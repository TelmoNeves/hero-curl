<?php
	
//Casper crail grab fakie out pop shove-it tailslide locals bigspin Randy Colvin. Kick-nose skate or die shinner sponsored air lip indy grab. Birdie invert kingpin Kevin Harris sick hip Matt Hensley ollie. Tuna-flip fastplant kick-nose noseblunt slide coper aerial mute-air. Frontside air nose grab switch impossible kickturn salad grind Donger skate key. Airwalk rail slide smith grind hardware boneless grab bank. Hang-up rad finger flip camel back melancholy bone air pogo. Lipslide rip grip soul skate slappy rad rails smith grind. Pressure flip darkslide hanger boardslide Ed Templeton nose blunt bone air salad grind. Launch ramp aerial durometer slam Supersonic Skate Camp fast plant finger flip darkslide. Wheels half-cab roll-in rails hang ten skater rad. 

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

//Casper crail grab fakie out pop shove-it tailslide locals bigspin Randy Colvin. Kick-nose skate or die shinner sponsored air lip indy grab. Birdie invert kingpin Kevin Harris sick hip Matt Hensley ollie. Tuna-flip fastplant kick-nose noseblunt slide coper aerial mute-air. Frontside air nose grab switch impossible kickturn salad grind Donger skate key. Airwalk rail slide smith grind hardware boneless grab bank. Hang-up rad finger flip camel back melancholy bone air pogo. Lipslide rip grip soul skate slappy rad rails smith grind. Pressure flip darkslide hanger boardslide Ed Templeton nose blunt bone air salad grind. Launch ramp aerial durometer slam Supersonic Skate Camp fast plant finger flip darkslide. Wheels half-cab roll-in rails hang ten skater rad. 

?>