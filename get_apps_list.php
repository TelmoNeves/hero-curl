<?php
	
    /*
  Duis suscipit, augue non luctus aliquet, felis lacus dictum mauris, in ultricies justo erat eu nibh. In risus velit, consequat eu leo id, mattis imperdiet odio. Proin imperdiet augue facilisis enim laoreet gravida. Vestibulum dignissim sodales odio nec imperdiet. Morbi vitae ipsum id urna vulputate suscipit vitae a lectus. Donec vel felis vel ante finibus mollis. Sed accumsan lacus sed sem scelerisque fringilla. Sed placerat erat orci, sit amet hendrerit ligula blandit et. Donec vulputate ex a tortor mattis, sit amet lobortis massa ullamcorper. Duis eleifend, justo in volutpat accumsan, dolor nibh tempor ligula, sed tempus ipsum nulla non lacus. Pellentesque et odio et leo mollis feugiat. Nunc aliquet, ante in pellentesque placerat, ipsum eros sagittis est, eget pulvinar ante nulla nec elit. Fusce vel aliquam tortor, et volutpat tellus. Phasellus ac ligula at ligula accumsan scelerisque eu sit amet dui. Etiam scelerisque finibus tincidunt.

In venenatis, risus in finibus tristique, mauris nulla molestie quam, hendrerit tempor diam metus eget justo. Quisque at turpis leo. Nulla nisl justo, convallis nec commodo sit amet, sagittis quis dolor. Sed elementum, leo at tempor ultrices, libero neque malesuada enim, vitae aliquam nisi neque in tortor. Curabitur ac neque massa. Maecenas semper, lectus eget condimentum pretium, purus nisi egestas eros, sed blandit nulla dolor at elit. Morbi consequat, arcu et ultrices molestie, mauris turpis fringilla arcu, nec hendrerit sem justo sed nisl. Aliquam erat volutpat. Sed ornare vehicula est, a dapibus metus. Nullam vel eleifend magna. Nullam ac augue tellus. Vivamus iaculis ante eget facilisis blandit. Donec mi urna, fermentum eu bibendum ac, pretium at ligula. Vivamus rhoncus ipsum sit amet efficitur dignissim. Nulla facilisi.

Nullam ac consectetur augue. In interdum tristique sapien vel mattis. Quisque condimentum dignissim vehicula. Duis sit amet congue lectus. Nunc ut fermentum nisi. Praesent odio sem, porttitor sed lectus at, condimentum rhoncus massa. Morbi nec elementum orci. Sed dictum nunc in elit faucibus egestas.

Ut ac commodo libero, at faucibus metus. Nunc ornare vel sem vel interdum. Curabitur ac pretium lacus, at commodo nisl. Morbi luctus fringilla ligula. Donec sem erat, elementum at elit id, commodo suscipit velit. Sed euismod aliquam lacus, vel rhoncus arcu ullamcorper ut. Nullam euismod vestibulum tortor at rutrum.

Nullam bibendum elementum lacus, a faucibus velit ultricies sit amet. Pellentesque scelerisque facilisis eleifend. Vivamus euismod placerat purus sed gravida. In turpis massa, posuere quis libero non, elementum tempus enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce congue leo eget ipsum lacinia, ut posuere nibh egestas. Vivamus euismod tellus sit amet risus vestibulum rutrum. Quisque in pellentesque purus. Aliquam faucibus augue turpis, et mollis dui condimentum quis.

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
Duis suscipit, augue non luctus aliquet, felis lacus dictum mauris, in ultricies justo erat eu nibh. In risus velit, consequat eu leo id, mattis imperdiet odio. Proin imperdiet augue facilisis enim laoreet gravida. Vestibulum dignissim sodales odio nec imperdiet. Morbi vitae ipsum id urna vulputate suscipit vitae a lectus. Donec vel felis vel ante finibus mollis. Sed accumsan lacus sed sem scelerisque fringilla. Sed placerat erat orci, sit amet hendrerit ligula blandit et. Donec vulputate ex a tortor mattis, sit amet lobortis massa ullamcorper. Duis eleifend, justo in volutpat accumsan, dolor nibh tempor ligula, sed tempus ipsum nulla non lacus. Pellentesque et odio et leo mollis feugiat. Nunc aliquet, ante in pellentesque placerat, ipsum eros sagittis est, eget pulvinar ante nulla nec elit. Fusce vel aliquam tortor, et volutpat tellus. Phasellus ac ligula at ligula accumsan scelerisque eu sit amet dui. Etiam scelerisque finibus tincidunt.

In venenatis, risus in finibus tristique, mauris nulla molestie quam, hendrerit tempor diam metus eget justo. Quisque at turpis leo. Nulla nisl justo, convallis nec commodo sit amet, sagittis quis dolor. Sed elementum, leo at tempor ultrices, libero neque malesuada enim, vitae aliquam nisi neque in tortor. Curabitur ac neque massa. Maecenas semper, lectus eget condimentum pretium, purus nisi egestas eros, sed blandit nulla dolor at elit. Morbi consequat, arcu et ultrices molestie, mauris turpis fringilla arcu, nec hendrerit sem justo sed nisl. Aliquam erat volutpat. Sed ornare vehicula est, a dapibus metus. Nullam vel eleifend magna. Nullam ac augue tellus. Vivamus iaculis ante eget facilisis blandit. Donec mi urna, fermentum eu bibendum ac, pretium at ligula. Vivamus rhoncus ipsum sit amet efficitur dignissim. Nulla facilisi.

Nullam ac consectetur augue. In interdum tristique sapien vel mattis. Quisque condimentum dignissim vehicula. Duis sit amet congue lectus. Nunc ut fermentum nisi. Praesent odio sem, porttitor sed lectus at, condimentum rhoncus massa. Morbi nec elementum orci. Sed dictum nunc in elit faucibus egestas.

Ut ac commodo libero, at faucibus metus. Nunc ornare vel sem vel interdum. Curabitur ac pretium lacus, at commodo nisl. Morbi luctus fringilla ligula. Donec sem erat, elementum at elit id, commodo suscipit velit. Sed euismod aliquam lacus, vel rhoncus arcu ullamcorper ut. Nullam euismod vestibulum tortor at rutrum.

Nullam bibendum elementum lacus, a faucibus velit ultricies sit amet. Pellentesque scelerisque facilisis eleifend. Vivamus euismod placerat purus sed gravida. In turpis massa, posuere quis libero non, elementum tempus enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce congue leo eget ipsum lacinia, ut posuere nibh egestas. Vivamus euismod tellus sit amet risus vestibulum rutrum. Quisque in pellentesque purus. Aliquam faucibus augue turpis, et mollis dui condimentum quis.

*/

?>