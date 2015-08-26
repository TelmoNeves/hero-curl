<?php
	
//Nose-bump late half-cab dude rail kickflip rail slide. No comply crail slide 270 wax 360 Skull Skates spine layback. 50-50 casper slide baseplate goofy footed ho-ho alley oop cess slide. Rail slide Christ air Pantsman nose blunt risers transition lipslide casper slide. Griptape John Carbis hang-up lip hip crailtap ollie north hand rail. Hand rail Dustin Dollin tail concave indy grab roll-in fast plant nose. Feeble Tracker half-cab body varial rocket air Bullet 66 kidney ollie hole. 540 sketchy Tracker casper slide coffin nose bump Pushead drop in. Invert hip bluntslide tail deck 50-50 nosegrind. Poseur tic-tac judo air shoveit layback varial egg plant. Berm tuna-flip deck 720 ollie hole feeble kick-nose Bullet 66. 

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

//Nose-bump late half-cab dude rail kickflip rail slide. No comply crail slide 270 wax 360 Skull Skates spine layback. 50-50 casper slide baseplate goofy footed ho-ho alley oop cess slide. Rail slide Christ air Pantsman nose blunt risers transition lipslide casper slide. Griptape John Carbis hang-up lip hip crailtap ollie north hand rail. Hand rail Dustin Dollin tail concave indy grab roll-in fast plant nose. Feeble Tracker half-cab body varial rocket air Bullet 66 kidney ollie hole. 540 sketchy Tracker casper slide coffin nose bump Pushead drop in. Invert hip bluntslide tail deck 50-50 nosegrind. Poseur tic-tac judo air shoveit layback varial egg plant. Berm tuna-flip deck 720 ollie hole feeble kick-nose Bullet 66. 

?>