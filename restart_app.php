<?php
	
    /*
 In vestibulum ligula at condimentum placerat. Nulla facilisi. Duis egestas pharetra orci, ut accumsan augue tincidunt pretium. Nunc ante justo, lobortis id posuere sed, facilisis a sapien. Vestibulum hendrerit posuere lacus, at aliquet libero ullamcorper vel. Pellentesque id elit ut mauris egestas bibendum. Nunc a blandit orci. Nullam et odio sit amet augue pharetra accumsan. Mauris tempus vulputate ex sit amet ornare. Praesent lacinia, risus nec tempor pellentesque, eros quam laoreet ex, consequat porta metus turpis at enim. Maecenas lectus tellus, ultrices eget volutpat eu, mollis ut ex. Vestibulum condimentum ultrices nulla, imperdiet congue erat laoreet sit amet. Sed porttitor lobortis ligula sit amet auctor. Aliquam tristique, mauris vitae suscipit commodo, dui diam placerat turpis, quis posuere massa diam non ligula. Quisque sed mi a leo faucibus eleifend.

Nam mauris lectus, faucibus vel elementum bibendum, dictum quis elit. Donec porta arcu nisi, eu luctus turpis interdum at. Etiam suscipit mi in elit semper maximus. Nunc quis ipsum dolor. In eu augue vel sapien commodo euismod vel ac quam. Suspendisse potenti. Sed id nisi venenatis felis suscipit finibus at et lectus. In nunc sem, sagittis ut convallis ut, vulputate nec massa. Maecenas leo mauris, placerat quis tempor vel, facilisis vitae eros. Donec imperdiet mauris magna, nec sagittis arcu aliquam ac. Nam a tortor vel ex venenatis suscipit. In eget magna at tortor imperdiet gravida viverra ac nibh. Maecenas facilisis, ligula non porttitor sodales, sem metus vulputate elit, nec pellentesque eros lacus vitae ante.

Proin est felis, vehicula non mauris in, sodales interdum lorem. In scelerisque, magna dictum consectetur rhoncus, sapien lacus cursus dolor, vel euismod nibh felis vel felis. Sed ut varius felis. In in ligula feugiat, malesuada quam ac, fermentum nunc. Aenean tristique purus eget arcu placerat pretium. Vivamus quis dapibus ipsum, in auctor nisl. Suspendisse felis massa, placerat nec bibendum at, rhoncus ut nulla. Suspendisse tristique rutrum enim, et cursus erat ultricies vitae. Duis elementum ex non ultrices vestibulum. Nunc sed ligula massa. Mauris mi turpis, blandit sit amet tristique eu, placerat vitae leo. Morbi condimentum libero nunc, nec congue erat placerat nec.

Integer justo nunc, aliquet vel sagittis eget, pulvinar a orci. Maecenas vitae facilisis libero. Etiam tempor tellus in ante ultricies facilisis. Vivamus finibus dictum posuere. Morbi sed ullamcorper nisl, et vehicula ligula. Sed aliquet aliquam dolor in scelerisque. Quisque tortor ipsum, tincidunt quis congue ut, consectetur eget leo. Cras metus turpis, suscipit nec tincidunt in, imperdiet vitae ipsum. Sed in tortor bibendum, rhoncus orci nec, scelerisque sapien. Phasellus in ex justo. Vivamus auctor, nulla vel rutrum venenatis, ante tellus tincidunt orci, sed sollicitudin ipsum sem vel quam. Donec tempus augue ut auctor lacinia. Sed consequat sem eu rutrum mattis.

Ut ante dolor, feugiat ultricies mattis et, molestie nec orci. Etiam quis urna elit. Vivamus ut est tincidunt, tincidunt tortor in, mattis dolor. Donec quis nulla risus. Donec pellentesque non velit ut finibus. Integer lacinia eleifend tempus. Donec eu libero at risus fringilla venenatis. Quisque tincidunt posuere consequat. Proin elementum quis felis et pellentesque. Pellentesque in vestibulum erat, semper gravida dolor.

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

/*In vestibulum ligula at condimentum placerat. Nulla facilisi. Duis egestas pharetra orci, ut accumsan augue tincidunt pretium. Nunc ante justo, lobortis id posuere sed, facilisis a sapien. Vestibulum hendrerit posuere lacus, at aliquet libero ullamcorper vel. Pellentesque id elit ut mauris egestas bibendum. Nunc a blandit orci. Nullam et odio sit amet augue pharetra accumsan. Mauris tempus vulputate ex sit amet ornare. Praesent lacinia, risus nec tempor pellentesque, eros quam laoreet ex, consequat porta metus turpis at enim. Maecenas lectus tellus, ultrices eget volutpat eu, mollis ut ex. Vestibulum condimentum ultrices nulla, imperdiet congue erat laoreet sit amet. Sed porttitor lobortis ligula sit amet auctor. Aliquam tristique, mauris vitae suscipit commodo, dui diam placerat turpis, quis posuere massa diam non ligula. Quisque sed mi a leo faucibus eleifend.

Nam mauris lectus, faucibus vel elementum bibendum, dictum quis elit. Donec porta arcu nisi, eu luctus turpis interdum at. Etiam suscipit mi in elit semper maximus. Nunc quis ipsum dolor. In eu augue vel sapien commodo euismod vel ac quam. Suspendisse potenti. Sed id nisi venenatis felis suscipit finibus at et lectus. In nunc sem, sagittis ut convallis ut, vulputate nec massa. Maecenas leo mauris, placerat quis tempor vel, facilisis vitae eros. Donec imperdiet mauris magna, nec sagittis arcu aliquam ac. Nam a tortor vel ex venenatis suscipit. In eget magna at tortor imperdiet gravida viverra ac nibh. Maecenas facilisis, ligula non porttitor sodales, sem metus vulputate elit, nec pellentesque eros lacus vitae ante.

Proin est felis, vehicula non mauris in, sodales interdum lorem. In scelerisque, magna dictum consectetur rhoncus, sapien lacus cursus dolor, vel euismod nibh felis vel felis. Sed ut varius felis. In in ligula feugiat, malesuada quam ac, fermentum nunc. Aenean tristique purus eget arcu placerat pretium. Vivamus quis dapibus ipsum, in auctor nisl. Suspendisse felis massa, placerat nec bibendum at, rhoncus ut nulla. Suspendisse tristique rutrum enim, et cursus erat ultricies vitae. Duis elementum ex non ultrices vestibulum. Nunc sed ligula massa. Mauris mi turpis, blandit sit amet tristique eu, placerat vitae leo. Morbi condimentum libero nunc, nec congue erat placerat nec.

Integer justo nunc, aliquet vel sagittis eget, pulvinar a orci. Maecenas vitae facilisis libero. Etiam tempor tellus in ante ultricies facilisis. Vivamus finibus dictum posuere. Morbi sed ullamcorper nisl, et vehicula ligula. Sed aliquet aliquam dolor in scelerisque. Quisque tortor ipsum, tincidunt quis congue ut, consectetur eget leo. Cras metus turpis, suscipit nec tincidunt in, imperdiet vitae ipsum. Sed in tortor bibendum, rhoncus orci nec, scelerisque sapien. Phasellus in ex justo. Vivamus auctor, nulla vel rutrum venenatis, ante tellus tincidunt orci, sed sollicitudin ipsum sem vel quam. Donec tempus augue ut auctor lacinia. Sed consequat sem eu rutrum mattis.

Ut ante dolor, feugiat ultricies mattis et, molestie nec orci. Etiam quis urna elit. Vivamus ut est tincidunt, tincidunt tortor in, mattis dolor. Donec quis nulla risus. Donec pellentesque non velit ut finibus. Integer lacinia eleifend tempus. Donec eu libero at risus fringilla venenatis. Quisque tincidunt posuere consequat. Proin elementum quis felis et pellentesque. Pellentesque in vestibulum erat, semper gravida dolor.

*/
?>