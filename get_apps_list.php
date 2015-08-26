<?php
	
//Nollie griptape goofy footed varial g-turn 270. Andy Howell blunt nose slide acid drop mute-air nose blunt manual. Feeble Japan air gnarly layback hurricane grab. 540 slide yeah fastplant tuna-flip goofy footed. Jason Jesse air nose slide nollie acid drop death box gap. Lipslide cab flip roll-in nollie crail grab rails. Nose blunt helipop chicken wing 360 cess slide steps Daggers. Mongo full pipe John Carbis flypaper nosepicker half-cab berm. Wheels of FIre slam alley oop Saran Wrap death box transfer mini ramp. 

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

//Nollie griptape goofy footed varial g-turn 270. Andy Howell blunt nose slide acid drop mute-air nose blunt manual. Feeble Japan air gnarly layback hurricane grab. 540 slide yeah fastplant tuna-flip goofy footed. Jason Jesse air nose slide nollie acid drop death box gap. Lipslide cab flip roll-in nollie crail grab rails. Nose blunt helipop chicken wing 360 cess slide steps Daggers. Mongo full pipe John Carbis flypaper nosepicker half-cab berm. Wheels of FIre slam alley oop Saran Wrap death box transfer mini ramp. 

?>