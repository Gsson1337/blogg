<?php
session_start();
require 'dbconn.php';
  //hämta username och lösnord
  $username_clean = filter_input(INPUT_GET,'username',FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_GET['password'];
  //hämta username och lösenord om det inskriva lösenordet matchar med något i databasen
  $check = dbconn();
  $login = $check->query("SELECT  username, password FROM user WHERE username='$username_clean'");

  foreach ($login as $users) {
    $password_db = $users['password'];
    $username_db = $users['username'];
  }
  //kollar om det matchar, då blir login true och session innhåller username
  if (($username_clean == $username_db) && ($password == $password_db)) {
    $_SESSION["username"] = $username_clean;
    $info_array = array('login' => true, 'name' => $username_clean );
    echo $username_clean;
    echo json_encode($info_array);
  }else{
    $info_array = array('login' => false );
    echo json_encode($info_array);
  }

?>
