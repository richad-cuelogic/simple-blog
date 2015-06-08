<?php 
	class addUpdateBlogController{
		public function add(){
			 $addBlog = blogTable::add();
			 require_once('../application/views/users/blog/blogAdded.php');
		}
		
	}
?>