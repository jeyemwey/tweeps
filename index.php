<?php

include "init.inc.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tweeps</title>
		<link rel="stylesheet" href="app/css/application.css" />
	</head>
	<body>
		<header>
			<h1>Tweeps</h1>
		</header>
		<?php if (count($tweeps)): ?>
			<ul>
			<?php foreach ($tweeps as $tweep): ?>
				<li><?= $tweep["name"]["real"] ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</body>
</html>