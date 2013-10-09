<?php

if (isset($_GET['page']) === FALSE) {
  $request = 'frontpage';
} else {
  $request = $_GET['page'];
}

switch ($request) {

case 'frontpage':
  include('template/header.php');
  include('template/front.php');
  include('template/footer.php');
  break;

default:
  // 404 stuff
  include('template/header.php');
  include('template/404.php');
  include('template/footer.php');
}
