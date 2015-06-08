<?php
  class blogTable {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public function add() {
      $blogPostData = array('id'=>'','title' => $_POST['blog_title'],
        'description' => $_POST['blog_description'],'posted_date'=>'');      
      $db = Db::getInstance();     
      $req = $db->insert('blog',$blogPostData);          
    }
    
  }
?>