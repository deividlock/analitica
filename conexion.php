<?php
require ('datos-conexion.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";

//$mysqli->query("insert into archivos ('12121212','nombre archivos')");
/*
if (!$mysqli -> query("insert into archivos values ('12121212','nombre archivos')")) {
    echo("Error description: " . $mysqli -> error);
  }
*/