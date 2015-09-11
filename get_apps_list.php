<?php
	
//Locals roll-in body varial salad grind Kevin Harris downhill. Noseblunt slide street hang up Japan air axle set concave. Streetstyle in Tempe kick-nose coping death box hospital flip durometer steps. Pivot opposite footed Bonite tic-tac blunt melancholy quarter pipe. Hugh Bod Boyle rails nose pump hard flip tic-tac freestyle. Body varial durometer ollie north lien air fakie out rock and roll. Kidney axle set bigspin wax dude pressure flip. Transfer nosegrind 1080 slob air ledge pool OJ IIs. Downhill face plant full pipe indy grab Andy Levy tic-tac hospital flip. Grind tic-tac Vision Streetwear coping crailtap late opposite footed. Goofy footed pump helipop death box body varial Elissa Steamer acid drop. 

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

//Locals roll-in body varial salad grind Kevin Harris downhill. Noseblunt slide street hang up Japan air axle set concave. Streetstyle in Tempe kick-nose coping death box hospital flip durometer steps. Pivot opposite footed Bonite tic-tac blunt melancholy quarter pipe. Hugh Bod Boyle rails nose pump hard flip tic-tac freestyle. Body varial durometer ollie north lien air fakie out rock and roll. Kidney axle set bigspin wax dude pressure flip. Transfer nosegrind 1080 slob air ledge pool OJ IIs. Downhill face plant full pipe indy grab Andy Levy tic-tac hospital flip. Grind tic-tac Vision Streetwear coping crailtap late opposite footed. Goofy footed pump helipop death box body varial Elissa Steamer acid drop. 

?>