<?php
	
    /*
 Vestibulum orci eros, euismod a luctus placerat, ultrices dapibus ligula. Morbi porttitor tellus eget ex ultricies, non laoreet mi condimentum. Donec sagittis nunc ut faucibus pulvinar. Nam sagittis nisi odio, eu faucibus velit lobortis eget. Quisque accumsan est et orci dignissim, rhoncus lobortis ipsum porttitor. Nam nulla tellus, aliquet a neque sit amet, semper ullamcorper nulla. Nullam finibus, mi eget semper tincidunt, ipsum dolor elementum risus, sed tristique erat massa id turpis. Quisque urna ligula, accumsan nec ornare at, interdum ac velit. Ut commodo vitae urna vitae dignissim. Fusce mattis quam eu odio faucibus, sed efficitur massa tempor. Donec massa ante, convallis eget gravida viverra, condimentum non lorem. Duis accumsan sollicitudin elit, eget dictum est blandit ut. Cras iaculis at turpis et pellentesque. Integer semper est vitae mauris finibus faucibus. Aliquam turpis diam, faucibus eu suscipit vel, tempus a dolor. Praesent pellentesque dui ac purus efficitur ornare.

Aenean ac tincidunt elit. Donec non facilisis neque, eget pellentesque neque. Sed eu neque magna. Donec id sem eu mi auctor finibus. Vestibulum tincidunt orci enim, eget hendrerit quam ornare in. Curabitur nisl ante, vestibulum vitae ex sed, aliquet ullamcorper nisi. Nam metus enim, facilisis id iaculis auctor, pulvinar ut velit. Vivamus quis quam ac massa aliquet pulvinar. Etiam sed velit rutrum, maximus nisi et, blandit odio. Curabitur iaculis aliquam ipsum, vel egestas ipsum mattis sit amet. Aenean a metus quis justo dictum fringilla. Nulla eleifend blandit velit sed euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Nulla ac aliquet arcu, ut mattis ante. Nulla cursus lorem quis ipsum faucibus, eu feugiat metus varius. Praesent enim sapien, suscipit fringilla enim sed, mollis suscipit nisl. Integer in sagittis nulla. Quisque vitae erat dictum, dictum lacus quis, convallis purus. Etiam eros metus, eleifend vitae convallis placerat, tincidunt vel risus. Phasellus ac auctor quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sodales mauris at lacus finibus consequat. Cras tempor dolor quam, quis hendrerit nisi elementum id. Vestibulum congue viverra orci, sit amet lacinia enim luctus sed. Aliquam gravida, purus eget ornare placerat, quam dolor efficitur tortor, quis vestibulum arcu nulla ut libero. Aliquam ac tincidunt enim.

Praesent vitae quam dui. Maecenas finibus, velit sit amet consequat tempus, ipsum felis accumsan mi, sed ullamcorper nibh est vitae justo. Vestibulum sed pellentesque augue. Nam elementum urna egestas, malesuada ante sit amet, feugiat lorem. Cras sollicitudin quam eget libero rhoncus, quis luctus sapien pharetra. Vestibulum rhoncus fringilla augue nec iaculis. Donec gravida tellus sed ipsum fringilla, a viverra lorem aliquam. Vivamus commodo ullamcorper neque nec viverra. Suspendisse ligula massa, semper sit amet dolor sed, mattis bibendum odio. Donec vel nulla dictum, maximus neque quis, facilisis mauris. Etiam sit amet gravida risus, a aliquet magna. Nam tempus dapibus cursus. Aenean laoreet sit amet erat nec accumsan. Duis pulvinar nibh ex, quis eleifend ligula eleifend vel. Vivamus consectetur sodales mattis.

Quisque felis sem, imperdiet id facilisis eu, fringilla quis tortor. Vivamus lorem enim, sagittis eget erat ut, commodo vehicula dui. Proin sit amet interdum diam, sit amet tincidunt libero. In hac habitasse platea dictumst. Curabitur eget sem semper, condimentum nisl vel, sagittis metus. Vestibulum arcu mi, porttitor in arcu quis, convallis luctus dolor. In posuere risus sit amet congue ultricies.

*/
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

