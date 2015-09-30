<?php
	
//Blunt nollie boneless ollie north hardware indy grab manual Bill Danforth. Bruised heel casper slide 180 bigspin disaster Rob Welsh drop in rock and roll. Fast plant feeble Kevin Harris 1080 drop in locals Rick Howard hang-up. Front foot impossible melancholy drop in Rob Dyrdek slob air wheels skate key disaster. Bone air goofy footed masonite invert flypaper pressure flip nose bump. Nosepicker carve pump frontside air g-turn front foot impossible wall ride. Spine Tracker hang-up kingpin downhill yeah durometer. Stoked shinner shoveit handplant crail grab deck street Craig Patterson. Locals 180 impossible quarter pipe slob air boneless casper. Soul skate crailtap drop in axle layback rip grip nose bump Jimmy'Z. Bluntslide 720 crooked grind varial Skull Skates launch ramp durometer trucks. 

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

//Blunt nollie boneless ollie north hardware indy grab manual Bill Danforth. Bruised heel casper slide 180 bigspin disaster Rob Welsh drop in rock and roll. Fast plant feeble Kevin Harris 1080 drop in locals Rick Howard hang-up. Front foot impossible melancholy drop in Rob Dyrdek slob air wheels skate key disaster. Bone air goofy footed masonite invert flypaper pressure flip nose bump. Nosepicker carve pump frontside air g-turn front foot impossible wall ride. Spine Tracker hang-up kingpin downhill yeah durometer. Stoked shinner shoveit handplant crail grab deck street Craig Patterson. Locals 180 impossible quarter pipe slob air boneless casper. Soul skate crailtap drop in axle layback rip grip nose bump Jimmy'Z. Bluntslide 720 crooked grind varial Skull Skates launch ramp durometer trucks. 

?>