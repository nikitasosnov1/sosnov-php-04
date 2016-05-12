<?php
	class Post {
		private $title;
		private $text;

		function __construct($title, $text) {
			$this->title = $title;
			$this->text = $text;
		}

		public function get_title() {
			return $this->title;
		}

		public function get_text() {
			return $this->text;
		}

		public function preview() {
			if (strlen($this->text) > 40) {
				return substr($this->text, 0, 40) . '...';
			} 

			return $this->text;			
		}
	}
/*
	$posts = array(
			new Post('Title one', 'Text oneText oneText oneText oneText oneText oneText oneText oneText oneText oneText oneText oneText one', 'nikitasmall', 1),
			new Post('Title two', 'Text two', 'admin', 2)
		);
*/