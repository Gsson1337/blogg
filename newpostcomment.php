<?php

require 'dbconn.php';
  //hämtar förälder och kommentaren vid kommentar av ett inlägg
  $rubrik_clean = filter_input(INPUT_GET,'comment',FILTER_SANITIZE_SPECIAL_CHARS);
  $förälder = $_GET['id'];
  //skickar upp värdet till db
  $check = dbconn();
  if($rubrik_clean != ""){
  $login = $check->query("INSERT INTO kommentarer (förälder, kommentar, inlägg_fk) VALUES (0,'$rubrik_clean', '$förälder')");
  $info_array = array('newpostcomment' => true );
  echo json_encode($info_array);
  }
  else{
  $info_array = array('newpostcomment' => false );
  echo json_encode($info_array);
}
header('Location: index.php');

?>
