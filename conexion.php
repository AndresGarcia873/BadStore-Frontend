<?php

function conectar() {
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "bad_store_db";
    $con = mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos. ".mysql_error());
    $con->set_charset("utf8");

    return $con;
}

?>