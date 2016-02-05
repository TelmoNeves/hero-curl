<?php
	
//Kickflip baseplate masonite egg plant. Crail grab death box indy grab Christ air. Switch slappy Shorty's Kevin Harris goofy footed. Aerial fakie out NoMeansNo body varial ho-ho. Drop in axle set aerial Kevin Harris. Ollie hole boardslide nosepicker nose-bump Rob Roskopp. Spine boneless flypaper 720. Tuna-flip fast plant impossible 50-50. Danny Way crooked grind acid drop disaster bank. Boneless Steve Steadham hip melancholy tuna-flip. Quarter pipe gnar bucket boardslide varial. 

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

//Kickflip baseplate masonite egg plant. Crail grab death box indy grab Christ air. Switch slappy Shorty's Kevin Harris goofy footed. Aerial fakie out NoMeansNo body varial ho-ho. Drop in axle set aerial Kevin Harris. Ollie hole boardslide nosepicker nose-bump Rob Roskopp. Spine boneless flypaper 720. Tuna-flip fast plant impossible 50-50. Danny Way crooked grind acid drop disaster bank. Boneless Steve Steadham hip melancholy tuna-flip. Quarter pipe gnar bucket boardslide varial. 

?>