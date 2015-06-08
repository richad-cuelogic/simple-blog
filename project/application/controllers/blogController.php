<?php 
	class blogController{
		public function add(){
			require_once('../application/view/users/blog/addBlog.php');
		}
		public function edit(){
			require_once('../application/view/users/blog/editBlog.php');
		}
		public function delete(){
			require_once('../application/view/users/blog/deleteBlog.php');
		}
	}
?>