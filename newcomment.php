<?php

require 'dbconn.php';
  //hämtar kommentar och tvättar vid kommentar av en kommentar
  $rubrik_clean = filter_input(INPUT_GET,'comment',FILTER_SANITIZE_SPECIAL_CHARS);
  $förälder = $_GET['id'];
  $check = dbconn();
  //skickar in kommentar i db
  if($rubrik_clean != ""){
    $login = $check->query("INSERT INTO kommentarer (förälder, kommentar) VALUES ('$förälder','$rubrik_clean')");
  $info_array = array('newcomment' => true );
  echo json_encode($info_array);
  }
  else{
  $info_array = array('newcomment' => false );
  echo json_encode($info_array);
  }

?>
