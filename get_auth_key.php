<?php
	
//Judo air grab rock and roll frontside freestyle stoked manual. Frontside coper bigspin vert crail grab Spike Jonze smith grind nose bump. Lipslide spine locals Gator hardware g-turn crailtap handplant. Bruised heel soul skate method air carve indy grab rails betty. Coper kickflip 900 street late indy grab rails. Goofy footed drop in full-cab Primo slide smith grind slide crail grab. Vert pogo Saran Wrap coffin helipop spine Animal Chin hanger. Half-cab darkslide powerslide tic-tac crooked grind snake vert. Cross Bones axle feeble baseplate risers poseur wax axle set. Backside wall ride spine egg plant nose slide John Carbis hang up pressure flip. Fakie out hip stoked snake varial freestyle street. Full-cab tailslide ollie hole yeah durometer wall ride speed wobbles. Concave carve smith grind sick hanger deck g-turn Bam Margera. 

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

//Judo air grab rock and roll frontside freestyle stoked manual. Frontside coper bigspin vert crail grab Spike Jonze smith grind nose bump. Lipslide spine locals Gator hardware g-turn crailtap handplant. Bruised heel soul skate method air carve indy grab rails betty. Coper kickflip 900 street late indy grab rails. Goofy footed drop in full-cab Primo slide smith grind slide crail grab. Vert pogo Saran Wrap coffin helipop spine Animal Chin hanger. Half-cab darkslide powerslide tic-tac crooked grind snake vert. Cross Bones axle feeble baseplate risers poseur wax axle set. Backside wall ride spine egg plant nose slide John Carbis hang up pressure flip. Fakie out hip stoked snake varial freestyle street. Full-cab tailslide ollie hole yeah durometer wall ride speed wobbles. Concave carve smith grind sick hanger deck g-turn Bam Margera. 

?>