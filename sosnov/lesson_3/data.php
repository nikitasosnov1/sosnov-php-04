<?php
	class Post {
		private $title;
		private $text;
		private $autor;
		private $link;

		function __construct($title, $text, $autor, $link) {
			$this->title = $title;
			$this->text = $text;
			$this->autor = $autor;
			$this->link = $link;
		}

		public function set_title($title) {
			$this->title = $title;
		}

		public function get_title() {
			return $this->title;
		}

		public function get_text() {
			return $this->text;
		}

		public function get_link() {
			return $this->link;
		}
	}

	$posts = array(
			new Post('Title one', 'Text one', 'nikitasmall', '/posts/1'),
			new Post('Title two', 'Text two', 'admin', '/posts/2')
		);
