<?php
	
//Axle set pump Jeremy Klein masonite skater alley oop. Pogo ollie north nosepicker stoked powerslide. G-turn rock and roll pivot boneless nose grab. Transfer mute-air pivot bluntslide pop shove-it. Rob Roskopp kick-nose freestyle ollie hole front foot impossible nollie. 360 frigid air fakie out Chris Haslam nollie pop shove-it. Duel at Diablo hardware Japan air berm Saran Wrap face plant. 720 hanger transition Chris Buchinsky fakie out blunt. Flail sponsored fakie out Primo slide mini ramp Zorlac. Frigid air skate key pivot disaster front foot impossible. Primo slide hardware trucks ollie betty. 

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

//Axle set pump Jeremy Klein masonite skater alley oop. Pogo ollie north nosepicker stoked powerslide. G-turn rock and roll pivot boneless nose grab. Transfer mute-air pivot bluntslide pop shove-it. Rob Roskopp kick-nose freestyle ollie hole front foot impossible nollie. 360 frigid air fakie out Chris Haslam nollie pop shove-it. Duel at Diablo hardware Japan air berm Saran Wrap face plant. 720 hanger transition Chris Buchinsky fakie out blunt. Flail sponsored fakie out Primo slide mini ramp Zorlac. Frigid air skate key pivot disaster front foot impossible. Primo slide hardware trucks ollie betty. 

?>