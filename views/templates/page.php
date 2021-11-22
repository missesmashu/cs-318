<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CS-318</title>
	<link rel="stylesheet" href="/css/styles.css"/>
	<link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16" />
	<!-- Prism for syntax highlighting -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism-coy.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/plugins/autoloader/prism-autoloader.min.js"></script>

	<script src="/js/scripts.js"></script>
	<?=f()->template->headtags()?>
</head>
<body>
	<header>
		<a href="/">
			<div>
				<h1>Computer Science 318</h1>
				<hr>
				<p>Fundementals of Web Design</p>
			</div>
		</a>
		<nav>
			<a href="/client">Client Project</a>
			<a href="/portfolio">Portfolio Project</a>
			<a href="/labs">Labs</a>
		</nav>
	</header>
	<main><?=$content?></main>
</body>
</html>