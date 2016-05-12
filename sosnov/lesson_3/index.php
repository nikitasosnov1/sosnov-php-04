<?php 
	require_once './data.php';
	$user = 'admin';
?>
<html>
	<head>
		<title>My blog</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-md-10 col-md-offset-1">
			<div id="header">
				<h1>Some blog title</h1>

				<div id="search-form">
					<form>
						<input type="text" name="query" placeholder="Search">
						<input type="submit" value="Search!">
					</form>
				</div>
			</div>

			<div id="content">
				<?php foreach ($posts as $post) { ?>
					<div class="post">
						<p class="title"><?php echo $post->get_title(); ?></p>
						<p class="text"><?php echo $post->get_text(); ?></p>
						<a href="<?php echo $post->get_link(); ?>">Read more...</a>
					</div>
				<?php } ?>
			</div>

			<div id="footer">
				<p>hillel-itschool</p>
			</div>
		</div>
	</body>
</html>