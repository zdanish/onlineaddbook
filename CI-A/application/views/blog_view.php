<!DOCTYPE html>

<html>
	<head>
		<title>Blog</title>
	</head>
	 <link rel="stylesheet" type="text/css" href="/~ccit1565/CI/assets/style.css">

	
	<body>
	<header> <p style="text-align:left"><a href="http://phoenix.sheridanc.on.ca/~ccit1565/CI/index.php/Admin"> My Admin </a></p></header>
		<h1><?php echo $title; ?></h1>
		<?php foreach ($posts as $post): ?>
			<h2><?php echo $post['TITLE']; ?></h2>
			<p><?php echo $post['CONTENT']; ?></p>
		<?php endforeach; ?>	
		
	</body>
	
</html>