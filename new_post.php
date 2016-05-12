<?php
	if (!empty($_POST)) {
		file_put_contents('posts/post.txt', $_POST['text']);
	} else {
		$text = file_get_contents('posts/post.txt');
		echo $text;
	}
	
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
				<h1>Enter the post</h1>
			</div>

			<div>
				<form method="POST" action="/new_post.php">
					<input type="text" name="text">
					<input type="submit" value="Send">
				</form>
			</div>			

			<div id="footer">
				<p>hillel-itschool</p>
			</div>
		</div>
	</body>
</html>