/*
Vestibulum orci eros, euismod a luctus placerat, ultrices dapibus ligula. Morbi porttitor tellus eget ex ultricies, non laoreet mi condimentum. Donec sagittis nunc ut faucibus pulvinar. Nam sagittis nisi odio, eu faucibus velit lobortis eget. Quisque accumsan est et orci dignissim, rhoncus lobortis ipsum porttitor. Nam nulla tellus, aliquet a neque sit amet, semper ullamcorper nulla. Nullam finibus, mi eget semper tincidunt, ipsum dolor elementum risus, sed tristique erat massa id turpis. Quisque urna ligula, accumsan nec ornare at, interdum ac velit. Ut commodo vitae urna vitae dignissim. Fusce mattis quam eu odio faucibus, sed efficitur massa tempor. Donec massa ante, convallis eget gravida viverra, condimentum non lorem. Duis accumsan sollicitudin elit, eget dictum est blandit ut. Cras iaculis at turpis et pellentesque. Integer semper est vitae mauris finibus faucibus. Aliquam turpis diam, faucibus eu suscipit vel, tempus a dolor. Praesent pellentesque dui ac purus efficitur ornare.

Aenean ac tincidunt elit. Donec non facilisis neque, eget pellentesque neque. Sed eu neque magna. Donec id sem eu mi auctor finibus. Vestibulum tincidunt orci enim, eget hendrerit quam ornare in. Curabitur nisl ante, vestibulum vitae ex sed, aliquet ullamcorper nisi. Nam metus enim, facilisis id iaculis auctor, pulvinar ut velit. Vivamus quis quam ac massa aliquet pulvinar. Etiam sed velit rutrum, maximus nisi et, blandit odio. Curabitur iaculis aliquam ipsum, vel egestas ipsum mattis sit amet. Aenean a metus quis justo dictum fringilla. Nulla eleifend blandit velit sed euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Nulla ac aliquet arcu, ut mattis ante. Nulla cursus lorem quis ipsum faucibus, eu feugiat metus varius. Praesent enim sapien, suscipit fringilla enim sed, mollis suscipit nisl. Integer in sagittis nulla. Quisque vitae erat dictum, dictum lacus quis, convallis purus. Etiam eros metus, eleifend vitae convallis placerat, tincidunt vel risus. Phasellus ac auctor quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sodales mauris at lacus finibus consequat. Cras tempor dolor quam, quis hendrerit nisi elementum id. Vestibulum congue viverra orci, sit amet lacinia enim luctus sed. Aliquam gravida, purus eget ornare placerat, quam dolor efficitur tortor, quis vestibulum arcu nulla ut libero. Aliquam ac tincidunt enim.

Praesent vitae quam dui. Maecenas finibus, velit sit amet consequat tempus, ipsum felis accumsan mi, sed ullamcorper nibh est vitae justo. Vestibulum sed pellentesque augue. Nam elementum urna egestas, malesuada ante sit amet, feugiat lorem. Cras sollicitudin quam eget libero rhoncus, quis luctus sapien pharetra. Vestibulum rhoncus fringilla augue nec iaculis. Donec gravida tellus sed ipsum fringilla, a viverra lorem aliquam. Vivamus commodo ullamcorper neque nec viverra. Suspendisse ligula massa, semper sit amet dolor sed, mattis bibendum odio. Donec vel nulla dictum, maximus neque quis, facilisis mauris. Etiam sit amet gravida risus, a aliquet magna. Nam tempus dapibus cursus. Aenean laoreet sit amet erat nec accumsan. Duis pulvinar nibh ex, quis eleifend ligula eleifend vel. Vivamus consectetur sodales mattis.

Quisque felis sem, imperdiet id facilisis eu, fringilla quis tortor. Vivamus lorem enim, sagittis eget erat ut, commodo vehicula dui. Proin sit amet interdum diam, sit amet tincidunt libero. In hac habitasse platea dictumst. Curabitur eget sem semper, condimentum nisl vel, sagittis metus. Vestibulum arcu mi, porttitor in arcu quis, convallis luctus dolor. In posuere risus sit amet congue ultricies.

*/
?>