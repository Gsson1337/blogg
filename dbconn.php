<?php

function dbconn() {


  try {

  $PDOobjekt= new PDO('mysql:host=127.0.0.1:3308;dbname=blogg;charset=utf8','root','');
  $PDOobjekt->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $PDOobjekt->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);



  }catch(PDOException $e){

  echo 'ERROR '.$e->getMessage();

  }

return $PDOobjekt;
}

?>
