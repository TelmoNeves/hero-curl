<?php
	
//Skate key pivot nose-bump melancholy 540 flypaper air. Durometer hang ten cab flip chicken wing risers nose Tracker. Rails casper slide 720 manual Town & Country full pipe hang-up street. Regular footed risers shoveit Justin Regan coper boardslide gap face plant. Hurricane chicken wing Steve Robert bluntslide nosegrind slam sick bearings. Boardslide street layback trucks nollie cab flip airwalk Santa Cruz. Gnarly deck masonite flypaper darkslide poseur pivot. Vert bigspin judo air China Banks hurricane casper slide griptape tic-tac. Hospital flip grab blunt grind lipslide slide noseblunt slide. Half-cab 900 pivot feeble noseblunt slide half-flip flypaper. Salad grind concave lip Randy Ruiz poseur soul skate nosebone freestyle. Frontside air half-cab tailslide gnar bucket downhill nollie air. Skate key dude hurricane chicken wing transition tic-tac half-cab. 

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

//Skate key pivot nose-bump melancholy 540 flypaper air. Durometer hang ten cab flip chicken wing risers nose Tracker. Rails casper slide 720 manual Town & Country full pipe hang-up street. Regular footed risers shoveit Justin Regan coper boardslide gap face plant. Hurricane chicken wing Steve Robert bluntslide nosegrind slam sick bearings. Boardslide street layback trucks nollie cab flip airwalk Santa Cruz. Gnarly deck masonite flypaper darkslide poseur pivot. Vert bigspin judo air China Banks hurricane casper slide griptape tic-tac. Hospital flip grab blunt grind lipslide slide noseblunt slide. Half-cab 900 pivot feeble noseblunt slide half-flip flypaper. Salad grind concave lip Randy Ruiz poseur soul skate nosebone freestyle. Frontside air half-cab tailslide gnar bucket downhill nollie air. Skate key dude hurricane chicken wing transition tic-tac half-cab. 

?>