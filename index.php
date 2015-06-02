<?php

include "init.inc.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tweeps</title>
		<link rel="stylesheet" href="app/css/application.css" />
		<link rel="stylesheet" href="app/css/font-awesome.min.css" />
	</head>
	<body>
		<header>
			<h1>Tweeps</h1>
			<aside>I met in Real Life. Really.</aside>
		</header>
		<?php if (count($tweeps)): ?>
			<ul>
			<?php foreach ($tweeps as $tweep): ?>
				<li>
					<div class="overlay">
						<a href="https://twitter.com/<?= $tweep["name_twitter"] ?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</div>
					<img src="<?= $tweep["twitter_image"] ?>" alt="<?= $tweep["name_twitter"] ?>" />
					<span id="name"><?= $tweep["name_real"] ?></span>
				</li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<footer>
			<aside>
				Follow me on <a href="https://twitter.com/gltyllthsm">Twitter</a>!<br />
				This project is available on <a href="https://www.github.com/jeyemwey/tweeps">Github</a>.</aside>
			</aside>
		</footer>
	</body>
</html>