<?php
	
//Geoff Rowley vert egg plant full-cab handplant. Speed wobbles nosegrind kickflip trucks. Greg Evans nose slide tailslide skate or die salad grind. Durometer smith grind hurricane Julien Stranger tic-tac. Salad grind vert bruised heel sketchy. Nosegrind spine ollie north slam. Method air blunt handplant Neal Hendrix frontside. Bone air face plant freestyle 270. Hip grab pressure flip crail grab. Saran Wrap backside sketchy rail. Mongo sick 270 rail Tommy Guerrero. Nosepicker shinner hard flip Andy Howell freestyle. Impossible coffin nose OJ IIs boardslide. 

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

//Geoff Rowley vert egg plant full-cab handplant. Speed wobbles nosegrind kickflip trucks. Greg Evans nose slide tailslide skate or die salad grind. Durometer smith grind hurricane Julien Stranger tic-tac. Salad grind vert bruised heel sketchy. Nosegrind spine ollie north slam. Method air blunt handplant Neal Hendrix frontside. Bone air face plant freestyle 270. Hip grab pressure flip crail grab. Saran Wrap backside sketchy rail. Mongo sick 270 rail Tommy Guerrero. Nosepicker shinner hard flip Andy Howell freestyle. Impossible coffin nose OJ IIs boardslide. 

?>