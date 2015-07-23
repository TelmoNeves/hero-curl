<?php
	
    /*
 Morbi molestie, eros non porttitor posuere, neque metus rutrum mauris, id pharetra arcu dolor in massa. Maecenas ac porta risus. Praesent finibus egestas elit sed tincidunt. Vestibulum pellentesque scelerisque pellentesque. Integer ut mi ipsum. Donec dictum tellus vel metus aliquet viverra. Curabitur eros nunc, tristique a nisi at, sollicitudin lacinia purus.

In imperdiet dapibus metus, ac auctor lacus ullamcorper sed. Suspendisse vel lorem sit amet est congue dapibus ac quis mi. Sed vitae molestie elit, ac commodo sem. Sed at eleifend mauris. Praesent sem nisl, cursus ut tempus sed, viverra in lectus. Suspendisse non blandit nulla, ac pharetra enim. Sed feugiat feugiat elit ac hendrerit. Fusce turpis velit, iaculis ut aliquet vitae, faucibus vel quam. Aliquam in magna mi. Duis tincidunt mi a faucibus dignissim. Vestibulum euismod ultricies ante eu suscipit. In vestibulum ultricies risus at efficitur. Etiam quis mattis libero. Etiam facilisis elit sed arcu pellentesque tempus. Nulla nisl diam, feugiat ac est vel, ultricies consectetur nulla. Donec hendrerit felis vel nibh pulvinar lacinia a non tortor.

Praesent eu accumsan magna. Pellentesque eu arcu rutrum dui volutpat semper. Praesent ligula mauris, viverra sed tellus non, egestas vulputate magna. Proin in mattis metus, et imperdiet magna. Sed quis ligula sit amet enim tempor consectetur non ut sapien. Sed imperdiet sodales finibus. Praesent vel vehicula turpis, id egestas purus. Curabitur in lectus eget velit ornare scelerisque a a magna. Etiam facilisis turpis quam, id ultrices tellus sagittis eget. Integer sit amet sem orci. Nunc dictum efficitur ipsum eget ultricies. Mauris gravida ante diam, commodo maximus purus feugiat vitae. Sed nec nulla nulla. Proin molestie, velit non mollis feugiat, ligula velit convallis erat, at pretium dui eros sit amet est. Etiam vel cursus neque. Donec congue imperdiet ligula, quis porta odio malesuada non.

Fusce consectetur sem felis, et vehicula est malesuada eu. Cras ipsum lorem, fringilla in vulputate sed, pellentesque ultrices lorem. Nullam nisi leo, blandit nec nisi id, pretium consequat leo. Duis interdum sit amet sapien sed aliquet. In id tempor urna. Integer quis lectus faucibus, varius ante tincidunt, rhoncus sem. Ut sodales arcu nibh, nec interdum ante consectetur vel. Sed in ultrices enim. Proin auctor non ligula at pharetra.

Nam venenatis sodales pharetra. Nulla iaculis vestibulum velit vitae lacinia. Quisque tellus neque, feugiat eu mauris sed, elementum ornare quam. Vestibulum vel quam condimentum, lobortis ante eu, pharetra nunc. Integer interdum tincidunt interdum. Vivamus eu est in tortor auctor vehicula. Quisque sit amet suscipit nibh. Sed laoreet sagittis est, quis dignissim erat tincidunt a.

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

/*Morbi molestie, eros non porttitor posuere, neque metus rutrum mauris, id pharetra arcu dolor in massa. Maecenas ac porta risus. Praesent finibus egestas elit sed tincidunt. Vestibulum pellentesque scelerisque pellentesque. Integer ut mi ipsum. Donec dictum tellus vel metus aliquet viverra. Curabitur eros nunc, tristique a nisi at, sollicitudin lacinia purus.

In imperdiet dapibus metus, ac auctor lacus ullamcorper sed. Suspendisse vel lorem sit amet est congue dapibus ac quis mi. Sed vitae molestie elit, ac commodo sem. Sed at eleifend mauris. Praesent sem nisl, cursus ut tempus sed, viverra in lectus. Suspendisse non blandit nulla, ac pharetra enim. Sed feugiat feugiat elit ac hendrerit. Fusce turpis velit, iaculis ut aliquet vitae, faucibus vel quam. Aliquam in magna mi. Duis tincidunt mi a faucibus dignissim. Vestibulum euismod ultricies ante eu suscipit. In vestibulum ultricies risus at efficitur. Etiam quis mattis libero. Etiam facilisis elit sed arcu pellentesque tempus. Nulla nisl diam, feugiat ac est vel, ultricies consectetur nulla. Donec hendrerit felis vel nibh pulvinar lacinia a non tortor.

Praesent eu accumsan magna. Pellentesque eu arcu rutrum dui volutpat semper. Praesent ligula mauris, viverra sed tellus non, egestas vulputate magna. Proin in mattis metus, et imperdiet magna. Sed quis ligula sit amet enim tempor consectetur non ut sapien. Sed imperdiet sodales finibus. Praesent vel vehicula turpis, id egestas purus. Curabitur in lectus eget velit ornare scelerisque a a magna. Etiam facilisis turpis quam, id ultrices tellus sagittis eget. Integer sit amet sem orci. Nunc dictum efficitur ipsum eget ultricies. Mauris gravida ante diam, commodo maximus purus feugiat vitae. Sed nec nulla nulla. Proin molestie, velit non mollis feugiat, ligula velit convallis erat, at pretium dui eros sit amet est. Etiam vel cursus neque. Donec congue imperdiet ligula, quis porta odio malesuada non.

Fusce consectetur sem felis, et vehicula est malesuada eu. Cras ipsum lorem, fringilla in vulputate sed, pellentesque ultrices lorem. Nullam nisi leo, blandit nec nisi id, pretium consequat leo. Duis interdum sit amet sapien sed aliquet. In id tempor urna. Integer quis lectus faucibus, varius ante tincidunt, rhoncus sem. Ut sodales arcu nibh, nec interdum ante consectetur vel. Sed in ultrices enim. Proin auctor non ligula at pharetra.

Nam venenatis sodales pharetra. Nulla iaculis vestibulum velit vitae lacinia. Quisque tellus neque, feugiat eu mauris sed, elementum ornare quam. Vestibulum vel quam condimentum, lobortis ante eu, pharetra nunc. Integer interdum tincidunt interdum. Vivamus eu est in tortor auctor vehicula. Quisque sit amet suscipit nibh. Sed laoreet sagittis est, quis dignissim erat tincidunt a.

*/
?>