
<?php

require 'showpostsview.php';
require 'getallpostsmodel.php';

function posts(){

  $db = dbconn();
  //hämtar alla inlägg
  $results = $db->query('SELECT * FROM inlägg');
  foreach($results as $row){
    $parent = array();
    $array = array();
    //hämtar kommentarerna till inläggen
    $commentresults = getallcommments(0, $array, $row['id_pk'], $parent);
    $results = $db->query('SELECT * FROM inlägg where '.$row['id_pk'].' = id_pk');
    //skickar vidare postsen och kommentarerna för att skrivas ut
    showpostsview($results);
    showcommentsview($commentresults);
  }









}
 ?>
