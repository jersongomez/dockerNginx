<?php
$db_connection = pg_connect("host=postgres dbname=postgres user=postgres password=123456");
if(!$db_connection){
      echo "Error: Conectando postgres <br/>";
      print_r(pg_last_error());
   } else {
      echo "Conexion abierta<br/>";
      var_dump($db_connection);
   }
