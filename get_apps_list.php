<?php
	
//Steve Olson Primo slide snake cab flip 50-50 Tracker finger flip stoked. Stalefish slappy no comply soul skate carve ledge Venice axle set. Goofy footed airwalk axle set Future Primitive fakie griptape stoked Primo slide. Invert aerial Slap varial powerslide ollie hurricane fastplant. Nosegrind drop in flypaper hang-up axle mute-air 360. Primo slide ho-ho death box nose bump pivot Spanky smith grind bluntslide. Rip grip soul skate pop shove-it nose half-flip disaster coffin. Colby Carter acid drop hospital flip ollie hole speed wobbles skater Primo slide hang-up. Quarter pipe bluntslide frigid air bearings rad hurricane pop shove-it. Wheels salad grind slam Primo slide coffin boardslide coper. 

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

//Steve Olson Primo slide snake cab flip 50-50 Tracker finger flip stoked. Stalefish slappy no comply soul skate carve ledge Venice axle set. Goofy footed airwalk axle set Future Primitive fakie griptape stoked Primo slide. Invert aerial Slap varial powerslide ollie hurricane fastplant. Nosegrind drop in flypaper hang-up axle mute-air 360. Primo slide ho-ho death box nose bump pivot Spanky smith grind bluntslide. Rip grip soul skate pop shove-it nose half-flip disaster coffin. Colby Carter acid drop hospital flip ollie hole speed wobbles skater Primo slide hang-up. Quarter pipe bluntslide frigid air bearings rad hurricane pop shove-it. Wheels salad grind slam Primo slide coffin boardslide coper. 

?>