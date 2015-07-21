<?php
	
    /*
 Vivamus consequat, enim eget tempor vulputate, ex erat vehicula turpis, in semper erat odio sit amet lacus. Integer sed justo quis turpis finibus viverra. Ut in dictum tellus. Praesent et eros fringilla, posuere nulla id, volutpat sapien. Proin id fermentum felis. Proin eget orci volutpat, dapibus mi vitae, eleifend sapien. Curabitur leo libero, rhoncus et iaculis non, egestas et lectus. Aliquam non elit a eros maximus vestibulum. Nulla mollis nibh dolor, quis congue turpis ornare et.

In lacinia quam sed mi malesuada, non ultrices leo aliquam. Sed consequat vehicula neque, eget consectetur felis semper ut. Praesent sollicitudin pharetra nisl, vitae dictum odio condimentum nec. Nulla condimentum ligula nisl, id commodo quam dictum quis. Maecenas vitae pretium libero. Vivamus ut facilisis dui, eu ullamcorper ex. Suspendisse potenti. Aliquam erat volutpat. Phasellus nisi lorem, hendrerit sit amet vulputate at, gravida ut elit.

Sed libero urna, porta vel euismod ut, dignissim vel nisl. Vestibulum tincidunt, libero ac congue blandit, mauris neque luctus turpis, ut lobortis urna diam quis purus. Nulla bibendum, libero sed bibendum malesuada, risus ipsum pharetra libero, nec placerat lorem purus in enim. Sed a tortor sed urna tristique maximus non et risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut consectetur lectus a ipsum consequat maximus. Aliquam orci metus, rhoncus ut sem eu, vestibulum imperdiet sem. Pellentesque cursus ut ipsum id pulvinar. Aliquam venenatis, odio vitae dapibus interdum, magna purus convallis purus, id placerat nisi diam ut felis. Proin sed ligula leo. Proin aliquet, erat sed posuere pharetra, justo metus porta magna, eu semper tellus est pretium est. Morbi nec massa at diam auctor tristique. Nulla aliquet accumsan velit nec laoreet.

Mauris lacus nisl, bibendum eget rhoncus ullamcorper, viverra varius enim. Integer vitae diam purus. Sed ex odio, pharetra ac tristique nec, sodales in risus. Cras hendrerit ullamcorper nulla, quis iaculis mauris molestie non. Suspendisse eu aliquam quam. Curabitur viverra eros dui, sed hendrerit odio congue convallis. Aliquam erat volutpat. Morbi sollicitudin lorem a venenatis egestas.

Morbi tempor dui nulla, at maximus purus venenatis in. Aenean lacinia ante eu tristique auctor. Duis rutrum leo sit amet orci ultricies fringilla. Aliquam feugiat molestie dui sed elementum. Praesent tempor, justo vel volutpat sagittis, nulla tellus dignissim turpis, sit amet rutrum libero nunc eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ultricies et nisi non laoreet. Duis posuere elit vitae vestibulum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dignissim pretium enim, id imperdiet tellus porttitor ut. Donec odio tortor, tristique id aliquam pellentesque, varius id urna.

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

/*Vivamus consequat, enim eget tempor vulputate, ex erat vehicula turpis, in semper erat odio sit amet lacus. Integer sed justo quis turpis finibus viverra. Ut in dictum tellus. Praesent et eros fringilla, posuere nulla id, volutpat sapien. Proin id fermentum felis. Proin eget orci volutpat, dapibus mi vitae, eleifend sapien. Curabitur leo libero, rhoncus et iaculis non, egestas et lectus. Aliquam non elit a eros maximus vestibulum. Nulla mollis nibh dolor, quis congue turpis ornare et.

In lacinia quam sed mi malesuada, non ultrices leo aliquam. Sed consequat vehicula neque, eget consectetur felis semper ut. Praesent sollicitudin pharetra nisl, vitae dictum odio condimentum nec. Nulla condimentum ligula nisl, id commodo quam dictum quis. Maecenas vitae pretium libero. Vivamus ut facilisis dui, eu ullamcorper ex. Suspendisse potenti. Aliquam erat volutpat. Phasellus nisi lorem, hendrerit sit amet vulputate at, gravida ut elit.

Sed libero urna, porta vel euismod ut, dignissim vel nisl. Vestibulum tincidunt, libero ac congue blandit, mauris neque luctus turpis, ut lobortis urna diam quis purus. Nulla bibendum, libero sed bibendum malesuada, risus ipsum pharetra libero, nec placerat lorem purus in enim. Sed a tortor sed urna tristique maximus non et risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut consectetur lectus a ipsum consequat maximus. Aliquam orci metus, rhoncus ut sem eu, vestibulum imperdiet sem. Pellentesque cursus ut ipsum id pulvinar. Aliquam venenatis, odio vitae dapibus interdum, magna purus convallis purus, id placerat nisi diam ut felis. Proin sed ligula leo. Proin aliquet, erat sed posuere pharetra, justo metus porta magna, eu semper tellus est pretium est. Morbi nec massa at diam auctor tristique. Nulla aliquet accumsan velit nec laoreet.

Mauris lacus nisl, bibendum eget rhoncus ullamcorper, viverra varius enim. Integer vitae diam purus. Sed ex odio, pharetra ac tristique nec, sodales in risus. Cras hendrerit ullamcorper nulla, quis iaculis mauris molestie non. Suspendisse eu aliquam quam. Curabitur viverra eros dui, sed hendrerit odio congue convallis. Aliquam erat volutpat. Morbi sollicitudin lorem a venenatis egestas.

Morbi tempor dui nulla, at maximus purus venenatis in. Aenean lacinia ante eu tristique auctor. Duis rutrum leo sit amet orci ultricies fringilla. Aliquam feugiat molestie dui sed elementum. Praesent tempor, justo vel volutpat sagittis, nulla tellus dignissim turpis, sit amet rutrum libero nunc eu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam ultricies et nisi non laoreet. Duis posuere elit vitae vestibulum mattis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dignissim pretium enim, id imperdiet tellus porttitor ut. Donec odio tortor, tristique id aliquam pellentesque, varius id urna.

*/
?>