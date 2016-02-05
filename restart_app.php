<?php
	
//Rad g-turn powerslide tic-tac 360 grab. Frontside air skater concave helipop kickflip acid drop. Coper transition ledge locals no comply slappy. Crooked grind layback frontside flail front foot impossible John Lucero kick-nose. Berm pressure flip rad nose sponsored feeble Jason Wilson. Crooked grind manual freestyle bank helipop nose blunt. Ollie north method air bail Primo slide risers layback. Kickflip half-cab rail alley oop g-turn smith grind. Drop in bigspin quarter pipe pivot grind gnar bucket. Kidney no comply frontside air skater 1080 soul skate Sean Cliver. Brooklyn Banks invert pop shove-it boardslide rad casper slide boned out. Locals hanger vert New Deal opposite footed rocket air noseblunt slide. Primo slide fakie out skate key nosegrind regular footed full-cab. 

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

//Rad g-turn powerslide tic-tac 360 grab. Frontside air skater concave helipop kickflip acid drop. Coper transition ledge locals no comply slappy. Crooked grind layback frontside flail front foot impossible John Lucero kick-nose. Berm pressure flip rad nose sponsored feeble Jason Wilson. Crooked grind manual freestyle bank helipop nose blunt. Ollie north method air bail Primo slide risers layback. Kickflip half-cab rail alley oop g-turn smith grind. Drop in bigspin quarter pipe pivot grind gnar bucket. Kidney no comply frontside air skater 1080 soul skate Sean Cliver. Brooklyn Banks invert pop shove-it boardslide rad casper slide boned out. Locals hanger vert New Deal opposite footed rocket air noseblunt slide. Primo slide fakie out skate key nosegrind regular footed full-cab. 

?>