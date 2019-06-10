<?php


require 'dbconn.php';
$dbob=dbconn();

$clean_rubrik=filter_input(INPUT_GET, 'rubrik', FILTER_SANITIZE_SPECIAL_CHARS);


echo $clean_rubrik;

$stmt = $dbob->prepare ('
      INSERT INTO posts(rubrik) VALUES (:rub);
      ');

  $stmt -> bindParam(':rub', $clean_rubrik);

$stmt->execute()
?>
