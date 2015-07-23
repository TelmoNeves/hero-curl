<?php
	
    /*
Sed suscipit elit id sem tempus cursus ac nec libero. Vivamus ornare eu turpis nec eleifend. Fusce sagittis neque quis turpis tristique sodales. In vel lacus non tortor egestas scelerisque id non ex. Ut ac dui tortor. Sed laoreet felis sapien. Praesent id libero orci. Nullam interdum suscipit urna vitae dignissim. Proin blandit est ut mauris blandit gravida.

Aenean gravida lacinia libero, sit amet semper dui accumsan at. Fusce aliquet bibendum enim eu tincidunt. Nunc tincidunt, magna id pellentesque gravida, nibh lorem aliquam arcu, id elementum tellus metus at diam. Morbi tristique justo ut dui varius sodales. Suspendisse facilisis tincidunt dui, eget consequat nibh aliquet id. Curabitur pretium nec justo non aliquet. Duis et arcu in libero fermentum vestibulum eu vitae diam. Donec auctor dui ac erat pharetra tincidunt. Donec convallis diam at elit maximus, sed commodo justo interdum. Proin pulvinar nulla leo, vitae egestas nibh mattis quis. Phasellus volutpat nibh vel aliquet pellentesque.

Phasellus dapibus aliquet odio, faucibus placerat tortor. Donec porta, sem vitae vestibulum hendrerit, enim elit commodo augue, vel luctus nibh tellus sit amet justo. Aenean nisi lacus, feugiat vel sapien quis, volutpat fringilla diam. Aliquam in scelerisque lorem, vitae mollis lorem. Donec quis mauris diam. Vestibulum quis tortor non ipsum lobortis maximus in vitae eros. Cras gravida, nulla auctor commodo blandit, urna ipsum aliquet lacus, id rutrum arcu nisl auctor ipsum. In eget rutrum leo. Duis sed justo id risus posuere pharetra at a tellus. Nam dictum nulla ac metus mattis, at viverra lorem malesuada. In laoreet condimentum sapien, eget maximus tellus ornare sollicitudin.

Nullam mattis ante vel ligula rutrum, nec tincidunt diam porttitor. Sed tempor odio ut diam ornare, vitae eleifend enim porta. Cras a quam a erat aliquet ornare a ac mauris. Phasellus volutpat aliquet leo a laoreet. Suspendisse quis sem at metus ornare rhoncus. Ut blandit urna dapibus metus convallis fermentum. Nullam sed rhoncus neque. Aliquam vel pulvinar eros. In semper dignissim ligula id eleifend. Donec viverra turpis ligula, ac aliquam nibh interdum eu. Praesent interdum magna non neque tempus convallis. Mauris pellentesque nisi et erat facilisis aliquam. In laoreet, nunc et porttitor venenatis, mauris massa dapibus lorem, sed consectetur justo mauris a magna. Vivamus placerat nisl non odio dignissim, sed molestie lectus posuere. Sed vel placerat arcu.

Ut leo eros, pellentesque vitae interdum vitae, mattis eget augue. Aenean aliquet dui eget nunc varius consequat. Maecenas non ipsum in nulla consequat gravida non ut ipsum. In hac habitasse platea dictumst. Donec mattis tincidunt aliquam. Fusce vestibulum orci ac augue ornare, eu aliquam sem mollis. Proin semper at risus ac lobortis.

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

/*Sed suscipit elit id sem tempus cursus ac nec libero. Vivamus ornare eu turpis nec eleifend. Fusce sagittis neque quis turpis tristique sodales. In vel lacus non tortor egestas scelerisque id non ex. Ut ac dui tortor. Sed laoreet felis sapien. Praesent id libero orci. Nullam interdum suscipit urna vitae dignissim. Proin blandit est ut mauris blandit gravida.

Aenean gravida lacinia libero, sit amet semper dui accumsan at. Fusce aliquet bibendum enim eu tincidunt. Nunc tincidunt, magna id pellentesque gravida, nibh lorem aliquam arcu, id elementum tellus metus at diam. Morbi tristique justo ut dui varius sodales. Suspendisse facilisis tincidunt dui, eget consequat nibh aliquet id. Curabitur pretium nec justo non aliquet. Duis et arcu in libero fermentum vestibulum eu vitae diam. Donec auctor dui ac erat pharetra tincidunt. Donec convallis diam at elit maximus, sed commodo justo interdum. Proin pulvinar nulla leo, vitae egestas nibh mattis quis. Phasellus volutpat nibh vel aliquet pellentesque.

Phasellus dapibus aliquet odio, faucibus placerat tortor. Donec porta, sem vitae vestibulum hendrerit, enim elit commodo augue, vel luctus nibh tellus sit amet justo. Aenean nisi lacus, feugiat vel sapien quis, volutpat fringilla diam. Aliquam in scelerisque lorem, vitae mollis lorem. Donec quis mauris diam. Vestibulum quis tortor non ipsum lobortis maximus in vitae eros. Cras gravida, nulla auctor commodo blandit, urna ipsum aliquet lacus, id rutrum arcu nisl auctor ipsum. In eget rutrum leo. Duis sed justo id risus posuere pharetra at a tellus. Nam dictum nulla ac metus mattis, at viverra lorem malesuada. In laoreet condimentum sapien, eget maximus tellus ornare sollicitudin.

Nullam mattis ante vel ligula rutrum, nec tincidunt diam porttitor. Sed tempor odio ut diam ornare, vitae eleifend enim porta. Cras a quam a erat aliquet ornare a ac mauris. Phasellus volutpat aliquet leo a laoreet. Suspendisse quis sem at metus ornare rhoncus. Ut blandit urna dapibus metus convallis fermentum. Nullam sed rhoncus neque. Aliquam vel pulvinar eros. In semper dignissim ligula id eleifend. Donec viverra turpis ligula, ac aliquam nibh interdum eu. Praesent interdum magna non neque tempus convallis. Mauris pellentesque nisi et erat facilisis aliquam. In laoreet, nunc et porttitor venenatis, mauris massa dapibus lorem, sed consectetur justo mauris a magna. Vivamus placerat nisl non odio dignissim, sed molestie lectus posuere. Sed vel placerat arcu.

Ut leo eros, pellentesque vitae interdum vitae, mattis eget augue. Aenean aliquet dui eget nunc varius consequat. Maecenas non ipsum in nulla consequat gravida non ut ipsum. In hac habitasse platea dictumst. Donec mattis tincidunt aliquam. Fusce vestibulum orci ac augue ornare, eu aliquam sem mollis. Proin semper at risus ac lobortis.

*/
?>