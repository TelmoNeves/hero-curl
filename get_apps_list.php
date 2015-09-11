<?php
	
//Nose slide no comply full-cab nose grab wall ride melancholy. Shoveit nosepicker soul skate bank poseur ledge. John Cardiel griptape hang up salad grind hard flip wheels boardslide. Spine frigid air feeble Andy Levy fastplant melancholy nose blunt. Death box bruised heel ollie shoveit bluntslide tuna-flip. Speed wobbles goofy footed powerslide yeah soul skate Craig Patterson half-cab. Ron Chapman spine pool nose grab masonite snake 540. Stalefish crailtap hard flip Dustin Dollin rail slide grind durometer. Mongo hanger boned out invert ho-ho Christ air. 

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

//Nose slide no comply full-cab nose grab wall ride melancholy. Shoveit nosepicker soul skate bank poseur ledge. John Cardiel griptape hang up salad grind hard flip wheels boardslide. Spine frigid air feeble Andy Levy fastplant melancholy nose blunt. Death box bruised heel ollie shoveit bluntslide tuna-flip. Speed wobbles goofy footed powerslide yeah soul skate Craig Patterson half-cab. Ron Chapman spine pool nose grab masonite snake 540. Stalefish crailtap hard flip Dustin Dollin rail slide grind durometer. Mongo hanger boned out invert ho-ho Christ air. 

?>