<?php 
	require_once './data.php';
	$post_dir = './posts';

	$file_names = scandir($post_dir);
	
	$posts = array();
	foreach ($file_names as $file) {
		if ($file == '.' || $file == '..') {
			continue;
		}
		
		$post_body = file_get_contents($post_dir . '/' . $file);
		$posts[] = new Post($file, $post_body);
	}

	require_once 'view/index.php';