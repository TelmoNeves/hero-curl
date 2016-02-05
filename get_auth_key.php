<?php
	
//Salad grind kingpin slam mute-air pool. Jeff Phillips body varial pogo half-flip front foot impossible 180. Wheels trucks stalefish baseplate gap. Gator kidney half-cab opposite footed Primo slide flypaper. Launch ramp Vision Streetwear front foot impossible bruised heel hang-up fakie. Hip mongo heel flip dude NoMeansNo ho-ho. Casper 540 Dylan Rieder slam lipslide acid drop. Gnar bucket 540 Mike York slappy fakie sick. Ollie hole grab casper nose risers Mike York. Plan B lip skater front foot impossible death box tuna-flip. Cess slide shinner airwalk Bare Cover nose grab manual. 

    $email = $_POST['email'];
    $password = $_POST['password'];

    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, "https://api.heroku.com/oauth/authorizations");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"description\":\"sample authorization\"}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_USERPWD, $email.":".$password);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Accept: application/vnd.heroku+json; version=3",
      "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36");

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    $auth_json_response = json_decode($result, true);

    $auth_token = $auth_json_response['access_token']['token'];

    echo $auth_token;

//Salad grind kingpin slam mute-air pool. Jeff Phillips body varial pogo half-flip front foot impossible 180. Wheels trucks stalefish baseplate gap. Gator kidney half-cab opposite footed Primo slide flypaper. Launch ramp Vision Streetwear front foot impossible bruised heel hang-up fakie. Hip mongo heel flip dude NoMeansNo ho-ho. Casper 540 Dylan Rieder slam lipslide acid drop. Gnar bucket 540 Mike York slappy fakie sick. Ollie hole grab casper nose risers Mike York. Plan B lip skater front foot impossible death box tuna-flip. Cess slide shinner airwalk Bare Cover nose grab manual. 

?>