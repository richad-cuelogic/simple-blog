<?php
  class indexController {
    public function home() {
      $first_name = 'Blog';
      $last_name  = 'Editor';
      require_once('../application/view/pages/home.php');
    }

    public function error() {
      require_once('../application/view/pages/error.php');
    }
  }
?>