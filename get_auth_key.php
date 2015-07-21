<?php
	
    /*
Proin erat lorem, tincidunt ac rhoncus eget, sollicitudin dapibus elit. Pellentesque vehicula magna id nisi ornare facilisis. Nulla non metus non massa ornare dignissim ac vitae lectus. Etiam augue sem, mattis eu eros vel, tempus varius lorem. Proin at viverra lorem. Aenean at accumsan dui. Donec leo felis, volutpat et ante vel, posuere fringilla nibh. Nulla rhoncus molestie nunc, eu vulputate massa tincidunt nec. Donec convallis neque at augue fermentum facilisis ac non enim. Vestibulum tristique magna aliquet, egestas justo in, rutrum velit. Morbi enim diam, sodales non auctor non, blandit in elit. Vivamus viverra enim nec ipsum sollicitudin auctor. Morbi accumsan dignissim ex quis suscipit. Proin elementum bibendum mollis. Aenean commodo lacus augue, vitae tempor enim posuere hendrerit. Aliquam sed venenatis quam.

Praesent dolor lectus, dignissim eget ante vel, facilisis tempor libero. Nam vitae cursus purus. Nunc mollis urna vel risus mollis varius. Proin dictum est sit amet hendrerit porta. Sed porttitor tortor sed orci sagittis, suscipit dignissim nunc sagittis. Etiam elementum eget justo ac auctor. Sed malesuada quam et nibh porttitor mollis eu eget sem. Praesent fermentum lectus ut lacus hendrerit, non ultricies ex blandit. Mauris sem ipsum, aliquam in semper ac, ultricies interdum sem. Sed congue ex a elit egestas, sit amet tristique arcu scelerisque. Curabitur vehicula lectus sed magna semper efficitur. Integer ut volutpat urna. Pellentesque in mauris lacinia, rutrum turpis vitae, sollicitudin odio. Nam in nunc eget lorem tincidunt fermentum. Nulla volutpat est diam, at euismod risus sodales laoreet. Curabitur risus est, pretium ac leo a, fermentum efficitur felis.

Phasellus dapibus ullamcorper tortor, vel aliquam enim tempus tempus. Nulla quam sapien, sagittis et blandit eget, scelerisque sed risus. Duis vitae diam nec velit varius interdum et elementum quam. Curabitur mattis placerat dapibus. Nulla facilisi. Pellentesque viverra ultrices malesuada. Donec lectus ligula, tincidunt id porta quis, porttitor aliquet quam. Donec ultrices tristique vehicula. Vestibulum sit amet lorem dapibus, malesuada purus vel, pellentesque justo. Aenean accumsan condimentum felis ut feugiat. Nulla interdum elementum nisl. In eu dui nec tellus convallis tincidunt.

Proin ut efficitur diam, vel congue nibh. Nullam sagittis velit quis dui convallis fermentum. Proin efficitur risus massa, nec tristique metus luctus id. Mauris congue lorem ut fermentum pharetra. Vestibulum nec lectus quis nunc faucibus egestas. Nam blandit non diam nec pulvinar. Nullam euismod lorem id ultricies ullamcorper. Nullam nec felis et sapien iaculis tempus. Phasellus leo lacus, lobortis quis suscipit ut, tempor eu eros. Nullam fringilla felis tellus, sed faucibus tellus consequat ut. Cras non faucibus ipsum.

Praesent eu mi augue. Morbi turpis ante, lobortis at sodales ac, gravida id nisl. Sed eget mollis orci, convallis ultrices ipsum. Integer porttitor vitae risus ac venenatis. Quisque id vestibulum velit. Maecenas porttitor lacus quis lacus volutpat, in sollicitudin ligula aliquet. Etiam sit amet eros mattis, bibendum risus quis, iaculis tortor.

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

/*Proin erat lorem, tincidunt ac rhoncus eget, sollicitudin dapibus elit. Pellentesque vehicula magna id nisi ornare facilisis. Nulla non metus non massa ornare dignissim ac vitae lectus. Etiam augue sem, mattis eu eros vel, tempus varius lorem. Proin at viverra lorem. Aenean at accumsan dui. Donec leo felis, volutpat et ante vel, posuere fringilla nibh. Nulla rhoncus molestie nunc, eu vulputate massa tincidunt nec. Donec convallis neque at augue fermentum facilisis ac non enim. Vestibulum tristique magna aliquet, egestas justo in, rutrum velit. Morbi enim diam, sodales non auctor non, blandit in elit. Vivamus viverra enim nec ipsum sollicitudin auctor. Morbi accumsan dignissim ex quis suscipit. Proin elementum bibendum mollis. Aenean commodo lacus augue, vitae tempor enim posuere hendrerit. Aliquam sed venenatis quam.

Praesent dolor lectus, dignissim eget ante vel, facilisis tempor libero. Nam vitae cursus purus. Nunc mollis urna vel risus mollis varius. Proin dictum est sit amet hendrerit porta. Sed porttitor tortor sed orci sagittis, suscipit dignissim nunc sagittis. Etiam elementum eget justo ac auctor. Sed malesuada quam et nibh porttitor mollis eu eget sem. Praesent fermentum lectus ut lacus hendrerit, non ultricies ex blandit. Mauris sem ipsum, aliquam in semper ac, ultricies interdum sem. Sed congue ex a elit egestas, sit amet tristique arcu scelerisque. Curabitur vehicula lectus sed magna semper efficitur. Integer ut volutpat urna. Pellentesque in mauris lacinia, rutrum turpis vitae, sollicitudin odio. Nam in nunc eget lorem tincidunt fermentum. Nulla volutpat est diam, at euismod risus sodales laoreet. Curabitur risus est, pretium ac leo a, fermentum efficitur felis.

Phasellus dapibus ullamcorper tortor, vel aliquam enim tempus tempus. Nulla quam sapien, sagittis et blandit eget, scelerisque sed risus. Duis vitae diam nec velit varius interdum et elementum quam. Curabitur mattis placerat dapibus. Nulla facilisi. Pellentesque viverra ultrices malesuada. Donec lectus ligula, tincidunt id porta quis, porttitor aliquet quam. Donec ultrices tristique vehicula. Vestibulum sit amet lorem dapibus, malesuada purus vel, pellentesque justo. Aenean accumsan condimentum felis ut feugiat. Nulla interdum elementum nisl. In eu dui nec tellus convallis tincidunt.

Proin ut efficitur diam, vel congue nibh. Nullam sagittis velit quis dui convallis fermentum. Proin efficitur risus massa, nec tristique metus luctus id. Mauris congue lorem ut fermentum pharetra. Vestibulum nec lectus quis nunc faucibus egestas. Nam blandit non diam nec pulvinar. Nullam euismod lorem id ultricies ullamcorper. Nullam nec felis et sapien iaculis tempus. Phasellus leo lacus, lobortis quis suscipit ut, tempor eu eros. Nullam fringilla felis tellus, sed faucibus tellus consequat ut. Cras non faucibus ipsum.

Praesent eu mi augue. Morbi turpis ante, lobortis at sodales ac, gravida id nisl. Sed eget mollis orci, convallis ultrices ipsum. Integer porttitor vitae risus ac venenatis. Quisque id vestibulum velit. Maecenas porttitor lacus quis lacus volutpat, in sollicitudin ligula aliquet. Etiam sit amet eros mattis, bibendum risus quis, iaculis tortor.

*/
?>