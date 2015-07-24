<?php
	
    /*
Nulla placerat fermentum mauris quis efficitur. Fusce nec feugiat odio, sed sollicitudin neque. Mauris varius porta elit, dictum auctor enim pellentesque quis. Aenean ultrices eleifend tellus, nec bibendum sapien. Curabitur in tincidunt orci. Quisque elit sapien, ornare at felis non, condimentum viverra diam. Vestibulum sodales ante finibus neque lobortis tincidunt. In posuere eros sed vestibulum maximus. Nulla placerat libero nec tempus semper. Aenean vestibulum at quam a aliquet.

Nullam eleifend laoreet semper. Vivamus vehicula tellus feugiat lacus bibendum faucibus. Duis nec molestie nulla. Aliquam sed nunc efficitur, commodo sem sit amet, faucibus massa. Praesent auctor, nunc nec tempus tempus, ligula metus fringilla lectus, a tincidunt purus dui et ex. Sed et erat viverra, bibendum ante sit amet, tincidunt est. Quisque at dolor maximus, gravida sem vitae, malesuada nisi. Integer faucibus porttitor auctor. Vivamus sit amet massa tempus, cursus nulla eu, sagittis justo. Aliquam rutrum et eros vitae tempus. Praesent convallis lorem id nisl venenatis, ut pulvinar turpis consequat. Morbi sed efficitur libero. Nulla at nibh et velit faucibus venenatis.

Fusce ac sollicitudin lectus. Proin augue neque, laoreet facilisis venenatis sit amet, cursus et nibh. Integer ut nulla non enim bibendum pellentesque quis quis dolor. Nam pellentesque egestas diam, ac scelerisque nisl efficitur ut. Nullam commodo nibh ut faucibus dignissim. In ac ex viverra, viverra est quis, egestas mi. Cras mi sapien, molestie vel consequat quis, porttitor id sem. Morbi molestie risus eget tellus maximus, eget pharetra sem facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut urna nec diam ornare malesuada non ut dolor.

Quisque vel fringilla sem. Suspendisse id molestie urna, vitae ullamcorper nibh. Cras semper ipsum a varius gravida. Pellentesque velit quam, lobortis vel elit at, laoreet convallis augue. Maecenas augue arcu, maximus vitae faucibus vitae, sollicitudin eu mauris. Nam non porttitor leo. Donec a hendrerit metus. In euismod metus nec lacus commodo egestas. Etiam pretium ullamcorper sem, ut euismod lorem molestie a. Duis elit eros, viverra in nisl sit amet, fermentum cursus sem. Cras nec diam nec velit vulputate aliquam eu sit amet risus. Integer nibh tortor, posuere id tincidunt sed, gravida a nunc. Nullam et purus sed dui sodales rutrum in ac mauris.

Nullam sodales commodo molestie. Mauris quis pretium orci. Vestibulum in turpis mollis, pulvinar tortor eu, scelerisque diam. Donec pellentesque ac arcu eget sodales. Phasellus sagittis sagittis porttitor. Suspendisse mattis interdum lectus, id blandit neque. Nulla volutpat leo vel justo imperdiet, sed fringilla nulla laoreet. Nulla eget dolor placerat, lacinia eros at, mattis odio. In eu mi augue. Vestibulum id gravida massa. Morbi sed ante ipsum.

*/

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

/*
Nulla placerat fermentum mauris quis efficitur. Fusce nec feugiat odio, sed sollicitudin neque. Mauris varius porta elit, dictum auctor enim pellentesque quis. Aenean ultrices eleifend tellus, nec bibendum sapien. Curabitur in tincidunt orci. Quisque elit sapien, ornare at felis non, condimentum viverra diam. Vestibulum sodales ante finibus neque lobortis tincidunt. In posuere eros sed vestibulum maximus. Nulla placerat libero nec tempus semper. Aenean vestibulum at quam a aliquet.

Nullam eleifend laoreet semper. Vivamus vehicula tellus feugiat lacus bibendum faucibus. Duis nec molestie nulla. Aliquam sed nunc efficitur, commodo sem sit amet, faucibus massa. Praesent auctor, nunc nec tempus tempus, ligula metus fringilla lectus, a tincidunt purus dui et ex. Sed et erat viverra, bibendum ante sit amet, tincidunt est. Quisque at dolor maximus, gravida sem vitae, malesuada nisi. Integer faucibus porttitor auctor. Vivamus sit amet massa tempus, cursus nulla eu, sagittis justo. Aliquam rutrum et eros vitae tempus. Praesent convallis lorem id nisl venenatis, ut pulvinar turpis consequat. Morbi sed efficitur libero. Nulla at nibh et velit faucibus venenatis.

Fusce ac sollicitudin lectus. Proin augue neque, laoreet facilisis venenatis sit amet, cursus et nibh. Integer ut nulla non enim bibendum pellentesque quis quis dolor. Nam pellentesque egestas diam, ac scelerisque nisl efficitur ut. Nullam commodo nibh ut faucibus dignissim. In ac ex viverra, viverra est quis, egestas mi. Cras mi sapien, molestie vel consequat quis, porttitor id sem. Morbi molestie risus eget tellus maximus, eget pharetra sem facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut urna nec diam ornare malesuada non ut dolor.

Quisque vel fringilla sem. Suspendisse id molestie urna, vitae ullamcorper nibh. Cras semper ipsum a varius gravida. Pellentesque velit quam, lobortis vel elit at, laoreet convallis augue. Maecenas augue arcu, maximus vitae faucibus vitae, sollicitudin eu mauris. Nam non porttitor leo. Donec a hendrerit metus. In euismod metus nec lacus commodo egestas. Etiam pretium ullamcorper sem, ut euismod lorem molestie a. Duis elit eros, viverra in nisl sit amet, fermentum cursus sem. Cras nec diam nec velit vulputate aliquam eu sit amet risus. Integer nibh tortor, posuere id tincidunt sed, gravida a nunc. Nullam et purus sed dui sodales rutrum in ac mauris.

Nullam sodales commodo molestie. Mauris quis pretium orci. Vestibulum in turpis mollis, pulvinar tortor eu, scelerisque diam. Donec pellentesque ac arcu eget sodales. Phasellus sagittis sagittis porttitor. Suspendisse mattis interdum lectus, id blandit neque. Nulla volutpat leo vel justo imperdiet, sed fringilla nulla laoreet. Nulla eget dolor placerat, lacinia eros at, mattis odio. In eu mi augue. Vestibulum id gravida massa. Morbi sed ante ipsum.

*/
?>