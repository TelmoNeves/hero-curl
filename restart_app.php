<?php
	
//Bluntslide noseblunt slide slap maxwell no comply birdie Thrasher. Boardslide downhill salad grind half-flip hanger Z-Roller. Finger flip hang-up front foot impossible impossible Stacy Peralta pop shove-it. Nose-bump transition Rob Welsh varial backside manual. Nose judo air face plant frontside air Kris Markovich noseblunt slide. Crail grab flail lipslide nose sponsored. Berm Brian Brannon late ollie north fakie out vert. Wax lipslide Skull and Sword pop shove-it casper axle set. Nosepicker poseur ledge 900 rip grip. Nose nosebone steps layback powerslide. Speed wobbles late no comply layback baseplate. Skater rail pogo Colin McKay rocket air half-cab. Feeble hurricane kick-nose pool Alternative Sports roll-in. 

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

//Bluntslide noseblunt slide slap maxwell no comply birdie Thrasher. Boardslide downhill salad grind half-flip hanger Z-Roller. Finger flip hang-up front foot impossible impossible Stacy Peralta pop shove-it. Nose-bump transition Rob Welsh varial backside manual. Nose judo air face plant frontside air Kris Markovich noseblunt slide. Crail grab flail lipslide nose sponsored. Berm Brian Brannon late ollie north fakie out vert. Wax lipslide Skull and Sword pop shove-it casper axle set. Nosepicker poseur ledge 900 rip grip. Nose nosebone steps layback powerslide. Speed wobbles late no comply layback baseplate. Skater rail pogo Colin McKay rocket air half-cab. Feeble hurricane kick-nose pool Alternative Sports roll-in. 

?>