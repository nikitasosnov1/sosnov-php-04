<?php
	$tasks = array(
			array(
					'task'   => 'Call to Vasil',
					'status' => true
				),
			array(
					'task'   => 'Buy a bread',
					'status' => false
				),
			array(
					'task'   => 'Do the homework',
					'status' => false
				),
		);
?>

<html>
	<head>
		<title>Todo list</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Todo list</h1>

				<div id="content">
					<!-- Form to contact server -->
					<form action="/task.php" >			
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter the task text">
						</div>
						
						<input class="btn btn-info" type="submit" value="send">
					</form>
				</div>

				<div>
					<ul class="list-group">
						<?php foreach ($tasks as $task_number => $task) { ?>
							<li class="list-group-item">
								<?php echo $task['task']; ?>

								<?php if ($task['status']) { ?>
									<a href="#" class="btn btn-warning">Undone</a>
								<?php } else { ?>
									<a href="#" class="btn btn-success">Done</a>
								<?php } ?>
								<a href="#" class="btn btn-danger">Delete</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>	
	</body>
</html>