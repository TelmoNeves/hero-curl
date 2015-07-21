<?php
	
    /*
   Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et egestas diam. Quisque et quam dui. Nunc lacinia rhoncus ultricies. Maecenas gravida facilisis ligula, eu faucibus metus pulvinar sed. Sed sed vestibulum arcu. Duis imperdiet lacus non arcu ultricies, sit amet imperdiet libero blandit. Fusce efficitur metus vel porttitor sodales. Maecenas aliquet nibh in dolor suscipit, ut ultrices diam venenatis. Ut nec eros tortor. Donec tristique sem elit, ut accumsan nulla pulvinar in. Curabitur maximus auctor ante a facilisis. Aenean sed porttitor tortor. Fusce volutpat, libero interdum scelerisque condimentum, tortor lorem posuere orci, nec rutrum lectus felis quis orci.

Phasellus lacinia libero libero, eget maximus orci venenatis ut. Donec ac quam quis tellus faucibus tincidunt. Vivamus dictum molestie lectus, sed consequat nulla convallis vel. Aenean sem est, tincidunt eleifend placerat ut, pharetra at lectus. Sed sed magna lobortis, pharetra urna et, feugiat metus. Suspendisse quis convallis odio. Curabitur ut posuere est. Nullam efficitur leo non sem ultrices, sed interdum ipsum sollicitudin. Suspendisse hendrerit fermentum lectus. Aliquam et metus egestas, iaculis nibh vel, mattis sapien. Ut gravida nulla nec dui porta, in ultrices purus commodo. Nullam eu lorem et purus porttitor accumsan fringilla eu augue. Fusce sed est vitae turpis posuere tristique a ac sapien.

Mauris sit amet massa mi. Donec vel rutrum dui. Mauris iaculis, quam id consectetur semper, nisi enim viverra augue, id rhoncus ante ex eu erat. Fusce rutrum ligula eu aliquam scelerisque. Nulla pellentesque turpis nunc, aliquam accumsan diam condimentum in. Pellentesque sed diam a risus mattis porttitor. Nullam egestas placerat ipsum, sed egestas lectus congue at. Morbi volutpat posuere quam, non vulputate mauris mattis nec. Quisque elit est, mattis ut condimentum sed, consequat sit amet quam. Etiam placerat ac turpis elementum ornare. Proin convallis elementum rhoncus. Quisque ac odio congue, maximus lectus vehicula, dapibus ex. Integer dolor magna, bibendum id ipsum condimentum, vestibulum aliquam mi. Phasellus lacinia, neque at consequat cursus, magna ante imperdiet elit, sed porttitor turpis tortor at nisi. Nam commodo odio vitae risus cursus, id hendrerit justo rutrum. Praesent quis sem metus.

Aenean dictum mauris nec dapibus dignissim. Donec nulla lacus, tempor quis ornare vitae, aliquam at erat. Morbi leo elit, posuere non magna eget, fringilla iaculis dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porttitor pharetra justo. Nunc laoreet mollis eros in sodales. Curabitur quis condimentum felis. Nulla facilisi. Pellentesque rhoncus metus sem, non molestie dui luctus sed. Maecenas non mauris sed nunc sagittis egestas id a nulla. Suspendisse potenti. In hendrerit felis imperdiet nulla condimentum cursus. Donec porttitor ipsum at tincidunt imperdiet. Integer consectetur rhoncus felis eu aliquam. Vestibulum et laoreet sem. Aenean tincidunt eu nunc non mollis.

Maecenas aliquam tortor suscipit purus gravida lobortis. Curabitur et elit viverra nunc finibus condimentum. In hac habitasse platea dictumst. Integer nec luctus augue, ac suscipit quam. Cras blandit ligula vel maximus viverra. Integer gravida, turpis quis cursus euismod, neque est imperdiet ipsum, et interdum nulla urna eu mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque augue metus, lacinia tincidunt tristique et, varius egestas erat. Cras eget mi congue, auctor libero et, mattis ipsum. Phasellus id felis nec magna gravida auctor vitae ut diam. Cras non consequat leo, quis venenatis lacus. Curabitur tristique a massa id sollicitudin. Pellentesque sed pellentesque tellus. Pellentesque id justo arcu. Ut dignissim accumsan massa gravida placerat. Vestibulum id lacus quis ligula lacinia malesuada.

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
 Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et egestas diam. Quisque et quam dui. Nunc lacinia rhoncus ultricies. Maecenas gravida facilisis ligula, eu faucibus metus pulvinar sed. Sed sed vestibulum arcu. Duis imperdiet lacus non arcu ultricies, sit amet imperdiet libero blandit. Fusce efficitur metus vel porttitor sodales. Maecenas aliquet nibh in dolor suscipit, ut ultrices diam venenatis. Ut nec eros tortor. Donec tristique sem elit, ut accumsan nulla pulvinar in. Curabitur maximus auctor ante a facilisis. Aenean sed porttitor tortor. Fusce volutpat, libero interdum scelerisque condimentum, tortor lorem posuere orci, nec rutrum lectus felis quis orci.

Phasellus lacinia libero libero, eget maximus orci venenatis ut. Donec ac quam quis tellus faucibus tincidunt. Vivamus dictum molestie lectus, sed consequat nulla convallis vel. Aenean sem est, tincidunt eleifend placerat ut, pharetra at lectus. Sed sed magna lobortis, pharetra urna et, feugiat metus. Suspendisse quis convallis odio. Curabitur ut posuere est. Nullam efficitur leo non sem ultrices, sed interdum ipsum sollicitudin. Suspendisse hendrerit fermentum lectus. Aliquam et metus egestas, iaculis nibh vel, mattis sapien. Ut gravida nulla nec dui porta, in ultrices purus commodo. Nullam eu lorem et purus porttitor accumsan fringilla eu augue. Fusce sed est vitae turpis posuere tristique a ac sapien.

Mauris sit amet massa mi. Donec vel rutrum dui. Mauris iaculis, quam id consectetur semper, nisi enim viverra augue, id rhoncus ante ex eu erat. Fusce rutrum ligula eu aliquam scelerisque. Nulla pellentesque turpis nunc, aliquam accumsan diam condimentum in. Pellentesque sed diam a risus mattis porttitor. Nullam egestas placerat ipsum, sed egestas lectus congue at. Morbi volutpat posuere quam, non vulputate mauris mattis nec. Quisque elit est, mattis ut condimentum sed, consequat sit amet quam. Etiam placerat ac turpis elementum ornare. Proin convallis elementum rhoncus. Quisque ac odio congue, maximus lectus vehicula, dapibus ex. Integer dolor magna, bibendum id ipsum condimentum, vestibulum aliquam mi. Phasellus lacinia, neque at consequat cursus, magna ante imperdiet elit, sed porttitor turpis tortor at nisi. Nam commodo odio vitae risus cursus, id hendrerit justo rutrum. Praesent quis sem metus.

Aenean dictum mauris nec dapibus dignissim. Donec nulla lacus, tempor quis ornare vitae, aliquam at erat. Morbi leo elit, posuere non magna eget, fringilla iaculis dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porttitor pharetra justo. Nunc laoreet mollis eros in sodales. Curabitur quis condimentum felis. Nulla facilisi. Pellentesque rhoncus metus sem, non molestie dui luctus sed. Maecenas non mauris sed nunc sagittis egestas id a nulla. Suspendisse potenti. In hendrerit felis imperdiet nulla condimentum cursus. Donec porttitor ipsum at tincidunt imperdiet. Integer consectetur rhoncus felis eu aliquam. Vestibulum et laoreet sem. Aenean tincidunt eu nunc non mollis.

Maecenas aliquam tortor suscipit purus gravida lobortis. Curabitur et elit viverra nunc finibus condimentum. In hac habitasse platea dictumst. Integer nec luctus augue, ac suscipit quam. Cras blandit ligula vel maximus viverra. Integer gravida, turpis quis cursus euismod, neque est imperdiet ipsum, et interdum nulla urna eu mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque augue metus, lacinia tincidunt tristique et, varius egestas erat. Cras eget mi congue, auctor libero et, mattis ipsum. Phasellus id felis nec magna gravida auctor vitae ut diam. Cras non consequat leo, quis venenatis lacus. Curabitur tristique a massa id sollicitudin. Pellentesque sed pellentesque tellus. Pellentesque id justo arcu. Ut dignissim accumsan massa gravida placerat. Vestibulum id lacus quis ligula lacinia malesuada.

*/

?>