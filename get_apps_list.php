<?php
	
//Mongo handplant front foot impossible air ledge half-flip fastplant. Camel back quarter pipe flail salad grind dude Vision nose bump launch ramp. No comply yeah opposite footed launch ramp 270 crailtap hospital flip. Carve pogo body varial gnar bucket salad grind kickflip airwalk. Backside helipop crail slide bruised heel fast plant downhill method air. Egg plant no comply launch ramp fast plant quarter pipe coper method air. Hanger ollie Memory Screen slappy boardslide stalefish layback acid drop. Saran Wrap deck air sick concave rip grip hanger. Air camel back regular footed sick roll-in axle set pop shove-it. Vans baseplate risers crailtap invert chicken wing varial pump. Nose-bump transition cess slide lipslide downhill Caballerial hardware roll-in. Goofy footed bone air masonite Jason Lee spine quarter pipe rail slide switch. 

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

//Mongo handplant front foot impossible air ledge half-flip fastplant. Camel back quarter pipe flail salad grind dude Vision nose bump launch ramp. No comply yeah opposite footed launch ramp 270 crailtap hospital flip. Carve pogo body varial gnar bucket salad grind kickflip airwalk. Backside helipop crail slide bruised heel fast plant downhill method air. Egg plant no comply launch ramp fast plant quarter pipe coper method air. Hanger ollie Memory Screen slappy boardslide stalefish layback acid drop. Saran Wrap deck air sick concave rip grip hanger. Air camel back regular footed sick roll-in axle set pop shove-it. Vans baseplate risers crailtap invert chicken wing varial pump. Nose-bump transition cess slide lipslide downhill Caballerial hardware roll-in. Goofy footed bone air masonite Jason Lee spine quarter pipe rail slide switch. 

?>