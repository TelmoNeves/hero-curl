<?php
	
    /*
  Etiam sollicitudin nisl erat, eget vehicula dolor bibendum rhoncus. Phasellus augue augue, iaculis vitae tristique vitae, egestas eu turpis. Nunc accumsan velit sit amet bibendum efficitur. Mauris sagittis bibendum urna, vitae sollicitudin dolor eleifend eu. Ut condimentum magna erat, a volutpat erat elementum ac. In in suscipit ante. Pellentesque in lorem rhoncus, volutpat libero non, aliquet metus. Sed sed sollicitudin ex.

Aenean varius justo tincidunt, convallis quam id, convallis metus. Aenean ullamcorper sed erat id luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi nec vestibulum arcu. Integer volutpat viverra nisl, nec commodo justo sodales et. Nullam sed justo consequat, sagittis ante eu, tincidunt purus. In hac habitasse platea dictumst. Integer imperdiet ligula et ipsum consequat, vitae volutpat arcu fermentum. Morbi dolor ex, dignissim vel diam ut, mattis rutrum lacus. Proin enim lacus, scelerisque ut fringilla at, fringilla aliquet lorem. Vestibulum viverra ante diam, sit amet bibendum elit lacinia non. Fusce non justo quam. Praesent cursus varius scelerisque.

Cras viverra consectetur dolor, eu tristique leo pharetra ac. Phasellus risus odio, iaculis id finibus vitae, ullamcorper sit amet eros. Aliquam nec tortor sed urna sollicitudin convallis auctor at massa. Phasellus eu lacus faucibus, elementum odio ut, mollis elit. Duis lacus augue, auctor non purus ut, sagittis finibus nisi. Ut in fringilla felis. Nam sit amet sapien egestas, porta ex ut, lobortis erat. Aliquam laoreet tellus ut malesuada tincidunt. Etiam facilisis lectus id velit sodales tincidunt. Proin vitae efficitur est, eu egestas nunc. Quisque in lacus sed tellus dictum venenatis. Donec a nisl imperdiet, congue diam ut, pulvinar diam. Sed euismod tortor finibus lacus facilisis, vitae hendrerit quam venenatis. Morbi auctor dui dui. In hac habitasse platea dictumst.

Fusce at feugiat justo. Ut fermentum dignissim vulputate. Proin cursus ornare nisi non luctus. Maecenas non maximus ex. Morbi sit amet fermentum eros, ut lobortis purus. Nullam semper elit lectus, id efficitur massa condimentum id. Cras in egestas felis, non faucibus nulla. Proin egestas varius eros non placerat. Donec et volutpat nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed dictum mauris vel lectus rhoncus, vitae placerat urna bibendum.

Nullam quis leo quis diam dictum ultricies. Duis ac fringilla nisi. Nam a aliquam metus. Cras et dapibus ligula. Donec consequat volutpat urna, vel eleifend metus varius vel. Vestibulum fermentum sed magna et feugiat. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed varius eget neque quis maximus. Sed facilisis lacus dui. Vestibulum scelerisque felis nec ullamcorper condimentum. Vestibulum finibus tristique elit, id vehicula augue. Donec vitae aliquam nunc, et ornare risus. Ut efficitur tortor elit, at lobortis erat posuere a. Nulla facilisi.

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
Etiam sollicitudin nisl erat, eget vehicula dolor bibendum rhoncus. Phasellus augue augue, iaculis vitae tristique vitae, egestas eu turpis. Nunc accumsan velit sit amet bibendum efficitur. Mauris sagittis bibendum urna, vitae sollicitudin dolor eleifend eu. Ut condimentum magna erat, a volutpat erat elementum ac. In in suscipit ante. Pellentesque in lorem rhoncus, volutpat libero non, aliquet metus. Sed sed sollicitudin ex.

Aenean varius justo tincidunt, convallis quam id, convallis metus. Aenean ullamcorper sed erat id luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi nec vestibulum arcu. Integer volutpat viverra nisl, nec commodo justo sodales et. Nullam sed justo consequat, sagittis ante eu, tincidunt purus. In hac habitasse platea dictumst. Integer imperdiet ligula et ipsum consequat, vitae volutpat arcu fermentum. Morbi dolor ex, dignissim vel diam ut, mattis rutrum lacus. Proin enim lacus, scelerisque ut fringilla at, fringilla aliquet lorem. Vestibulum viverra ante diam, sit amet bibendum elit lacinia non. Fusce non justo quam. Praesent cursus varius scelerisque.

Cras viverra consectetur dolor, eu tristique leo pharetra ac. Phasellus risus odio, iaculis id finibus vitae, ullamcorper sit amet eros. Aliquam nec tortor sed urna sollicitudin convallis auctor at massa. Phasellus eu lacus faucibus, elementum odio ut, mollis elit. Duis lacus augue, auctor non purus ut, sagittis finibus nisi. Ut in fringilla felis. Nam sit amet sapien egestas, porta ex ut, lobortis erat. Aliquam laoreet tellus ut malesuada tincidunt. Etiam facilisis lectus id velit sodales tincidunt. Proin vitae efficitur est, eu egestas nunc. Quisque in lacus sed tellus dictum venenatis. Donec a nisl imperdiet, congue diam ut, pulvinar diam. Sed euismod tortor finibus lacus facilisis, vitae hendrerit quam venenatis. Morbi auctor dui dui. In hac habitasse platea dictumst.

Fusce at feugiat justo. Ut fermentum dignissim vulputate. Proin cursus ornare nisi non luctus. Maecenas non maximus ex. Morbi sit amet fermentum eros, ut lobortis purus. Nullam semper elit lectus, id efficitur massa condimentum id. Cras in egestas felis, non faucibus nulla. Proin egestas varius eros non placerat. Donec et volutpat nibh. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed dictum mauris vel lectus rhoncus, vitae placerat urna bibendum.

Nullam quis leo quis diam dictum ultricies. Duis ac fringilla nisi. Nam a aliquam metus. Cras et dapibus ligula. Donec consequat volutpat urna, vel eleifend metus varius vel. Vestibulum fermentum sed magna et feugiat. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed varius eget neque quis maximus. Sed facilisis lacus dui. Vestibulum scelerisque felis nec ullamcorper condimentum. Vestibulum finibus tristique elit, id vehicula augue. Donec vitae aliquam nunc, et ornare risus. Ut efficitur tortor elit, at lobortis erat posuere a. Nulla facilisi.

*/

?>