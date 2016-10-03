<?php
$host = getenv("HOST_DB_PGSQL");
$host = ($host != "") ? $host : "postgres_db";
$passwd = getenv("PASS_DB_PGSQL");
$passwd = ($passwd != "") ? $passwd : "dockerpostgres";
$db_connection = pg_connect("host=$host dbname=postgres user=postgres password=$passwd");
if(!$db_connection){
      echo "Error: Conectando postgres <br/>";
      print_r(pg_last_error());
   } else {
      echo "Conexion abierta<br/>";
      var_dump($db_connection);
   }
