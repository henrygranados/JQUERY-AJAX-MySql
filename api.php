<?php 
  $host = "localhost";
  $user = "root";
  $pass = "root";

  $databaseName = "personas";
  $tableName = "clientes";

  //--------------------------------------------------------------------------
  // 1) Connection to Database
  //--------------------------------------------------------------------------
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  
  $result = mysql_query("SELECT * FROM $tableName");          
  $array = mysql_fetch_row($result);                             
  echo json_encode($array);

?>