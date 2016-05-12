<?php 
	require_once './data.php';
	$post_dir = './posts';

	$file_names = scandir($post_dir);
	
	$posts = array();
	foreach ($file_names as $file) {
		if ($file != '.' && $file != '..') {
			$post_body = file_get_contents($post_dir . '/' . $file);
			$posts[] = new Post($file, $post_body);
		}
	} 

?>
<html>
	<head
>		<title>My blog</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-md-10 col-md-offset-1">
			<div id="header">
				<h1>Some blog title</h1>

				<div id="search-form">
					<form method="POST" action="/post.php">
						<input type="text" name="query" placeholder="Search">
						<input type="submit" value="Search!">
					</form>
				</div>
			</div>

			<div id="content">
				<?php foreach ($posts as $post) { ?>
					<div class="post">
						<p class="title"><?php echo $post->get_title(); ?></p>
						<p class="text"><?php echo $post->preview(); ?></p>
						<a href="/post.php?title=<?php echo $post->get_title(); ?>">Read more</a>
					</div>
				<?php } ?>
			</div>

			<div id="footer">
				<p>hillel-itschool</p>
			</div>
		</div>
	</body>
</html>