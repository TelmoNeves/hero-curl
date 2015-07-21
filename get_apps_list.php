<?php
	
    /*
   Proin at tellus a nisl placerat dapibus. Donec ac viverra nibh, nec varius felis. Ut at malesuada justo. Vivamus vehicula placerat nisl, eget eleifend felis finibus in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean est odio, placerat interdum dapibus a, aliquet sit amet quam. Phasellus nunc dui, dignissim consectetur leo at, pellentesque pharetra risus.

Maecenas volutpat ullamcorper nisi sed tristique. Vestibulum nec gravida quam, eu euismod felis. Cras ullamcorper, risus eu faucibus placerat, velit quam ultricies lacus, ac imperdiet purus odio dapibus nisl. Nullam ornare et sapien nec tincidunt. Pellentesque at fringilla orci, eget cursus libero. Fusce porta efficitur euismod. Vestibulum id commodo nunc. Vivamus ultrices iaculis rhoncus. Sed quis pretium lacus. Sed convallis posuere nisi id volutpat. Quisque sit amet blandit elit. Donec eget finibus massa. Donec sit amet quam eget metus commodo ullamcorper a fermentum mi. Mauris sit amet odio tellus. Pellentesque tincidunt sollicitudin nunc vitae suscipit.

Sed ipsum mi, consectetur rhoncus molestie nec, pulvinar tincidunt tellus. Aliquam erat volutpat. Nulla ligula arcu, egestas vel efficitur ut, feugiat sed nisi. Maecenas nec velit augue. Phasellus mollis dignissim lacus, ut consequat ante. Nullam in massa nec turpis finibus ornare. Pellentesque ullamcorper pretium erat vel lacinia. Donec scelerisque condimentum ex ac porttitor. Nam semper laoreet arcu, nec posuere leo ultricies eu. Cras pharetra diam id pulvinar molestie. Maecenas nec pharetra lorem. Donec volutpat sagittis neque, ut commodo nibh accumsan quis. Suspendisse ut viverra nisl. Donec laoreet massa volutpat, dapibus arcu nec, varius leo. Sed dictum felis in tortor sagittis, nec elementum risus venenatis.

Quisque at mauris malesuada, gravida sem sed, tempor tortor. Donec non nulla et sem posuere varius. Cras aliquet accumsan molestie. Quisque elementum risus in rutrum laoreet. Suspendisse vel sem mi. Praesent id venenatis magna. Nam nec nulla egestas, ultricies felis sit amet, convallis dolor.

Nulla nunc ante, viverra sit amet tincidunt sit amet, sodales eu neque. Ut nec lorem et nisl eleifend volutpat. Nunc in tortor a tellus egestas fringilla in pulvinar mi. Nulla ex tellus, semper ut congue id, pulvinar condimentum quam. Ut ornare, ipsum sit amet pharetra condimentum, mauris est rhoncus arcu, eget lobortis libero justo a augue. Phasellus congue non mauris non malesuada. Cras in viverra metus, et varius dui. Duis vulputate vehicula erat, eget eleifend lorem elementum tincidunt. Praesent tempus scelerisque justo eu accumsan. Etiam convallis nibh eget nunc cursus congue. Etiam eu nibh leo.

*/

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


    /*
 Proin at tellus a nisl placerat dapibus. Donec ac viverra nibh, nec varius felis. Ut at malesuada justo. Vivamus vehicula placerat nisl, eget eleifend felis finibus in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean est odio, placerat interdum dapibus a, aliquet sit amet quam. Phasellus nunc dui, dignissim consectetur leo at, pellentesque pharetra risus.

Maecenas volutpat ullamcorper nisi sed tristique. Vestibulum nec gravida quam, eu euismod felis. Cras ullamcorper, risus eu faucibus placerat, velit quam ultricies lacus, ac imperdiet purus odio dapibus nisl. Nullam ornare et sapien nec tincidunt. Pellentesque at fringilla orci, eget cursus libero. Fusce porta efficitur euismod. Vestibulum id commodo nunc. Vivamus ultrices iaculis rhoncus. Sed quis pretium lacus. Sed convallis posuere nisi id volutpat. Quisque sit amet blandit elit. Donec eget finibus massa. Donec sit amet quam eget metus commodo ullamcorper a fermentum mi. Mauris sit amet odio tellus. Pellentesque tincidunt sollicitudin nunc vitae suscipit.

Sed ipsum mi, consectetur rhoncus molestie nec, pulvinar tincidunt tellus. Aliquam erat volutpat. Nulla ligula arcu, egestas vel efficitur ut, feugiat sed nisi. Maecenas nec velit augue. Phasellus mollis dignissim lacus, ut consequat ante. Nullam in massa nec turpis finibus ornare. Pellentesque ullamcorper pretium erat vel lacinia. Donec scelerisque condimentum ex ac porttitor. Nam semper laoreet arcu, nec posuere leo ultricies eu. Cras pharetra diam id pulvinar molestie. Maecenas nec pharetra lorem. Donec volutpat sagittis neque, ut commodo nibh accumsan quis. Suspendisse ut viverra nisl. Donec laoreet massa volutpat, dapibus arcu nec, varius leo. Sed dictum felis in tortor sagittis, nec elementum risus venenatis.

Quisque at mauris malesuada, gravida sem sed, tempor tortor. Donec non nulla et sem posuere varius. Cras aliquet accumsan molestie. Quisque elementum risus in rutrum laoreet. Suspendisse vel sem mi. Praesent id venenatis magna. Nam nec nulla egestas, ultricies felis sit amet, convallis dolor.

Nulla nunc ante, viverra sit amet tincidunt sit amet, sodales eu neque. Ut nec lorem et nisl eleifend volutpat. Nunc in tortor a tellus egestas fringilla in pulvinar mi. Nulla ex tellus, semper ut congue id, pulvinar condimentum quam. Ut ornare, ipsum sit amet pharetra condimentum, mauris est rhoncus arcu, eget lobortis libero justo a augue. Phasellus congue non mauris non malesuada. Cras in viverra metus, et varius dui. Duis vulputate vehicula erat, eget eleifend lorem elementum tincidunt. Praesent tempus scelerisque justo eu accumsan. Etiam convallis nibh eget nunc cursus congue. Etiam eu nibh leo.

*/

?>