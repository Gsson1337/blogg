<?php
require 'dbconn.php';
  //rekrussions metoden
  function getallcommments($id, $array, $inlägg, $parent){

    $db = dbconn();
    if($id == 0){
      $parent = array();
      $results = $db->query('SELECT * FROM kommentarer where inlägg_fk='.$inlägg.' ');
      foreach ($results as $row) {
        $parent[] = $row['id_pk'];
      }
      $results = $db->query('SELECT * FROM kommentarer where inlägg_fk='.$inlägg.' ');
    }else{
      $results = $db->query('SELECT * FROM kommentarer where förälder='.$id.' ');
    }

    foreach ($results as $row) {
      //om man förälder är lika med 0 så har kommentaren kommenterat ett inlägg
      if($row['förälder'] == 0){
        $array[] = array(
        $row['kommentar'],
        $row['förälder'] +1,
        $row['id_pk']
        );
      //annars så har man kommenterat en kommentar
      }else{
        $array[] = array(
        $row['kommentar'],
        $row['förälder'] - $parent[0] +2,
        $row['id_pk']
      );
    }
      //lägger in kommentaren i en array som skickas vidare i slutet
      $array = getallcommments($row['id_pk'], $array, 0, $parent);
    }

    return $array;
  }
 ?>
