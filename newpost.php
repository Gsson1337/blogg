<?php

    require 'dbconn.php';
    //hämtar rubrik och tvättar
    $rubrik_clean = filter_input(INPUT_GET,'rubrik',FILTER_SANITIZE_SPECIAL_CHARS);
    //skickar upp inlägget till db
    $check = dbconn();
    if($rubrik_clean != ""){
    $login = $check->query("INSERT INTO inlägg (rubrik) VALUES ('$rubrik_clean')");
    $info_array = array('post' => true );
    echo json_encode($info_array);
  }
  else{
    $info_array = array('post' => false );
    echo json_encode($info_array);
  }

?>
