<?php 

  define('DB_HOST','localhost');
  define('DB_USERNAME','mattyhewdo');
  define('DB_PASSWORD','Mats0963179');
  define('DB_NAME','diversee_database');

  $conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

  if($conn -> connect_error){
      die('connection issue '. $conn ->connect_error);
  }?>