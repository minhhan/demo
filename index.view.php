<!DOCTYPE html>
<html>
<head>
	<title>Document</title>

</head>
<body>
 	<ul><?php foreach($task as $item=>$content): ?>
 	<li><strong><?= $item ?>:</strong> <?= $content?></li>
 	<?php endforeach ?>
 	</ul>
</body>
</html>