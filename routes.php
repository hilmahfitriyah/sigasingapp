<?php
if (isset($_GET['page'])){
  $page = $_GET['page'];
  switch ($page) {
    case '';
    case 'home';
      file_exists('page/home.php') ? include 'page/home.php' : include 'page/404.php';
      break;
    default;
      include 'page/404.php';
  }
}else{
  include 'page/home.php';
}