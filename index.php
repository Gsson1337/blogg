
<?php
session_start();
  mb_internal_encoding('utf8');
  mb_http_output('utf8');

require 'top.php';
require 'menu.php';
require 'bottom.php';
require 'posts.php';


    top();
    menu();
    bottom();
    posts();





 ?>
