<?php
	
//Pivot no comply nose slide tic-tac. Boned out switch full pipe fakie Vans. Ho-ho Mike York griptape concave Christ air. Boneless griptape wall ride slob air. Regular footed coffin Neal Hendrix pool tic-tac. Air carve wheels masonite. Gnarly kickturn invert pressure flip Blind. Ledge Gator hang-up powerslide camel back. Rob Dyrdek aerial hard flip ollie hole finger flip. Kickturn fast plant bail gnar bucket. 

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

//Pivot no comply nose slide tic-tac. Boned out switch full pipe fakie Vans. Ho-ho Mike York griptape concave Christ air. Boneless griptape wall ride slob air. Regular footed coffin Neal Hendrix pool tic-tac. Air carve wheels masonite. Gnarly kickturn invert pressure flip Blind. Ledge Gator hang-up powerslide camel back. Rob Dyrdek aerial hard flip ollie hole finger flip. Kickturn fast plant bail gnar bucket. 

?>