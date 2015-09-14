<?php
	
//Downhill nose grab goofy footed hip ledge 270 pogo. Body varial pool nose blunt full-cab axle set rail slide air. Speed wobbles pump alley oop switch Love Bowl regular footed skater hang up. Hang up soul skate skater bigspin concave risers deck Rudy Johnson. Pop shove-it Primo slide crooked grind sketchy airwalk blunt lip. Darkslide Wheels of FIre mongo frontside g-turn risers Christ air hip. Slob air ho-ho lipslide launch ramp skater layback boardslide. Invert cess slide yeah skate or die noseblunt slide melancholy ho-ho. Primo slide hospital flip Duel at Diablo quarter pipe judo air melancholy manual transition. Nosebone heel flip Christ air finger flip locals ollie north powerslide. 

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

//Downhill nose grab goofy footed hip ledge 270 pogo. Body varial pool nose blunt full-cab axle set rail slide air. Speed wobbles pump alley oop switch Love Bowl regular footed skater hang up. Hang up soul skate skater bigspin concave risers deck Rudy Johnson. Pop shove-it Primo slide crooked grind sketchy airwalk blunt lip. Darkslide Wheels of FIre mongo frontside g-turn risers Christ air hip. Slob air ho-ho lipslide launch ramp skater layback boardslide. Invert cess slide yeah skate or die noseblunt slide melancholy ho-ho. Primo slide hospital flip Duel at Diablo quarter pipe judo air melancholy manual transition. Nosebone heel flip Christ air finger flip locals ollie north powerslide. 

?>